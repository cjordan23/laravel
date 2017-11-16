<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        $title = 'My App';
        // return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);
    }

    public function about(){
        // return view('pages.about');
        $title = 'About Page';
        return view('pages.about')->with('title',$title);
    }

    public function services(){
        $data = array(
            'title' =>'Services',
            'services'=>['Web Design','Programming Language','Search Engine Optimazation']
        );
        return view('pages.services')->with($data);
    }


   // public function posting(){
    //     $title = 'Post Page';
    //     return view('post.index')->with('title',$title);
    // }

















}
