<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

<div class="container">
    <div class="row">

        <div class="list-group col-sm-4">

            @foreach( $adventures as $adventure)
                @if ( $adventure -> status === 'past')
            <a href="/{{$adventure -> id}}" class="list-group-item list-group-item-action flex-column align-items-start active">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1"> {{$adventure -> title}} </h5>
                    <small> created at: {{ $adventure -> created_at  }}</small>
                </div>
            </a>
                @endif
                @endforeach

        </div>

        <div class="list-group col-sm-4">

            @foreach( $adventures as $adventure)
                @if ( $adventure -> status === 'present')
                    <a href="/{{$adventure -> id}}" class="list-group-item list-group-item-action flex-column align-items-start active">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1"> {{$adventure -> title}} </h5>
                            <small> created at: {{ $adventure -> created_at  }}</small>
                        </div>
                    </a>
                @endif
            @endforeach

        </div>

        <div class="list-group col-sm-4">

            @foreach( $adventures as $adventure)
                @if ( $adventure -> status === 'future')
                    <a href="/{{$adventure -> id}}" class="list-group-item list-group-item-action flex-column align-items-start active">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1"> {{$adventure -> title}} </h5>
                            <small> created at: {{ $adventure -> created_at  }}</small>
                        </div>
                    </a>
                @endif
            @endforeach

        </div>

    </div>
</div>


<form id="logout-form" action="{{ route('logout') }}" method="POST">{{ csrf_field() }}
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
</form>

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
        integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
</body>
</html>