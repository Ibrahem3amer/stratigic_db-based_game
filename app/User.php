<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'user_forum_id', 'nation_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function nation()
    {
        return $this->hasOne('App\Nation');
    }

    public static function check_user($user, $remember)
    {
        $query = \App\User::firstOrCreate([
                'user_forum_id' => $user->user_id,
                'name' => $user->username
            ]);
        if($query->is_allowed){
            $nation = \App\Nation::where('ruler_id', $query->id)->first();

            //die(is_null($nation)?'true':'false');
            //if first time to login, create nation and related tables

            if(is_null($nation))
            {   
                $nation = \App\Nation::create([
                    'ruler_id' => $query->id,
                ]);

                \DB::table('nation_time_tracking')->insert([
                        'nation_id' => $nation->id,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ]);
                \DB::table('nation_financial')->insert([
                        'nation_id' => $nation->id,
                    ]);
                \DB::table('nation_millitary')->insert([
                        'nation_id' => $nation->id,
                    ]);
                \DB::table('nation_population')->insert([
                        'nation_id' => $nation->id,
                    ]);
                \DB::table('nation_resources')->insert([
                        'nation_id' => $nation->id,
                    ]);                    
            }

            //updating last_login attempt
            $last_login = \DB::table('nation_time_tracking')
                ->where('nation_id', $nation->id)
                ->update(['updated_at' => Carbon::now()]);

            \Auth::login($query, $remember>0?true:false);
            if(\Auth::check())
                return $nation->id;
            else
                return 0;
        }
        else
            //issue an request to admin with user_id 
            return false;
    }
}
