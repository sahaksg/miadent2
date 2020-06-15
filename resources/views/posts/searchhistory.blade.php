{{-- @include('inc.navbar') --}}
@extends('layouts.app1')

@section('content')


<div class="jumbotron" style="padding-top: 1%">
    <h3>Found <b>{{count($posts)}}</b> patient(s)</h3>
    {{-- <a class="btn btn-primary" href='/dashboard'>Dashboard</a> --}}
    @if(count($posts) >0)
<table  id='test-table22' class="table  table-hover table-responsive table-cursor w-100 d-block d-md-table table-bordered" >
        <thead class='thead-info' >
            <tr class="bg-info" style="font-size: 1.5vh">
                <th class='text-dark' rowspan="2">Name</th>
                <th class='text-dark' rowspan="2">Phone</th>
                <th class='bg-info' title="Orthopedy" colspan="4">Orthopedy</th>  
                <th class='bg-success' title="Surgery" colspan="4">Surgery</th>
                <th class='bg-danger' title="Fill" colspan="6">Therapy</th>
                
            
                <th class='text-dark' rowspan="2">Visit</th>
              
                
            </tr>
            <tr class="bg-info" style="font-size: 1.5vh" >
                
              
                <th class='text-info' title="Ceramics">C</th>
                <th class='text-info' title="Bridge">B</th>
                <th class='text-info' title="Zirkon">Z</th>
                <th class='text-info' title="Vinir">V</th>

                <th class='text-success' title="Remove">R</th>
                <th class='text-success' title="Clean">Cl</th>
                <th class='text-success' title="Scale">S</th>
                <th class='text-success' title="Inplant">Inp</th>

                <th class='text-danger' title="Fill">F</th>
                <th class='text-danger' title="Endo">E</th>
                <th class='text-danger' title="Cosmetic">Cos</th>
                <th class='text-danger' title="Composite">Com</th>
                <th class='text-danger' title="Retreat">R</th>
                <th class='text-danger' title="RCF">RCF</th>
                
                
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr style="font-size: 1.5vh">
                {{-- <td><a href='/posts/{{$post->id}}'>{{$post->name}}</a></td> --}}
                <td>{{$post->name}}</td>
                <td>{{$post->phone}}</td>
                <td>{{$post->ceramics}}</td>
                <td>{{$post->tbridge}}</td>
                <td>{{$post->zirkon}}</td>
                <td>{{$post->dcrown}}</td>
                <td>{{$post->remove}}</td>
                <td>{{$post->clean}}</td>
                <td>{{$post->scale}}</td>
                <td>{{$post->inplant}}</td>
                <td>{{$post->fill}}</td>
                <td>{{$post->endos}}</td>
                <td>{{$post->cosm}}</td>
                <td>{{$post->comp}}</td>
                <td>{{$post->retreat}}</td>
                <td>{{$post->rcf}}</td>
                {{-- <td>{{$post->pgender}}</td> --}}
                {{-- <td>{{$post->user->name}}</td> --}}
                {{-- <td>{{$post->created_at}}</td> --}}
                <td>{{$post->updated_at}}</td>
                {{-- <td>{!!$post->notes!!}</td> --}}
            </tr>
            
        @endforeach
        </tbody>
       
        

    </table>
    {{-- {{$posts->links()}}  --}}



@endif
</div>

<script>
    // $(document).ready(function(){
    //     $('#test-table22').DataTable({
    //         responsive: true,
    //         "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]]
    //         });
    // })
    $(document).ready(function(){
$('#test-table22').DataTable({
    responsive: true,
    "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]]
});
    })
</script>


@endsection