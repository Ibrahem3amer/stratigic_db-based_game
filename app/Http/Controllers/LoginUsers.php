<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Carbon\Carbon;

class LoginUsers extends Controller
{
   public function get_data()
   {
   		//$data = \
         $time = Carbon::now();
         $time->toDateTimeString();
   		return view('login.signin', compact('time'));
   }

   public function auth(Request $request)
   {
   		$user_name = $request->user_name;
   		$password = $request->user_password;
         $remember = false;
         if( $request->user_remember == 'on' )
            $remember = true;

   		$query = \DB::connection('mysql2')->table('phpbb_users')->where('username', $user_name)->first();

   		if(!empty($query))
   		{
            \Hash::make($password);
            $result = \Hash::check($password, $query->user_password);
   			if($result){
               $time = Carbon::now();
               $time->toDateTimeString();

               $nation_id_or_false = \App\User::check_user($query, $remember);
               if($nation_id_or_false)
                  return view('home_layouts.default_loggedIn', compact('nation_id_or_false', 'time'));
               else
                  return view('login.wait');

            }
   		}
		   return('Failure!');
	}

   public function log_user_out()
   {
      \Auth::logout();
      $time = Carbon::now();
      $time->toDateTimeString();
      return view('home_layouts.default_loggedOut', compact('time'));
   }
}
