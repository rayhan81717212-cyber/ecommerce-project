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

    public function create(){
        return view("admin.pages.userManage.role.create");
    }

    public function store(Request $request){

        // dd($request->all());

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $role = Roles::create([

            'name' => $request->name
        ]);
        // dd($role);

        return redirect()->route("role.index")->with("success", "Role Add Successfully!");
    }

    public function edit($id){
        $role = Roles::find($id);
        return view("admin.pages.userManage.role.edit", compact('role'));
    }

    public function update(Request $request, $id){
        $role = Roles::find($id);

        $role->update([
            'name'=> $request->name
        ]);
        // dd($role);
        return redirect()->route('role.index')->with('success', "Role Update Successfully!");
    }

    public function destroy($id){
        $role = Roles::find($id);

        $role->delete();
        // dd($role);
        return redirect()->route('role.index')->with('success', "Role Delete Successfully!");
    }

}
