<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Service: ') . $service->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="mb-4">
                        <strong class="font-bold text-gray-700">Icon:</strong>
                        <div class="mt-2 w-16 h-16 p-2 border border-gray-300 rounded-md">
                            {!! $service->icon_svg !!} </div>
                    </div>

                    <div class="mb-4">
                        <strong class="font-bold text-gray-700">Title:</strong>
                        <p class="text-gray-900">{{ $service->title }}</p>
                    </div>

                    <div class="mb-4">
                        <strong class="font-bold text-gray-700">Order:</strong>
                        <p class="text-gray-900">{{ $service->order }}</p>
                    </div>

                    <div class="mb-4">
                        <strong class="font-bold text-gray-700">Link URL:</strong>
                        <p class="text-gray-900">{{ $service->link_url }}</p>
                    </div>

                    <div class="mb-4">
                        <strong class="font-bold text-gray-700">Description:</strong>
                        <p class="text-gray-900">{{ $service->description }}</p>
                    </div>

                    <div class="mb-4">
                        <strong class="font-bold text-gray-700">Icon SVG Code:</strong>
                        <pre class="bg-gray-100 p-2 rounded-md overflow-x-auto text-sm"><code>{{ e($service->icon_svg) }}</code></pre>
                    </div>

                    <div class="mt-6">
                        <a href="{{ route('admin.services.index') }}"
                            class="text-gray-600 hover:text-gray-900 mr-4">Back to list</a>
                        <a href="{{ route('admin.services.edit', $service) }}"
                            class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500">
                            Edit
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
