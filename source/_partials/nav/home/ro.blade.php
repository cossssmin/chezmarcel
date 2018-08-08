<nav class="nav flex items-center fixed md:w-full md:bg-black z-30 p-2 pin-r pin-t">
    <div class="container">
        <span id="menu-toggle" class="block md:hidden text-white bg-black px-3 py-2 mt-2 leading-none text-right">
            <svg id="menu-open" class="fill-current w-4 h-4 cursor-pointer" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path></svg>
            <svg id="menu-close" class="hidden fill-current w-4 h-4 cursor-pointer" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"></path></svg>
        </span>
        <ul id="menu" class="hidden md:flex md:justify-around bg-black list-reset w-48 md:w-1/3 md:mx-auto pl-4 md:p-1 text-right">
            <li>
                <a href="{{ $page->baseUrl }}/camere/" class="inline-block text-sm sm:text-base p-1">Camere</a>
            </li>
            <li>
                <a href="{{ $page->baseUrl }}/facilitati/" class="inline-block text-sm sm:text-base p-1">Facilități</a>
            </li>
            <li>
                <a href="{{ $page->baseUrl }}/imagini/" class="inline-block text-sm sm:text-base p-1">Imagini</a>
            </li>
            <li>
                <a href="{{ $page->baseUrl }}/contact/" class="inline-block text-sm sm:text-base p-1">Contact</a>
            </li>
            <li class="hidden md:block md:fixed pin-r">
                <a href="{{ $page->baseUrl }}/en/" class="inline-block text-sm sm:text-base p-1">EN</a>
            </li>
            <li class="block md:hidden md:fixed pin-r">
                <a href="{{ $page->baseUrl }}/en/" class="inline-block text-sm sm:text-base p-1">English version</a>
            </li>
        </ul>
    </div>
</nav>
