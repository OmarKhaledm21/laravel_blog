@props(['trigger'])

<div x-data="{ show: false }">
    {{-- Trigger --}}
    <div @click="show = !show">
        {{ $trigger }}
    </div>
    {{-- Links --}}
    <div x-show="show" class="py-2 absolute bg-gray-100 w-full mt-2 rounded-xl max-h-52 overflow-auto">
        {{ $slot }}
    </div>
</div>
{{-- 
@foreach ($categories as $category)
    <a href="/categories/{{ $category->slug }}"
        class="block text-left px-3 text-sm leading-6 hover:bg-gray-300 
                {{ isset($currentCategory) && $currentCategory->is($category) ? 'bg-blue-500 text-white' : '' }}">
        {{ ucwords($category->name) }}</a>
@endforeach --}}
