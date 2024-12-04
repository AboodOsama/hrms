<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'name',
    'ename',
    'sex',
    'position',
    'department',
    'company_id',
  ];

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array<int, string>
   */
  protected $hidden = [];


  /**
   * The attributes that should be cast.
   *
   * @var array<string, string>
   */
  protected $casts = [];

  public function company()
  {
    return $this->belongsTo(Company::class, 'company_id');
  }

  public function Session()
  {
    // return $this->belongsToMany(Cost_component::class, 'session_cost');
    return $this->belongsToMany(Session::class, 'enrollments', 'employee_id', 'session_id')
      ->withPivot('status');
  }


}
