<?php

namespace App\Models;

use Faker\Core\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;



class Student extends Model
{
    use HasFactory, HasApiTokens;

    protected $fillable = ["name" , "email" , "phone" , "cpf", "gender" , "married", "age"];
}
