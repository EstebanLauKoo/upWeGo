<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Add a Picture</h1>
    {!! Form::open (['action' => 'PictureController@store', 'method' => 'POST', 'enctype' => 'multipart/data' ]) !!}

    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>

    <div class="form-group">
        {{Form::file('image')}}
    </div>

    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

{!! Form::close() !!}
</body>
</html>