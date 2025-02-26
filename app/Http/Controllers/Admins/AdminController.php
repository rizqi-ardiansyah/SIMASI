<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Spatie\Permission\Traits\HasRoles;

class AdminController extends Controller
{
    use HasRoles;

    public function __construct() {
<<<<<<< HEAD
        $this->middleware(['role:admin|superAdmin']);
=======
        $this->middleware(['role: pusdalop|trc']);
>>>>>>> 246e1f5fff2a030a4e5e50a240466baa46bd9fb2
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return Inertia::render('Admins/Admins/Index', [
            'admins' => User::where('is_admin', 1)->get(),
            'roles' => Role::all()
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
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, User $user) {
<<<<<<< HEAD
        if (auth()->user()->hasAnyRole(['superAdmin', 'admin'])) {
=======
        if (auth()->user()->hasAnyRole(['super-admin', 'admin'])) {
>>>>>>> 246e1f5fff2a030a4e5e50a240466baa46bd9fb2
            if (!$request->roles) {
                return back()->withErrors(['roles' => 'The role field is required']);
            }
            if ($request->roles['id'] != 5) {
                $adminRole = Role::where('id', $request->roles['id'])->first();
                $user->syncRoles($adminRole);
                return back();
            } else {
                $userRole = Role::where('id', 5)->first();
                $user->update(['is_admin' => 0]);
                $user->syncRoles($userRole);
                return back();
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
    public function destroy(User $user)
    {
        //
    }
}
