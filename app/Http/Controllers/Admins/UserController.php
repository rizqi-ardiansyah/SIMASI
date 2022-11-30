<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Posko;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware(['role:pusdalop|trc']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return Inertia::render('Admins/Users/Index', [
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
        if (auth()->user()->hasAnyRole(['pusdalop', 'trc'])) {
            $this->validate($request, [
                'name' => ['required', 'max:50'],
                'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],
            ]);
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
    public function update(Request $request) {
        $user = User::where('id', $request->id)->first();
        if (auth()->user()->hasAnyRole(['pusdalop', 'trc'])) {
            $this->validate($request, [
                'name' => ['required', 'max:50'],
                'email' => ['required', 'string', 'email', 'max:50'],
            ]);
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
        return back();
    }
}
