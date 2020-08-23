<?php

namespace Management\Eventmanagement;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class EventmanagementController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $eventmanagement=Eventmanagement::all();
        return view('eventmanagement::eventmanagement')->with('eventmanagement',$eventmanagement);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $photos = Photo::all();
        return view('eventmanagement::eventmanagement_create',['photos'=>$photos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

       Validator::make($request->except('_token'), [
        'title' => ['required', 'string'],
        'description' => ['required', 'string', 'max:255']
    ]);
       $eventmanagement = new Eventmanagement;
       $data=$request->except('_token');
       $eventmanagement->fill($data);
       $eventmanagement->save();
        return redirect('admin/eventmanagement');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Eventmanagement $eventmanagement)
    {
        return $eventmanagement;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Eventmanagement $eventmanagement)
    {
         $photos = Photo::all();
        return view('eventmanagement::eventmanagement_edit',['eventmanagement'=>$eventmanagement,'photos'=>$photos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Eventmanagement $eventmanagement)
    {
       
        $eventmanagement->fill($request->except('_token'));
      
        $eventmanagement->save();
        return redirect('admin/eventmanagement');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */

    public function destroy($id)
    {
      $eventmanagement=Eventmanagement::find($id);
        $eventmanagement->delete();
        return redirect('admin/eventmanagement');
    }

}
