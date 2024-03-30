@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 bg-gray-100 text-gray-700'
            : 'flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700';
@endphp

<style>
    .sub_menu[open] .sub_menu-open-icon {
        --tw-rotate: -180deg;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }
</style>

<details class="sub_menu [&_summary::-webkit-details-marker]:hidden">
    <summary {{ $attributes->merge(['class' => $classes]) }}>
        <div class="flex items-center gap-3">
            {{ $menu }}
        </div>

        <span class="shrink-0 transition duration-300 sub_menu-open-icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd" />
            </svg>
        </span>
    </summary>

    <ul class="mt-2 space-y-1 px-4">
        {{ $content }}
    </ul>
</details>
