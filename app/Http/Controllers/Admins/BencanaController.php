<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
// use App\Models\User;
use App\Models\Role;
use App\Models\Posko;
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
            // 'bencana' => Bencana::latest()->paginate(5),
            'bencana' => Bencana::select('bencana.id','nama', 'tanggal', 'waktu', 'lokasi', 'korban', 'kerusakan', 'posko_id', 'p.namaPosko')
            ->leftJoin('posko AS p', 'bencana.posko_id', '=', 'p.id')
            ->orderBy('bencana.tanggal', 'desc')
            ->paginate(5),
            'posko' => Posko::select('posko.namaPosko')->paginate(5),
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
        if (auth()->user()->hasAnyRole(['pusdalop','trc'])) {
            $idPoskoBencana = Posko::where('namaPosko', $request->posko)->value('id');
            Bencana::create([
                'nama' => $request->nama,
                'tanggal' => $request->tanggal,
                'waktu' => $request->waktu,
                'lokasi' => $request->lokasi,
                'korban' => $request->korban,
                'kerusakan' => $request->kerusakan,
                'posko_id' => $idPoskoBencana
            ]);
            return back();
        }
        return back();
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
        $getBencana = Bencana::where('id', $request->id)->first();
        $idPoskoBencana = Posko::where('namaPosko', $request->posko)->value('id');

        if (auth()->user()->hasAnyRole(['pusdalop','trc'])) {
            $getBencana->update([
                'nama' => $request->nama,
                'tanggal' => $request->tanggal,
                'waktu' => $request->waktu,
                'lokasi' => $request->lokasi,
                'korban' => $request->korban,
                'kerusakan' => $request->kerusakan,
                'posko_id' => $idPoskoBencana
            ]);
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bencana  $bencana
     * @return \Illuminate\Http\Response
     */
    public function destroy($bencana)
    {if (auth()->user()->hasAnyRole(['pusdalop','trc'])) {
        $hapusBencana = Bencana::where('id', $bencana)->first();
        $hapusBencana->delete();
        return back();
    }
        return back();
    }
}
