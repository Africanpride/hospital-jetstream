<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-wide w-full btn-sm bg-primary ']) }}>
    {{ $slot }}
</button>
