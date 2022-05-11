<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Citizen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    
   // dashboard
    public function dashboard()
    {
        return view('users.dashboard');
    }

   
       
    // Check current password
    public function registerCitizens(Request $request)
    {
            // $user = auth()->user();
        // if ($request->isMethod('post')) {
          if($request->isMethod('POST'))
        {
            $citizenData= $request->all();
            $citizensVal=$request->validate([
                'ward_id'=>'required|max:191',
                'name'=>'required|max:191',
                'gender'=>'required|max:191',
                'address'=>'required|max:191',
                'phone'=>'required|max:191',
                'state'=>'required|max:191',
                'lga'=>'required|max:191',
                'ward'=>'required|max:191',
            ]);
           
            if($citizensVal->fails()){
                 return redirect()->back()->with('error_msg', 'Validation Error. Try again.');
            }
            
           else {
                    Citizen::create([
                'ward_id'=>                  1,
                'name'=>             $citizenData['name'],
                'gender'=>       $citizenData['gender'],
                'address'=>         $citizenData['address'],
                'phone'=>      $citizenData['phone'],
                'state' =>     $citizenData['state'],
                'lga' =>     $citizenData['lga'],
                'ward' =>     $citizenData['ward'],
                
            ]);
            return redirect()->back()->with('success', 'Citizen Successfully Added.');
           }
        }

         return view('users/settings/register_citizens');
    }




    // Patron Registration
    public function registeration()
    {
        return view('users.register');
    }


    // Patron login
    public function login(Request $request)
    {
        if($request->isMethod('POST'))
        {
            $data = $request->all();
            $validated = $request->validate([
                'email' => 'required|email|max:255',
                'password' => 'required',
              ]);

            if(Auth::guard('patron')->attempt(['email'=>$data['email'], 'password'=>$data['password']])){
                return redirect('users/dashboard');
            }
            else {
                return redirect()->back()->with('error_msg', 'Invalid Login Details. Try again.');
            }

        }
        return view('users/login');
    }

    // Patron Logout
    public function logout(Request $request)
    {
        Auth::guard('patron')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return view('homepage');
    }
}
