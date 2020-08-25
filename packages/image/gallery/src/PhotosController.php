<?php

namespace Image\Gallery;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::with('imageable')->get();
        return view('photos.photo', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('image::photo_create',['image'=>Photo::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->except('_token'), [
    'caption' => ['required', 'string'],
    'filename' => ['required'],
        ]);
        $photos = explode(",", $request->get('photos'));
        if($request->file('filename'))
        {
        foreach($request->file('filename') as $item)
        {
            $photos = new Photo;
            $photo_name = time().'.'.$item->extension();
            $item->move(public_path('storage/images'), $photo_name);
        $data['filename'] = $photo_name;
        // dd($data);
         $request->except('_token');
                 $photos->fill($data);
                $photos->save();
    }
}
return redirect('admin/photos');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
                return $photo;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('image::photo_edit',['photo'=>$photos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       {
        Validator::make($request->except('_token'), [
            'image' => ['required', 'string'],
        ]);
        $data=$request->except('_token');
        $photos->fill($data);
        $photos->save();
        return redirect('admin/photos');
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy(Photo $photos)
    {
        $photos->delete();
        return redirect('admin/photos');
    }
    public function storePhoto($file)
    {
        $path = $file->store('photo','public');

        return $path;
    }


}


