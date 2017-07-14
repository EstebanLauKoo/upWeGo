<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <title>{{config('app.name')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    </head>
    <body>

        <div class="flex-center position-ref full-height">


            <div class="content">
                <div class="title m-b-md">
                    Begin your adventure...
                </div>

                <div class="form">
                    <input type="text" value="" name="myinput" id="myinput"/>
                    <input type="submit"  name="submit" value="submit"/>
                </div>

                <div class="links">
                    @if (Route::has('login'))

                            @if (Auth::check())
                                <a href="{{ url('/home') }}" >Home</a>
                            @else
                                <a href="{{ url('/login' )}}" class="signin">Login</a>
                                <a href="{{ url('/register') }}">Register</a>
                            @endif

                    @endif
                </div>
            </div>
        </div>
    <script>
        $(document).ready(function () {
            $(".title").fadeIn(3000);


            $('.signin').click(function()
                {
                    $('.form').show();
                    $('.signin').hide();

                });

        });
    </script>
    </body>
</html>
