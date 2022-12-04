<div {{ $attributes->merge(['class' => 'flex flex-col space-y-6']) }}>
    <div class="px-4 py-5 sm:p-6 bg-base-300 shadow sm:rounded-lg">

        <x-jet-section-title>
            <x-slot name="title">{{ $title }}</x-slot>
            <x-slot name="description">{{ $description }} </x-slot>
        </x-jet-section-title>
    </div>

    <div class="mt-3">
        <div class="px-4 py-5 sm:p-6 bg-base-300 shadow sm:rounded-lg">
            {{ $content }}
        </div>
    </div>
</div>
