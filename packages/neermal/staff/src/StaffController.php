<?php

namespace Neermal\Staff;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class StaffController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        //dd(new Staff());
        $staff=Staff::all();
        return view('staff::staffs')->with('staff',$staff);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('staff::staffs_create');
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
            'phone' => ['required', 'string', 'phone','max:15'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:staffs']
        ]);

        $staff = new Staff;
        $data=$request->except('_token');
        if($request->file('profile'))
        $data['profile'] = $this->storeFile($request->file('profile'));
        $staff->fill($data);
        $staff->save();
return redirect('admin/staffs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        dd($staff);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Staff $staff)
    {
        return view('staff::staffs_edit',['staff'=>$staff]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Staff $staff)
    {
        return redirect('admin/staffs');
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
      $staff=Staff::find($id);
        $staff->delete();
        return redirect('admin/staffs');
    }

    public function storeFile($file)
    {
        $path = $file->store('profile','public');

        return $path;
    }

}
