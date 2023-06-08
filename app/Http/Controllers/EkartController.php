<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Psy\Command\WhereamiCommand;
use Session;

class EkartController extends Controller
{
    public function index(Request $request) {
        
        if($request->session()->has('USER_LOGIN')){
            return redirect('Ekart/home');
                       
        }else{
            return view('Ekart.login');
        }
        return view('Ekart.login');
    }
    
    public function contactUs(Request $request) {
        return view('Ekart.contactUs');
    }
    public function cart(Request $request) {
        return view('Ekart.cart');
    }


    public function register_user(Request $request){
        
        // $request->validate([
        //     'email'=>'required|email|unique:users'
        // ]);
        
        
        $uname = $request->input('rName');
        $uemail = $request->input('rEmail');
        $upass = Hash::make($request->input('rPass'));
        $ucpass = Hash::make($request->input('rcPass'));
        $ucountry = $request->input('country');
        $uage = $request->input('age');

        // $uname = $request->input('rEmail');
        
        //DB::unprepared("insert into users (username,password) values ('$uname','$pass')");
        DB::insert('insert into users (name, email, password, conferm_password, country, age) values (?, ?, ?, ?, ?, ?)', [$uname, $uemail, $upass, $ucpass, $ucountry, $uage]); //sqlinjection
        return redirect('Ekart/login');

    }

    function match(Request $request) {
        // $request->validate([
        //     'email'=>'required|email|unique:users'
        // ]);
        $email = $request->input('femail');
        $pass = $request->input('fpass');

        $loginData = DB::select('select password from users where email = ?', [$email]); 
        $userid = DB::select('select id from users where email = ?', [$email]); 
     
        if (count($loginData) > 0){
            
            foreach ($loginData as $tablepass) {

                if (Hash::check($pass , $tablepass->password)){
                    // $request->session()->put('loginId', $userid);
                    $request->session()->put('USER_LOGIN', true);
                    $request->session()->put('USER_ID', $userid);
                    return redirect('Ekart/home');
                }
                else{
                    return back()->with('fail','Password not matches!');
                    // return view('Ekart/login')->with('error',$error);
                }
            }
        }
        else{
            return back()->with('fail','This email is not registered!');
        }
        //return redirect('login');
    }

    function userdashboard(Request $request) {
        
        $result['new_collection_products']=DB::table('products')
        ->where(['category'=> 'new_collection']) 
        ->get();


        $result['trending_products']=DB::table('products')
        ->where(['category'=> 'trending']) 
        ->get();

        $result['sale_products']=DB::table('products')
        ->where(['category'=> 'sale']) 
        ->get();
        
        $result['special_offers_products']=DB::table('products')
        ->where(['category'=> 'special_offers']) 
        ->get();

        return view('Ekart.home', $result);
    }


}
