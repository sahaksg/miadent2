{{-- @include('inc.navbar') --}}
@extends('layouts.app1')

@section('content')


<div class="jumbotron" style="padding-top: 1%">
    <h3>Found <b>{{count($posts)}}</b> patient(s)</h3>
    {{-- <a class="btn btn-primary" href='/dashboard'>Dashboard</a> --}}
    @if(count($posts) >0)
    <table id='test-table' class="table  table-hover table-responsive table-cursor w-100 d-block d-md-table" >
        <thead class='thead-info'>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Schedule date/time</th>
                <th>Save</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                {!! Form::open(['action' => ['DashboardController@update', $post->id], 'method'=>'POST']) !!}
                
                <td>
                    {{Form::hidden('name', $post->name)}}
                    <p name='name' style="font-weight: bolder">{{$post->name}}</p>
                </td>
                <td>
                    {{Form::hidden('phone', $post->phone)}}
                    <p name='phone' style="font-weight: bolder">{{$post->phone}}</p>
                </td>

                
                <td>
                    <?php 
                    $toDay=date("Y/m/d h:i");
                    $now="2020-06-01T00:00";
                    
                    if($post->schedule_end){
                        $array= (explode(" ",$post->schedule_end));
                        $concat=$array[0]."T".$array[1];
                      echo "<input type='datetime-local' name='datetime' 
                          min='2020-06-01T00:00' max='2035-06-14T00:00' value='$concat'>";
                    }
                  
                    
                    ?>
                </td>
                {{Form::hidden('_method','PUT')}}
                {{-- <td><input type="datetime-local"/></td> --}}
                <td>{{Form::submit('Save!', ['class'=>'btn btn-sm btn-success'])}}</td>
                {!! Form::close() !!}
                
           
         
            </tr>
            
        @endforeach
        </tbody>
       
        

    </table>
  



@endif
</div>

<script>
    $(document).ready(function(){

$('#test-table').DataTable({
    responsive: true,
    "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]]
});


$(this).find('pp').css({
    color:'black',
    fontWeight: 'bolder'
});

    })
</script>


@endsection
