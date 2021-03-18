<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ProductController extends Controller
{
    //
    public function shownewproduct( )
    {
        # code...
        $allnewproduct =  DB::table('product')->where('tag','=','newproduct')
        ->leftJoin( 'productcategory' , 'product.categoryid' , '=','productcategory.id' )
        ->select('product.id','product.productname','product.tag','product.price','product.salesprice',
        'productcategory.photo1','productcategory.photo2')->paginate(1);

        return view( 'pages.newproduct')->with('allnewproduct', $allnewproduct);
    }
    public function showtopproduct( )
    {
        # code...

        $alltopproduct =  DB::table('product')->where('tag','=','topproduct')
        ->leftJoin( 'productcategory' , 'product.categoryid' , '=','productcategory.id' )
        ->select('product.id','product.productname','product.tag','product.price','product.salesprice',
        'productcategory.photo1','productcategory.photo2')->paginate(2);



        return view( 'pages.topproduct')->with('alltopproduct', $alltopproduct);
    }
    public function showbestpriceproduct( )
    {
        # code...
        $allsalesproduct =  DB::table('product')->where('tag','=','salesproduct')
        ->leftJoin( 'productcategory' , 'product.categoryid' , '=','productcategory.id' )
        ->select('product.id','product.productname','product.tag','product.price','product.salesprice',
        'productcategory.photo1','productcategory.photo2')->paginate(2);


        return view( 'pages.bestpriceproduct')->with('allsalesproduct', $allsalesproduct);
    }
    public function productdetails( $id)
    { 
        # code...
        $product =  DB::table('product')->where('product.id','=',$id)
        ->leftJoin( 'productcategory' , 'product.categoryid' , '=','productcategory.id' )
        ->select('product.id','product.productname','product.tag','product.price','product.salesprice',
        'productcategory.photo1','productcategory.photo2')->first();


        $productdetails =  DB::table('productdetails')->where('productdetails.productid','=',$id)
        ->select('productid' ,'content1')->first();
        
        return view( 'pages.prodetails')->with( 'product', $product)->with('productdetails' , $productdetails);
    }
    
  
}
