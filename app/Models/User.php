<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use DB;
use Auth;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'role_id',
        'phone',
        'email',
        'password',
    ];
    protected $dates = [
        'blocked_until'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role(){
        return $this->belongsTo('App\Models\Role');
    }

    public function expenses(){
        return $this->hasMany('App\Models\Expense');
    }

    public function categories(){
        return $this->hasMany('App\Models\Category');
    }

    public function buyers(){
        return $this->hasMany('App\Models\Buyer');
    }

    public function sellers(){
        return $this->hasMany('App\Models\Seller');
    }

    public function brands(){
        return $this->hasMany('App\Models\Brand');
    }

    public function products(){
        return $this->hasMany('App\Models\Product');
    }

    function fill_product(){

        $output = '';
        
        
        $select = DB::table('products')->where('user_id', Auth::User()->id)->orderBy('name');
        
        
        $result = $select->get();
        //dd($result);
        
        foreach($result as $row){
          $output.= '<option value = "'.$row->id.'"> '.$row->name.' </option>';
        }
       // dd($output);
        
        return $output;
        }
}
