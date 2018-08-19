---
extends: _layouts.page
title: Rooms at Chez Marcel | Accommodation in central Sinaia, Romania
description: Room photos and facilities at Chez Marcel Sinaia, Prahova Valley
slugs:
  ro: camere
  en: en/rooms
---

@section('page')

@include('_partials.nav.en')

<header class="w-full bg-grey-lighter py-12 sm:py-20">
    <div class="container px-6">
        <h1 class="text-4xl sm:text-5xl font-light mb-2 -mt-3">Rooms</h1>
        <p class="text-grey-dark">Choose the room type that fits you or your family best</p>
    </div>
</header>

<section class="bg-grey-lightest py-10 sm:py-16">
    <div class="container px-6">

        <h2 class="text-3xl font-light">Double Rooms</h2>

        <div class="flex flex-wrap -mx-6 -mb-10 py-10">
            <div class="sm:w-1/2 lg:w-1/3 px-6 mb-12">
                <figure class="shadow hover:shadow-lg rounded-b">
                    <a href="{{ $page->baseUrl }}/en/rooms/1/" class="block text-black no-underline">
                        <img src="/assets/img/rooms/1/double-room-index-card.jpg" alt="Ground floor double room at Chez Marcel Sinaia" class="rounded-t">
                        <figcaption class="bg-white p-4 rounded-b">
                            <h3 class="flex justify-between text-base mb-4">
                                One
                                <span class="font-normal leading-normal text-xxs text-white bg-blue p-px px-1 rounded-full uppercase">ground floor</span>
                            </h3>
                            <p class="text-grey-dark text-sm">with garden/pavilion view</p>
                        </figcaption>
                    </a>
                </figure>
            </div>
            <div class="sm:w-1/2 lg:w-1/3 px-6 mb-12 relative">
                <div class="absolute flex items-center justify-center w-full h-full -mt-8 -ml-6">
                    <span class="text-lg font-bold uppercase text-black">Soon</span>
                </div>
                <figure class="shadow hover:shadow-lg rounded-b opacity-20 pointer-events-none">
                    <a href="{{ $page->baseUrl }}/en/rooms/3/" class="block w-full text-black no-underline">
                        <img src="/assets/img/rooms/coming-soon.jpg" alt="" class="rounded-t">
                        <figcaption class="bg-white p-4 rounded-b">
                            <h3 class="flex justify-between text-base mb-4">
                                Three
                                <span class="font-normal leading-normal text-xxs text-white bg-blue p-px px-1 rounded-full uppercase">first floor</span>
                            </h3>
                            <p class="text-grey-dark text-sm">large balcony with Cota 2000 view</p>
                        </figcaption>
                    </a>
                </figure>
            </div>
            <div class="sm:w-1/2 lg:w-1/3 px-6 mb-12 relative">
                <div class="absolute flex items-center justify-center w-full h-full -mt-8 -ml-6">
                    <span class="text-lg font-bold uppercase text-black">Soon</span>
                </div>
                <figure class="shadow hover:shadow-lg rounded-b opacity-20 pointer-events-none">
                    <a href="{{ $page->baseUrl }}/en/rooms/4/" class="block text-black no-underline">
                        <img src="/assets/img/rooms/coming-soon.jpg" alt="" class="rounded-t">
                        <figcaption class="bg-white p-4 rounded-b">
                            <h3 class="flex justify-between text-base mb-4">
                                Four
                                <span class="font-normal leading-normal text-xxs text-white bg-blue p-px px-1 rounded-full uppercase">first floor</span>
                            </h3>
                            <p class="text-grey-dark text-sm">balcony with garden/pavilion view</p>
                        </figcaption>
                    </a>
                </figure>
            </div>
        </div>

        <h2 class="text-3xl font-light">Family Suites</h2>

        <div class="flex flex-wrap -mx-6 py-10">
            <div class="sm:w-1/2 lg:w-1/3 px-6">
                <figure class="shadow hover:shadow-lg rounded-b">
                    <a href="{{ $page->baseUrl }}/en/suites/1/" class="block text-black no-underline">
                        <img src="/assets/img/suites/1/suite-index-card.jpg" alt="" class="rounded-t">
                        <figcaption class="bg-white p-4 rounded-b">
                            <h3 class="flex justify-between text-base mb-4">
                                Two
                                <span class="font-normal leading-normal text-xxs text-white bg-blue p-px px-1 rounded-full uppercase">ground floor</span>
                            </h3>
                            <p class="text-grey-dark text-sm">with garden/pavilion/interior courtyard view</p>
                        </figcaption>
                    </a>
                </figure>
            </div>
            <div class="sm:w-1/2 lg:w-1/3 px-6 relative">
                <div class="absolute flex items-center justify-center w-full h-full -mt-8 -ml-6">
                    <span class="text-lg font-bold uppercase text-black">Soon</span>
                </div>
                <figure class="shadow hover:shadow-lg rounded-b opacity-25 pointer-events-none">
                    <a href="{{ $page->baseUrl }}/en/suites/1/" class="block text-black no-underline">
                        <img src="/assets/img/rooms/coming-soon.jpg" alt="" class="rounded-t">
                        <figcaption class="bg-white p-4 rounded-b">
                            <h3 class="flex justify-between text-base mb-4">
                                Five
                                <span class="font-normal leading-normal text-xxs text-white bg-blue p-px px-1 rounded-full uppercase">first floor</span>
                            </h3>
                            <p class="text-grey-dark text-sm">with garden/pavilion/interior courtyard view</p>
                        </figcaption>
                    </a>
                </figure>
            </div>
        </div>
    </div>
</section>

@ctafooter
    @slot('title') Simple and fast bookings @endslot
    @slot('subtitle') Call Marcel or book through Booking.com @endslot
    @slot('url') {{ $page->baseUrl }}/en/contact/ @endslot
    @slot('buttonLabel') I'll book &rarr; @endslot
@endctafooter

@include('_partials.footer.en')

@endsection
