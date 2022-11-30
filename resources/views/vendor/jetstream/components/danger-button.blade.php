<button {{ $attributes->merge(['type' => 'button', 'class' => 'btn btn-warning btn-sm text-warning-content hover:btn-warning-focus hover:bg-base-300 transition hover:text-warning border-0 active:text-gray-800 active:bg-gray-50 text-sm disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
