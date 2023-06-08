<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminlogin(Request $request) {

        if($request->session()->has('ADMIN_LOGIN')){
            return redirect('admin/dashboard');
                       
        }else{
            return view('Admin.adminLogin');
        }
        return view('Admin.adminLogin');
    }
    
    public function auth(Request $request) {
        // return $request->post(); to check posted data
        
        // storing entered data to variables 
        // $email=$request->post('femail'); 
        // $password=$request->post('fpass');

        $email = $request->input('femail');
        $pass = $request->input('fpass');
        
        //using get() to fetch
        $result=Admin::where(['email'=>$email])->first();
        if($result){
            if($pass == $result->password){
                $request->session()->put('ADMIN_LOGIN', true);
                $request->session()->put('ADMIN_ID', $result->id);
                return redirect('admin/dashboard');
            }else{
                return back()->with('fail','Please enter valid Password!');
            }  
        }
        else{
            return back()->with('fail','Email does not exist!');
        }
        
    }

    public function dashboard(Request $request) {
        return view('Admin.dashboard');
    }

    
}
