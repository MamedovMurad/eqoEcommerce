<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Brend;
use App\Models\Category;
use App\Models\Language;
use App\Models\Product;
use App\Models\ProductImage;
use App\Services\FIle_download;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back.products.index',['products'=>Product::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.products.create',['categories'=>Category::get(),'languages'=>Language::get(),'brends'=>Brend::where('status', true)->get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $requests=$request->all();
       
        $photo = new FIle_download();
        $checkedPhoto =  $photo->download($request)??false;
        if ($checkedPhoto){
            $requests['thumb_image_1']=$checkedPhoto;
        }
        if ($checkedPhoto){
            $requests['thumb_image_2']=$checkedPhoto;
        }
      
       
        $product = Product::create($requests);
        
        foreach ($request->file('images') as $imagefile) {
            $image = new ProductImage();
            $imageName= time() . "-" . uniqid() . '.' .$imagefile->getClientOriginalExtension();
            $imagefile->move(public_path('uploads'),$imageName);
            $image->image='/uploads/'.$imageName;
            $image->product_id = $product->id;
            $image->save();
          }
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
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
