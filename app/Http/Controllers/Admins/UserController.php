<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Role;
<<<<<<< HEAD
=======
use App\Models\Posko;
>>>>>>> 246e1f5fff2a030a4e5e50a240466baa46bd9fb2
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class UserController extends Controller
{
    public function __construct() {
<<<<<<< HEAD
        $this->middleware(['role:admin|user']);
=======
        $this->middleware(['role:pusdalop|trc']);
>>>>>>> 246e1f5fff2a030a4e5e50a240466baa46bd9fb2
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return Inertia::render('Admins/Users/Index', [
<<<<<<< HEAD
            'users' => User::where('is_admin', 0)->latest()->paginate(5),
            'roles' => Role::all()
=======
            // 'admins' => User::where('is_admin', 1)->latest()->paginate(5),
            // 'users' => User::where('is_admin', 1)->latest()->paginate(5),
            'users' => User::select('users.name','users.email','users.posko_id','users.id AS idAdmin','p.id','p.namaPosko','users.role_id', 'r.name AS namaPeran')
            ->leftJoin('posko AS p', 'users.posko_id','=','p.id')
            // ->join('model_has_roles AS mr', 'users.id', '=', 'mr.model_id')
            ->leftJoin('roles AS r', 'users.role_id', '=', 'r.id')
            ->where('is_admin',1)
            ->paginate(5),
            // 'users' => User::select(
            //     'id',  
            //     'nama',
            //     'is_admin',
            //     'email',
            //     'password',
            //     'p.namaPosko'
            // )
            // ->join('posko AS p', 'users.posko_id','=','p.id')
            // ->paginate(5),
            'posko' => Posko::select('posko.namaPosko')->paginate(5),
            // 'posko' => Posko::all(),
            // 'getPosko' => User::select('posko_id','p.id','p.namaPosko')
            // ->join('posko AS p', 'users.posko_id','=','p.id')->paginate(5),
            // 'getPosko' => User::where('posko_id', 13)->latest()->paginate(5),
            'roles' => Role::all(),
            'getRoles' => Role::select('roles.name')->paginate(5)
>>>>>>> 246e1f5fff2a030a4e5e50a240466baa46bd9fb2
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
<<<<<<< HEAD
        if (auth()->user()->hasAnyRole(['superAdmin', 'admin'])) {
=======
        if (auth()->user()->hasAnyRole(['pusdalop', 'trc'])) {
>>>>>>> 246e1f5fff2a030a4e5e50a240466baa46bd9fb2
            $this->validate($request, [
                'name' => ['required', 'max:50'],
                'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],
            ]);
<<<<<<< HEAD
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'is_admin' => 0,
                'password' => Hash::make('password')
            ]);
            $role = Role::where('id', 5)->first();
            $user->syncRoles($role);
            return back();
=======
            // if ($request->roles[0] === null) {
            //     return back()->withErrors(['roles' => 'The role field is required']);
            // }if ($request->posko[0] === null) {
            //     return back()->withErrors(['posko' => 'The posko field is required']);
            // }
            // if ($request->roles[0]['id'] != 5 && $request->posko[0]['id'] != 5) {
            //     $adminRole = Role::where('id', $request->roles[0]['id'])->first();
            //     $adminPosko = Posko::where('id', $request->posko[0]['id'])->value('id');
            if ($request->roles != 5 && $request->posko != 'a') {
                $adminRole = Role::where('name', $request->roles)->value('id');
                $adminPosko = Posko::where('namaPosko', $request->posko)->value('id');
                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'is_admin' => 1,
                    'password' => Hash::make('password'),
                    'role_id' => $adminRole,
                    'posko_id' => $adminPosko
                ]);
                // $user->update([
                //     'name' => $request->name,
                //     'email' => $request->email,
                //     'is_admin' => 1,
                // ]);
                $user->syncRoles($adminRole);
                // $user->syncRoles($adminPosko);
                return back();
            }
            // }if ($request->posko[0]['id'] != 5) {
            //     $adminPosko = Posko::where('id', $request->posko[0]['id'])->first();
            //     $user = User::create([
            //         'name' => $request->name,
            //         'email' => $request->email,
            //         'is_admin' => 1,
            //         'password' => Hash::make('password'),
            //         'posko_id' => $adminPosko
            //     ]);
            //     // $user->update([
            //     //     'name' => $request->name,
            //     //     'email' => $request->email,
            //     //     'is_admin' => 1,
            //     // ]);
            //     $user->syncRoles($adminPosko);
            //     return back();
            // }
            else {
                $user->update([
                    'name' => $request->name,
                    'email' => $request->email,
                ]);
            }
            // $role = Role::where('id', 5)->first();
            // $user->syncRoles($role);
            // return back();
>>>>>>> 246e1f5fff2a030a4e5e50a240466baa46bd9fb2
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function update(Request $request, User $user) {
        if (auth()->user()->hasAnyRole(['superAdmin', 'admin'])) {
=======
    public function update(Request $request) {
        $user = User::where('id', $request->id)->first();
        if (auth()->user()->hasAnyRole(['pusdalop', 'trc'])) {
>>>>>>> 246e1f5fff2a030a4e5e50a240466baa46bd9fb2
            $this->validate($request, [
                'name' => ['required', 'max:50'],
                'email' => ['required', 'string', 'email', 'max:50'],
            ]);
<<<<<<< HEAD
            if ($request->roles[0] === null) {
                return back()->withErrors(['roles' => 'The role field is required']);
            }
            if ($request->roles[0]['id'] != 5) {
                $adminRole = Role::where('id', $request->roles[0]['id'])->first();
                $user->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'is_admin' => 1,
                ]);
                $user->syncRoles($adminRole);
=======
            // if ($request->roles[0] === null) {
            //     return back()->withErrors(['roles' => 'The role field is required']);
            // }
            // if ($request->roles != 5) {
            //     $adminRole = Role::where('id', $request->roles[0]['id'])->first();
            if ($request->roles != 5 && $request->posko != 'a') {
                $adminRole = Role::where('name', $request->roles)->value('id');
                $adminPosko = Posko::where('namaPosko', $request->posko)->value('id');
                $user->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    // 'is_admin' => 1,
                    // 'password' => Hash::make('password'),
                    'role_id' => $adminRole,
                    'posko_id' => $adminPosko
                ]);
                // $user->syncRoles($adminRole);
>>>>>>> 246e1f5fff2a030a4e5e50a240466baa46bd9fb2
                return back();
            } else {
                $user->update([
                    'name' => $request->name,
                    'email' => $request->email,
                ]);
            }
            return back();
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function destroy(User $user) {
        if (auth()->user()->hasAnyRole(['superAdmin', 'admin'])) {
            $user->delete();
            return back();
        }
=======
    // public function destroy(User $user) {
    //     if (auth()->user()->hasAnyRole(['pusdalop', 'trc'])) {
    //         $user->delete();
    //         return back();
    //     }
    //     return back();
    // }

    public function destroy($id)
    {if (auth()->user()->hasAnyRole(['pusdalop','trc'])) {
        $hapusUser= User::where('id', $id)->first();
        $hapusUser->delete();
        return back();
    }
>>>>>>> 246e1f5fff2a030a4e5e50a240466baa46bd9fb2
        return back();
    }
}
