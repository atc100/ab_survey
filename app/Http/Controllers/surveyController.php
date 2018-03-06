<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Input;
use Illuminate\Support\Facades\DB;

class surveyController extends Controller
{
    public function updateDB() {

        $idno = Input::get("idno");

        echo("In surveyController!<br>idno is $idno<br><br>");

        $temp_age = Input::get('age');
        If ($temp_age == " Select ") {
            $temp_age = NULL;
        }
        
        DB::table('surveys')->insert(
                ['penR' => Input::get('penR'),
                 'tetR' => Input::get('tetR'),
                 'erythR' => Input::get('erythR'),
                 'oxaR' => Input::get('oxaR'),
                 'sex' => Input::get('sex'),
                 'age' => Input::get('age'),
                 'living' => Input::get('living'),
                 'abUse' => Input::get('abUse'),
                 'acne' => Input::get('acne'),
                 'makeup' => Input::get('makeup'),
                 'soap' => Input::get('soap'),
                 /*'handwash' => Input::get('handwash'),*/
                 'diet' => Input::get('diet'),
                 'meatPrep' => Input::get('meatPrep'),
                 'dietOrganic' => Input::get('dietOrganic'),
                 'hosp' => Input::get('hosp'),
                 'nation' => Input::get('nation'),
                 'nation5yrs' => Input::get('nation5yrs'),
                 'month' => date('n'),
                 'year' => date('Y')]
            );        
        DB::table('students')
         ->where('student_no', $idno)
         ->update(['survey_taken' => 1]);

        return(view('doneThankYou'));
    }
}
