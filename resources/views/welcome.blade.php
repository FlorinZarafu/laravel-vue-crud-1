<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ 'csrf_token' }}" />
    <script>
        window.Laravel = { csrfToken: '{{ csrf_token() }}'}
    </script>

    <title>Laravel Vue CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>

<body>
    <div id="app">
        <navbar></navbar>
        <div class="container">
            <articles></articles>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
