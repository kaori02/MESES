<?php

namespace App\Http\Controllers;

use App\Soal;
use App\User;
use App\KategoriSoal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth',['except' => ['index']]);
    }

    public function index()
    {
        $soals = KategoriSoal::join('soals', 'kategori_soal.id_kategori', '=', 'soals.kategori_id')
        ->get()
        ->where('cover_image', '!=', 'noimage.png')
        ->sortBy('id_kategori')->groupBy('kategori_id');
        return view('/soals/index')->with('soals', $soals);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = KategoriSoal::pluck('nama_kategori','id_kategori');
        if (!Auth::user()->isKamiSama())
        {
            return redirect('/soals')->with('Error','Halaman ini tidak dapat diakses');
        }

        return view('/soals/create')->with('kategoris', $kategoris);
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
            'body_soal' => 'required',
            'a' => 'required',
            'b' => 'required',
            'c' => 'required',
            'd' => 'required',
            'jawaban' => 'required',
            'kategori_id' => 'required',
            'cover_image' => 'image|nullable|max:1999',
        ]);

        //Handle file upload
        if($request->hasFile('cover_image'))
        {
            //Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();

            //Get just file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //Get just extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();

            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            //Upload Image
            $path = $request->file('cover_image')->storeAs('public/soal_images', $fileNameToStore);
        }
        else
        {
            $fileNameToStore = 'noimage.png';
        }

        //create adrtikel
        $soal = new Soal;
        $soal->body_soal = $request->input('body_soal');
        $soal->a = $request->input('a');
        $soal->b = $request->input('b');
        $soal->c = $request->input('c');
        $soal->d = $request->input('d');
        $soal->jawaban = $request->input('jawaban');
        $soal->kategori_id = $request->input('kategori_id');
        $kate = $soal->kategori_id;
        $soal->cover_image = $fileNameToStore;
        $soal->save();

        return redirect('/soals/'.$kate)->with('Success',"Soal Baru Berhasil Ditambah");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!(Auth::user()->isKamiSama() || Auth::user()->isSubbed()))
        {
            return redirect('/soals')->with('Error','Halaman ini tidak dapat diakses');
        }
        $kategoris = KategoriSoal::find($id);
        $soals = Soal::where('kategori_id', $id)->paginate(10);

        return view('soals/show', compact('kategoris','soals'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategoris = KategoriSoal::pluck('nama_kategori','id_kategori');
        //cek user
        if (!Auth::user()->isKamiSama())
        {
            return redirect('/soals')->with('Error','Halaman ini tidak dapat diakses');
        }
        $soal = Soal::find($id);
        return view('/soals/edit', compact('soal','kategoris'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'body_soal' => 'required',
            'a' => 'required',
            'b' => 'required',
            'c' => 'required',
            'd' => 'required',
            'jawaban' => 'required',
            'kategori_id' => 'required',
        ]);

        if($request->hasFile('cover_image'))
        {
            //Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();

            //Get just file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //Get just extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();

            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            //Upload Image
            $path = $request->file('cover_image')->storeAs('public/soal_images', $fileNameToStore);
        }

        //create adrtikel
        $soal = Soal::find($id);
        $soal->body_soal = $request->input('body_soal');
        $soal->a = $request->input('a');
        $soal->b = $request->input('b');
        $soal->c = $request->input('c');
        $soal->d = $request->input('d');
        $soal->jawaban = $request->input('jawaban');
        $soal->kategori_id = $request->input('kategori_id');
        $kateg = $soal->kategori_id;
        if($request->hasFile('cover_image')){
            $soal->cover_image = $fileNameToStore;
        }
        $soal->save();

        return redirect('/soals/'.$kateg)->with('Success',"Soal ".$kateg." Berhasil Diperbarui");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $soal = Soal::find($id);
        $kategori = $soal->kategori_id;
        //cek user
        if (!Auth::user()->isKamiSama())
        {
            return redirect('/soals/'.$kategori)->with('Error','Halaman ini tidak dapat diakses');
        }

        if($soal->cover_image != 'noimage.png')
        {
            //delete image
            Storage::delete('public/soal_images/'.$soal->cover_image);
        }


        $soal->delete();
        return redirect('soals/'.$kategori)->with('Success',"Soal Terhapus");
    }
}
