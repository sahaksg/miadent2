{{-- @include('inc.navbar') --}}
@extends('layouts.app1')

@section('content')


<div class="jumbotron" style="padding-top: 1%">
    <h3>Found <b>{{count($skizbs)}}</b> patient(s)</h3>
    
    <table border="1" style="width:90%" class="radio_table">
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Registered at</th>
        </tr>
        @foreach ($skizbs as $skizb)
            <tr>
            <td><a href='/skizbs/{{$skizb->id}}'>{{$skizb->name}}</a></td>
                <td>{{$skizb->phone}}</td>
                <td>{{$skizb->created_at}}</td>
            </tr>

        @endforeach
    </table>
    {{$skizbs->links()}} <br>
    <a href='/skizbs' class="btn btn-primary"><i class="fa fa-chevron-left" aria-hidden="true"></i> BACK</a>
</div>




@endsection
