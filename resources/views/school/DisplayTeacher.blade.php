@extends('layouts.app')
@section('title')
 Display Teachers   
@endsection

@section('content')
    
<div class="table-responsive">
 {{ DB::table('teachers')->count() }}

        <p>TEACHERS LIST!</p>
        <table border="2"  >
            <thead>
                <th>S.NO.</th>
                <th>Teacher Name</th>
                <th>Class teacher of</th>
                <th>Salary</th>
        </thead>
        
        <tbody>
                @for($i=1;$i<=DB::table('teachers')->count();$i++)
                <tr>
                    <?php $result=DB::table('teachers')->where('teachers_id','=',$i)->get() ?>
                    <td> {{$result[0]->teachers_id}}</td>
                    <td> {{$result[0]->teachers_name}}</td>
                    <td> {{$result[0]->classteacher_of}}</td>
                    <td> {{$result[0]->salary}}</td>
            
                </tr>
                @endfor
        </tbody>
        </table>
        
        
                 </div>

@endsection