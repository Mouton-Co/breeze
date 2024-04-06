<button
    {{ $attributes->merge([
        'class' => 'h-8 rounded-sm bg-blue-400 text-sm font-extrabold text-white shadow hover:bg-blue-500
        transition duration-150 ease-in-out',
    ]) }}>
    {{ $slot }}
</button>
