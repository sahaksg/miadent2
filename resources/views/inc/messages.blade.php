@if(count($errors) >0)
  @foreach ($errors->all() as $error)
    <div class="alert alert-danger">
      {{$error}}
    </div>
      
  @endforeach

@endif

@if(session('success'))
<div class="alert alert-success" style='width:32vw; margin:0 auto;'>
  {{session('success')}}
</div>
@endif

@if(session('error'))
<div class="alert alert-danger">
  {{session('error')}}
</div>
@endif