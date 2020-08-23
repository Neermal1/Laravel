<?php
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\asssignment;
use Validator;
use App\Http\Resources\asssignment as AssignmentResource;
   
class AssignmentController extends BaseController
{
    /**


     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assignments = Assignment::all();
    
        return $this->sendResponse(AssignmentResource::collection($assignments), 'Assignment retrieved successfully.');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
   
        $validator = Validator::make($input, [
            'name' => 'required',
            'detail' => 'required'
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $assignment = Assignment::create($input);
   
        return $this->sendResponse(new AssignmentResource($assignment), 'Assignmnet created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asssignment = asssignment::find($id);
  
        if (is_null($asssignment)) {
            return $this->sendError('asssignment not found.');
        }
   
        return $this->sendResponse(new asssignmentResource($asssignment), 'asssignment retrieved successfully.');
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, asssignment $asssignment)
    {
        $input = $request->all();
   
        $validator = Validator::make($input, [
            'name' => 'required',
            'detail' => 'required'
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $asssignment->name = $input['name'];
        $asssignment->detail = $input['detail'];
        $asssignment->save();
   
        return $this->sendResponse(new asssignmentResource($asssignment), 'asssignment updated successfully.');
    }
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(asssignment $asssignment)
    {
        $asssignment->delete();
   
        return $this->sendResponse([], 'asssignment deleted successfully.');
    }
}