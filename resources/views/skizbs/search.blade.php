{{-- @include('inc.navbar') --}}
@extends('layouts.app1')

@section('content')


<div class="jumbotron" style="padding-top: 1%">
    <h3>Found <b>{{count($skizbs)}}</b> patient(s)</h3>
    
    <table id='test-table44' class="table  table-hover table-responsive table-cursor w-100 d-block d-md-table">
        <thead class='thead-info' >
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Registered at</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($skizbs as $skizb)
                <tr>
                    <td><a href='/skizbs/{{$skizb->id}}'>{{$skizb->name}}</a></td>
                    <td>{{$skizb->phone}}</td>
                    <td>{{$skizb->created_at}}</td>
                </tr>
            @endforeach
        </tbody>       
    </table>
    {{-- {{$skizbs->links()}} <br> --}}
    <a href='/skizbs' class="btn btn-primary"><i class="fa fa-chevron-left" aria-hidden="true"></i> BACK</a>
</div>
<script>
    $(document).ready(function(){
        $('#test-table44').DataTable({
            responsive: true,
            "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]]
        });
    })
</script>




@endsection
