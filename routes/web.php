<?php
use App\Teachers;
use App\Students;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/insertteachersinitial',function()
{
$teacher=new Teachers();
$teacher->teachers_id=1;
$teacher->teachers_name='Ashutosh yadav';
$teacher->classteacher_of='btech 2nd year cse';
$teacher->salary=9999999;
$teacher->save();



});
Route::get('/insertstudentsinitial',function()
{
$student=new Students();
$student->student_id=1;
$student->students_name='Ashu';
$student->students_class='3rd year';
$student->students_age=29;
$student->class_teacher='Ashutosh';
$student->save();



});

Route::get('/DisplayTeacher',function()
{
    return view('school.DisplayTeacher');
});
Route::get('/DisplayStudent',function()
{
    return view('school.DisplayStudent');
});