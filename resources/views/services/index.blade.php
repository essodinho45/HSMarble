<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Services') }}
            <a href="{{ route('services.create') }}"
                class="float-end inline-flex items-center px-4 py-2 bg-teal-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-teal-700 focus:bg-teal-700 active:bg-teal-900 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2 transition ease-in-out duration-150">
                Create
            </a>

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('status') === 'service-created')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-teal-600">{{ __('Service Created.') }}</p>
            @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <x-tables.table>
                        <x-slot name="content">
                            <thead>
                                <tr>
                                    <x-tables.head-cell>#</x-tables.head-cell>
                                    <x-tables.head-cell>Name</x-tables.head-cell>
                                    <x-tables.head-cell>Actions</x-tables.head-cell>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($services as $service)
                                    <tr>
                                        <x-tables.cell>{{ $service->id }}</x-tables.cell>
                                        <x-tables.cell>{{ $service->name }}</x-tables.cell>
                                        <x-tables.cell>
                                            <a href="{{ route('services.edit', $service) }}"
                                                class="float-start me-2 mt-2 md:mt-0 inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-teal-blue active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                                Edit
                                            </a>
                                            <form method="post" action="{{ route('services.destroy', $service) }}">
                                                @csrf
                                                @method('DELETE')
                                                <x-danger-button class="float-start me-2 mt-2 md:mt-0">
                                                    {{ __('Delete') }}
                                                </x-danger-button>
                                            </form>
                                        </x-tables.cell>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">No Data</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </x-slot>
                    </x-tables.table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
