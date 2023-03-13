<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ServiceLayoutController extends Controller
{
    public function index(){
        $services = Service::all();
        return view ('servicelayout.list',compact('services'));
    }
    public function create(){
        return view('servicelayout.create');
    }
    public function store(Request $request){
        $validator=Validator::make($request->all(),[
            'title'=>'required',
            'description'=>'required',
            'image'=>'required|image:png,jpg,jpeg',
        ]);
        if ($validator->passes()){
            $service= new Service();
            $service->title=$request->title;
            $service->description=$request->description;
            $service->image=$request->image;
            $service->save();

            if ($request->image){
                $ext=$request->image->getClientOriginalExtension();
                $newFileName=time().'.'.$ext;
                $request->image->move(public_path().'/frontend/img/',$newFileName);
                $service->image=$newFileName;
                $service->save();
            }
            return redirect()->route('servicelayout.index')->with('success','Oluşturma İşlemi Başarıyla Gerçekleştirildi.');

        }else{
            return redirect()->route('servicelayout.create')->withErrors($validator)->withInput();
        }
    }
    public function edit($id){
        $services = Service::all();
        $service=Service::findOrFail($id);
        return view('servicelayout.edit',['service'=>$service],compact('services'));
    }
    public function update($id, Request $request){
        $validator=Validator::make($request->all(),[
            'title'=>'required',
            'description'=>'required',
            'image'=>'required|image:png,jpg,jpeg',
        ]);
        if ($validator->passes()){
            $service=Service::find($id);
            $service->title=$request->title;
            $service->description=$request->description;
            $service->image=$request->image;
            $service->save();

            if ($request->image){
                $oldImage=$service->image;
                $ext=$request->image->getClientOriginalExtension();
                $newFileName=time().'.'.$ext;
                $request->image->move(public_path().'/frontend/img/',$newFileName);
                $service->image=$newFileName;
                $service->save();
                File::delete(public_path().'/frontend/img/'.$oldImage);
            }
            return redirect()->route('servicelayout.index')->with('success','Güncelleme İşlemi Başarıyla Gerçekleştirildi.');
        }else{
            return redirect()->route('servicelayout.edit',$id)->withErrors($validator)->withInput();
        }
    }
    public function destroy($id, Request $request){
        $service=Service::findOrFail($id);
        File::delete(public_path().'/frontend/img/'.$service->image);
        $service->delete();
        return redirect()->route('servicelayout.index')->with('success','Silme İşlemi Başarıyla Gerçekleşti.');
    }
}
