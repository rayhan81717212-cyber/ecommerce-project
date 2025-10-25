<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roles;

class RoleController extends Controller
{
    public function index(){
        $role = Roles::all();
        return view("admin.pages.userManage.role.index", compact('role'));
    }
    public function show($id){
        $role_id = Roles::find($id);
        return view("admin.pages.userManage.role.show", compact('role_id'));
    }

}
