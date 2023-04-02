<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Services\FIle_download;
use App\Models\Language;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back.service.index',['service'=>Service::paginate(10), 'languages'=>Language::where('status', 1)->get()]);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceRequest $request)
    {
        $requests=$request->all();
       
        if($request->hasFile('image')){

            $imgExtension = $requests['image']->getClientOriginalExtension();
            $imageName = time() . "-" . uniqid() . '.' . $imgExtension;
             $requests['image']->move(public_path('uploads'),$imageName);
    
             $requests['image']= 'uploads/'.$imageName;
        };
        if(!isset($requests['status'])){
            $requests['status']='0';
        }
       Service::create($requests);
        if ($code=200) {
           return response()->json('success',201);
        }else{
            $validator = \Illuminate\Support\Facades\Validator::make($request->all(), $this->rules());

            if ($validator->fails()) {
               return response()->json($validator->errors(), 422);
            }
        }
     
      
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Service::find($id);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceRequest $request, $id)
    {
        $service = Service::find($id);
     
          $requests=$request->all();
        
          if($request->hasFile('image')){

            $imgExtension = $requests['image']->getClientOriginalExtension();
            $imageName = time() . "-" . uniqid() . '.' . $imgExtension;
             $requests['image']->move(public_path('uploads'),$imageName);
    
             $requests['image']= 'uploads/'.$imageName;
        };
      
        if(!isset($requests['status'])){
            $requests['status']='0';
        }
      
     
        $service->update($requests);
        if ($code=200) {
            return response()->json('success',201);
         }else{
             $validator = \Illuminate\Support\Facades\Validator::make($request->all(), $this->rules());
 
             if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
             }
         }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::where('id',$id)->delete();
        return redirect()->back();
    }
}
