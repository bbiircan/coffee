<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Story;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class CoffeeController extends Controller
{
    public function home(){
        $stories=Story::with('lists')->get();
        $setting=Setting::first();
        $testimonials=Testimonial::all();
        $menus = Menu::all();
        $services = Service::all();
        return view('home',compact('menus','services','testimonials','stories','setting'));
    }
    public function about(){
        $stories=Story::with('lists')->get();
        $setting=Setting::first();
        return view('about',compact('stories','setting'));
    }
    public function service(){
        $services = Service::all();
        $setting=Setting::first();
        return view('service',compact('services','setting'));
    }
    public function menu(){
        $menus = Menu::all();
        $setting=Setting::first();
        return view('menu',compact('menus','setting'));
    }
    public function reservation(){
        $setting=Setting::first();
        return view('reservation',compact('setting'));
    }
    public function testimonial(){
        $testimonials=Testimonial::all();
        $setting=Setting::first();
        return view('testimonial',compact('testimonials','setting'));
    }
    public function contact(){
        $setting=Setting::first();
        return view('contact',compact('setting'));
    }
}
