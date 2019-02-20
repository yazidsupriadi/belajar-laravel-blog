<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index()
    {
    	# code...
    	$title='selamat datang di madingku';
    	return view('pages.index',compact('title'));
    }

    public function about()
    {
    	# code...
    	$title = 'About Us';
    	return view('pages.about')->with('title',$title);
    }

    public function services()
    {
    	# code...
    	$data=array(
    		'title' => 'Services',
    		'services'=>['Web Design','Programming','Native Development']

    	);
    	return view('pages.services')->with($data);
    }
}
