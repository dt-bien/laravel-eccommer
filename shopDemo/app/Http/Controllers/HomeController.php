<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    //
    public function index()
    {
        $allbrand =  DB::table('brand')->select('id','brandname','nation')->get();

        $allnewproduct =  DB::table('product')->where('tag','=','newproduct')
        ->leftJoin( 'productcategory' , 'product.categoryid' , '=','productcategory.id' )
        ->select('product.id','product.productname','product.tag','product.price','product.salesprice',
        'productcategory.photo1','productcategory.photo2')->take(4)->get();


        $alltopproduct =  DB::table('product')->where('tag','=','topproduct')
        ->leftJoin( 'productcategory' , 'product.categoryid' , '=','productcategory.id' )
        ->select('product.id','product.productname','product.tag','product.price','product.salesprice',
        'productcategory.photo1','productcategory.photo2')->take(4)->get();

    

        $allsalesproduct =  DB::table('product')->where('tag','=','salesproduct')
        ->leftJoin( 'productcategory' , 'product.categoryid' , '=','productcategory.id' )
        ->select('product.id','product.productname','product.tag','product.price','product.salesprice',
        'productcategory.photo1','productcategory.photo2')->take(4)->get();

        
        return view('pages.home')->with('allnewproduct',$allnewproduct)->with('alltopproduct',$alltopproduct)
        ->with('allsalesproduct',$allsalesproduct); 
    }
    
}
