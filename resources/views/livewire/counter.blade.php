<div>
    <!-- Counter title -->
    <p class="mb-2 text-xs font-semibold tracking-wide text-gray-800 uppercase">
        Livewire Counter
    </p>
    <!-- Display the count value -->
    <h2 class="mb-4 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
        {{ $count }}
    </h2>
    <!-- Buttons to increment and decrement the count value -->
    <div class="mt-10 flex items-center justify-center gap-x-6">
        <!-- Increment button -->
        <button wire:click="increment" class="rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Increment</button>
        <!-- Decrement button -->
        <button wire:click="decrement" class="rounded-md bg-red-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-red-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Decrement</button>
    </div>
</div>
