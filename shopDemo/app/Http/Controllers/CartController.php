<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CartController extends Controller
{
    //
    public function showcart()
    {
        $userid =  session('user')[0]; 
        $time = date("Y-m-d");
        $order = DB::table ('orders')->where('payment_status','=',3)
        ->where('cusid','=',$userid) ->select('id','orderid','cusid', 'created_at')->first();
        if ($order == null)
        {
            $randid = rand(1,1000);
            DB::table('orders')->insert(
                ['orderid' => $randid , 'cusid'=> $userid , 'created_at' =>$time , 'payment_status' => 3 ] 
             );
             $bills = DB::table ('billdetails')->where('billdetails.orderid','=',$randid)
             ->leftJoin('product','billdetails.proid','=','product.id') 
             ->select('billdetails.id','billdetails.quantity','billdetails.total','product.productname')->get();
        }
        else
        {
            $bills = DB::table ('billdetails')->where('billdetails.orderid','=',$order->id)
            ->leftJoin('product','billdetails.proid','=','product.id') 
            ->select('billdetails.id','billdetails.quantity','billdetails.total','product.productname')->get();
        }

      

        return view('pages.cart')->with('bills' , $bills);
    }
    public function addtocart(  $id  , $quantity  = 1 )
    {
        $userid =  session('user')[0]; 
        
      
        $order = DB::table ('orders')->where('payment_status','=',3)
        ->where('cusid' , '=',$userid) ->select('id','orderid','cusid')->first();
       
        $product = DB::table ('product')->where('id','=',$id) ->select('id','price', 'salesprice')->first();
        if ($product->salesprice === null)
        {
            $total = $product->price ;
        }
        else {
           $total =  $product->salesprice;
        }
      
        $time = date("Y-m-d");
        if ($order === null)
        {
            $randid = rand(1,1000);
            DB::table('orders')->insert(
                ['orderid' => $randid , 'cusid'=> $userid , 'created_at' =>$time , 'payment_status' => 3 ] 
             );
            DB::table('billdetails')->insert(
                ['quantity' => $quantity , 'total'=> $total , 'confirm_status' =>3 , 'proid' => $id, 'payment_status' => 1,
                 'orderid'=> $randid , 'created_at' => $time ] 
            );
        }
        else {
            DB::table('billdetails')->insert(
                ['quantity' => $quantity , 'total'=> $total , 'confirm_status' =>3 , 'proid' => $id,'payment_status' => 1,
                 'orderid'=> $order->id , 'created_at' => $time ] 
            );
        }
     

        # code...
    }
}
