<!DOCTYPE html>
<html lang="en" class="h-full w-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">

        <title>{{ $page->title ?? 'Chez Marcel | Cazare în centrul oraşului Sinaia' }}</title>
        <meta name="description" content="{{ $page->description ?? 'Cazare Sinaia în vilă cu camere duble sau apartamente, cu băi proprii, bucătărie, living şi foisor' }}">

        <link href="https://fonts.googleapis.com/css?family=Pinyon+Script" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('/css/main.css') }}">
    </head>
    <body class="antialiased font-sans h-full w-full">
        @yield('content')

        <script src="{{ mix('/js/main.js') }}"></script>

        @if($page->production)
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-124343056-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-124343056-1');
        </script>
        @endif
    </body>
</html>
