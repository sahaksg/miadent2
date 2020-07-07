@extends('layouts.app1')

@section('content')

<div class="jumbotron" style="padding-top: 1%">
@if(count($data))
<table id='test-table44' class="table  table-hover table-responsive table-cursor w-100 d-block d-md-table" >
        <thead class='thead-info'>
            <tr>
                <th>Name</th>
                <th>Phone</th> 
                <th>Visit day</th>
                <th>Notes</th>                
            </tr>
        </thead>
        <tbody>
        @foreach($data as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->schedule_end}}</td>
                <td>{{$item->note}}</td>                
            </tr>
        @endforeach
        </tbody>
    </table>
@else
<h4>Nothing</h4>
@endif

</div>
<script>
    $(document).ready(function(){

$('#test-table44').DataTable({
    responsive: true,
});
    })
</script>

@endsection