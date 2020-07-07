@extends('layouts.app1')

@section('content')

<div class="container" style="width: 55%">
  <div id='ale' class="alert alert-success" style="display:none"></div>

     <div id="user_id" style="display:none">
      {{$id}}
    </div>
     {{-- <div id="test2" style="border: 1px solid red"></div> --}}
   <div class="panel panel-default">
         <div class="panel-heading">
             <h4>Patients Schedule </h4>
             
             <div class="time" style='display:none; '>
             <form action='/test11' method='get'>
              <input class ='call_inps' id="pname" type="text" placeholder="Name" name='name'>
              <input class ='call_inps' id="phone" type="text" placeholder="Phone" name='phone'>
              <input class ='call_inps' id='note_call' type='text' placeholder="Notes..." name='note'>
              <input id='time_inp' type='time' name='time'>             
              <input id='jsdate' type='hidden' name='jsdate' value=''>
              <input id='user_id' type='hidden' name='id' value={{$id}}>              
              <button id='book' class="btn btn-primary" type='submit'>Book</button>
             </form>
              
            </div>
         </div>
         <div class="panel-body" >
          {{-- {{$calendar->getId()}} --}}
           
            {!! $calendar->calendar() !!}
           
        </div>
        
    </div>
    
   
   
</div>


{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script> --}}
<script src="{{ asset('js/moment.min.js') }}"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script> --}}
<script src="{{ asset('js/js/fullcalendar.min.js') }}"></script>
{{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> --}}
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
{!! $calendar->script() !!}
<script>
  



  $(document).ready(function(){
    var userId=$(this).find("#user_id").text();
    function mainFunction(){
      var attribute = this.getAttribute("data-date");
      var content=$(this).text();
       if(userId===10){          
        }else{
          $(".time").css({
              display: "block"
            });
            $('#jsdate').val(attribute)
          }
         
        }

    // Current month
    var mDays=document.getElementsByClassName('fc-day-number');
 
    for (var i = 0; i < mDays.length; i++) {
        mDays[i].addEventListener('click', mainFunction, false);
      }
    //  end current month
     // Next month
    $(this).find(".fc-next-button").click(function(){
     
      var mDays=document.getElementsByClassName('fc-day-number');
      for (var i = 0; i < mDays.length; i++) {
        mDays[i].addEventListener('click', mainFunction, false);
      }
    });
    //  end next month
    $(this).find(".fc-today-button").click(function(){
      var mDays=document.getElementsByClassName('fc-day-number');
      for (var i = 0; i < mDays.length; i++) {
        mDays[i].addEventListener('click', mainFunction, false);
      }
    });
    // Prev month
    $(this).find(".fc-prev-button").click(function(){
      var mDays=document.getElementsByClassName('fc-day-number');
      for (var i = 0; i < mDays.length; i++) {
        mDays[i].addEventListener('click', mainFunction, false);
      }
    });
    

});
  
</script>

@endsection