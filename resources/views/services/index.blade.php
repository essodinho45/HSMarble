<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Services') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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
                                        <x-tables.cell>Actions</x-tables.cell>
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
