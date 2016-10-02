<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use App\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller ;
use App\Http\Requests;

class HomeController extends Controller
{
    public function index(){
        return User::get();
    }

    public function attachUserRole($userId, $role)  {
        $user = User::find($userId);
        $roleId = Role::where('name',$role)->first();
        $user->roles()->attach($roleId);
        return $user ;
    }

    public function getUserId($userId){
        $roles =  User::find($userId)->roles;
        return $roles;
    }

    public function attachPermission(Request $request){
        $parameters = $request->only('permission','role');

        $permissionParams = $parameters['permission'];
        $roleParams = $parameters['role'];

        $role = Role::where('name',$roleParams)->first();
        $permission = Permission::where('name', $permissionParams)->first();

        $role->attachPermission($permission);
        return $this->response->created();
    }

    public function getPermissions($roleParams){
        $role = Role::where('name',$roleParams)->first();
        return $this->response->array($role->perms);
    }

    public function create(){

    }
}
