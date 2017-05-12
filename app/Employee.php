<?php 

namespace employeeAdmin;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model {

	protected $table = 'employee';

	protected $fillable = ['id','documentId','fullName','address','email','phone','contractDate','birthDate','isFreelance','hourlyRate'];  //datos que se van a mostrar en la consulta



}
