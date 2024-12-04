<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'industry_id',
        'address',
        'img',
        'recipient',
        'recipient_phone',
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

    public function Industry()
    {
        return $this->belongsTo(Industry::class, 'industry_id');
    }

    public function employees()
    {
        return $this->hasMany(Employee::class, 'company_id'); // Use 'company_id' as the foreign key
    }

    public function Session()
    {
        return $this->hasOne(Session::class, 'company_id'); 
    }

    public function Session_request()
    {
        return $this->hasMany(Session_request::class, 'company_id');
    }

}
