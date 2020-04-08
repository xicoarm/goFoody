<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CSS Grid Example</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

{{--    @csrf_field--}}
</head>


<form method="post" action='try'>

    @csrf
        <input id="123" type="text" name="123" >
        <button type="submit"> a</button>

</form>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"> </script>
<script src="{{ asset('js/post.js') }}" type="text/javascript"> </script>
