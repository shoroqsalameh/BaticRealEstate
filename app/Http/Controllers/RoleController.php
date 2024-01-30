<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function AllRoles(){

        $roles = Role::all();
        return view('backend.pages.roles.all_roles',compact('roles'));

    }// End Method 



    public function AddRoles(){
        return view('backend.pages.roles.add_roles');
    }// End Method 

     public function StoreRoles(Request $request){

        Role::create([
            'name' => $request->name, 
        ]);

          $notification = array(
            'message' => 'Role Create Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.roles')->with($notification);

    }// End Method 
}
