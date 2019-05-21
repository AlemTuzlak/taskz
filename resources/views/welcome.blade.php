<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TaskZ</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <link href="css/style.css" rel="stylesheet" type="text/css">

</head>
<body>
<div class="background-shade">
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                <h1>
                    Task<span style="color: black">Z</span>
                </h1>
            </div>

            <a class="get-started" href="{{ route('login') }}">
                Get started
            </a>

        </div>
    </div>
</div>

</body>
</html>
