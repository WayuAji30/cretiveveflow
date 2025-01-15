<x-layout>
    <!-- Hire Us -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Grid -->
        <div class="grid md:grid-cols-2 items-start gap-12">
            <div>
                <h1 class="text-3xl font-bold text-gray-800 sm:text-4xl lg:text-5xl lg:leading-tight dark:text-white">
                    Contact us
                </h1>
                <p class="mt-1 md:text-lg text-gray-800 dark:text-neutral-200">
                    We help brands and platforms turn big ideas into beautiful digital products and experiences.
                </p>

                <div class="mt-8">
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">
                        What can I expect?
                    </h2>

                    <ul class="mt-2 space-y-2">
                        <li class="flex gap-x-3">
                            <svg class="shrink-0 mt-0.5 size-5 text-gray-600 dark:text-neutral-400"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                            <span class="text-gray-600 dark:text-neutral-400">
                                Industry-leading design
                            </span>
                        </li>

                        <li class="flex gap-x-3">
                            <svg class="shrink-0 mt-0.5 size-5 text-gray-600 dark:text-neutral-400"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                            <span class="text-gray-600 dark:text-neutral-400">
                                Developer community support
                            </span>
                        </li>

                        <li class="flex gap-x-3">
                            <svg class="shrink-0 mt-0.5 size-5 text-gray-600 dark:text-neutral-400"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                            <span class="text-gray-600 dark:text-neutral-400">
                                Simple and affordable
                            </span>
                        </li>
                    </ul>
                </div>

                <div class="mt-10 flex items-center gap-x-5">
                    <!-- Avatar Group -->
                    <div class="flex -space-x-2">
                        <img class="inline-block size-8 rounded-full ring-2 ring-white dark:ring-neutral-900"
                            src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                            alt="Avatar">
                        <img class="inline-block size-8 rounded-full ring-2 ring-white dark:ring-neutral-900"
                            src="https://images.unsplash.com/photo-1531927557220-a9e23c1e4794?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2.5&w=320&h=320&q=80"
                            alt="Avatar">
                        <img class="inline-block size-8 rounded-full ring-2 ring-white dark:ring-neutral-900"
                            src="https://images.unsplash.com/photo-1541101767792-f9b2b1c4f127?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=3&w=320&h=320&q=80"
                            alt="Avatar">
                        <span
                            class="inline-flex justify-center items-center size-8 rounded-full bg-blue-600 text-white ring-2 ring-white">
                            <svg class="size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                        </span>
                    </div>
                    <!-- End Avatar Group -->
                    <span class="text-sm text-gray-500 dark:text-neutral-500">
                        Trusted by over 37k reader
                    </span>
                </div>
            </div>
            <!-- End Col -->

            <div class="relative">
                <!-- Card -->
                <div class="flex flex-col border rounded-xl p-4 sm:p-6 lg:p-10 dark:border-neutral-700">
                    @if (session('success'))
                    <div class="mb-4 text-blue-600">
                        <div id="dismiss-alert"
                            class="hs-removing:translate-x-5 hs-removing:opacity-0 transition duration-300 bg-blue-50 border border-blue-200 text-sm text-blue-800 rounded-lg p-4 dark:bg-teal-800/10 dark:border-teal-900 dark:text-teal-500"
                            role="alert" tabindex="-1" aria-labelledby="hs-dismiss-button-label">
                            <div class="flex">
                                <div class="shrink-0">
                                    <svg class="shrink-0 size-4 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z">
                                        </path>
                                        <path d="m9 12 2 2 4-4"></path>
                                    </svg>
                                </div>
                                <div class="ms-2">
                                    <h3 id="hs-dismiss-button-label" class="text-sm font-medium">
                                        {{ session('success') }}
                                    </h3>
                                </div>
                                <div class="ps-3 ms-auto">
                                    <div class="-mx-1.5 -my-1.5">
                                        <button type="button"
                                            class="inline-flex bg-teal-50 rounded-lg p-1.5 text-blue-500 hover:bg-blue-100 focus:outline-none focus:bg-blue-100 dark:bg-transparent dark:text-blue-600 dark:hover:bg-teal-800/50 dark:focus:bg-teal-800/50"
                                            data-hs-remove-element="#dismiss-alert">
                                            <span class="sr-only">Dismiss</span>
                                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M18 6 6 18"></path>
                                                <path d="m6 6 12 12"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                        Fill in the form
                    </h2>

                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="mt-6 grid gap-4 lg:gap-6">
                            <!-- Grid -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                                <div>
                                    <label for="first_name"
                                        class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">First
                                        Name</label>
                                    <input type="text" name="first_name" id="first_name"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                </div>

                                <div>
                                    <label for="last_name"
                                        class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Last
                                        Name</label>
                                    <input type="text" name="last_name" id="last_name"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                </div>
                            </div>
                            <!-- End Grid -->

                            <div>
                                <label for="email"
                                    class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Work
                                    Email</label>
                                <input type="email" name="email" id="email" autocomplete="email"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            </div>

                            <div>
                                <label for="details"
                                    class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Details</label>
                                <textarea id="details" name="details" rows="4"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"></textarea>
                            </div>
                        </div>

                        <div class="mt-6 grid">
                            <button type="submit"
                                class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Send
                                Message</button>
                        </div>
                    </form>
                    <!-- End Grid -->

                    <div class="mt-3 text-center">
                        <p class="text-sm text-gray-500 dark:text-neutral-500">
                            We'll get back to you in 1-2 business days.
                        </p>
                    </div>
                </div>
                <!-- End Card -->
            </div>
            <!-- End Col -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Hire Us -->
</x-layout>