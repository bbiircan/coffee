<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class LayoutController extends Controller
{
    public function index(){
        $menus = Menu::all();
        return view ('layout.list',compact('menus'));
    }
    public function create(){
        return view('layout.create');
    }
    public function store(Request $request){
        $validator=Validator::make($request->all(),[
            'title'=>'required',
            'description'=>'required',
            'image'=>'required|image:png,jpg,jpeg',
        ]);
        if ($validator->passes()){
            $menu= new Menu();
            $menu->title=$request->title;
            $menu->description=$request->description;
            $menu->image=$request->image;
            $menu->save();

            if ($request->image){
                $ext=$request->image->getClientOriginalExtension();
                $newFileName=time().'.'.$ext;
                $request->image->move(public_path().'/frontend/img/',$newFileName);
                $menu->image=$newFileName;
                $menu->save();
            }
            return redirect()->route('layout.index')->with('success','Oluşturma İşlemi Başarıyla Gerçekleştirildi.');
        }else{
            return redirect()->route('layout.create')->withErrors($validator)->withInput();
        }
    }
    public function edit($id){
        $menus = Menu::all();
        $menu=Menu::findOrFail($id);

        return view('layout.edit',['menu'=>$menu],compact('menus'));
    }
    public function update($id, Request $request){
        $validator=Validator::make($request->all(),[
            'title'=>'required',
            'description'=>'required',
            'image'=>'required|image:png,jpg,jpeg',
        ]);
        if ($validator->passes()){
            $menu=Menu::find($id);
            $menu->title=$request->title;
            $menu->description=$request->description;
            $menu->image=$request->image;
            $menu->save();

            if ($request->image){
                $oldImage=$menu->image;
                $ext=$request->image->getClientOriginalExtension();
                $newFileName=time().'.'.$ext;
                $request->image->move(public_path().'/frontend/img/',$newFileName);
                $menu->image=$newFileName;
                $menu->save();

                File::delete(public_path().'/frontend/img/'.$oldImage);

            }

            return redirect()->route('layout.index')->with('success','Güncelleme İşlemi Başarıyla Gerçekleştirildi.');

        }else{
            return redirect()->route('layout.edit',$id)->withErrors($validator)->withInput();

        }
    }
    public function destroy($id, Request $request){
        $menu=Menu::findOrFail($id);
        File::delete(public_path().'/frontend/img/'.$menu->image);
        $menu->delete();
        return redirect()->route('layout.index')->with('success','Silme İşlemi Başarıyla Gerçekleşti.');
    }

}
