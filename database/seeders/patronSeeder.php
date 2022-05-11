<?php

namespace Database\Seeders;

use App\Http\Middleware\Patron;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Patrons\Patrons;

class patronSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // associative array of Nigerian states and codes
        $patron = [
           ['title'=>'Mr', 'surname'=>'Bolarin', 'lastname'=>'Prince', 'email'=>'prince@intelyticslimited.com', 'password'=>'$2y$10$.PP3FG6NVBFb.VPhUT/qUOC00jbHGuhva6EBX7A0dVnvK/tP/91UO', 'mobile_no'=>'09043882355', 'birthday'=>'22-02-1994', 'gender'=>'male', 'address'=>'IKeja, Lagos', 'state'=>'Lagos', 'photo'=>'']
        ];

        // put each item in associative array into new array that can be inserted by query builder
        Patrons::insert($patron);
    }
}
