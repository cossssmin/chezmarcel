---
extends: _layouts.page
title: Camera 1 (Dubla) la Chez Marcel
description: Galerie foto si facilitati camera dubla 1 la Chez Marcel Sinaia
slugs:
  ro: camere/1
  en: en/rooms/1
---

@section('page')

@include('_partials.nav.ro')

<header class="w-full bg-grey-lighter py-12 sm:py-20">
    <div class="container px-6">
        <h1 class="text-4xl sm:text-5xl font-light mb-2 -mt-3">Camera 1</h1>
        <p class="text-grey-dark">La parter, cu vedere la grădină/foișor și Munții Baiului</p>
    </div>
</header>

<section class="bg-grey-lightest py-10 sm:py-16">
    <div class="container flex flex-wrap px-6 text-grey-darker leading-normal">
        <article class="w-full md:w-3/5">
            <p>
                Camera 1 este o cameră dublă, situată la parterul vilei.
                Are un pat mare, o baie cu tot ce e nevoie, măsuță cu taburete, și Smart TV de 81 cm, cu cablu + Netflix.
                În plus, ajungi mai repede la bucătărie și în living 😉
            </p>

            <hr class="h-px bg-grey-light my-12">

                <div>
                    <h2 class="bg-grey-lightest font-light top-8 md:top-20 pt-6 pb-4 md:py-4 sm:text-3xl sticky text-2xl text-black z-20">Imagini</h2>
                    <div class="flex flex-wrap -m-4 py-4">
                        <a href="https://picsum.photos/1200/800?random=1" class="w-full md:w-1/3 p-4 hover:opacity-75">
                            <img src="https://picsum.photos/600/400?random=1" alt="The Cleaner">
                        </a>
                        <a href="https://picsum.photos/1200/800?random=1" class="w-full md:w-1/3 p-4 hover:opacity-75">
                            <img src="https://picsum.photos/600/400?random=1" alt="Winter Dance">
                        </a>
                        <a href="https://picsum.photos/1200/800?random=1" class="w-full md:w-1/3 p-4 hover:opacity-75">
                            <img src="https://picsum.photos/600/400?random=1" alt="The Uninvited Guest">
                        </a>
                        <a href="https://picsum.photos/1200/800?random=1" class="w-full md:w-1/3 p-4 hover:opacity-75">
                            <img src="https://picsum.photos/600/400?random=1" alt="Oh no, not again!">
                        </a>
                        <a href="https://picsum.photos/1200/800?random=1" class="w-full md:w-1/3 p-4 hover:opacity-75">
                            <img src="https://picsum.photos/600/400?random=1" alt="Swan Lake">
                        </a>
                        <a href="https://picsum.photos/1200/800?random=1" class="w-full md:w-1/3 p-4 hover:opacity-75">
                            <img src="https://picsum.photos/600/400?random=1" alt="Swan Lake">
                        </a>
                    </div>
                </div>

                <div>
                    <h2 class="bg-grey-lightest font-light top-8 md:top-20 pt-6 pb-4 md:py-4 sm:text-3xl sticky text-2xl text-black z-20">Facilități</h2>

                    <div class="flex flex-wrap">
                        <ul class="list-reset md:w-1/2">
                            <li>
                                <h4 class="font-light text-black text-xl my-4">Pentru dormit</h4>
                            </li>
                            <li>
                                <svg class="fill-current w-3 mr-2 text-green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                pat mare, de 160 cm
                            </li>
                            <li>
                                <svg class="fill-current w-3 mr-2 text-green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                perne hipo-alergenice
                            </li>
                            <li>
                                <svg class="fill-current w-3 mr-2 text-green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                draperii opace
                            </li>
                            <li>
                                <svg class="fill-current w-3 mr-2 text-green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                încălzire centrală, geamuri tripan
                            </li>
                        </ul>
                        <ul class="list-reset md:w-1/2">
                            <li>
                                <h4 class="font-light text-black text-xl my-4">Pentru baie</h4>
                            </li>
                            <li>
                                <svg class="fill-current w-3 mr-2 text-green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                baie privată
                            </li>
                            <li>
                                <svg class="fill-current w-3 mr-2 text-green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                săpun, șampon, gel de duș
                            </li>
                            <li>
                                <svg class="fill-current w-3 mr-2 text-green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                cască de duș
                            </li>
                            <li>
                                <svg class="fill-current w-3 mr-2 text-green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                uscător de păr
                            </li>
                            <li>
                                <svg class="fill-current w-3 mr-2 text-green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                ușă baie cu sistem protecție
                            </li>
                        </ul>
                        <ul class="list-reset md:w-1/2">
                            <li>
                                <h4 class="font-light text-black text-xl my-4">Organizare</h4>
                            </li>
                            <li>
                                <svg class="fill-current w-3 mr-2 text-green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                frigider
                            </li>
                            <li>
                                <svg class="fill-current w-3 mr-2 text-green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                dulap de haine
                            </li>
                            <li>
                                <svg class="fill-current w-3 mr-2 text-green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                cuier cu pălărier
                            </li>
                            <li>
                                <svg class="fill-current w-3 mr-2 text-green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                măsuță și taburete
                            </li>
                            <li>
                                <svg class="fill-current w-3 mr-2 text-green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                prize lângă pat
                            </li>
                            <li>
                                <svg class="fill-current w-3 mr-2 text-green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                întrerupătoare cap-scară lângă pat
                            </li>
                        </ul>
                        <ul class="list-reset md:w-1/2">
                            <li>
                                <h4 class="font-light text-black text-xl my-4">Divertisment</h4>
                            </li>
                            <li>
                                <svg class="fill-current w-3 mr-2 text-green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                <strong>Smart TV de 81 cm</strong>
                            </li>
                            <li>
                                <svg class="fill-current w-3 mr-2 text-green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                canale TV pentru copii
                            </li>
                            <li>
                                <svg class="fill-current w-3 mr-2 text-green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                Look TV, HBO și <strong>Netflix</strong>
                            </li>
                            <li>
                                <svg class="fill-current w-3 mr-2 text-green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                living shared: TV 4K cu Netflix și Xbox
                            </li>
                            <li>
                                <svg class="fill-current w-3 mr-2 text-green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                gratuit: darts, rummy, cărți de joc
                            </li>
                        </ul>
                    </div>
                </div>

        </article>

        <aside class="hidden md:block w-full md:w-2/5 pl-0 lg:pl-24">
            <div class="sticky top-20 py-6 -mt-4">
                <h3 class="text-2xl text-black font-light mb-4">Pe scurt</h3>
                <ul class="list-reset text-sm leading-loose">
                    <li>
                        <svg class="fill-current w-3 mr-2 text-green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                        la parter
                    </li>
                    <li>
                        <svg class="fill-current w-3 mr-2 text-green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                        semnal Wi-Fi: 3/3
                    </li>
                    <li>
                        <svg class="fill-current w-3 mr-2 text-green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                        pat mare, de 160 cm
                    </li>
                    <li>
                        <svg class="fill-current w-3 mr-2 text-green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                        vedere spre grădină/foișor
                    </li>
                    <li>
                        <svg class="fill-current w-3 mr-2 text-green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                        TV de 81cm, cu HBO, Look TV, și <strong>Netflix</strong>
                    </li>
                </ul>
            </div>
        </aside>
    </div>
</section>

@ctafooter
    @slot('title') Îți place Camera 1? @endslot
    @slot('subtitle') Sună-l pe Marcel, să ți-o păstreze <span class="block pt-6 text-xl">👇</span> @endslot
    @slot('url') {{ $page->baseUrl }}/contact/ @endslot
    @slot('buttonLabel') Vreau să rezerv &rarr; @endslot
@endctafooter

@include('_partials.footer')

@endsection
