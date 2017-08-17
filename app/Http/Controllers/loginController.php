<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Input;
use Illuminate\Support\Facades\DB;

class loginController extends Controller
{
    public function index()
    {
        $lname = Input::get('loginname');

        $students = DB::table('students')->get();

        $found = 0;

        echo $students, "<br>";

        foreach ($students as $student) {
            if ($lname == $student->student_no) {
                $found = 1;
                break;
            }
        }

        echo "found = $found<br>";
        echo "You entered $lname<br><br>";

        if ($found) {
            return view('survey', ['lname' => $lname]);
        }
        else {
            return view('badlogin');
        }
    }
}
?>

