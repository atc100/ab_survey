<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Input;

class loginController extends Controller
{
    public function index()
    {
        $lname = Input::get('loginname');
        echo "You logged in as ", $lname, '<br><br><a href="survey">Continue</a>';
        /* return view('survey'); */
    }
}
?>
