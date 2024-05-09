<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="post" action="{{ route('products.store') }}" class="mt-6 space-y-6">
                @csrf

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" required
                         autocomplete="name" />
                </div>

                <!-- Price -->

                <div class="mt-4">
                    <x-input-label for="price" :value="__('Price')" />
                    <x-text-input id="price" class="block mt-1 w-full" type="number" name="price"
                         required autocomplete="price" />
                </div>

                {{-- <div class="flex items-center justify-end mt-4"> --}}

                    {{-- <x-primary-button class="ms-4">
                        {{ __('Add') }}
                    </x-primary-button> --}}

                    <button type="submit">Add</button>

                {{-- </div> --}}

            </form>
        </div>
    </div>
</x-app-layout>
