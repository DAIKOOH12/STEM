<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeModels;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->mHome = new HomeModels();
    }
    public function index()
    {
        return view('clients.account');
    }
    public function signIn(Request $request)
    {
        $account = $request->input('account');
        $password = $request->input('password');
        $member = $this->mHome->signIn($account, $password);
        // dd($member);
        if ($member == null) {
            session()->flash('message', 'Tài khoản hoặc mật khẩu không đúng');
        } else {
            session(['mem_id' => $member->ID_member, 'mem_name' => $member->sHoTen, 'cus_id' => $member->ID_customer]);
            session()->save();
            return redirect()->route('homepage');
        }
        return view('clients.account');
    }
    public function signUp(Request $request){
        $account=$request->input('account');
        $email=$request->input('email');
        $name=$request->input('name');
        $phone=$request->input('phone');
        $password=$request->input('password');
        $diachi=$request->input('diachi');
        $checkUser=$this->mHome->checkAccount($email,$account);
        if($checkUser!=null){
            $this->mHome->signUp($account,$password,3);
        }
        else{
            $this->mHome->signUp($account,$password,3,$name,$phone,$email,$diachi);
            
            return redirect()->route('homepage');
        }
    }
    public function signOut(){
        session()->flush();
        return redirect()->route('homepage');
    }
}
