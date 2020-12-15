<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

//use App\Tutor;
use App\User;
use App\Kelas;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        // $artikels = Artikel::latest()->take(3)->get();
        // $ambulan = Ambulan::count();
        $userc = User::count();
        $kelasc = Kelas::count();
        // $relawan = Relawan::select('nama')
        // ->where('status_relawan', '=', 'Diterima')->count();
        return view('pages.index'
        , compact('userc','kelasc')
        );
    }

    public function tutor(){
        // $artikels = Artikel::latest()->take(3)->get();
        // $ambulan = Ambulan::count();
        // $posko = Posko_Kesehatan::count();
        // $relawan = Relawan::select('nama')
        // ->where('status_relawan', '=', 'Diterima')->count();
        return view('pages.tutor'
        // , compact('artikels','ambulan', 'posko', 'relawan')
        );
    }

    public function home(){
        // $artikels = Artikel::latest()->take(3)->get();
        // $ambulan = Ambulan::count();
        // $posko = Posko_Kesehatan::count();
        // $relawan = Relawan::select('nama')
        // ->where('status_relawan', '=', 'Diterima')->count();
        return view('home'
        // , compact('artikels','ambulan', 'posko', 'relawan')
        );
    }
}
