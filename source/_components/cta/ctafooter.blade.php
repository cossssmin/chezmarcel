<section class="bg-grey-lightest pb-10 sm:pb-0 xl:py-16">
    <div class="container flex flex-col items-center lg:-mb-32 mb-16 sm:-mb-8 xl:-mb-72">
        <h4 class="font-light text-2xl sm:text-4xl text-black mb-2 sm:mb-4">{{ $title ?? 'Rezervări simple și rapide' }}</h4>
        <p class="text-grey-dark text-sm text-center mb-8">{{ $subtitle ?? 'Sună-l pe Marcel sau rezervă prin Booking.com' }}</p>
        <a href="{{ $url ?? '/contact/' }}" class="border border-blue text-blue hover:bg-blue hover:text-white hover:shadow-md rounded px-6 py-4 no-underline z-10">
            {{ $buttonLabel ?? 'Vreau să rezerv &rarr;' }}
        </a>
    </div>
</section>
