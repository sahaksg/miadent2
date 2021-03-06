
{{-- @include('inc.navbar') --}}
@extends('layouts.app1')

@section('content')

<div class="container" style="width:100%">
    <div class="jumbotron" style="padding-top: 1%">
        <h3>All Registered Patients</h3>
        {{-- <a class="btn btn-primary" href='/dashboard'>Dashboard</a> --}}
        @if(count($posts) >0)
        {{-- <table border="1" style="width:100%; text-align:center"> --}}
        <table id='test-table2' class="table  table-hover table-responsive table-cursor w-100 d-block d-md-table">
            <thead>
                <tr>
                    {{-- <th style="text-align:center; ">ID</th> --}}
                    <th style="text-align:center; ">Name</th>
                    {{-- <th style="text-align:center; ">Gender</th> --}}
                    <th style="text-align:center; ">Phone</th>
                    <th style="text-align:center; ">Doctor</th>
                   
                    {{-- <th style="text-align:center; ">Cteated At</th>
                    <th style="text-align:center; ">Updated At</th> --}}
    
                    <th style="text-align:center; ">Next Visit</th>
                    <th style="text-align:center; ">Notes</th>
                   
                    {{-- <th style="text-align:center; ">Edit</th>
                    <th style="text-align:center; ">Delete</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                {{-- <td>{{$post->id}}</td> --}}
                    {{-- <td><a href='/posts/{{$post->id}}'>{{$post->name}}</a></td> --}}
                    <td>{{$post->name}}</td>
                    {{-- <td>{{$post->pgender}}</td> --}}
                    <td>{{$post->phone}}</td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->schedule_end}}</td>
                    <td>{{$post->notes}}</td>
                    {{-- <td>{{$post->created_at}}</td>
                    <td>{{$post->updated_at}}</td> --}}
                    
                    
                    {{-- <td><a href="/posts/{{$post->id}}" class="btn btn-default">Edit</a></td>
                    <td>{!!Form::open(['action' =>['PostsController@destroy', $post->id], 'method'=>'POST' ])!!}
                        {{Form::hidden('_method', 'Delete')}}
                        {{Form::submit('DELETE', ['class'=>'btn btn-danger', 'onclick'=>'return confirm(\'are you sure?\')'])}}
                        {!!Form::close()!!}
                    </td> --}}
                </tr>
                
            @endforeach
            </tbody>
            
           
        </table>
        {{-- Pagination --}}
        {{-- {{$posts->links()}}    --}}
           
        
        @else
            <h4>No Posts</h4>
        
        @endif
        

    </div>

</div> 
<script>
    $(document).ready(function(){

$('#test-table2').DataTable({
    responsive: true,
});
    })
</script>
@endsection