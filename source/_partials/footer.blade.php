<footer class="footer bg-bottom bg-contain xl:bg-auto bg-grey-lightest sm:bg-top sm:bg-footer pb-8 sm:pb-16 sm:pt-80 lg:pt-120 xl:pt-200">
    <div class="container flex flex-wrap text-white px-6 lg:pt-8">
        <div class="w-1/2 sm:w-1/4">
            <h5 class="font-normal text-lg text-footer-lighter sm:text-splash-logo mb-6">Navigație</h5>
            <ul class="list-reset text-sm">
                <li>
                    <a href="{{ $page->baseUrl }}/camere/" class="inline-block text-footer-white sm:text-splash-logo no-underline hover:text-white py-1 mb-2">Camere</a>
                </li>
                <li>
                    <a href="{{ $page->baseUrl }}/facilitati/" class="inline-block text-footer-white sm:text-splash-logo no-underline hover:text-white py-1 mb-2">Facilități</a>
                </li>
                <li>
                    <a href="{{ $page->baseUrl }}/imagini/" class="inline-block text-footer-white sm:text-splash-logo no-underline hover:text-white py-1 mb-2">Imagini</a>
                </li>
                <li>
                    <a href="{{ $page->baseUrl }}/contact/" class="inline-block text-footer-white sm:text-splash-logo no-underline hover:text-white py-1 mb-2">Contact</a>
                </li>
            </ul>
        </div>
        <div class="w-1/2 sm:w-1/4">
            <h5 class="font-normal text-lg text-footer-lighter sm:text-splash-logo mb-6">Ne găsești și pe</h5>
            <ul class="list-reset text-sm">
                <li>
                    <a href="{{ $page->links->booking }}" rel="nofollow noopener" target="_blank" class="inline-block text-footer-white sm:text-splash-logo no-underline hover:text-white py-1 mb-2">Booking.com</a>
                </li>
                <li>
                    <a href="{{ $page->links->facebook }}" rel="nofollow noopener" target="_blank" class="inline-block text-footer-white sm:text-splash-logo no-underline hover:text-white py-1 mb-2">Facebook</a>
                </li>
            </ul>
        </div>
        <div class="w-full sm:w-1/2 mt-8 mb-16 sm:my-0 text-left sm:text-right">
            <a href="{{ $page->baseUrl }}/" class="inline-block font-pinyon text-5xl no-underline text-footer-light sm:text-splash-logo hover:text-splash-logo mb-8">Chez Marcel</a>
            <ul class="list-reset text-footer-lightest sm:text-splash-logo leading-normal">
                <li class="mb-4">
                    <p>Republicii 11, Sinaia, 106100</p>
                    <p>Prahova, Romania</p>
                </li>
                <li class="mb-4">
                    <p>
                        GPS: <a class="text-footer-lightest sm:text-splash-logo" rel="nofollow noopener" target="_blank" href="https://www.google.com/maps/place/45%C2%B020'39.6%22N+25%C2%B032'56.3%22E/@45.3443279,25.5484268,199m/data=!3m2!1e3!4b1!4m6!3m5!1s0x0:0x0!7e2!8m2!3d45.3443265!4d25.5489735">45.344327, 25.548974</a>
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
