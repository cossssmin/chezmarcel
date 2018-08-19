---
extends: _layouts.master
title: Chez Marcel | Accommodation in central Sinaia, Romania
home: true
---

@section('content')

@include('_partials.nav.home.en')

<div class="splash h-full w-full flex flex-col items-center justify-center text-center">
    <h1 class="splash-text font-pinyon text-5xl sm:text-10xl lg:text-16xl leading-loose sm:leading-tight z-20 -mt-8 text-splash-logo">{{ $page->company->name }}</h1>
    <p class="text-right text-splash-logo -mt-2 italic z-10">{{ $page->company->tagline->en }}</p>
    <a
        href="{{ $page->baseUrl }}/en/rooms/"
        class="border border-splash-logo hover:shadow-lg mt-16 no-underline px-4 py-2 md:px-6 md:py-3 rounded text-xs md:text-sm text-splash-logo z-10">
            See Rooms &rarr;
    </a>
</div>

@endsection
