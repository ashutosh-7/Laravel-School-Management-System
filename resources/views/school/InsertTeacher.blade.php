@extends('layouts.app')
@section('title')
    Insert Teacher
@endsection


@section('content')
  

{{Form::open(arrray('action'->'TeachersController@Insert'))}}

{{Form::label('teachers_name','Teachers Name')}}

{{Form::text('teachers_name','Enter your name here', array('id'=>'teachers_name'))}}

<br>
<br>


{{Form::label('classteacher_of','Class teacher of')}}

{{Form::text('classteacher_of','Enter class here', array('id'=>'classteacher_of'))}}

<br>
<br>

{{Form::label('salary','Salary')}}

{{Form::number('salary',100,array('min'=>, 'max'=>100000, 'id'=>'salary'))}}


<br>
<br>


{{Form::submit('Save')}}

{{Form::close()}}










@endsection
