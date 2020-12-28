<?php

namespace App\Http\Controllers;

use App\Pembayaran;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth',['except' => []]);
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembayaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'bank' => 'required',
            'norek' => 'required',
            'pemilikrek' => 'required',
            'tgltransfer' => 'required',
            'jumlah' => 'required',
            'caratransfer' => 'required'
        ]);
        //create video
        $pembayaran = new Pembayaran;
        $pembayaran->bank = $request->input('bank');
        $pembayaran->norek = $request->input('norek');
        $pembayaran->pemilikrek = $request->input('pemilikrek');
        $pembayaran->tgltransfer = $request->input('tgltransfer');
        $pembayaran->jumlah = $request->input('jumlah');
        $pembayaran->berita = $request->input('berita');
        $pembayaran->caratransfer = $request->input('caratransfer');
        $pembayaran->user_id = auth()->user()->id;
        $pembayaran->save();

        return redirect('/')->with('Success',"Catatan Pembayaran Berhasil Ditambah");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function show(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pembayaran $pembayaran)
    {
        //
    }
}
