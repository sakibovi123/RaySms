<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function create_permission(Request $request)
    {
        $permission = new Permission();

        $permission_title = $request->get("permission_title");

        if( !empty($permission_title) )
        {
            $permission->permission_title = $permission_title;
            $permission->save();

            return back()->with("message", "added!");
        }
    }


    public function edit_permission($id)
    {
        $permission = Permission::find($id);
        return view("", [
            "permission" => $permission
        ]);
    }


    public function update_permission(Request $request, $id)
    {
        $permission = Permission::find($id);
        $permission->permission_title = $request->get("permission_title");
        $permission->save();
        return back()->with("message", "Successfully updated");
    }


    public function remove_permission($id)
    {
        $permission = Permission::find($id);
        $permission->delete();
        return back()->with("message", "Successfully deleted");
    }
}
