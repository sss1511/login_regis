<?php

namespace App\Http\Controllers\Auth;
use Auth\Middleware\Authenticate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\users;
use App\Models\blogs;
use Auth;
use Hash;
use Session;
use Guard;
use Illuminate\Support\Str;



class AuthController extends Controller
{
   
    public function register()
    {

      return view('auth.register');
    }



    public function storeuser(Request $request)
    {
        
       $user= users::create($request->all(),['user_type' => $request['user_type']]); 
       

     
        
       return redirect('login');
           
          
    
    }

    public function userdashbord()
    {

      return view('userdashbord');
    }    
    
    
    public function admindashbord()
    {

      return view('admindashbord');
    }   




//for login



    public function login()
    {
      
      return view('auth.login');
    
    }





    public function authenticate(Request $request) {


      if (Auth::attempt(array('username' => $request->username,'password' => $request->password) )){
        
        $user=Auth::user();


           if ($user->user_type=='admin')

            {
              //echo"admin login";

                  return view('admindashbord')->with('status',"admin  successfully"); 
              }
             else{
               //echo"user login";
                   return view('userdashbord')->with('status',"user successfully");
                }

        //return view('userdashbord');
      } else {

        // echo"loged out";
        return redirect('login')->with('failed',"operation failed");;
      }	
    }	 
     

        





    public function logout() {
      Auth::logout();

      return redirect('login');
    }




    public function home()
    {
      
    return view('home');

    }
}