<?php

class SiteController extends Controller{

    public function __construct(){
        $this->mddleware('auth');}
    public function article()
    {
        return view('article');
    }
}