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
       
        if($request->hasFile('thumb_image_1')){

            $imgExtension = $requests['thumb_image_1']->getClientOriginalExtension();
            $imageName = time() . "-" . uniqid() . '.' . $imgExtension;
             $requests['thumb_image_1']->move(public_path('uploads'),$imageName);
    
             $requests['thumb_image_1']= 'uploads/'.$imageName;
        };
        if($request->hasFile('thumb_image_1')){

            $imgExtension = $requests['thumb_image_2']->getClientOriginalExtension();
            $imageName = time() . "-" . uniqid() . '.' . $imgExtension;
             $requests['thumb_image_2']->move(public_path('uploads'),$imageName);
    
             $requests['thumb_image_2']= 'uploads/'.$imageName;
        };
      
       
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
        $categories =Category::get();
        $languages = Language::get();
        $brends = Brend::where('status', true)->get();

        return view('back.products.edit',['categories'=>Category::get(),'languages'=>Language::get(),'brends'=>Brend::where('status', true)->get(),'product'=>Product::find($id),'images'=>ProductImage::where('product_id', $id)->get()]);
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
        $product = Product::find($id);
        $requests=$request->all();
       
        if($request->hasFile('thumb_image_1')){

            $imgExtension = $requests['thumb_image_1']->getClientOriginalExtension();
            $imageName = time() . "-" . uniqid() . '.' . $imgExtension;
             $requests['thumb_image_1']->move(public_path('uploads'),$imageName);
    
             $requests['thumb_image_1']= 'uploads/'.$imageName;
        };
        if($request->hasFile('thumb_image_1')){

            $imgExtension = $requests['thumb_image_2']->getClientOriginalExtension();
            $imageName = time() . "-" . uniqid() . '.' . $imgExtension;
             $requests['thumb_image_2']->move(public_path('uploads'),$imageName);
    
             $requests['thumb_image_2']= 'uploads/'.$imageName;
        };
      
       
        $product->update($requests);
        if (is_array($request->file('images')) || is_object($request->file('images')))
{
        foreach ($request->file('images') as $imagefile) {
            $image = new ProductImage();
            $imageName= time() . "-" . uniqid() . '.' .$imagefile->getClientOriginalExtension();
            $imagefile->move(public_path('uploads'),$imageName);
            $image->image='/uploads/'.$imageName;
            $image->product_id = $product->id;
            $image->save();
          }
        }
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::where('id',$id)->delete();
        return redirect()->back();
    }
}
