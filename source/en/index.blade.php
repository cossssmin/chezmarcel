@extends('_layouts.master')

@section('content')

<div class="nav">
    <ul class="flex mx-auto justify-around list-reset w-1/3 p-4">
        <li>
            <a href="/rooms/">Rooms</a>
        </li>
        <li>
            <a href="/facilities/">Facilities</a>
        </li>
        <li>
            <a href="/images/">Images</a>
        </li>
        <li>
            <a href="/contact/">Contact</a>
        </li>
    </ul>
    <a href="/ro/" class="absolute pin-r">RO</a>
</div>

<div class="splash h-screen flex flex-col items-center justify-center">
    <h1 class="splash-text text-yellow-lighter">Chez Marcel</h1>
    <p class="text-right text-yellow-lighter -mt-2 italic z-10">since 2018, in Sinaia</p>
</div>

@endsection
