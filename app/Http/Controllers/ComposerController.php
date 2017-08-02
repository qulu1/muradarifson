<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Composer;


class ComposerController extends Controller
{

    public function index(){
    	$composer = Composer::all();
    	return view('admin.composer',compact('composer'));

    }
    public function store(Request $request){
        // $this->validate($request, [
        //     'title' => 'required|unique:portfolios|max:255',
        //     'photo' => 'required',
        // ]);
    	$composer = New Composer;
        $composer->text = $request->text;
        if ($request->hasFile('photo')) {

            $name = time().".".$request->file("photo")->extension();
            $request->file("photo")->move(public_path().'/images',$name);
            $composer->photo = $name;
        };
        $composer->save();
    	return back();
    }

    public function edit($id){

        $composer = Composer::find($id);
        return view('admin.composer-edit',compact('composer'));

    }
    public function update($id, Request $request){
        $this->validate($request, [
            'text' => 'required|max:255',
            // 'photo' => 'required',
        ]);
        $composer = Composer::find($id);
        if ($request->hasFile('photo')) {

            $name = time().".".$request->file("photo")->extension();
            $request->file("photo")->move(public_path().'/images',$name);
            $composer->photo = $name;
        };
        $composer->text = $request->text;
        $composer->update();
        return redirect('/admin/composer');
    }
    public function destroy($id){
        $composer = Composer::find($id);
        $composer->delete();
        return redirect('/admin/composer');
    }
}
