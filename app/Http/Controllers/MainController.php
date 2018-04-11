<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Events;
use App\Abouts;
use App\Whyus;
class MainController extends Controller
{
    public function getindex(){
		$news = News::orderBy('id', 'DESC')->take(3)->get();
		$events = Events::orderBy('id', 'DESC')->take(3)->get();
		return View('home.index')
			->with('news', $news)
			->with('events',$events)
			->with('aboutus',Abouts::all())
			->with('whyus',Whyus::all());
		}
}
