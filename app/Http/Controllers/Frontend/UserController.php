<?php

namespace App\Http\Controllers\Frontend;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->salutation = $request->input('salutation');
        $user->contact_type = $request->input('contact_type');
        $user->degree = $request->input('degree');
        $user->discipline = $request->input('discipline');
        $user->mobile = $request->input('mobile');
        $user->phone = $request->input('phone');
        $user->fax = $request->input('fax');
        $user->province = $request->input('province');
        $user->city = $request->input('city');
        $user->mailing_address = $request->input('mailing_address');
        $user->zip_code = $request->input('zip_code');
        $user->save();
        $role = Role::where('name', 'نویسنده')->first();
        $user->roles()->attach($role->id);
        return redirect('/login');
    }
}
