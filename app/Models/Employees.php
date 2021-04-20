<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    public $fillable = ['employee_name', 'employee_surname', 'project_id'];
    public function project()
    {
        return $this->belongsTo('App\Models\Project');
    }
}