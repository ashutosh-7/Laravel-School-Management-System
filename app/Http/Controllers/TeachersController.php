<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Teachers;


class TeachersController extends Controller
{
    public function Insert()
    {
        $teacher=new Teachers;

        $teacher->teachers_name =Input::get('teachers_name');
        $teacher->classteacher_of =Input::get('classteacher_of');
        $teacher->salary =Input::get('salary');
        $teacher->save();

        return view('school.DisplayTeacher');


    }
}
