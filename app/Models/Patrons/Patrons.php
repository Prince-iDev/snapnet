<?php

namespace App\Models\Patrons;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;

class Patrons extends Authenticable
{
    use HasFactory;
    protected $guard = 'patron';
    protected $table = 'patrons';
    protected $fillable = [
        'title',
        'surname',
        'lastname',
        'email',
        'password',
        'mobile_no',
        'birthday',
        'gender',
        'address',
        'photo',
    ];
}
