---
extends: _layouts.page
title: Chez Marcel | Cazare în centrul oraşului Sinaia, Valea Prahovei
description: Cazare în Sinaia, în vilă nouă cu camere duble şi suite de familie. Facilităţile includ bucătărie, living şi foişor comune + Netflix gratuit în fiecare cameră.
language: ro
home: true
---

@section('content')

@include('_partials.nav.home.ro')

<div class="splash h-full w-full flex flex-col items-center justify-center text-center">
    <h1 class="splash-text font-pinyon text-5xl sm:text-10xl lg:text-16xl leading-loose sm:leading-tight z-20 -mt-8 text-splash-logo">{{ $page->company->name }}</h1>
    <p class="text-right text-splash-logo -mt-2 italic z-10">{{ $page->company->tagline->ro }}</p>
    <a
        href="{{ $page->baseUrl }}/camere/"
        class="md:hidden border border-splash-logo hover:shadow-lg mt-16 no-underline px-4 py-2 md:px-6 md:py-3 rounded text-xs md:text-sm text-splash-logo z-10">
            Vezi Camere &rarr;
    </a>
</div>

@endsection
