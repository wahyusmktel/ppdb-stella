<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Service: ') . $service->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if ($errors->any())
                        <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                            <strong>Whoops!</strong> There were some problems with your input.
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.services.update', $service) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 gap-6">
                            <div>
                                <x-input-label for="title" :value="__('Title')" />
                                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title"
                                    :value="old('title', $service->title)" required autofocus />
                            </div>

                            <div>
                                <x-input-label for="order" :value="__('Order')" />
                                <x-text-input id="order" class="block mt-1 w-full" type="number" name="order"
                                    :value="old('order', $service->order)" required />
                            </div>

                            <div>
                                <x-input-label for="link_url" :value="__('Link URL (optional)')" />
                                <x-text-input id="link_url" class="block mt-1 w-full" type="url" name="link_url"
                                    :value="old('link_url', $service->link_url)" />
                            </div>

                            <div>
                                <x-input-label for="description" :value="__('Description')" />
                                <textarea id="description" name="description" rows="4"
                                    class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">{{ old('description', $service->description) }}</textarea>
                            </div>

                            <div>
                                <x-input-label for="icon_svg" :value="__('Icon SVG Code')" />
                                <textarea id="icon_svg" name="icon_svg" rows="6"
                                    class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                    placeholder="<svg ...> ... </svg>">{{ old('icon_svg', $service->icon_svg) }}</textarea>
                            </div>

                            <div class_alias="flex items-center justify-end mt-4">
                                <a href="{{ route('admin.services.index') }}"
                                    class="text-gray-600 hover:text-gray-900 mr-4">Cancel</a>
                                <x-primary-button>
                                    {{ __('Update') }}
                                </x-primary-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
