<?php

namespace App\Http\Controllers;

use App\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
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
        $kelases = Kelas::orderBy('created_at','desc')->paginate(5);
        return view('kelases.index')->with('kelases', $kelases)
        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelases.create');
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
            'judul' => 'required',
            'abstraksi' => 'required',
            'body' => 'required',
            'link' => 'required',
            'imagesdesc' => 'required',
            'funfact' => 'required',
            'kesimpulan1' => 'required',
            'kesimpulan2' => 'required',
            'faq1' => 'required',
            'ans1' => 'required',
            'faq2' => 'required',
            'ans2' => 'required',
            'images' => 'image|nullable|max:1999'
        ]);

        //Handle file upload
        if($request->hasFile('images'))
        {
            //Get filename with the extension
            $filenameWithExt = $request->file('images')->getClientOriginalName();

            //Get just file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //Get just extension
            $extension = $request->file('images')->getClientOriginalExtension();

            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            //Upload Image
            $path = $request->file('images')->storeAs('public/kelas_images', $fileNameToStore);
        }
        else
        {
            $fileNameToStore = 'noimage.jpg';
        }

        //create kelas
        $kelas = new Kelas;
        $kelas->judul = $request->input('judul');
        $kelas->abstraksi = $request->input('abstraksi');
        $kelas->body = $request->input('body');
        $kelas->link = $request->input('link');
        $kelas->imagesdesc = $request->input('imagesdesc');
        $kelas->funfact = $request->input('funfact');
        $kelas->kesimpulan1 = $request->input('kesimpulan1');
        $kelas->kesimpulan2 = $request->input('kesimpulan2');
        $kelas->faq1 = $request->input('faq1');
        $kelas->ans1 = $request->input('ans1');
        $kelas->faq2 = $request->input('faq2');
        $kelas->ans2 = $request->input('ans2');
        $kelas->images = $fileNameToStore;
        // $artikel->user_id = auth()->user()->id;
        $kelas->save();

        return redirect('kelases/create')->with('Success',"Kelas Ditambah");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kelas = Kelas::find($id);
        return view('kelases/show')->with('kelas',$kelas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelas $kelas)
    {
        $kelas = Kelas::find($id);

        //cek user
        if (Auth::guest())
        {
            return redirect('/kelases')->with('error','Page Tidak Boleh Diakses');
        }
        return view('kelases/edit')->with('kelas',$kelas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelas $kelas)
    {
        $this->validate($request,[
            'judul' => 'required',
            'abstraksi' => 'required',
            'body' => 'required',
            'link' => 'required',
            'imagesdesc' => 'required',
            'funfact' => 'required',
            'kesimpulan1' => 'required',
            'kesimpulan2' => 'required',
            'faq1' => 'required',
            'ans1' => 'required',
            'faq2' => 'required',
            'ans2' => 'required',
            'images' => 'image|nullable|max:1999'
        ]);

        if($request->hasFile('images'))
        {
            //Get filename with the extension
            $filenameWithExt = $request->file('images')->getClientOriginalName();

            //Get just file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //Get just extension
            $extension = $request->file('images')->getClientOriginalExtension();

            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            //Upload Image
            $path = $request->file('images')->storeAs('public/kelas_images', $fileNameToStore);
        }

        //create adrtikel
        $kelas = Kelas::find($id);
        $kelas->judul = $request->input('judul');
        $kelas->abstraksi = $request->input('abstraksi');
        $kelas->body = $request->input('body');
        $kelas->link = $request->input('link');
        $kelas->imagesdesc = $request->input('imagesdesc');
        $kelas->funfact = $request->input('funfact');
        $kelas->kesimpulan1 = $request->input('kesimpulan1');
        $kelas->kesimpulan2 = $request->input('kesimpulan2');
        $kelas->faq1 = $request->input('faq1');
        $kelas->ans1 = $request->input('ans1');
        $kelas->faq2 = $request->input('faq2');
        $kelas->ans2 = $request->input('ans2');

        if($request->hasFile('images')){
            $kelas->images = $fileNameToStore;
        }
        $kelas->save();

        return redirect('/kelases/edit')->with('Success',"Kelas Diperbarui");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelas $kelas)
    {
        //
    }
}
