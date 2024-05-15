<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="mb-10 border-t border-b divide-y">

        <!-- Check if there are blogs to display -->
        @if(!empty($blogs))
            <ul class="list-group mt-3">
                @foreach($blogs as $blog)
                    <div class="grid py-8 sm:grid-cols-4">
                        <div class="mb-4 sm:mb-0">
                            <div class="space-y-1 text-xs font-semibold tracking-wide uppercase">
                                <!-- Display blog category and date -->
                                <a href="/" class="transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800" aria-label="Category">{{ $blog['category'] }}</a>
                                <p class="text-gray-600">{{ $blog['date'] }}</p>
                            </div>
                        </div>
                        <div class="sm:col-span-3 lg:col-span-2">
                            <div class="mb-3">
                                <!-- Display blog title -->
                                <a href="/" aria-label="Article" class="inline-block text-black transition-colors duration-200 hover:text-deep-purple-accent-700">
                                    <p class="text-3xl font-extrabold leading-none sm:text-4xl xl:text-4xl">{{ $blog['title'] }}</p>
                                </a>
                            </div>
                            <!-- Display blog body -->
                            <p class="text-gray-700">{{ $blog['body'] }}</p>
                        </div>
                    </div>
                @endforeach
            </ul>
        @else
            <!-- Display message when no blogs found -->
            <p class="mt-3">No results found for "{{ $query }}"</p>
        @endif
    </div>

    <!-- Check if there are more blogs to load -->
    @if($totalBlogs > $loadedBlogsCount + $perPage)
        <div class="text-center">
            <!-- Button to load more blogs -->
            <button wire:click="loadMore" aria-label="Load More" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">
                Load More
                <svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
                    <path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z"></path>
                </svg>
            </button>
        </div>
    @endif
</div>
