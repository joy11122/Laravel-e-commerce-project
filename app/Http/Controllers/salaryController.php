<?php

namespace App\Http\Controllers;

use App\Models\Salary;
use App\Models\Attendece;
use App\Models\Addstudent;
use Illuminate\Http\Request;

class salaryController extends Controller
{

    public function index(){
        $data=Salary::paginate(10);
        return view('salary.allsalary',compact('data'));
    }


    public function create(){
        return view('salary.createsalary');
    }
            public function attendence(){
                // $id=Addstudent::pluck('id')->toArray();

            $student=Addstudent::pluck('name')->toArray();

        return view('attendence.attendence',compact('student'));
    }

    public function studentattendence(){

      $student=Addstudent::all();

    return view('attendence.studentpresent',compact('student'));
    }

    public function addstudent(){
    return view('attendence.addstudent');
    }
    public function store(Request $req){
    $student= new Addstudent;
    $student->name=$req->input('name');
    $student->save();

    return redirect()->back();
  }
    public function takeAttendence(Request $request)
    {

     $date=$request->input('datee');
     $month=date("M",strtotime($date));
        $year=date("y",strtotime($date));
         if(isset($request['present'])){

            $present=$request['present'];
            $attendence="P";
            foreach($present as $atd){
                $a=new Attendece;
            $a->date=$date;
            $a->month=$month;
            $a->year=$year;
            $a->student_id=$atd;
            $a->attendence=$attendence;
            $a->save();

            }
            }
            if(isset($request['absent'])){

                $absent=$request['absent'];
                $attendence="A";
                foreach($absent as $atd){
                    $a=new Attendece;
                $a->date=$date;
                $a->month=$month;
                $a->year=$year;
                $a->student_id=$atd;
                $a->attendence=$attendence;
                $a->save();

                }
                }
                if(isset($request['late'])){

                    $late=$request['late'];
                    $attendence="L";
                    foreach($late as $atd){
                        $a=new Attendece;
                    $a->date=$date;
                    $a->month=$month;
                    $a->year=$year;
                    $a->student_id=$atd;
                    $a->attendence=$attendence;
                    $a->save();

                    }
                    }
                    if(isset($request['holiday'])){

                        $holiday=$request['holiday'];
                        $attendence="H";
                        foreach($holiday as $atd){
                            $a=new Attendece;
                        $a->date=$date;
                        $a->month=$month;
                        $a->year=$year;
                        $a->student_id=$atd;
                        $a->attendence=$attendence;
                        $a->save();

                        }
                        }
           return redirect('attendence')->with('success',"Data Added SucessFully");
    }
}
