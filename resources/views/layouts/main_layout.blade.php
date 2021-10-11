<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC Comics || @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('../css/app.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('../images/favicon.ico') }}" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css'
        integrity='sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=='
        crossorigin='anonymous' />
</head>

<body>
    @include('includes.header', ['links' => config('main_menu')])

    <main>
        <section id="hero"></section>
        @yield('content')
    </main>

    @include('includes.footer')
</body>

</html>
