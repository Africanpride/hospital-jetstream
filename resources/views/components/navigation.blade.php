<aside class="bg-base-300 w-80">

    <div class="z-20  bg-opacity-90 backdrop-blur sticky top-0 items-center gap-2 px-4 py-2  lg:flex ">

        <a href="/" aria-current="page" aria-label="Homepage" class="flex justify-between space-x-2 ">
            <x-application-logo class="w-10 h-10 fill-current " />

            <div class="font-title text-primary inline-flex  transition-all duration-200 text-3xl">
                <span class="capitalize">{{ config('app.name') }}</span>

            </div>
        </a>

    </div>
    <div class="h-4"></div>

    <ul class="menu menu-compact flex flex-col p-0 px-4">

        <li>

            <a href="{{ url('/dashboard') }}" id=""
                class="{{ Request::segment(1) == 'dashboard' ? 'active' : '' }}  flex gap-4   ">
                <span class="flex-none">
                    <x-heroicon-o-building-office-2 class="w-8 h-8 text-current" />
                </span>
                <span class="flex-1 capitalize">Dashboard</span>
            </a>

        </li>

        <li>
            <a href="{{ url('/staff') }}" id=""
                class="{{ Request::segment(1) == 'staff' ? 'active' : '' }}  flex gap-4   ">
                <span class="flex-none">
                    <x-heroicon-o-users class="w-8 h-8 text-current" />
                </span>
                <span class="flex-1 capitalize">Staff</span>
            </a>
        </li>
        {{-- <li>
            <a href="{{ url('/users') }}" id=""
                class="{{ Request::segment(1) == 'users' ? 'active' : '' }}  flex gap-4   ">
                <span class="flex-none">
                    <x-heroicon-o-users class="w-8 h-8 text-current" />
                </span>
                <span class="flex-1">Users</span>
            </a>
        </li> --}}
        <li>
            <a href="{{ url('/appointments') }}" id=""
                class="{{ Request::segment(1) == 'appointments' ? 'active' : '' }}flex gap-4   ">
                <span class="flex-none">
                    <x-heroicon-o-newspaper class="w-8 h-8 text-current" />
                </span>
                <span class="flex-1 capitalize">appointments</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/ministers') }}" id=""
                class="{{ Request::segment(1) == 'ministers' ? 'active' : '' }}flex gap-4   ">
                <span class="flex-none">
                    <x-iconpark-teeth-o class="w-8 h-8 text-current" />
                </span>
                <span class="flex-1">Doctors</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/report') }}" id=""
                class="{{ Request::segment(1) == 'report' ? 'active' : '' }}flex gap-4   ">
                <span class="flex-none">
                    <x-carbon-event class="w-8 h-8 text-current" />
                </span>
                <span class="flex-1 capitalize">reports</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/test') }}" id=""
                class="{{ Request::segment(1) == 'test' ? 'active' : '' }}flex gap-4   ">
                <span class="flex-none">
                    <x-ri-slideshow-3-line class="w-8 h-8 text-current" />
                </span>
                <span class="flex-1 capitalize">Documentation</span>
            </a>
        </li>
    </ul>
<ul class="menu menu-compact my-3">
    <li></li>
</ul>
    <ul class="menu menu-compact flex flex-col p-0 px-4">

        <li>
            <a href="{{ route('dashboard') }}" id=""
                class="{{ Request::segment(1) == 'roles' ? 'active' : '' }} flex gap-4   ">
                <span class="flex-none">
                    <x-fluentui-people-team-32-o class="w-8 h-8 text-current" />
                </span>
                <span class="flex-1">Roles</span>
                <span class=" badge badge-secondary aspect-square">+</span>
            </a>
        </li>
        <li>
            <a href="{{ url('dashboard') }}" id=""
                class="{{ Request::segment(1) == 'permissions' ? 'active' : '' }} flex gap-4   ">
                <span class="flex-none">
                    <x-carbon-event class="w-8 h-8 text-current" />
                </span>
                <span class="flex-1">Permissions</span>
                <span class=" badge badge-secondary aspect-square">+</span>
            </a>
        </li>
        <li>
            <a href="{{ url('settings') }}" id=""
                class="{{ Request::segment(1) == 'settings' ? 'active' : '' }} flex gap-4   ">
                <span class="flex-none">
                    <x-fluentui-wrench-screwdriver-20-o class="w-8 h-8 text-current" />
                </span>
                <span class="flex-1">Settings</span>
            </a>
        </li>


    </ul>

</aside>
