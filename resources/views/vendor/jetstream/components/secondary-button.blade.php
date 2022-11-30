<button {{ $attributes->merge(['type' => 'button', 'class' => 'btn btn-secondary btn-sm text-secondary-content hover:btn-secondary-focus hover:bg-base-300 transition hover:text-primary border-0 active:text-gray-800 active:bg-gray-50 text-sm disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
