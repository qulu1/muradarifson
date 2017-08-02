<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Singer;


class SingerController extends Controller
{

    public function index(){
    	$singer = Singer::all();
    	return view('admin.singer',compact('singer'));

    }
    public function store(Request $request){
        // $this->validate($request, [
        //     'title' => 'required|unique:portfolios|max:255',
        //     'photo' => 'required',
        // ]);
    	$singer = New Singer;
        $singer->text = $request->text;
        if ($request->hasFile('photo')) {

            $name = time().".".$request->file("photo")->extension();
            $request->file("photo")->move(public_path().'/images',$name);
            $singer->photo = $name;
        };
        $singer->save();
    	return back();
    }

    public function edit($id){

        $singer = Singer::find($id);
        return view('admin.singer-edit',compact('singer'));

    }
    public function update($id, Request $request){
        $this->validate($request, [
            'text' => 'required|max:255',
            // 'photo' => 'required',
        ]);
        $singer = Singer::find($id);
        if ($request->hasFile('photo')) {

            $name = time().".".$request->file("photo")->extension();
            $request->file("photo")->move(public_path().'/images',$name);
            $singer->photo = $name;
        };
        $singer->text = $request->text;
        $singer->update();
        return redirect('/admin/singer');
    }
    public function destroy($id){
        $singer = Singer::find($id);
        $singer->delete();
        return redirect('/admin/singer');
    }
}
