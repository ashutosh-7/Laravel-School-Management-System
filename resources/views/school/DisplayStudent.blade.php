@extends('layouts.app')
@section('title')
    Display Students
@endsection

@section('content')
    
<div class="table-responsive">
 {{ DB::table('students')->count() }}

        <p>Students LIST!</p>
        <table border="2"  >
            <thead>
                <th>S.NO.</th>
                <th>Students Name</th>
                <th>Class </th>
                <th>Age </th>
                <th>Class Teacher</th>
        </thead>
        
        <tbody>
                @for($i=1;$i<=DB::table('students')->count();$i++)
                <tr>
                    <?php $result=DB::table('students')->where('student_id','=',$i)->get() ?>
                    <td> {{$result[0]->student_id}}</td>
                    <td> {{$result[0]->students_name}}</td>
                    <td> {{$result[0]->students_class}}</td>
                    <td> {{$result[0]->students_age}}</td>
                    <td> {{$result[0]->class_teacher}}</td>
            
                </tr>
                @endfor
        </tbody>
        </table>
        
        
                 </div>

@endsection