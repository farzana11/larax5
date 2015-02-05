<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 2/5/15
 * Time: 4:22 PM
 */

namespace App\Http\Controllers;


use Illuminate\Routing\Controller;

class ArticleController extends  Controller{
    public function __construct(){
        $this->middleware('auth');}
    public function article()
    {
        return view('article');
    }

} 