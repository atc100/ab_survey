<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Input;
use Illuminate\Support\Facades\DB;

class loginController extends Controller
{
    public function index()
    {
        $s_no = Input::get('loginname');


        /*
        $students = DB::table('students')->get();

        $found = 0;

        echo $students, "<br>";

        foreach ($students as $student) {
            if ($lname == $student->student_no) {
                $found = 1;
                break;
            }
        }
        */

        $student = DB::table('students')->where('student_no', $s_no)->first();

        if (empty($student)) {
            return(view('badlogin'));
        }

        if ($student->survey_taken == 1) {
            return(view('alreadyTaken'));
        }

        echo "Found $s_no<br><br>";

        return view('survey', ['s_no' => $s_no]);

    }

    public function admin()
    {
        $loginname = Input::get('loginname');


        /*
        $students = DB::table('students')->get();

        $found = 0;

        echo $students, "<br>";

        foreach ($students as $student) {
            if ($lname == $student->student_no) {
                $found = 1;
                break;
            }
        }
        */

        if ($loginname == 'Yis9Lgch') {
            return(view('admin', ['tag' => 'random393']));
        } else {
            return(view('badadminlogin'));
        }

    }
}
?>

