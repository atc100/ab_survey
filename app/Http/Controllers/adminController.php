<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Validator;

use Maatwebsite\Excel\Facades\Excel;

use Session;

use Debugbar;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\facades\Input;

class adminController extends Controller
{
    public function showForm()
    {
        return view('upload');
    }

    public function addNumTAs()
    {
        echo ("In addNumTAs<br>");
        $numTAs = Input::get("numTAs");
        echo ("You requested to add " . $numTAs . " TAs.<br>");

        $rand = rand(10849, 60000);
        for ($thisTA = 0; $thisTA < $numTAs; $thisTA++) {
            $TAnum = "99".$rand+$thisTA;
            DB::table('students')->insert(["student_no" => $TAnum]);
            echo $TAnum . "<br>";
        }
    }

    public function getfile(Request $request)
    {
        {
            $rules = array(
                'file' => 'required'
            );
    
            //$validator = Validator::make(Input::all(), $rules);
            // process the form

            //echo ("In getfile!<br>");
            /*
            if ($validator->fails()) 
            {
                return Redirect::route('users_upload')->withErrors($validator);
            } 
            else 
            {
              */  
                    Debugbar::info($request->all());
                    //echo ();
                    Excel::load($request->file('file'), function ($reader) {
                        // file in .xls format
                        //echo ("Before results<br>");
                        $results = $reader->get(); 
                        //echo ("After results<br>");
                        
                        foreach ($results->toArray() as $row) {
                            //echo json_encode($row);
                            //echo "<br>";
                            //echo $row['studentno'], "<br>";

                            $student = DB::table('students')->where('student_no', $row['studentno'])->first();

                            if (empty($student)) {
                                DB::table('students')->insert(['student_no' => $row['studentno'], 'survey_taken' => 0]);
                            }



                            //User::firstOrCreate($row);
                        }
                    //echo ("Leaving...<br>");    
                    });
                    //\Session::flash('success', 'Users uploaded successfully.');
                    // return redirect(route('users_list'));
                /* catch (\Exception $e) {
                    \Session::flash('error', $e->getMessage());
                    echo ("Exception!<br>");
                    //return redirect(route('users_list'));
                    
                } 
            } */
            //echo("Leaving2...");
        }
    }

    /* public function store(Request $request)
    {   
        //get file
        $upload=$request->file('upload-file');
        $filePath=$upload->getRealPath();
        //open and read
        $file=fopen($filePath, 'r');

        $header= fgetcsv($file);

        // dd($header);
        $escapedHeader=[];
        //validate
        foreach ($header as $key => $value) {
            $lheader=strtolower($value);
            $escapedItem=preg_replace('/[^a-z]/', '', $lheader);
            array_push($escapedHeader, $escapedItem);
        }

        //looping through othe columns
        while($columns=fgetcsv($file))
        {
            if($columns[0]=="")
            {
                continue;
            }
            //trim data
            foreach ($columns as $key => &$value) {
                $value=preg_replace('/\D/','',$value);
            }

           $data= array_combine($escapedHeader, $columns);

           // setting type
           foreach ($data as $key => &$value) {
            $value=($key=="zip" || $key=="month")?(integer)$value: (float)$value;
           }

           // Table update
           $zip=$data['zip'];
           $month=$data['month'];
           $lodging=$data['lodging'];
           $meal=$data['meal'];
           $housing=$data['housing'];

           $budget= Budget::firstOrNew(['zip'=>$zip,'month'=>$month]);
           $budget->lodging=$lodging;
           $budget->meal=$meal;
           $budget->housing=$housing;
           $budget->save();
        }
        
        
    }*/
}