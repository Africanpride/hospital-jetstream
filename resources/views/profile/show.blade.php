<x-app-layout>
    <x-admin.pageheader  model-name="Profile" description="Profile Details" add-button=false />
        <div class="w-full">

        @if (Auth::check())
            <div class="w-full">



                <div x-data="{
                    openTab: 1,
                    activeClasses: 'tab-active',
                    inactiveClasses: 'tab'
                }" class="p-6">
                    <ul class="flex border-b">
                        <li @click="openTab = 1" :class="{ '-mb-px': openTab === 1 }" class="-mb-px mr-1">
                            <a :class="openTab === 1 ? activeClasses : inactiveClasses" class="tab tab-bordered "
                                href="#">

                                <p>Profile</p>
                            </a>
                        </li>
                        <li @click="openTab = 2" :class="{ '-mb-px': openTab === 2 }" class="mr-1">
                            <a :class="openTab === 2 ? activeClasses : inactiveClasses" class="tab tab-bordered"
                                href="#">Password</a>
                        </li>
                        <li @click="openTab = 3" :class="{ '-mb-px': openTab === 3 }" class="mr-1">
                            <a :class="openTab === 3 ? activeClasses : inactiveClasses" class="tab tab-bordered"
                                href="#">2FA Settings</a>
                        </li>
                        <li @click="openTab = 4" :class="{ '-mb-px': openTab === 4 }" class="mr-1">
                            <a :class="openTab === 4 ? activeClasses : inactiveClasses" class="tab tab-bordered"
                                href="#">Browser Sessions</a>
                        </li>
                        <li @click="openTab = 5" :class="{ '-mb-px': openTab === 5 }" class="mr-1">
                            <a :class="openTab === 5 ? activeClasses : inactiveClasses" class="tab tab-bordered"
                                href="#">Delete Your Account</a>
                        </li>
                    </ul>
                    <div class="w-full pt-4">
                        <div x-show="openTab === 1">

                            <div class="flex items-center justify-center space-y-5 mt-5">


                                <div class="mx-auto w-full">
                                    @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                                        @livewire('profile.update-profile-information-form')

                                        {{-- <x-jet-section-border /> --}}
                                    @endif
                                </div>
                            </div>

                        </div>
                        <div x-show="openTab === 2">
                            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                                <div class="mt-10 sm:mt-0">
                                    @livewire('profile.update-password-form')
                                </div>

                                {{-- <x-jet-section-border /> --}}
                            @endif
                        </div>
                        <div x-show="openTab === 3">

                            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                                <div class="mt-10 sm:mt-0">
                                    @livewire('profile.two-factor-authentication-form')
                                </div>

                                {{-- <x-jet-section-border /> --}}
                            @endif
                        </div>
                        <div x-show="openTab === 4">
                            @livewire('profile.logout-other-browser-sessions-form')
                        </div>
                        <div x-show="openTab === 5">
                            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                                {{-- <x-jet-section-border /> --}}

                                <div class="mt-10 sm:mt-0">
                                    @livewire('profile.delete-user-form')
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</x-app-layout>
