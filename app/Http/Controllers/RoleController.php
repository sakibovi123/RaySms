<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function get_all_roles()
    {
        $roles = Role::all();
        return view("Dashboard.Roles.roles", [
            "roles" => $roles
        ]);
    }


    public function create_role_permission(Request $request)
    {
        $role = new Role();
        $role->user_id = auth()->user()->id;
        $role->title = $request->get("title");
        $permissions = $request->get("permissions");

        foreach ($permissions as $permission)
        {
            $role->permissions()->attach($permission->id);
        }
        $role->save();
        return back()->with("message", "role added!");
    }


    public function edit_role_permission($id)
    {
        $role = Role::find($id);

        return view("", [
            "role" => $role
        ]);
    }


    public function update_role_permission(Request $request, $id)
    {
        $role = Role::find($id);
        $role->user_id = auth()->user()->id;
        $role->title = $request->get("title");
        $permissions = $request->get("permissions");
        foreach ($permissions as $permission)
        {
            $role->permissions()->attach($permission->id);
        }
        $role->save();
        return back()->with("message", "role updated!");
    }


    public function remove_role_permission($id)
    {
        $role = Role::find($id);
        $role->delete();
        return back()->with("message", "Role deleted!");
    }
}
