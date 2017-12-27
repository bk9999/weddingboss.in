<?php

namespace App\Http\Controllers;

class PagesController extends Controller{
  public  function getIndex(){
    #process variable data or pages
    #take to model
    #receive to model
    #compile and process data from modal
    #pass the data to correct view
    return view('pages.home');
  }

  public function getAbout(){
    return view('pages.about');
  }

  public function getContact(){
    return view('pages.contact');
  }


}
