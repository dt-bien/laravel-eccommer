<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use DB;
class AccountController extends Controller
{
    //
    public function showregister()
    {
        return view ('pages.register');
    }
    public function register(Request $request)
    {
        $username = $request->username;
        $email  = $request->email;
        $password = $request->password;
 
        DB::table('users')->insert(['name'=>$username, 'email'=>$email, 'password' => Hash::make($password)]);
        return view('pages.login');
    }
     public function showlogin()
    {
        # code...
        return view ('pages.login');
    }
    public function login(Request $request)
    {
    
    if ($request->email !== 'admin@gmail.com')
    {
      $credentials = $request->only('email' , 'password');
      if (Auth::attempt($credentials) )
      {
        $user =  DB::table('users')->where('email','=',$request->email)->select('id','name','email','address','phone')
        ->first();
       
        $infoArr = [$user->id,  $user->name, $user->email, $user->address, $user->phone];
        $userid = $user->id;

        $allorders =  DB::table('orders')->where('cusid','=',$userid)
        ->select('id','orderid','created_at')->get();
        $orderArr= array();
        foreach ( $allorders as $order)
        {
            $allbills =  DB::table('billdetails')->where('orderid','=',$order->id)
            ->select('id','quantity','total','payment_status','proid','orderid','created_at')->get();

            $bill = [ $order->id => array($allbills->id, $allbills->quantity,$allbills->total,
            $allbills->payment_status , $allbills->proid , $allbills->created_ate) ];
            array_push($orderArr , $bill);

        }
        if ($request->session()->get('order') !== null)
        {
            $request->session()->put('order' , $orderArr);
        }
        
        $request->session()->put('user', $infoArr);
      
        

          return redirect()->intended('/');
      } else 
      {
        $request->session()->flash('loginfail', 'Mật khẩu hoặc tài khoản không đúng');
        
        return redirect()->intended('/login');
       
      }
    }
    else {
       return view ('admin.ban');
    }

            
    }

    
   

    public function showinfo()
    {
        # code...
        return view ('pages.info');
    }
    public function showcart()
    {
        # code...
        return view ('pages.cart');
    }
}
