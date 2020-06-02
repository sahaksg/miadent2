<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.6">
        <meta charset="utf-8">
        
        

        <title>{{config('app.name', 'MiaDent')}}</title>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/clockpicker/0.0.7/bootstrap-clockpicker.css" integrity="sha256-WzVuf5oOPfz9nfgb4l3sFKzwoa++0DJdjLJkLWVgvhs=" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js" integrity="sha256-4iQZ6BVL4qNKlQ27TExEhBN1HFPvAvAMbFavKKosSWQ=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/clockpicker/0.0.7/bootstrap-clockpicker.min.js" integrity="sha256-LPgEyZbedErJpp8m+3uasZXzUlSl9yEY4MMCEN9ialU=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js" integrity="sha256-QvhPq+evNjd8JyxSOU5KL3jPYTD7+gWVev1OH763SL0=" crossorigin="anonymous"></script>

        <style>
           .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      } 
            
         
                 
        </style>
    </head>
    <body   >
        <div id="app">
            <div id='bg'>
            @include('inc.navbaruser')
            
            <div class="container" style="margin-top: 2%">
                @include('inc.messages')
                @yield('content')
            </div>
            </div>
        </div>
        

        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
       
        <script>
            $(document).ready(function(){
               

               
                $(this).find(".fc-content").mouseenter(function(){
                    var fctime= $(this).find(".fc-time").text();
                    var fctitle= $(this).find(".fc-title").text();
                    // alert(fctitle)
                    $(this).css({
                        background: "green"
                    })
                    $(this).attr("data-toggle","tooltip");
                    $(this).attr("data-placement","right");
                    $(this).attr("title","Patient: "+fctitle+" at: "+fctime);
                })
                $(this).find(".fc-content").mouseleave(function(){
                    $(this).css({
                        background: "#3A87AD"
                    })
                    
                });
                $(this).find(".fc-content").click(function(){
                //    alert(fctime+fctitle)
                })
                $(function () {
                $('[data-toggle="tooltip"]').tooltip()
                })
               
               
                
$(this).find('.tooth').click(function(){
    // alert (this.title)
    var valu=this.title;
    $('#ttt').val(this.title);
    
    
    
})
// will try later to color one who not have xray

    $(".xray_p").each(function (){
        
        if($(this).text() =="NO"){
            $(this).closest('tr').css({
                "background": "#FFB9BE",
               
            })        
        }
    })
    $(".xray_p").click(function(){
        alert($(this).text())
    })

})
        </script>
       
    </body>
</html>

