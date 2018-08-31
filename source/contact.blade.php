---
extends: _layouts.page
title: Contact şi rezervări Chez Marcel | Cazare în centrul oraşului Sinaia
description: Date de contact, rezervări, şi indicaţii de orientare la Chez Marcel Sinaia, Valea Prahovei
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
                Ne poţi contacta atât telefonic şi prin email, cât şi pe WhatsApp sau <a href="https://www.facebook.com/chezmarcelsinaia/" class="text-inherit no-underline border-b hover:border-grey" target="_blank" rel="nofollow noopener">Facebook</a>.
            </p>

            <hr class="h-px bg-grey-light my-12 relative z-30">

            <div>
                <h2 class="font-light pb-8 sm:text-3xl text-2xl text-black">Rezervări</h2>
                <p class="pb-2">
                    Pentru rezervări directe, cel mai bine este să ne suni la <a href="tel:+40743602363" class="text-inherit no-underline border-b hover:border-grey">+40 (743) 602 363</a>.
                </p>
                <p class="pb-2">
                    Dacă doreşti să plăteşti cu cardul, <a href="https://www.booking.com/hotel/ro/chez-marcel-sinaia.ro.html" target="_blank" rel="nofollow noopener" class="text-inherit no-underline border-b hover:border-grey">poţi rezerva cu confirmare instantă prin Booking.com</a>
                </p>
                <h3 class="font-light text-base uppercase text-black my-4">Menţiuni</h3>
                <ul>
                    <li>preţurile sunt dinamice - pentru o estimare de preţ, vezi <a href="https://www.booking.com/hotel/ro/chez-marcel-sinaia.ro.html" target="_blank" rel="nofollow noopener" class="text-inherit no-underline border-b hover:border-grey">Chez Marcel Sinaia pe Booking</a></li>
                    <li>pentru rezervări directe, fără Booking.com, se va achita un avans de 50%</li>
                    <li>rezervările se fac în funcţie de disponibilitate</li>
                    <li>de sărbători se aplică tarife speciale</li>
                </ul>

                <h2 class="font-light py-8 sm:text-3xl text-2xl text-black">Indicaţii de orientare</h2>
                <p class="pb-2">
                    Chez Marcel se află în Sinaia, pe Bulevardul Republicii, la numărul 11.
                </p>
                <p class="pb-8">
                    Accesul se face, inclusiv cu maşina, pe panta din partea dreaptă a restaurantului Casa Noastră. Urmăreşte drumul de acces până la capăt, şi vei ajunge în curtea interioară unde vei recunoaşte clădirea.
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
