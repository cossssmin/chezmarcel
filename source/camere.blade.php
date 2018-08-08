---
extends: _layouts.page
title: Camere la Chez Marcel
description: Galerie foto si facilitati camere la Chez Marcel Sinaia
---

@section('page')

@include('_partials.nav.ro')

<header class="w-full bg-grey-lighter py-20">
    <div class="container px-6">
        <h1 class="text-4xl sm:text-5xl font-light mb-2 -mt-3">Camere</h1>
        <p class="text-grey-dark">Alege tipul de cameră care ți se potrivește</p>
    </div>
</header>

<section class="bg-grey-lightest py-10 sm:py-16">
    <div class="container px-6">

        <h2 class="text-3xl font-light">Camere Duble</h2>

        <div class="flex flex-wrap -mx-6 py-10">
            <div class="sm:w-1/2 lg:w-1/3 px-6 mb-8">
                <figure class="shadow hover:shadow-lg">
                    <a href="{{ $page->baseUrl }}/camere/1" class="text-black no-underline">
                        <img src="https://placehold.it/1150x800" alt="">
                        <figcaption class="bg-white p-4">
                            <h3 class="flex justify-between text-base mb-4">
                                Camera 1
                                <span class="font-normal leading-normal text-xxs text-white bg-blue p-px px-1 rounded-full uppercase">parter</span>
                            </h3>
                            <p class="text-grey-dark text-sm">cu vedere la grădină/foișor</p>
                        </figcaption>
                    </a>
                </figure>
            </div>
            <div class="w-full sm:w-1/2 lg:w-1/3 px-6 mb-8">
                <figure class="shadow hover:shadow-lg">
                    <a href="{{ $page->baseUrl }}/camere/2" class="text-black no-underline">
                        <img src="https://placehold.it/1150x800" alt="">
                        <figcaption class="bg-white p-4">
                            <h3 class="flex justify-between text-base mb-4">
                                Camera 2
                                <span class="font-normal leading-normal text-xxs text-white bg-blue p-px px-1 rounded-full uppercase">parter</span>
                            </h3>
                            <p class="text-grey-dark text-sm">cu vedere la grădină/foișor</p>
                        </figcaption>
                    </a>
                </figure>
            </div>
            <div class="sm:w-1/2 lg:w-1/3 px-6 relative">
                <div class="absolute flex items-center justify-center w-full h-full -mt-8 -ml-6">
                    <span class="text-2xl text-red-light">În curând</span>
                </div>
                <figure class="shadow hover:shadow-lg opacity-25 pointer-events-none">
                    <a href="{{ $page->baseUrl }}/camere/2" class="text-black no-underline">
                        <img src="https://placehold.it/1150x800" alt="">
                        <figcaption class="bg-white p-4">
                            <h3 class="flex justify-between text-base mb-4">
                                Camera 3
                                <span class="font-normal leading-normal text-xxs text-white bg-blue p-px px-1 rounded-full uppercase">etaj</span>
                            </h3>
                            <p class="text-grey-dark text-sm">balcon mare cu vedere spre Cota 2000</p>
                        </figcaption>
                    </a>
                </figure>
            </div>
        </div>

        <h2 class="text-3xl font-light">Apartamente</h2>

        <div class="flex flex-wrap -mx-6 py-10">
            <div class="sm:w-1/2 lg:w-1/3 px-6">
                <figure class="shadow hover:shadow-lg">
                    <a href="{{ $page->baseUrl }}/apartamente/1" class="text-black no-underline">
                        <img src="https://placehold.it/1150x800" alt="">
                        <figcaption class="bg-white p-4">
                            <h3 class="flex justify-between text-base mb-4">
                                Apartament 1
                                <span class="font-normal leading-normal text-xxs text-white bg-blue p-px px-1 rounded-full uppercase">parter</span>
                            </h3>
                            <p class="text-grey-dark text-sm">cu vedere la grădină/foișor/curte interioară</p>
                        </figcaption>
                    </a>
                </figure>
            </div>
        </div>
    </div>
</section>

<footer class="footer sm:bg-footer bg-bottom bg-contain sm:bg-auto sm:bg-top pt-16 pb-8 sm:pb-32">
    <div class="container flex flex-col items-center mb-16 sm:mb-32 md:mb-72 lg:mb-72 xl:mb-144">
        <h4 class="font-light text-2xl sm:text-4xl text-black mb-2 sm:mb-4">Rezervări simple și rapide</h4>
        <p class="text-grey-dark text-sm text-center mb-8">Sună-l pe Marcel sau rezervă prin Booking.com</p>
        <a href="{{ $page->baseUrl }}/contact/" class="border border-blue text-blue hover:bg-blue hover:text-white hover:shadow-md rounded px-6 py-4 no-underline">Vreau să rezerv &rarr;</a>
    </div>
    <hr class="sm:hidden h-px bg-grey-light mx-16 mb-16">
    <div class="container flex flex-wrap text-white px-6 lg:pt-8">
        <div class="w-1/2 sm:w-1/4">
            <h5 class="font-normal text-lg text-footer-lighter md:text-splash-logo xl:text-footer-lighter mb-6">Navigație</h5>
            <ul class="list-reset text-sm">
                <li>
                    <a href="{{ $page->baseUrl }}/camere/" class="inline-block text-footer-white md:text-splash-logo xl:text-footer-white no-underline hover:text-splash-logo py-1 mb-2">Camere</a>
                </li>
                <li>
                    <a href="{{ $page->baseUrl }}/facilitati/" class="inline-block text-footer-white md:text-splash-logo xl:text-footer-white no-underline hover:text-splash-logo py-1 mb-2">Facilități</a>
                </li>
                <li>
                    <a href="{{ $page->baseUrl }}/imagini/" class="inline-block text-footer-white md:text-splash-logo xl:text-footer-white no-underline hover:text-splash-logo py-1 mb-2">Imagini</a>
                </li>
                <li>
                    <a href="{{ $page->baseUrl }}/contact/" class="inline-block text-footer-white md:text-splash-logo xl:text-footer-white no-underline hover:text-splash-logo py-1 mb-2">Contact</a>
                </li>
            </ul>
        </div>
        <div class="w-1/2 sm:w-1/4">
            <h5 class="font-normal text-lg text-footer-lighter md:text-splash-logo xl:text-footer-lighter mb-6">Ne găsești și pe</h5>
            <ul class="list-reset text-sm">
                <li>
                    <a href="{{ $page->links->booking }}" rel="nofollow noopener" target="_blank" class="inline-block text-footer-white md:text-splash-logo xl:text-footer-white no-underline hover:text-splash-logo py-1 mb-2">Booking.com</a>
                </li>
                <li>
                    <a href="{{ $page->links->facebook }}" rel="nofollow noopener" target="_blank" class="inline-block text-footer-white md:text-splash-logo xl:text-footer-white no-underline hover:text-splash-logo py-1 mb-2">Facebook</a>
                </li>
            </ul>
        </div>
        <div class="w-full sm:w-1/2 mt-8 mb-16 sm:my-0 text-left sm:text-right">
            <a href="{{ $page->baseUrl }}/" class="inline-block font-pinyon text-5xl no-underline text-footer-light md:text-splash-logo hover:text-splash-logo mb-8">Chez Marcel</a>
            <ul class="list-reset text-footer-lightest sm:text-splash-logo lg:text-footer-lightest leading-normal">
                <li class="mb-4">
                    <p>Republicii 11, Sinaia, 106100</p>
                    <p>Prahova, Romania</p>
                </li>
                <li class="mb-4">
                    <p>
                        GPS: <a class="text-footer-lightest sm:text-splash-logo lg:text-footer-lightest" rel="nofollow noopener" target="_blank" href="https://www.google.com/maps/place/45%C2%B020'39.6%22N+25%C2%B032'56.3%22E/@45.3443279,25.5484268,199m/data=!3m2!1e3!4b1!4m6!3m5!1s0x0:0x0!7e2!8m2!3d45.3443265!4d25.5489735">45.344327, 25.548974</a>
                    </p>
                </li>
                <li>
                    <p>
                        <svg class="fill-current w-4 align-middle mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 -256 1792 1792"><path d="M1567.45763 997.0169q0 27-10 70.5t-21 68.5q-21 50-122 106-94 51-186 51-27 0-52.5-3.5t-57.5-12.5q-32-9-47.5-14.5t-55.5-20.5q-40-15-49-18-98-35-175-83-128-79-264.5-215.5t-215.5-264.5q-48-77-83-175-3-9-18-49t-20.5-55.5q-5.5-15.5-14.5-47.5t-12.5-57.5q-3.5-25.5-3.5-52.5 0-92 51-186 56-101 106-122 25-11 68.5-21t70.5-10q14 0 21 3 18 6 53 76 11 19 30 54t35 63.5q16 28.5 31 53.5 3 4 17.5 25t21.5 35.5q7 14.5 7 28.5 0 20-28.5 50t-62 55q-33.5 25-62 53t-28.5 46q0 9 5 22.5t8.5 20.5q3.5 7 14 24t11.5 19q76 137 174 235t235 174q2 1 19 11.5t24 14q7 3.5 20.5 8.5t22.5 5q18 0 46-28.5t53-62q25-33.5 55-62t50-28.5q14 0 28.5 7t35.5 21.5q21 14.5 25 17.5 25 15 53.5 31t63.5 35q35 19 54 30 70 35 76 53 3 7 3 21z" fill="currentColor"/></svg>
                        (+40) 724 063 033
                    </p>
                </li>
            </ul>
        </div>
    </div>
</footer>

@endsection
