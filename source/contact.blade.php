---
extends: _layouts.page
title: Contact şi rezervări Chez Marcel | Cazare în centrul oraşului Sinaia
description: Date de contact, rezervări, şi localizare pe hartă Chez Marcel Sinaia, Valea Prahovei
language: ro
slugs:
  ro: contact
  en: en/contact
---

@section('page')

@include('_partials.nav.ro')

<header class="w-full bg-grey-lighter py-12 sm:py-20">
    <div class="container px-6">
        <h1 class="text-4xl sm:text-5xl font-light mb-2 -mt-3">Contact</h1>
        <p class="text-grey-dark">Rezervări, date de contact, şi indicaţii de orientare</p>
    </div>
</header>

<section class="bg-grey-lightest py-10 sm:py-16">
    <div class="container flex flex-wrap px-6 text-grey-darker leading-normal">
        <article class="w-full md:w-3/5">
            <p>
                Ne poţi contacta atât telefonic şi prin email, cât şi pe WhatsApp.
            </p>

            <hr class="h-px bg-grey-light my-12 relative z-30">

            <div>
                <h2 class="font-light pb-8 sm:text-3xl text-2xl text-black" id="rezervari">Rezervări</h2>
                <p class="pb-6">
                    Rezervările se fac exclusiv prin Booking.com.
                    <br><br>
                    Pentru a vedea preţurile, dă click pe butonul de mai jos şi introdu datele sejurului tău:
                </p>
                <p class="pb-6">
                    <a href="https://www.booking.com/hotel/ro/chez-marcel-sinaia.ro.html#availability_target" class="bg-blue hover:bg-blue-darker text-white font-bold px-4 py-2 no-underline border-2 border-white shadow" target="_blank">Vezi camerele disponibile</a>
                </p>
                <h3 class="font-light text-base uppercase text-black my-4">Menţiuni</h3>
                <ul>
                    <li>Plata pe Booking.com se poate face doar cu cardul</li>
                    <li>Nu acceptăm plata cu vouchere sau tichete de vacanţă
                        <ul>
                            <li>Booking.com nu acceptă carduri special emise pentru vouchere (ex. Edenred).</li>
                        </ul>
                    </li>
                    <li>Dacă eşti client <span class="inline-block rounded-tl rounded-bl bg-booking-genius text-white text-sm px-2 py-1 leading-full font-semibold cursor-help" title="Eşti client GENIUS dacă ai făcut cel puţin două rezervări pe Booking.com în ultimul an">.genius</span> pe Booking.com, vei primi un discount de 10%!</li>
                </ul>
                <h2 class="font-light py-8 sm:text-3xl text-2xl text-black" id="harta">Indicaţii de orientare</h2>
                <p class="pb-2">
                    Chez Marcel se află în Sinaia, pe Bulevardul Republicii, la numărul 11.
                </p>
                <p class="pb-8">
                    Accesul se face, inclusiv cu maşina, pe panta din partea dreaptă a restaurantului Casa Noastră (pe lângă terasă). Urmăreşte drumul de acces până la capăt, şi vei ajunge în curtea interioară unde vei recunoaşte clădirea.
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
    @slot('title') Concediu în doi, sau cu familia? @endslot
    @slot('subtitle') Alege camera care ți se potrivește ţie sau familiei tale @endslot
    @slot('url') {{ $page->baseUrl }}/camere/ @endslot
    @slot('buttonLabel') Alege camera &rarr; @endslot
@endctafooter

@include('_partials.footer.ro')

@endsection
