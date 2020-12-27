<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
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
        $videos = Video::orderBy('created_at','desc')->paginate(5);
        return view('videos.index')->with('videos', $videos)
        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Auth::user()->isKamiSama())
        {
            return redirect('/videos')->with('Error','Halaman ini tidak dapat diakses');
        }
        return view('videos.create');
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
            'title' => 'required',
            'body' => 'required',
            'link' => 'required'
        ]);
        //create video
        $video = new Video;
        $video->title = $request->input('title');
        $video->body = $request->input('body');
        $video->link = $request->input('link');
        $video->save();

        return redirect('videos')->with('Success',"Video Baru Berhasil Ditambah");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $video = Video::find($id);
        return view('videos/show')->with('video',$video);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!Auth::user()->isKamiSama())
        {
            return redirect('/videos')->with('Error','Halaman ini tidak dapat diakses');
        }
        $video = Video::find($id);
        return view('videos/edit')->with('video',$video);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
            'link' => 'required'
        ]);


        //edit video
        $video = Video::find($id);
        $video->title = $request->input('title');
        $video->body = $request->input('body');
        $video->link = $request->input('link');
        $video->save();

        return redirect('videos')->with('Success',"Video ".$video->title." Berhasil Diperbarui");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //cek user
        if (!Auth::user()->isKamiSama())
        {
            return redirect('/videos/'.$kategori)->with('Error','Halaman ini tidak dapat diakses');
        }
        $video = Video::find($id);
        $video->delete();
        return redirect('videos')->with('Success',"Video ".$video->title." Berhasil Dihapus");
    }

}
