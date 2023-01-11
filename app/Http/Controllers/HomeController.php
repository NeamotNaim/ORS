<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class HomeController extends Controller
{
    //
    public function test(){
        //create a role and permisson name
        //$role = Role::create(['name' => 'reporter']);
        //$permission = Permission::create(['name' => 'edit articles']);
        //$role=Role::findByID(1);
       //$role->givePermissionTo(['edit articles','update articles','create articles', 'delete articles','review articles']);

        $role=Role::findByID(2);
       $role->givePermissionTo(['update articles','review articles']);

       //assigning role to a user
       //$user=User::findOrFail(2);
       //$user->assignRole(1);

    }
}
