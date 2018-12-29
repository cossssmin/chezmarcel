---
extends: _layouts.page
title: Contact and bookings at Chez Marcel | Accommodation in central Sinaia, Romania
description: Contact information, bookings, and map directions to Chez Marcel Sinaia, Prahova Valley
language: en
slugs:
  ro: contact
  en: en/contact
---

@section('page')

@include('_partials.nav.en')

<header class="w-full bg-grey-lighter py-12 sm:py-20">
    <div class="container px-6">
        <h1 class="text-4xl sm:text-5xl font-light mb-2 -mt-3">Contact</h1>
        <p class="text-grey-dark">Bookings, contact information, and directions</p>
    </div>
</header>

<section class="bg-grey-lightest py-10 sm:py-16">
    <div class="container flex flex-wrap px-6 text-grey-darker leading-normal">
        <article class="w-full md:w-3/5">
            <p>
                You can contact us by email, phone, or WhatsApp.
            </p>

            <hr class="h-px bg-grey-light my-12 relative z-30">

            <div>
                <h2 class="font-light pb-8 sm:text-3xl text-2xl text-black" id="bookings">Bookings</h2>
                <p class="pb-6">
                    Reservations are handled exclusively through Booking.com.
                    Check prices by clicking the button below - you will be redirected to Booking.com, where you will need to specify your stay dates.
                </p>
                <p class="pb-6">
                    <a href="https://www.booking.com/hotel/ro/chez-marcel-sinaia.ro.html#availability_target" class="bg-blue hover:bg-blue-darker text-white font-bold px-4 py-2 no-underline border-2 border-white shadow" target="_blank">Check available rooms</a>
                </p>
                <h3 class="font-light text-base uppercase text-black my-4">Notes</h3>
                <ul>
                    <li>We only accept credit card payments on Booking.com</li>
                    <li>If you're a <span class="inline-block rounded-tl rounded-bl bg-booking-genius text-white text-sm px-2 py-1 leading-full font-semibold cursor-help" title="You're a GENIUS member if you booked at least two times on Booking.com, in the last year">.genius</span> Booking.com member, you get a 10% discount!</li>
                </ul>
                {{-- <p class="pb-2">
                    For direct bookings, it's best that you give us a call at <a href="tel:+40743602363" class="text-inherit no-underline border-b hover:border-grey">+40 (743) 602 363</a>.
                </p>
                <p class="pb-2">
                    If you want to pay with a card, <a href="https://www.booking.com/hotel/ro/chez-marcel-sinaia.ro.html" target="_blank" rel="nofollow noopener" class="text-inherit no-underline border-b hover:border-grey">book instantly through Booking.com</a>
                </p>
                <h3 class="font-light text-base uppercase text-black my-4">Notes</h3>
                <ul>
                    <li>prices are dynamic - for an estimate, see <a href="https://www.booking.com/hotel/ro/chez-marcel-sinaia.ro.html" target="_blank" rel="nofollow noopener" class="text-inherit no-underline border-b hover:border-grey">Chez Marcel Sinaia on Booking</a></li>
                    <li>for direct bookings - without Booking.com - a 50% deposit is required upfront</li>
                    <li>bookings are subject to availability</li>
                    <li>for holidays, special rates apply</li>
                </ul> --}}
                <h2 class="font-light py-8 sm:text-3xl text-2xl text-black" id="map">Directions</h2>
                <p class="pb-2">
                    Chez Marcel is located at 11 Republicii Blvd, in Sinaia, Prahova county, Romania.
                </p>
                <p class="pb-8">
                    From street level, access the inner courtyard (by foot or by car) using the ramp on the right side of the Casa Noastra restaurant. Follow it all the way, and you'll recognize the building.
                </p>
                <div class="-mx-6 sm:mx-0">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d858.1315718750229!2d25.548201731175713!3d45.34419160692475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b3178db9b1ff99%3A0x2deb07ffe2e28e2e!2sChez+Marcel+Sinaia!5e0!3m2!1sro!2sro!4v1535567425114" height="450" frameborder="0" class="border-0 w-full" allowfullscreen></iframe>
                </div>
            </div>

        </article>

        <aside class="hidden md:block w-full md:w-2/5 pl-0 md:pl-24">
            <div class="sticky top-20 py-6 -mt-4">
                <ul class="list-reset text-sm leading-loose p-6 border border-grey-light inline-block">
                    <li>
                        Republicii 11, Sinaia
                    </li>
                    <li>
                        <a href="tel:+40743602363" class="text-inherit no-underline border-b hover:border-grey">+40 (743) 602 363</a>
                    </li>
                    <li>
                        <a href="mailto:chezmarcelsinaia@gmail.com" class="text-inherit no-underline border-b hover:border-grey">chezmarcelsinaia@gmail.com</a>
                    </li>
                </ul>
            </div>
        </aside>
    </div>
</section>

@ctafooter
    @slot('title') See your accommodation options @endslot
    @slot('subtitle') Select the room that fits you or your family best @endslot
    @slot('url') {{ $page->baseUrl }}/en/rooms/ @endslot
    @slot('buttonLabel') Select room &rarr; @endslot
@endctafooter

@include('_partials.footer.en')

@endsection
