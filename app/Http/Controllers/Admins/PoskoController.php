<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Posko;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class PoskoController extends Controller
{
    public function __construct() {
        $this->middleware(['role:pusdalop|trc']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
        return Inertia::render('Admins/Posko/Index', [
            // 'admins' => User::where('is_admin', 1)->latest()->paginate(5),
            'posko' => Posko::latest()->paginate(5),
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
     * @param  \App\Models\Posko  $posko
     * @return \Illuminate\Http\Response
     */
    public function show(Posko $posko)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posko  $posko
     * @return \Illuminate\Http\Response
     */
    public function edit(Posko $posko)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Posko  $posko
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posko $posko)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posko  $posko
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posko $posko)
    {
        //
    }
}
