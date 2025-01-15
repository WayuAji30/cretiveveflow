@props(['active' => false])

<a {{ $attributes }}
    class="p-3 ps-px sm:px-3 md:py-4 text-sm text-white hover:text-neutral-300 focus:outline-none focus:text-neutral-300"
    aria-current="page">{{ $slot }}</a>