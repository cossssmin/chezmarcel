<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>{{ $page->title ? $page->title . ' | Cazare in centrul orasului Sinaia' : 'Chez Marcel | Cazare in centrul orasului Sinaia' }}</title>
        <meta name="description" content="{{ $page->description ?? 'Cazare Sinaia in vila cu camere duble sau apartamente, cu bai proprii, bucatarie, living si foisor' }}">

        <link rel="stylesheet" href="{{ mix('/css/main.css') }}">
    </head>
    <body class="antialiased font-sans">
        @yield('content')

        <script src="{{ mix('/js/main.js') }}"></script>
    </body>
</html>
