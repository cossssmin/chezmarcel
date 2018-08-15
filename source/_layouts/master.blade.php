<!DOCTYPE html>
<html lang="en" class="h-full w-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>{{ $page->title ? $page->title : 'Chez Marcel | Cazare in centrul orasului Sinaia' }}</title>
        <meta name="description" content="{{ $page->description ?? 'Cazare Sinaia in vila cu camere duble sau apartamente, cu bai proprii, bucatarie, living si foisor' }}">

        <link href="https://fonts.googleapis.com/css?family=Pinyon+Script" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('/css/main.css') }}">
    </head>
    <body class="antialiased font-sans h-full w-full">
        @yield('content')

        <script src="{{ mix('/js/main.js') }}"></script>
    </body>
</html>
