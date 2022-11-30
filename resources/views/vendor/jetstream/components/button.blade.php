<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-wide btn-sm bg-primary hover:bg-base-300 transition hover:text-primary hover:border-0']) }}>
    {{ $slot }}
</button>
