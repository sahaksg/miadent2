{{-- @include('inc.navbar') --}}
@extends('layouts.app1')

@section('content')


<div class="jumbotron" style="padding-top: 1%">
    <h3>Found <b>{{count($posts)}}</b> patient(s)</h3>
    <a class="btn btn-primary" href='/xrays'><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</a>
    @if(count($posts) >0)
    <table border="1" style="width:90%">
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Updated at</th>
            <th>X-Rays</th>
        </tr>
        @foreach ($posts as $post)
            <tr>
                <td><a href='/xrays/{{$post->id}}'>{{$post->name}}</a></td>
                <td>{{$post->phone}}</td>
                <td>{{$post->updated_at}}</td>
                <td class="xray_color">
                    <?php
                    if($post->pat_image !=null){
                        echo "<p class='xray_p'>YES</p>";
                    }else{
                        echo "<p class='xray_p'>NO</p>";
                    }
                    ?>
                 
                
                </td>
            </tr>
            
        @endforeach

    </table>

    {{$posts->links()}} 
    @endif
</div>




@endsection
