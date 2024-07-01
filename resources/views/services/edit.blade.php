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
                    <form method="post" action="{{ route('services.update', $service) }}" class="mt-6 space-y-6"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                                :value="old('name', $service->name)" required autofocus autocomplete="name" />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>

                        <div>
                            <x-input-label for="content" :value="__('Content')" />
                            <x-text-area id="content" name="content"
                                class="mt-1 block w-full">{{ old('content', $service->content) }}</x-text-area>
                            <x-input-error class="mt-2" :messages="$errors->get('content')" />
                        </div>
                        <hr>
                        <x-input-label for="images" :value="__('Images')" />
                        <input id="images" name="images[]" type="file" class="mt-1 block w-full" multiple />
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        <div id="images" class="grid gap-2 grid-cols-1 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2">
                            @foreach ($service->images as $image)
                                <div>
                                    @if ($image->is_video)
                                        <video class="h-48 w-48 object-cover" controls>
                                            <source src="{{ $image->url }}">
                                        </video>
                                    @else
                                        <img class="h-48 w-48 object-cover" src="{{ $image->url }}">
                                    @endif
                                    <a href="{{ route('images.delete', [$image, $service]) }}"
                                        class="float-start me-2 mt-2 px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 active:bg-red-900 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                        Delete Image
                                    </a>
                                </div>
                            @endforeach
                            </ul>
                        </div>

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
