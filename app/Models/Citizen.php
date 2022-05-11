<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    use HasFactory;
    protected $table = 'citizens';
    protected $fillable = [
    'ward_id',
    'name',
    'gender',
    'address',
    'phone',
    'state',
    'lga',
    'ward'

];
}
