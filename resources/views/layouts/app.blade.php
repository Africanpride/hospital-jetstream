<x-header />

<body>
    <div class=" drawer drawer-mobile">
        <input id="drawer" type="checkbox" class="drawer-toggle">
        <div class="drawer-content" style="scroll-behavior: smooth; scroll-padding-top: 5rem;">
            <div
                class="sticky top-0 z-30 flex h-16 w-full justify-center bg-opacity-90 backdrop-blur   bg-base-100 text-base-content  ">

                <x-topbarcontent />
            </div>

            <div class="px-4 py-4">
                {{ $slot }}
            </div>
            <x-footer />
        </div>


        <div class="drawer-side" style="scroll-behavior: smooth; scroll-padding-top: 5rem;"><label for="drawer"
                class="drawer-overlay"></label>

            <x-navigation />
        </div>

    </div>

    {{-- @laravelViewsScripts --}}
    {{-- @stack('modals')
    @livewireScripts
</body>
</html> --}}
