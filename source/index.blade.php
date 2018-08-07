@extends('_layouts.master')

@section('content')

<div class="nav">
    <ul class="flex mx-auto justify-around list-reset w-1/3 p-4">
        <li>
            <a href="/camere/">Camere</a>
        </li>
        <li>
            <a href="/facilitati/">Facilități</a>
        </li>
        <li>
            <a href="/imagini/">Imagini</a>
        </li>
        <li>
            <a href="/contact/">Contact</a>
        </li>
    </ul>
    <a href="/en/" class="absolute pin-r">EN</a>
</div>

<div class="splash h-screen flex flex-col items-center justify-center">
    <h1 class="splash-text text-yellow-lighter">Chez Marcel</h1>
    <p class="text-right text-yellow-lighter -mt-2 italic z-10">din 2018, în Sinaia</p>
</div>

@endsection
