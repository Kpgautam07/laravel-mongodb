<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Carbon\Carbon;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct()
    {
		
         $this->middleware('auth');
    }

    public function root(Request $request)
    {

     
    if(Auth::user()->user_type == 'admin'){


    	 $data['users'] = DB::table('users')->where('user_type','buyer')->where('is_deleted',0)->count();
        $data['categories'] = DB::table('categories')->where('status',1)->where('is_deleted',0)->count();
         $data['media'] = DB::table('media')->where('status',1)->where('is_deleted',0)->count();
         // echo "<pre>";
         // print_r($data);die;
        $data['newusers'] = DB::table("users")->where('is_deleted',0)->whereDate('created_at', '>=', Carbon::now()->subDays(5))->get();

    }else{

             $data['users'] = DB::table('users')->where('user_type','buyer')->where('is_deleted',0)->count();
        $data['sellers'] = DB::table('users')->where('user_type','seller')->where('is_deleted',0)->count();
        $data['newusers'] = DB::table("users")->where('is_deleted',0)->whereDate('created_at', '>=', Carbon::now()->subDays(5))->get();

    }
        return view('admin.dashboard.index', $data);
    
    }
     public function index(Request $request)
        {

     
    if(Auth::user()->user_type == 'admin'){


         $data['users'] = DB::table('users')->where('user_type','buyer')->where('is_deleted',0)->count();
        $data['categories'] = DB::table('categories')->where('status',1)->where('is_deleted',0)->count();
         $data['media'] = DB::table('media')->where('status',1)->where('is_deleted',0)->count();
         // echo "<pre>";
         // print_r($data);die;
        $data['newusers'] = DB::table("users")->where('is_deleted',0)->whereDate('created_at', '>=', Carbon::now()->subDays(5))->get();

    }else{

             $data['users'] = DB::table('users')->where('user_type','buyer')->where('is_deleted',0)->count();
        $data['sellers'] = DB::table('users')->where('user_type','seller')->where('is_deleted',0)->count();
        $data['newusers'] = DB::table("users")->where('is_deleted',0)->whereDate('created_at', '>=', Carbon::now()->subDays(5))->get();

    }
        return view('admin.dashboard.index', $data);
    
    }
}