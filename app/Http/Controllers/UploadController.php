<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('uploads.index', [
        'files' => Upload::all()
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('uploads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // getClientOriginalName();
      // getError();
      // getClientExtension();
      // getMimeType();
      // isValid();
      // move()
      // getPath() path()
      // asStore()
      // store()

      $file = $request->file; 
      
      $request->validate([
        'category' => 'required',
        'file' => 'required|mimes:pdf'
      ]);

      $fileName = time().'.'.$file->extension();      
      if ($file->move(public_path('images'), $fileName)) {
        $upload = new Upload;
        $upload->category = $request->category;
        $upload->path = $fileName;
        if ($upload->save()) {
          return 'Save successfully';
        }
      }

      return 'Error while uploading the file';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function show(Upload $upload)
    {
      return view ('uploads.show', [
        'file' => $upload
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function edit(Upload $upload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Upload $upload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function destroy(Upload $upload)
    {
        //
    }
}
