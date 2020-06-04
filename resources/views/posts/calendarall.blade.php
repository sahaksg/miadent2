@extends('layouts.app1')

@section('content')

<div class="container" style="width: 55%">
  <div id='ale' class="alert alert-success" style="display:none"></div>
@if (\Session::has('success'))
      <div  class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
     <div id="user_id" style="display:none">
      {{$id}}
    </div>
     {{-- <div id="test2" style="border: 1px solid red"></div> --}}
   <div class="panel panel-default">
         <div class="panel-heading">
             <h4>Patients Schedule </h4>
             <div class="time" style='display:none; '>
              <input id="pname" type="text" placeholder="Name">
              <input id="phone" type="text" placeholder="Phone">
              <input id='time_inp' type='time'>
              <input id='day' type='hidden' >
              <input id='day1' type='hidden'>
             
              <button id='book' class="btn btn-primary">Book</button>
            </div>
         </div>
         <div class="panel-body" >
          {{-- {{$calendar->getId()}} --}}
           
            {!! $calendar->calendar() !!}
           
        </div>
        
    </div>
   
   
</div>


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

{!! $calendar->script() !!}
<script>
  



  $(document).ready(function(){

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var userId=$(this).find("#user_id").text();

    $(this).find(".fc-today-button").click(function(){
      var mDays=document.getElementsByClassName('fc-day-number');
      console.log(mDays);
      
      var myFunction = function() {
        
          
          if(userId == 8 || userId == 9){
          
          }else{
              var attribute = this.getAttribute("data-date");
              var content=$(this).text();
              
              // var data=$(this).attr("data-date");
              $(".time").css({
                display: "block"
              });
              var day=$("#day").val(content);
              var daydate=$("#day1").val(attribute);
    
          }
      }
      for (var i = 0; i < mDays.length; i++) {
        mDays[i].addEventListener('click', myFunction, false);
      }
         
    })

    $(this).find(".fc-next-button").click(function(){
      
      var mDays=document.getElementsByClassName('fc-day-number');
      console.log(mDays);

      var myFunction = function() {
          
          if(userId == 8 || userId == 9){
          
          }else{
              var attribute = this.getAttribute("data-date");
              var content=$(this).text();
              
              // var data=$(this).attr("data-date");
              $(".time").css({
                display: "block"
              });
              var day=$("#day").val(content);
              var daydate=$("#day1").val(attribute);
    
          }
          
      };
      for (var i = 0; i < mDays.length; i++) {
        mDays[i].addEventListener('click', myFunction, false);
      }
    })

    $(this).find(".fc-prev-button").click(function(){
      var mDays=document.getElementsByClassName('fc-day-number');
      console.log(mDays);
      var myFunction = function() {
          
          if(userId == 8 || userId == 9){ // to put doctors IDs
          
          }else{
              var attribute = this.getAttribute("data-date");
              var content=$(this).text();
              
              // var data=$(this).attr("data-date");
              $(".time").css({
                display: "block"
              });
              var day=$("#day").val(content);
              var daydate=$("#day1").val(attribute);
    
          }
          
      };
      for (var i = 0; i < mDays.length; i++) {
        mDays[i].addEventListener('click', myFunction, false);
      }
    })

    
    $(this).find(".fc-day-number").click(function(){
     
      if(userId == 8 || userId == 9){
          
      }else{
          var content=$(this).text();
          var data=$(this).attr("data-date");
          $(".time").css({
            display: "block"
          });
          var day=$("#day").val(content);
        var daydate=$("#day1").val(data);

      }        
    });
    

    $("#book").click(function(){
    
      var day=$("#day").val();
      var daydate=$("#day1").val();
      var user_id=userId;
      var time=$("#time_inp").val();
      var pname=$("#pname").val();
      var phone=$("#phone").val();
      // alert(user_id+" "+time+" "+pname+" "+day+" "+daydate)

      $.ajax({
          type:'POST',
          url:'/ajaxRequest',
          data:{
           
          // daypopox:day,
          daydatepopox:daydate, 
          useridpopox:user_id, 
          timepopox:time,
          pnamepopox:pname,
          phonepopox:phone
         
          },
          success:function(data){
                  // $("#test2").html(data)
                  window.location.reload();
                  $("#ale").css({
                    display: "block"
                  })
                  $("#ale").html("<h3>Appointment Successully Booked!</h3>")
            } 
      })
    })
      
     
    })
  
</script>

@endsection