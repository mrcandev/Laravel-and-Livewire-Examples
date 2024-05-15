<header class="absolute inset-x-0 top-0 z-50">
    <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="{{ route('home.index') }}" class="-m-1.5 p-1.5">
                <span class="sr-only">mrcandev</span>
                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
            </a>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            <a href="{{ route('home.index') }}" class="text-sm font-semibold leading-6 {{ ($activePage == 'home') ? 'text-blue-600' : 'text-gray-900' }}">Home</a>
            <a href="{{ route('counter.index') }}" class="text-sm font-semibold leading-6 {{ ($activePage == 'counter') ? 'text-blue-600' : 'text-gray-900' }}">Counter Example</a>
            <a href="{{ route('loadMore.index') }}" class="text-sm font-semibold leading-6 {{ ($activePage == 'loadMore') ? 'text-blue-600' : 'text-gray-900' }}">Load More Example</a>
            <a href="{{ route('liveSearch.index') }}" class="text-sm font-semibold leading-6 {{ ($activePage == 'liveSearch') ? 'text-blue-600' : 'text-gray-900' }}">Live Search Example</a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="https://github.com/mrcandev" target="_blank" class="text-sm font-semibold leading-6 text-gray-900">mrcandev <span aria-hidden="true">&rarr;</span></a>
        </div>
    </nav>
</header>
