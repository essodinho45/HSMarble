<x-app-layout>
    @push('custom-scripts')
        @vite(['resources/js/textEditor.js'])
    @endpush
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Services') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="post" action="{{ route('services.store') }}" class="mt-6 space-y-6"
                        enctype="multipart/form-data">
                        @csrf
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                                :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>

                        <div>
                            <x-input-label for="content" :value="__('Content')" />
                            <x-text-area id="content" name="content"
                                class="mt-1 block w-full">{{ old('content') }}</x-text-area>
                            <x-input-error class="mt-2" :messages="$errors->get('content')" />
                        </div>

                        <x-input-label for="images" :value="__('Images')" />
                        <input id="images" name="images[]" type="file" class="mt-1 block w-full" multiple />
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>

                            @if (session('error'))
                                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm text-red-600">{{ session('error') }}</p>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
