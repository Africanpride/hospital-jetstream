<x-app-layout>


    <div class="bg-base-200 rounded-2xl w-full px-6 py-4 flex items-center text-gray-800 justify-between ">
        <div class="flex items-center ">
            <div>
                <div class="text-xs font-semibold">Attendance</div>
                <div class="text-xs text-gray-500 mt-1">28 Dec 2021</div>
            </div>
            <div class="bg-base-100 px-5 pr-6 py-2 ml-5 rounded-l-lg font-semibold text-gray-700">10:36 Hrs
            </div>
            <div
                class="bg-success hover:bg-slate-600 cursor-pointer px-4 py-2  -ml-2 rounded-lg font-semibold text-gray-50 text-xs self-stretch flex items-center tracking-wide">
                Check-in</div>
            <div class="ml-12 flex items-center self-stretch ">
                <span class="text-xs font-semibold">Status</span>
                <div
                    class="bg-base-100 px-5  py-2 ml-3 rounded-lg font-semibold text-info flex items-center  self-stretch justify-between">
                    <span class="text-xs font-semibold inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-2 w-2 fill-success mr-1" viewBox="0 0 24 24">
                            <path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2z"></path>
                        </svg>
                        <span class="ml-1 w-20">Available</span>
                    </span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5  stroke-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </span>
                </div>

            </div>
        </div>

        <div
            class="flex items-center space-x-2 text-xs bg-base-300 hover:bg-base-200  cursor-pointer text-info px-6 py-3 rounded-lg">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                    </path>
                </svg>
            </span>
            <span>
                Meeting Now
            </span>
        </div>
    </div>

    <section class="grid grid-cols-1 md:grid-cols-3 md:gap-4 my-4 md:mb-0 mt-6">

        <!-- Members -->
        <section class="col-span-2">
            <div class="text-xs flex items-center justify-between w-full">
                <span class="font-semibold">Staff members ({{ App\Models\User::count() }})</span>
                <a href="#" class="text-accent-400 font-medium text-xs">View all</a>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-4 ">


                <div
                    class="aspect-square rounded-2xl bg-base-200 flex justify-center items-center flex-col text-accent-400 text-sm
                        hover:shadow hover:text-accent-500 hover:font-medium group">
                    <span
                        class="bg-base-100 rounded-full group-hover:text-accent-500  text-accent-400 p-2.5
                            border border-current hover:border-secondary-focus  border-dashed mb-3">
                        <label for="my-modal-3" class="cursor-pointer ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 stroke-current" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v16m8-8H4"></path>
                            </svg>
                        </label>
                    </span>
                    <label for="my-modal-3" class="cursor-pointer ">
                        <div>Add New</div>
                    </label>
                </div>


                @forelse ($users as $user)
                {{-- @if ($loop->first) @continue  @endif --}}
                {{-- Exclude Current user from Staff list --}}
                @if($user->id === Auth::user()->id) @continue  @endif

                    <div
                        class="relative aspect-square rounded-2xl bg-base-200 flex justify-center items-center flex-col text-gray-500 text-sm
hover:ring-2 hover:ring-accent-300">
                        <a href="#" class="absolute top-3 right-3 text-gray-400 hover:text-accent-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z">
                                </path>
                            </svg>
                        </a>
                        <span class="relative">
                            <img src="{{ $user->profile_photo_url }}" class="w-14 h-14 rounded-full mb-3" alt="{{ $user->full_name }}" srcset="">

                            @if ($user->isOnline())
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-3 w-3  fill-green-500 stroke-white stroke-2 absolute bottom-3 right-1"
                                    viewBox="0 0 24 24">
                                    <path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2z"></path>
                                </svg>
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-3 w-3  fill-red-500 stroke-white stroke-2 absolute bottom-3 right-1"
                                    viewBox="0 0 24 24">
                                    <path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2z"></path>
                                </svg>
                            @endif
                        </span>
                        <div class="">{{ $user->full_name }}</div>
                        <div class="text-xxs text-gray-400 mt-1">-</div>
                    </div>

                @empty

                    {{ __('Account is Currently Empty') }}
                @endforelse
            </div>
        </section>
        <!-- /Members -->



        <!-- profile -->
        <section class="bg-base-200 h-full md:col-span-1 md:my-0 my-4 pb-6 pt-10 px-6 rounded-2xl relative">
            <a href="#" class="absolute top-4 right-4 text-gray-400 hover:text-accent-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z">
                    </path>
                </svg>
            </a>
            <div class="relative flex justify-center items-center flex-col text-gray-500 text-sm">

                <span class="relative">
                    <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->full_name }}"
                        class="w-14 h-14 rounded-full mb-3" srcset="">
                    @auth
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-3 w-3  fill-green-500 stroke-white stroke-2 absolute bottom-3 right-1"
                            viewBox="0 0 24 24">
                            <path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2z"></path>
                        </svg>
                    @endauth
                </span>
                <div class="">{{ Auth::user()->full_name }}</div>
                <div class="text-xxs text-gray-400 mt-1">{{ Auth::user()->name ?? 'Add User Role' }}</div>
            </div>



            <div class="mt-8 text-xs">
                <div class="text-gray-500">Email</div>
                <div class="mt-1.5 font-semibold ">{{ Auth::user()->email }}</div>

                <div class="text-gray-500 mt-5">Telephone</div>
                <div class="mt-1.5 font-semibold">{{ Auth::user()->telephone ?? ' Telephone Number' }}</div>

                <div class="text-gray-500 mt-5">Profile</div>
                <div class="mt-1.5 font-semibold">{{ __('Add Profile information') }}</div>

            </div>
        </section>
        <!-- /profile -->

    </section>

</x-app-layout>
