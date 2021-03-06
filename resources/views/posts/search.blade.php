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
                <th>Gender</th>
                {{-- <th>Doctor</th> --}}
                <th>Registered at</th>
                <th>Next Visit</th>
                <th>Notes</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>{{$post->name}}</td>
                <td>{{$post->phone}}</td>
                <td>{{$post->pgender}}</td>
                {{-- <td>{{$post->user->name}}</td> --}}
                <td>{{$post->created_at}}</td>
                <td>{{$post->schedule_end}}</td>
                <td>{!!$post->notes!!}</td>
            </tr>
            
        @endforeach
        </tbody>
       
        

    </table>
    {{-- {{$posts->links()}}  --}}



@endif
</div>

<script>
    $(document).ready(function(){

$('#test-table').DataTable({
    responsive: true,
});
    })
</script>


@endsection
