<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Language;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('back.contact.index',['contact'=>Contact::first(), 'languages'=>Language::where('status', 1)->get()]);
    }

    public function update (ContactRequest $request){
        $about = Contact::first();
        $requests=$request->all();
      $about->update($requests);
      return redirect()->back();
    }
}
