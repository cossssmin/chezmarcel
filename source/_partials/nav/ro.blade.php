<nav class="nav flex items-center fixed w-full bg-footer z-40 h-12 sm:h-20 pin-r pin-t">
    <div class="container flex items-center justify-between">
        <h1 class="font-pinyon font-light text-2xl sm:text-4xl">
            <a href="{{ $page->baseUrl }}/" class="antialiased text-white no-underline px-2">{{ $page->company->name }}</a>
        </h1>
        <ul id="menu" class="absolute w-48 lg:w-auto lg:relative bg-footer hidden list-reset lg:flex md:justify-around pl-4 lg:p-1 xl:pr-0 md:w-1/3 mt-12 sm:mt-20 lg:mt-0 lg:-mr-2 pin-r pin-t text-right">
            <li>
                <a href="{{ $page->baseUrl }}/camere/" class="inline-block text-sm sm:text-base p-4">Camere</a>
            </li>
            <li>
                <a href="{{ $page->baseUrl }}/facilitati/" class="inline-block text-sm sm:text-base p-4">Facilități</a>
            </li>
            <li>
                <a href="{{ $page->baseUrl }}/contact/" class="inline-block text-sm sm:text-base p-4">Contact</a>
            </li>
            <li class="hidden lg:block lg:fixed pin-r">
                <a href="{{ $page->baseUrl . '/' . $page->slugs->en }}/" class="inline-block text-sm sm:text-base p-4">EN</a>
            </li>
            <li class="block lg:hidden lg:fixed pin-r">
                <a href="{{ $page->baseUrl . '/' . $page->slugs->en }}/" class="inline-block text-sm sm:text-base p-4">English version</a>
            </li>
        </ul>
    </div>
    <span id="menu-toggle" class="block absolute pin-r pin-t lg:hidden text-white bg-black px-4 py-2 mt-2 sm:mt-6 leading-none text-right">
        <svg id="menu-open" class="fill-current w-4 h-4 cursor-pointer" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path></svg>
        <svg id="menu-close" class="hidden fill-current w-4 h-4 cursor-pointer" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"></path></svg>
    </span>
</nav>