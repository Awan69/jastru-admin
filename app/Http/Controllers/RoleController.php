<?php

namespace  App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controllers\Middleware;
use Yajra\DataTables\DataTables;

class RoleController extends Controller
{
    public static function middleware(): array
    {
        return [
            new Middleware('permission:view role', only: ['index']),
            new Middleware('permission:create role', only: ['create', 'store', 'addPermissionToRole', 'givePermissionToRole']),
            new Middleware('permission:update role', only: ['update', 'edit']),
            new Middleware('permission:delete role', only: ['destroy']),
        ];
    }


    public function index(Request $request)
    {
        if ($request->ajax()) {
            return DataTables::of(Role::query())
                ->addColumn('action', function ($role) {
                    $editUrl = route('roles.edit', $role->id);
                    $deleteUrl = route('roles.destroy', $role->id);
                    $givePermissionUrl = route('roles.give-permissions', $role->id);
                    return '<a href="' . $givePermissionUrl . '" class="btn btn-sm btn-warning">Add / Edit Role Permission</a>
                    <a href="' . $editUrl . '" class="btn btn-sm btn-success">Edit</a>
                    <button type="button" id="deleteRole' . $role->id . '" class="btn btn-sm btn-danger" onclick="deleteRole(' . $role->id . ')">Delete</button>';
                })
                ->rawColumns(['action'])
                ->toJson();
        }

        return view('role-permission.role.index');
    }
    public function create()
    {
        return view('role-permission.role.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => [
                'required',
                'string',
                'unique:roles,name'
            ]
        ]);

        Role::create([
            'name' => $request->name
        ]);

        return redirect('roles')->with('status', 'Role Created Successfully');
    }

    public function edit(Role $role)
    {
        return view('role-permission.role.edit', [
            'role' => $role
        ]);
    }

    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => [
                'required',
                'string',
                'unique:roles,name,' . $role->id
            ]
        ]);

        $role->update([
            'name' => $request->name
        ]);

        return redirect('roles')->with('status', 'Role Updated Successfully');
    }

    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();
        return response()->json(['success' => 'Role  deleted successfully']);
    }

    public function addPermissionToRole($roleId)
    {
        $permissions = Permission::get();
        $role = Role::findOrFail($roleId);
        $rolePermissions = DB::table('role_has_permissions')
            ->where('role_has_permissions.role_id', $role->id)
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();

        return view('role-permission.role.add-permissions', [
            'role' => $role,
            'permissions' => $permissions,
            'rolePermissions' => $rolePermissions
        ]);
    }

    public function givePermissionToRole(Request $request, $roleId)
    {
        $request->validate([
            'permission' => 'required'
        ]);

        $role = Role::findOrFail($roleId);
        $role->syncPermissions($request->permission);

        return redirect()->back()->with('status', 'Permissions added to role');
    }
}
