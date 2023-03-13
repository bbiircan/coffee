<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class AboutLayoutController extends Controller
{
    public function index(){
        $stories = Story::all();
        return view ('aboutlayout.list',compact('stories'));
    }
    public function store(Request $request){
        $validator=Validator::make($request->all(),[
            'title'=>'required',
            'text'=>'required',
            'description'=>'required',
            'topic'=>'required',
            'declaration'=>'required',
        ]);
        if ($validator->passes()){
            $story= new Story();
            $story->title=$request->title;
            $story->text=$request->text;
            $story->description=$request->description;
            $story->topic=$request->topic;
            $story->declaration=$request->declaration;
            $story->save();
            return redirect()->route('aboutlayout.index')->with('success','Oluşturma İşlemi Başarıyla Gerçekleştirildi.');
        }
    }
    public function edit($id){
        $stories = Story::all();
        $story=Story::findOrFail($id);
        return view('aboutlayout.edit',['story'=>$story],compact('stories'));
    }
    public function update($id, Request $request){
        $validator=Validator::make($request->all(),[
            'title'=>'required',
            'text'=>'required',
            'description'=>'required',
            'topic'=>'required',
            'declaration'=>'required',
        ]);
        if ($validator->passes()){
            $story=Story::find($id);
            $story->title=$request->title;
            $story->text=$request->text;
            $story->description=$request->description;
            $story->topic=$request->topic;
            $story->declaration=$request->declaration;
            $story->save();
            return redirect()->route('aboutlayout.index')->with('success','Güncelleme İşlemi Başarıyla Gerçekleştirildi.');
        }else{
            return redirect()->route('aboutlayout.edit',$id)->withErrors($validator)->withInput();
        }
    }
    public function destroy($id, Request $request){
        $story=Story::findOrFail($id);
        $story->delete();
        return redirect()->route('aboutlayout.index')->with('success','Silme İşlemi Başarıyla Gerçekleşti.');
    }
}


