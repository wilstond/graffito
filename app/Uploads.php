<?php namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Auth\Authenticatable;
//use Illuminate\Auth\Passwords\CanResetPassword;
//use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
//use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

//class Uploads extends Model implements AuthenticatableContract, CanResetPasswordContract {
class Uploads extends Model{

         protected $table = 'art';
         public $timestamps = false;
	 protected $fillable = ['image'];

}

