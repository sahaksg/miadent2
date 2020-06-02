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
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <script src="{{ asset('js/app.js') }}"></script>
        <style>
            
            .inps{
                text-align: center;
                width: 20%;
            }
            .inps:focus{
                outline: none;
            }
            .label1 {
                /* border: 1px solid red; */
                width: 5%;
                height: 6vh;
                padding: 0;
                margin-left: 0.3em;
   
            }
            select{
                height: 4vh !important;
            }
            input[type='text'] {
                text-align: center;

            }
            input[type='email'] {
                text-align: center;

            }
            input[type='password'] {
                text-align: center;

            }
            input[type='text']:focus{
                outline: none;
            }
            th{
                background: lightgrey !important;
                text-align: center !important;
            }
            td{
                text-align: center !important;
            }
                 
        </style>
    </head>
    <body >
        <div id="app">
            @include('inc.navbaruser')
		
            <div class="container">
                @include('inc.messages')
                @yield('content')
            </div>
        </div>
        

        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
        <script>
            $(document).ready(function(){
                // alert("Hello Jquery!")
                $(".chk_surg").change(function () { // atamner

                    if ($(this).prop("checked") == true) {
                     alert("true"+$(this).attr("id"))
    
                } else if($(this).prop("checked") !== true) {

                alert("false"+$(this).attr("id"))
    
                }

            })
            $('textarea').ckeditor();
            })
        </script>
       
    </body>
</html>

