{{-- @include('inc.navbar') --}}
@extends('layouts.app1')

@section('content')


<div class="jumbotron" style="padding-top: 1%">
    <h3>Found <b>{{count($posts)}}</b> patient(s)</h3>
    <a class="btn btn-primary" href='/dashboard'>Dashboard</a>
    @if(count($posts) >0)
    <table border="1" style="width:90%">
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Gender</th>
            {{-- <th>Doctor</th> --}}
            <th>Registered at</th>
            <th>Updated at</th>
            <th>Notes</th>
            
        </tr>
        @foreach ($posts as $post)
            <tr>
                <td><a href='/posts/{{$post->id}}'>{{$post->name}}</a></td>
                <td>{{$post->phone}}</td>
                <td>{{$post->pgender}}</td>
                {{-- <td>{{$post->user->name}}</td> --}}
                <td>{{$post->created_at}}</td>
                <td>{{$post->updated_at}}</td>
                <td>{!!$post->notes!!}</td>
            </tr>
            
        @endforeach

    </table>
    {{$posts->links()}} 



@endif
</div>




@endsection
