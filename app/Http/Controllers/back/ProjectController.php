<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Services\FIle_download;
use App\Models\Language;
use App\Models\ProjectCategory;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back.project.index',['project'=>Project::paginate(10), 'languages'=>Language::where('status', 1)->get(),'categories'=>ProjectCategory::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request)
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
        Project::create($requests);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Project::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectRequest $request, $id)
    {
        $project = Project::find($id);
     
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
      
     
        $project->update($requests);
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
        Project::where('id',$id)->delete();
        return redirect()->back();
    }
}
