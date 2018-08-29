---
extends: _layouts.page
title: Camere la Chez Marcel | Cazare în centrul oraşului Sinaia
description: Galerie foto şi facilităţi camere la Chez Marcel Sinaia, Valea Prahovei
slugs:
  ro: camere
  en: en/rooms
---

@section('page')

@include('_partials.nav.ro')

<header class="w-full bg-grey-lighter py-12 sm:py-20">
    <div class="container px-6">
        <h1 class="text-4xl sm:text-5xl font-light mb-2 -mt-3">Camere</h1>
        <p class="text-grey-dark">Alege tipul de cameră care ți se potrivește ţie sau familiei tale</p>
    </div>
</header>

<section class="bg-grey-lightest py-10 sm:py-16">
    <div class="container px-6">

        <h2 class="text-3xl font-light">Camere Duble</h2>

        <div class="flex flex-wrap -mx-6 -mb-10 py-10">
            <div class="sm:w-1/2 lg:w-1/3 px-6 mb-12">
                <figure class="shadow hover:shadow-lg rounded-b">
                    <a href="{{ $page->baseUrl }}/camere/1/" class="block text-black no-underline">
                        <img src="/assets/img/rooms/1/double-room-index-card.jpg" alt="Ground floor double room at Chez Marcel Sinaia" class="rounded-t">
                        <figcaption class="bg-white p-4 rounded-b">
                            <h3 class="flex justify-between text-base mb-4">
                                Unu
                                <span class="font-normal leading-normal text-xxs text-white bg-blue p-px px-1 rounded-full uppercase">parter</span>
                            </h3>
                            <p class="text-grey-dark text-sm">cu vedere la grădină/foișor</p>
                        </figcaption>
                    </a>
                </figure>
            </div>
            <div class="sm:w-1/2 lg:w-1/3 px-6 mb-12 relative">
                <div class="absolute flex items-center justify-center w-full h-full -mt-8 -ml-6">
                    <span class="text-lg font-bold uppercase text-black">În curând</span>
                </div>
                <figure class="shadow hover:shadow-lg rounded-b opacity-20 pointer-events-none">
                    <a href="{{ $page->baseUrl }}/camere/3/" class="block w-full text-black no-underline">
                        <img src="/assets/img/rooms/coming-soon.jpg" alt="" class="rounded-t">
                        <figcaption class="bg-white p-4 rounded-b">
                            <h3 class="flex justify-between text-base mb-4">
                                Trei
                                <span class="font-normal leading-normal text-xxs text-white bg-blue p-px px-1 rounded-full uppercase">etaj 1</span>
                            </h3>
                            <p class="text-grey-dark text-sm">balcon mare cu vedere spre Cota 2000</p>
                        </figcaption>
                    </a>
                </figure>
            </div>
            <div class="sm:w-1/2 lg:w-1/3 px-6 mb-12 relative">
                <div class="absolute flex items-center justify-center w-full h-full -mt-8 -ml-6">
                    <span class="text-lg font-bold uppercase text-black">În curând</span>
                </div>
                <figure class="shadow hover:shadow-lg rounded-b opacity-20 pointer-events-none">
                    <a href="{{ $page->baseUrl }}/camere/4/" class="block text-black no-underline">
                        <img src="/assets/img/rooms/coming-soon.jpg" alt="" class="rounded-t">
                        <figcaption class="bg-white p-4 rounded-b">
                            <h3 class="flex justify-between text-base mb-4">
                                Patru
                                <span class="font-normal leading-normal text-xxs text-white bg-blue p-px px-1 rounded-full uppercase">etaj 1</span>
                            </h3>
                            <p class="text-grey-dark text-sm">balcon cu vedere la grădină/foișor</p>
                        </figcaption>
                    </a>
                </figure>
            </div>
        </div>

        <h2 class="text-3xl font-light">Suite De Familie</h2>

        <div class="flex flex-wrap -mx-6 py-10">
            <div class="sm:w-1/2 lg:w-1/3 px-6 mb-12">
                <figure class="shadow hover:shadow-lg rounded-b">
                    <a href="{{ $page->baseUrl }}/suite/1/" class="block text-black no-underline">
                        <img src="/assets/img/suites/1/suite-index-card.jpg" alt="" class="rounded-t">
                        <figcaption class="bg-white p-4 rounded-b">
                            <h3 class="flex justify-between text-base mb-4">
                                Doi
                                <span class="font-normal leading-normal text-xxs text-white bg-blue p-px px-1 rounded-full uppercase">parter</span>
                            </h3>
                            <p class="text-grey-dark text-sm">cu vedere la grădină/foișor/curte interioară</p>
                        </figcaption>
                    </a>
                </figure>
            </div>
            <div class="sm:w-1/2 lg:w-1/3 px-6 relative">
                <div class="absolute flex items-center justify-center w-full h-full -mt-8 -ml-6">
                    <span class="text-lg font-bold uppercase text-black">În curând</span>
                </div>
                <figure class="shadow hover:shadow-lg rounded-b opacity-20 pointer-events-none">
                    <a href="{{ $page->baseUrl }}/suite/1/" class="block text-black no-underline">
                        <img src="/assets/img/rooms/coming-soon.jpg" alt="" class="rounded-t">
                        <figcaption class="bg-white p-4 rounded-b">
                            <h3 class="flex justify-between text-base mb-4">
                                Cinci
                                <span class="font-normal leading-normal text-xxs text-white bg-blue p-px px-1 rounded-full uppercase">parter</span>
                            </h3>
                            <p class="text-grey-dark text-sm">balcon cu vedere la grădină/foișor/curte interioară</p>
                        </figcaption>
                    </a>
                </figure>
            </div>
        </div>
    </div>
</section>

@ctafooter
    @slot('title') Rezervări simple și rapide @endslot
    @slot('subtitle') Sună-l pe Marcel sau rezervă prin Booking.com @endslot
    @slot('url') {{ $page->baseUrl }}/contact/ @endslot
    @slot('buttonLabel') Vreau să rezerv &rarr; @endslot
@endctafooter

@include('_partials.footer.ro')

@endsection
