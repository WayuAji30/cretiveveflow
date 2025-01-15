<x-layout title="Explore Insights That Matter - CreativeFlow"
    description="Explore additional insightful articles, tips, and trends on design, development, and creative processes at CreativeFlow. Stay updated with fresh content that sparks creativity and innovation."
    keywords="creative blog, design articles, development tips, creative process, innovation, design trends, technology insights, creative writing, more blog posts"
    author="CreativeFlow Team">
    <!-- Hero -->
    <div class="relative overflow-hidden">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-24">
            <div class="text-center">
                <h1 class="text-4xl sm:text-6xl font-bold text-gray-800 dark:text-neutral-200">
                    Explore Insights That Matter
                </h1>

                <p class="mt-3 text-gray-600 dark:text-neutral-400">
                    Find the answers to your questions and stay updated with the latest trends, ideas, and solutions
                    curated just for you.
                </p>

                <div class="mt-7 sm:mt-12 mx-auto max-w-xl relative">
                    <!-- Form -->
                    <form action="/posts" method="GET">
                        <div
                            class="relative z-10 flex gap-x-3 p-3 bg-white border rounded-lg shadow-lg shadow-gray-100 dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-gray-900/20">
                            <div class="w-full">
                                <label for="search"
                                    class="block text-sm text-gray-700 font-medium dark:text-white"><span
                                        class="sr-only">Search article</span></label>
                                <input value="{{ request('search') }}" type="search" name="search" id="search"
                                    class="py-2.5 px-4 block w-full border-transparent rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-transparent dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="Search article">
                            </div>
                            <div>
                                <button type="submit"
                                    class="size-[46px] inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                    <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="11" cy="11" r="8" />
                                        <path d="m21 21-4.3-4.3" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- End Form -->

                    <!-- SVG Element -->
                    <div class="hidden md:block absolute top-0 end-0 -translate-y-12 translate-x-20">
                        <svg class="w-16 h-auto text-orange-500" width="121" height="135" viewBox="0 0 121 135"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 16.4754C11.7688 27.4499 21.2452 57.3224 5 89.0164" stroke="currentColor"
                                stroke-width="10" stroke-linecap="round" />
                            <path d="M33.6761 112.104C44.6984 98.1239 74.2618 57.6776 83.4821 5" stroke="currentColor"
                                stroke-width="10" stroke-linecap="round" />
                            <path d="M50.5525 130C68.2064 127.495 110.731 117.541 116 78.0874" stroke="currentColor"
                                stroke-width="10" stroke-linecap="round" />
                        </svg>
                    </div>
                    <!-- End SVG Element -->

                    <!-- SVG Element -->
                    <div class="hidden md:block absolute bottom-0 start-0 translate-y-10 -translate-x-32">
                        <svg class="w-40 h-auto text-cyan-500" width="347" height="188" viewBox="0 0 347 188"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4 82.4591C54.7956 92.8751 30.9771 162.782 68.2065 181.385C112.642 203.59 127.943 78.57 122.161 25.5053C120.504 2.2376 93.4028 -8.11128 89.7468 25.5053C85.8633 61.2125 130.186 199.678 180.982 146.248L214.898 107.02C224.322 95.4118 242.9 79.2851 258.6 107.02C274.299 134.754 299.315 125.589 309.861 117.539L343 93.4426"
                                stroke="currentColor" stroke-width="7" stroke-linecap="round" />
                        </svg>
                    </div>
                    <!-- End SVG Element -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero -->

    <!-- Card Blog -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Grid -->
        <div class="grid {{ $posts->isEmpty() ? 'lg:grid-cols-1' : 'lg:grid-cols-2' }} gap-6">
            <!-- Card -->
            @forelse ( $posts as $post )
            <a class="group sm:flex rounded-xl focus:outline-none" href="/post/{{ $post->slug }}">
                <div class="shrink-0 relative rounded-xl overflow-hidden h-[200px] sm:w-[250px] sm:h-[350px] w-full">
                    <img class="size-full absolute top-0 start-0 object-cover" src="{{asset('storage/'.$post->image)}}"
                        alt="Blog Image">
                </div>

                <div class="grow">
                    <div class="p-4 flex flex-col h-full sm:p-6">
                        <div class="mb-3">
                            <p
                                class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-gray-100 text-gray-800 dark:bg-neutral-800 dark:text-neutral-200">
                                {{ $post->category[0] }}
                            </p>
                        </div>
                        <h3
                            class="text-lg sm:text-2xl font-semibold text-gray-800 group-hover:text-blue-600 group-focus:text-blue-600 dark:text-neutral-300 dark:group-hover:text-white dark:group-focus:text-white">
                            {{ $post->title }}
                        </h3>
                        <p class="mt-2 text-gray-600 dark:text-neutral-400">
                            {{ Str::limit(strip_tags($post->body), 80) }}
                        </p>

                        <div class="mt-5 sm:mt-auto">
                            <!-- Avatar -->
                            <div class="flex items-center">
                                <div class="shrink-0">
                                    <img class="size-[46px] rounded-full"
                                        src="{{asset('storage/'.$post->image_author)}}" alt="Avatar">
                                </div>
                                <div class="ms-2.5 sm:ms-4">
                                    <h4 class="font-semibold text-gray-800 dark:text-neutral-200">
                                        {{ $post->author }}
                                    </h4>
                                    <p class="text-xs text-gray-500 dark:text-neutral-500">
                                        {{ $post->created_at->diffForHumans() }}
                                    </p>
                                </div>
                            </div>
                            <!-- End Avatar -->
                        </div>
                    </div>
                </div>
            </a>
            @empty
            <div class="max-w-[50rem] flex flex-col mx-auto size-full">
                <!-- ========== MAIN CONTENT ========== -->
                <main id="content">
                    <div class="text-center py-10 px-4 sm:px-6 lg:px-8">
                        <h1 class="block text-7xl font-bold text-gray-800 sm:text-9xl dark:text-white">404</h1>
                        <p class="mt-3 text-gray-600 dark:text-neutral-400">Oops, something went wrong.</p>
                        <p class="text-gray-600 dark:text-neutral-400">Sorry, we couldn't find your page.</p>
                        <div class="mt-5 flex flex-col justify-center items-center gap-2 sm:flex-row sm:gap-3">
                            <a class="w-full sm:w-auto py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                href="../examples.html">
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m15 18-6-6 6-6" />
                                </svg>
                                Back to more blog
                            </a>
                        </div>
                    </div>
                </main>
                <!-- ========== END MAIN CONTENT ========== -->
            </div>
            @endforelse
            <!-- End Card -->
        </div>
        <!-- End Grid -->

        <!-- Pagination -->
        <div class="mt-20">
            {{ $posts->links() }}
        </div>
        <!-- End Pagination -->
    </div>
    <!-- End Card Blog -->


</x-layout>