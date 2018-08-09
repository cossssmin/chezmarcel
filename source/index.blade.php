---
extends: _layouts.master
home: true
---

@section('content')

@include('_partials.nav.home.ro')

<div class="splash h-full w-full flex flex-col items-center justify-center text-center">
    <h1 class="splash-text font-pinyon text-5xl sm:text-10xl lg:text-16xl leading-loose sm:leading-tight z-20 -mt-8 text-splash-logo">Chez Marcel</h1>
    <p class="text-right text-splash-logo -mt-2 italic z-10">din 2018, în Sinaia</p>
</div>

@endsection
