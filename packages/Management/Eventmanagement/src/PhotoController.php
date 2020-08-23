<?php

namespace Management\Eventmanagement;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Image;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $photo=Photo::all();
        return view('eventmanagement::photo')->with('photo',$photo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eventmanagement::photo_create',['eventmanagement'=>Eventmanagement::all()]);
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
    'image' => ['required'],
        ]); 
        $data=$request->except('_token');
        if($request->file('image'))
        {
        foreach($request->file('image') as $item)
        {
            $photo = new Photo;
            $photo_name = time().'.'.$item->extension();
            $item->move(public_path('storage/images'), $photo_name);
        $data['image'] = $photo_name;
        // dd($data);
                 $photo->fill($data);
                $photo->save();
    }
}
return redirect('admin/photos');
}
    /**
     * Display the specified resource.
     *
     * @param  \App\photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        return $photo;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        return view('eventmanagement::photo_edit',['photo'=>$photo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        Validator::make($request->except('_token'), [
            'image' => ['required', 'string'],
        ]);
        $data=$request->except('_token');
        $photo->fill($data);
        $photo->save();
        return redirect('admin/photos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        $photo->delete();
        return redirect('admin/photos');
    }
    public function storePhoto($file)
    {
        $path = $file->store('photo','public');

        return $path;
    }


}
