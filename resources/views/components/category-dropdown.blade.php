<x-dropdown>
    <x-slot name="trigger">
        <button class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold w-32">
            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}
        </button>
    </x-slot>
    <x-dropdown-item href="/" :active="request()->routeIs('home')">All</x-dropdown-item>
    @foreach ($categories as $category)
        {{ isset($currentCategory) && $currentCategory->is($category) ? 'bg-blue-500 text-white' : '' }}
        <x-dropdown-item href="/posts?category={{ $category->slug }}"
                         :active="isset($currentCategory) && $currentCategory->is($category)">
            {{ ucwords($category->name) }}
        </x-dropdown-item>
    @endforeach
</x-dropdown>
