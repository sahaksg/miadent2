{{-- @include('inc.navbar') --}}
@extends('layouts.app1')

@section('content')
<div class="jumbotron" style="padding-top:3px">
  <div class="row" style="text-align:center">
    <p>Card for Patient: <em><b>{{$skizb->name}}</b></em> </p>
  </div>
  <div class="row" style="text-align:center; margin-bottom:1%;">
    {!! Form::open(['action' => 'SkizbController@store', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
  
    {{Form::label('name', 'Patient Name')}}
    {{Form::text('name', $skizb->name)}}
    {{Form::label('phone', 'Phone')}}
    {{Form::text('phone', $skizb->phone)}}
    {{Form::label('created', 'Created at')}}
    {{Form::text('created', $skizb->created_at)}}

  </div>
 
  <div class="row" style="text-align:center; overflow-y:scroll; height:50vh">
   
      <table border="1" align="center" class="radio_table">
        <tr>
          <th>N/N</th>
          <th>Inpl</th>
          <th>Ebdo</th>
          <th>Fill</th>
          <th>Extr</th>
          <th>Crown</th>
          
        </tr>
        
        
          <?php 
  // echo $skizb->t12."-". $skizb->t45."<br>";
          $array=[
            "11"=>$skizb->t11,
            "12"=>$skizb->t12,
            "13"=>$skizb->t13,
            "14"=>$skizb->t14,
            "15"=>$skizb->t15,
            "16"=>$skizb->t16,
            "17"=>$skizb->t17,
            "18"=>$skizb->t18,
            "21"=>$skizb->t21,
            "22"=>$skizb->t22,
            "23"=>$skizb->t23,
            "24"=>$skizb->t24,
            "25"=>$skizb->t25,
            "26"=>$skizb->t26,
            "27"=>$skizb->t27,
            "28"=>$skizb->t28,
            "31"=>$skizb->t31,
            "32"=>$skizb->t32,
            "33"=>$skizb->t33,
            "34"=>$skizb->t34,
            "35"=>$skizb->t35,
            "36"=>$skizb->t36,
            "37"=>$skizb->t37,
            "38"=> $skizb->t38,
            "41"=>$skizb->t41,
            "42"=> $skizb->t42,
            "43"=> $skizb->t43,
            "44"=>$skizb->t44,
            "45"=>$skizb->t45,
            "46"=>$skizb->t46,
            "47"=>$skizb->t47,
            "48"=>$skizb->t48,
        
          ];
          foreach($array as $key=>$value){
           
            
              if($value!==""){
                switch ($value){
                  case 'inpl':
                      echo "<tr><td>".$key."</td>
                            <td>X</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td></tr>";
                  break;
                  case 'fill':
                      echo "<tr><td>".$key."</td>
                            <td></td>
                            <td></td>
                            <td>X</td>
                            <td></td>
                            <td></td></tr>";
                  break;
                  case 'endo':
                  echo "<tr><td>".$key."</td>
                        <td></td>
                        <td>X</td>
                        <td></td>
                        <td></td>
                        <td></td></tr>";
                  break;
                  case 'extr':
                  echo "<tr><td>".$key."</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>X</td>
                      <td></td></tr>";
                  break;
                  case 'crown':
                  echo "<tr><td>".$key."</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>X</td></tr>";
                  break;
                }
               }
              }
              ?>
         
        
       
        
      </table>
      
   
    
    

  </div>
  <a href='/skizbs' class="btn btn-primary"><i class="fa fa-chevron-left" aria-hidden="true"></i> BACK</a>
  
</div>
    
   
    
    
@endsection

       