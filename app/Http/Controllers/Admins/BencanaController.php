<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use Inertia\Inertia;
use App\Models\Bencana;
use Illuminate\Http\Request;

class BencanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Admins/Bencana/Index', [
            // 'users' => User::where('is_admin', 0)->whereDate('created_at', '>', $ago)->count()
            'users' => User::where('is_admin', 1)->get(),
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
     * @param  \App\Models\Bencana  $bencana
     * @return \Illuminate\Http\Response
     */
    public function show(Bencana $bencana)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bencana  $bencana
     * @return \Illuminate\Http\Response
     */
    public function edit(Bencana $bencana)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bencana  $bencana
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bencana $bencana)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bencana  $bencana
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bencana $bencana)
    {
        //
    }
}
