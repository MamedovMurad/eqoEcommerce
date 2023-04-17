<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Brend;
use App\Models\Category;
use App\Models\Language;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductFile;
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
    public function store(Request $request)
    
    {   
       // dd($request->all());
        $requests=$request->all();
        $product = Product::create($requests);
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
      
        if ($request->filled('categories')) {
            $product->categories()->sync($request->categories);
        }
        foreach ($request->file('images') as $imagefile) {
            $image = new ProductImage();
            $imageName= time() . "-" . uniqid() . '.' .$imagefile->getClientOriginalExtension();
            $imagefile->move(public_path('uploads'),$imageName);
            $image->image='/uploads/'.$imageName;
            $image->product_id = $product->id;
            $image->save();
          }
          foreach ($request->file('files') as $imagefile) {
            $image = new ProductFile();
            $imageName= time() . "-" . uniqid() . '.' .$imagefile->getClientOriginalExtension();
            $imagefile->move(public_path('uploads'),$imageName);
            $image->file='/uploads/'.$imageName;
            $image->product_id = $product->id;
            $image->save();
          }
          dd('dss');
          /* foreach ($request->pdf_files as $filepdf) { */
           /*   dd($request->pdf_files); */
           /*  if ($request->filled('pdf_files')) {
                $pdf_files = $request->pdf_files;
    
    
                if ($product->pdf_files()->count() > 0) {
                    for ($i = 0; $i < count($pdf_files['file']); $i++) {
                        $product->pdf_files()->attach($pdf_files['file'][$i], [ 'file_name:az' => $pdf_files['file_name:az'][$i], 'code' => $pdf_files['code'][$i]]);
                    }
                  
    
                } else {
                
                    $product->pdf_files()->detach();
                    for ($i = 0; $i < count($pdf_files['file']); $i++) {
                        $product->pdf_files()->attach($pdf_files['file'][$i], [ 'file_name:az' => $pdf_files['file_name:az'][$i], 'code' => $pdf_files['code'][$i]]);
                    }
                }
    
            } */
          /* 
           $files=[];
           foreach ($request->pdf_files['file'] as $imagefile) {
            $imgExtension = $imagefile->getClientOriginalExtension();
            $imageName = time() . "-" . uniqid() . '.' . $imgExtension;
             $imagefile->move(public_path('uploads'),$imageName);
    
             $imagefile= 'uploads/'.$imageName; */
            
            /*  dd($imagefile); */
           /*   $files[]= ['file'=>$imagefile, 'product_id'=>$product->id];
          } */
         /*  $data=ProductFile::create($request->pdf_files, ['product_id'=>$product->id,'file'=>$files]); */
        /*   dd($files);
          foreach ($request->pdf_files as $key => $value) {
            dd($value);
            $data=ProductFile::create($value,);
           dd($data);

        } */
        /*   for ($i = 0; $i < count($request->pdf_files['file']); $i++) {
            $request->pdf_files['file']=
            $product->pdf_files()->attach($pdf_files['file'][$i], [ 'file_name:az' => $pdf_files['file_name:az'][$i], 'code' => $pdf_files['code'][$i]]);
        }*/
         /*  dd(['file'=>$files]); 
          $data=ProductFile::create(/* $request->pdf_files, ['product_id'=>$product->id,'file'=>$files]); */
        /*   dd('sd'); */
          /*   $filepdf->product_id= $product->id; */
           /*  $filepdf->file_name = $product->id; */
          /*   $filepdf->save(); */
        /*   } */
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

        return view('back.products.edit',['categories'=>Category::get(),'languages'=>Language::get(),'brends'=>Brend::where('status', true)->get(),'product'=>Product::find($id),'images'=>ProductImage::where('product_id', $id)->get(),/* 'category'=>ProductCategory::where('product_id',$id)->get() */]);
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
        if ($request->filled('categories')) {
            $product->categories()->sync($request->categories);
        }
       
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
        return redirect()->route('product.index')->with('success', 'Product updated!');;
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

    public function image_destroy($id)
    {
        ProductImage::where('id',$id)->delete();
        return redirect()->back();
    }
}
