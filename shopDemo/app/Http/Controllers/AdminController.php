<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    //
    public function index()
    {
        # code...
        if (Gate::allows('admin'))
        {
            return view('admin.dashboard');
        }
        else {
            return view ('admin.ban');
        }
       
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email' , 'password');
      if (Auth::attempt($credentials))
      {
          return redirect()->intended('dashboard');
          
      }
       
    }
    public function showlogin( )
    {
       return view('admin.login');
    }



    //// BRAND
    public function getAllBrand( )
    {
        if (Gate::allows('admin'))
        {
            $allbrand =  DB::table('brand')->select('id','brandname','nation')->paginate(3);
            $count = count($allbrand);

            return view('admin.allbrand')->with('allbrand',$allbrand)->with('count', $count);
        }
        else {
            return view ('admin.ban');
        }
      
    }
    public function showaddBrand( )
    {
        if (Gate::allows('admin'))
        {
            return view('admin.addbrand');
        }
        else {
            return view ('admin.ban');
        }
     
    }
    public function addBrand(Request $request)
    {
        if (Gate::allows('admin'))
        {
             # code...
        $name = $request->namebrand;
        $nation = $request->nation;
        $time =  date("Y/m/d");

        DB::table('brand')->insert(['brandname'=>$name,'nation'=>$nation, 'created_at'=>$time]);
        return redirect('admin/brand');
        }
        else {
            return view ('admin.ban');
        }
     

    }
    public function showUpdateBrand($id)
    {
        if (Gate::allows('admin'))
        {
              # code...
        $brand =  DB::table('brand')->where('id','=',$id)->select('id','brandname','nation')->get();
      
        return view('admin.updatebrand')->with('brand',$brand);
        }
        else {
            return view ('admin.ban');
        }
      
    }
    public function updateBrand( Request $request  )
    {
        if (Gate::allows('admin'))
        {
            # code...
        $id = $request->id;
        $name = $request->namebrand;
        $nation = $request->nation;
        $time =  date("Y/m/d");
        DB::table('brand')->where('id',$id)->update(['brandname'=>$name,'nation'=>$nation , 'updated_at'=>$time]);
        return redirect('admin/brand');
        }
        else {
            return view ('admin.ban');
        }
       
    }
    public function deleteBrand($id)
    {
        if (Gate::allows('admin'))
        {
          
        DB::table('brand')->where('id', '=', $id)->delete();

        return redirect('admin/brand');
        }
        else {
            return view ('admin.ban');
        }
        # code...
      
    }
    
    //Product
    public function getAllProduct( )
    {
        if (Gate::allows('admin'))
        {
            $allproduct =  DB::table('product')
            ->leftJoin('productcategory', 'product.categoryid', '=', 'productcategory.id')
            ->leftJoin('brand', 'product.brandid', '=', 'brand.id')
            ->leftJoin('productgroup', 'product.groupid', '=', 'productgroup.id')
            ->select('product.id','product.productid','product.productname','product.price','product.salesprice',
            'productcategory.dimension','brand.brandname','productgroup.groupname' , 'product.tag')
            ->paginate(1);
           
           return view('admin.allproduct')->with('allproduct', $allproduct);
        }
        else {
            return view ('admin.ban');
        }
        
       
    }
    public function addProduct(Request $request )
    {
        if (Gate::allows('admin'))
        {
            $time =  date("Y/m/d");
        $productid = $request->productid;
        $productname = $request->productname;
        $productprice = $request->productprice;
        $productsalesprice = $request->productsalesprice;
        $tag = $request->tag;
        $brandid = $request->brandname;
        $categoryid = $request->dimension;
        $groupid = $request->groupname;
        
        
        DB::table('product')->insert(['productid'=>$productid,'productname'=>$productname , 'price'=>$productprice,
         'salesprice'=>$productsalesprice,'tag'=>$tag,'brandid'=>$brandid,
         'categoryid'=>$categoryid , 'groupid' =>$groupid , 'created_at'=>$time]);
       return redirect('admin/product');
        }
        else {
            return view ('admin.ban');
        }
       
       
    }
    public function showAddProduct( )
    {
        if (Gate::allows('admin'))
        {
            $allbrand =  DB::table('brand')->select('id','brandname','nation')->get();
            $allproductcategory =  DB::table('productcategory')->select('id','dimension')->get();
            $allproductgroup =  DB::table('productgroup')->select('id','groupname')->get();
            //DB::table('product')->insert(['productid'=>$name,'productname'=>$nation , 'categoryid', 'brandid']);
           return view('admin.addproduct')->with('allbrand',$allbrand)->with('allproductcategory', $allproductcategory)
           ->with('allproductgroup',$allproductgroup);
        }
        else {
            return view ('admin.ban');
        }
      
    }
    public function addproductdetails(Request $request)
    {
        if (Gate::allows('admin'))
        {
            $content1 = $request->content1;
      
            $time =  date("Y/m/d");
    
            DB::table('productdetails')->insert(['productid'=>$request->productid ,'content1'=>$content1,'created_at'=>$time]);
    
        }
        else {
            return view ('admin.ban');
        }
        # code...
       

    }
    public function showaddproductdetails()
    {
        if (Gate::allows('admin'))
        {
             # code...
        $allproductid = DB::table('product')->select('id','productid')->get();

        return view ('admin.addproductdetails')->with('allproductid', $allproductid);
        }
        else {
            return view ('admin.ban');
        }
       
        
    }

    //Category

    public function showAddCategory()
    {
        if (Gate::allows('admin'))
        {
            return view('admin.addcategory');

        }
        else {
            return view ('admin.ban');
        }
        # code...
        
    }

    public function addCategory(Request $request) 
    {
        if (Gate::allows('admin'))
        {
            $dimension = $request->dimension;
        
            $path1 =  $request->file('photo1') ? ('/storage/app/'. Storage::putFile('photo', $request->file('photo1'))) : '';
            $path2 =   $request->file('photo2')  ?  ('/storage/app/'. Storage::putFile('photo', $request->file('photo2'))) : '';
            $path3 =    $request->file('photo3')  ?  ('/storage/app/'. Storage::putFile('photo', $request->file('photo3'))): '';
            $path4 =  $request->file('photo4')  ?  ('/storage/app/'. Storage::putFile('photo', $request->file('photo4'))) : '';
            $path5 = $request->file('photo5')  ?  ('/storage/app/'. Storage::putFile('photo', $request->file('photo5'))): '';
            $time =  date("Y/m/d");
            DB::table('productcategory')->insert(['dimension'=>$dimension,'photo1'=>$path1,'photo2'=>$path2,
            'photo3'=>$path3,'photo4'=>$path4,'photo5'=>$path5 , 'created_at'=>$time]);
           
            # code...
            return redirect('admin/category');
        }
        else {
            return view ('admin.ban');
        }
        

    }public function getAllCategory()
    {
        if (Gate::allows('admin'))
        {
           # code...
        $allcategory = DB::table('productcategory')
        ->select('id','dimension','photo1','photo2','photo3','photo4','photo5')->paginate(3);
     
        return view('admin.allcategory')->with('allcategory',$allcategory);
        }
        else {
            return view ('admin.ban');
        }
       

    }

    public function updateCategory( Request $request  )
    {
        if (Gate::allows('admin'))
        {
            $id = $request->id;
        $dimension = $request->dimension;
        $path1 =  $request->file('photo1') ? ('/storage/app/'. Storage::putFile('photo', $request->file('photo1'))) : '';
        $path2 =   $request->file('photo2')  ?  ('/storage/app/'. Storage::putFile('photo', $request->file('photo2'))) : '';
        $path3 =    $request->file('photo3')  ?  ('/storage/app/'. Storage::putFile('photo', $request->file('photo3'))): '';
        $path4 =  $request->file('photo4')  ?  ('/storage/app/'. Storage::putFile('photo', $request->file('photo4'))) : '';
        $path5 = $request->file('photo5')  ?  ('/storage/app/'. Storage::putFile('photo', $request->file('photo5'))): '';
        $time =  date("Y/m/d");
        DB::table('productcategory')->where('id',$id)->update(['dimension'=>$dimension,'photo1'=>$path1,'photo2'=>$path2,
        'photo3'=>$path3,'photo4'=>$path4,'photo5'=>$path5 , 'updated_at'=>$time]);
        return redirect('admin/category');
        }
        else {
            return view ('admin.ban');
        }
        # code...
       
    }
    
    public function showupdateCategory($id)
    {
        if (Gate::allows('admin'))
        {
            $category =  DB::table('productcategory')->where('id','=',$id)
        ->select('id','dimension','photo1','photo2','photo3','photo4')->first();
      
        return view('admin.updatecategory')->with('category',$category);
        }
        else {
            return view ('admin.ban');
        }
        # code...
       
    }
    public function deleteCategory($id)
    {
        if (Gate::allows('admin'))
        {
            DB::table('productcategory')->where('id', '=', $id)->delete();

            return redirect('admin/category');
        }
        else {
            return view ('admin.ban');
        }
        # code...
      
      
    }

    // Product group
    public function productgroup()
    {
        if (Gate::allows('admin'))
        {
            $allproductgroup =   DB::table('productgroup')->select('id','groupname','description')->get();

        return view('admin/productgroup')->with('allproductgroup' , $allproductgroup);
        }
        else {
            return view ('admin.ban');
        }
        # code...
      
     
    }
    public function showaddproductgroup()
    {
        # code...
      
        if (Gate::allows('admin'))
        {
            return view('admin/addproductgroup');
        }
        else {
            return view ('admin.ban');
        }

       
    }
    public function addproductgroup( Request $request)
    {
        if (Gate::allows('admin'))
        {
            $groupname =  $request->groupname;
            $description = $request->description;
            $time =  date("Y/m/d");
              DB::table('productgroup')->insert(['groupname'=>$groupname,'description'=>$description, 'created_at'=>$time]);
              return redirect('admin/productgroup');
        }
        else {
            return view ('admin.ban');
        }
        # code...
     
    }


    //

    
    //CLIENT

    public function getClient()
    {
        if (Gate::allows('admin'))
        {
            $allproductgroup =   DB::table('productgroup')->select('id','groupname','description')->get();
            return view ('admin.allclient');
        }
        else {
            return view ('admin.ban');
        }
        # code...
      
    }

    //ORDERS
    public function getOrder()
    {
        if (Gate::allows('admin'))
        {
            return view ('admin.getallorder');
        }
        else {
            return view ('admin.ban');
        }
        # code...
     
    }

    
   
}
