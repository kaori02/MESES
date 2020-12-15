<?php

namespace App\Http\Controllers;

use App\Soal;
use App\User;
use App\KategoriSoal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $soals = KategoriSoal::orderBy('id_kategori','asc')->paginate(5);
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
            $fileNameToStore = 'noimage.jpg';
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
        $soal->cover_image = $fileNameToStore;
        $soal->save();

        return redirect('/soals/create')->with('Success',"Soal Ditambah");//
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategoris = KategoriSoal::find($id);
        $soals = Soal::orderBy('id_soal')->where('kategori_id', ' = ' , $id)->paginate(10);
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
        $soal = Soal::find($id);

        //cek user
        if (Auth::guest())
        {
            return redirect('/soals')->with('error','Unauthorized Page');
        }
        return view('/soals/edit')->with('soal',$soal);
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

        if($request->hasFile('cover_image')){
            $soal->cover_image = $fileNameToStore;
        }
        $soal->save();

        return redirect('/soals/tutor')->with('Success',"Soal Diperbarui");
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

        if($soal->cover_image != 'noimage.jpg')
        {
            //delete image
            Storage::delete('public/soal_images/'.$soal->cover_image);
        }


        $soal->delete();
        return redirect('soals/tutor')->with('Success',"Soal Terhapus");
    }

    public function tutor()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $artikels = $user->artikels;
        return view('soals/tutor', compact('soals'));
    }
}
