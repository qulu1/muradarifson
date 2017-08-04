<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Gallery;

use DB;


class GalleryController extends Controller
{

    public function index(){
    	$gallery = DB::select('select * from galleries order by photo');

    	return view('admin.gallery',compact('gallery')); 	
    	
    }
    public function store(Request $request){
        $this->validate($request, [
            'photo' => 'required',
        ]); 
    	$gallery = New Gallery;

        if ($request->hasFile('photo')) {

            foreach ($request->photo as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path().'/images',$name); 
                $galleryModel = new Gallery;
                $galleryModel->photo = $name;
                $galleryModel->save();
            }
            
             
        };

    	return back();
    }

    public function edit($id){

        $gallery = Gallery::find($id);
        return view('admin.gallery-edit',compact('gallery'));

    }
    public function update($id, Request $request){
        $this->validate($request, [
            'photo' => 'required',
        ]);         
        $gallery = Gallery::find($id);
        if ($request->hasFile('photo')) {

            $name = time().".".$request->file("photo")->extension();
            $request->file("photo")->move(public_path().'/images',$name);  
            $gallery->photo = $name;
        };
        $gallery->update();
        return redirect('/admin/gallery');
    }
    public function destroy($id){
        $gallery = Gallery::find($id);
        $gallery->delete();
        return redirect('/admin/gallery');
    }    
}
