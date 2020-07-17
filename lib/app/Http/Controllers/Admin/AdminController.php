<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class AdminController extends Controller
{
    //
    public function getAdmin(){
        return view('backend.index');
    }
    public function getLogin(){
        return view('backend.login');
    }
    public function postLogin(Request $request){
        $arr = ['email' => $request->email, 'password' => $request->password];
        if($request->remember == 'remmberme'){
            $remember = true;
        }
        else{
            $remember = false;
        }
        if(Auth::attempt($arr,$remember)){
            return redirect()->intended('admin/home');
        }
        else{
            return back()->withInput()->with('error','Tài khoảng hoặc mặt khẩu chưa đúng !!');
        }
    }
    public function getLogout(){
        Auth::logout();
        return redirect()->intended('/arca');
    }
    public function getCategory(){
        return view('backend.addcategory');
    }
    public function getProduct(){
        return view('backend.product');
    }
    public function getAddProduct(){
        return view('backend.addproduct');
    }
    public function getUser(){
        return view('backend.user');
    }
    public function getBill(){
        return view('backend.bill');
    }
    public function getBillProcessing(){
        return view('backend.billprocessing');
    }
    public function getBillDone(){
        return view('backend.billdone');
    }

}
