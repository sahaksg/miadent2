{{-- @include('inc.navbar') --}}
@extends('layouts.app1')

@section('content')


<div class="jumbotron" style="padding-top: 1%">
    <h3>Found <b>{{count($apps)}}</b> patient(s)</h3>
    {{-- <a class="btn btn-primary" href='/dashboard'>Dashboard</a> --}}
    @if(count($apps) >0)
    <table id='test-table33' class="table  table-hover table-responsive table-cursor w-100 d-block d-md-table" >
        <thead class='thead-info'>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Doctor</th>
                <th>Schedule date/time</th>
                <th>Remove</th>                
                <th>Save</th>                
            </tr>
        </thead>
        <tbody>
            @foreach ($apps as $app)
            <tr>
                {!! Form::open(['action' => ['DashboardController@updateapp', $app->id], 'method'=>'GET']) !!}
                <td>
                    {{Form::hidden('name', $app->name)}}
                    <p name='name' style="font-weight: bolder">{{$app->name}}</p>
                </td>
                <td>
                    {{Form::hidden('phone', $app->phone)}}
                    <p name='phone' style="font-weight: bolder">{{$app->phone}}</p>
                </td>
                <td>
                    <?php
                    switch ($app->user_id){
                        case '8':
                        echo '<p style="font-weight: bolder; font-style: italic">Liza</p>';
                    break;
                    case '9':
                    echo '<p style="font-weight: bolder; font-style: italic">Karo</p>';
                    break;
                    }
                    ?>
                </td>
				<td>
                    <?php 
                    $toDay=date("Y/m/d h:i");
                    $now="2020-06-01T00:00";
                    
                    if($app->schedule_end){
                        $array= (explode(" ",$app->schedule_end));
                        $concat=$array[0]."T".$array[1];
                      echo "<input type='datetime-local' name='datetime' 
                          min='2020-06-01T00:00' max='2035-06-14T00:00' value='$concat'>";
                    }
                  
                    
                    ?>
                </td>
                <td>{{Form::submit('Save!', ['class'=>'btn btn-sm btn-success'])}}</td>
                {!! Form::close() !!}
                <td>
                    {!!Form::open(['action' =>['DashboardController@destroy', $app->id], 'method'=>'POST' ])!!}
                    {{Form::hidden('_method', 'Delete')}}
                    {{Form::submit('DELETE', ['class'=>'btn btn-danger', 'onclick'=>'return confirm(\'are you sure?\')'])}}
                    {!!Form::close()!!}
                </td>
               
                
            </tr>
        @endforeach
        </tbody>
    </table>
@endif
    
</div>

<script>
    $(document).ready(function(){

$('#test-table33').DataTable({
    responsive: true,
    "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]]
});




    })
</script>


@endsection
