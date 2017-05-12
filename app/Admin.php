<?php 

namespace employeeAdmin;


use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Admin extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	protected $table = 'admin';

	protected $fillable = ['id','fullName','user', 'password'] ;  //datos que se van a mostrar en la consulta

	protected $hidden = ['password', 'remember_token'];

}
