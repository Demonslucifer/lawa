<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function index($id)
    {
        echo '妮莉艾露·杜·欧德修凡克 <br>';
        echo '松本·乱菊';
        dump($id);
    }
}
