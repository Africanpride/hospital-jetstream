<x-app-layout>
    <div class="bg-base-200 rounded-2xl w-full px-6 py-4 flex items-center text-gray-800 justify-between ">
        <div class="flex items-center ">
            <div>
                <div class="text-xs font-semibold">Attendance</div>
                <div class="text-xs text-gray-500 mt-1">28 Dec 2021</div>
            </div>
            <div class="bg-base-100 px-5 pr-6 py-2 ml-5 rounded-l-lg font-semibold text-gray-700">10:36 Hrs
            </div>
            <div class="bg-success hover:bg-slate-600 cursor-pointer px-4 py-2  -ml-2 rounded-lg font-semibold text-gray-50 text-xs self-stretch flex items-center tracking-wide">
                Check-in</div>
            <div class="ml-12 flex items-center self-stretch ">
                <span class="text-xs font-semibold">Status</span>
                <div class="bg-base-100 px-5  py-2 ml-3 rounded-lg font-semibold text-info flex items-center  self-stretch justify-between">
                    <span class="text-xs font-semibold inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-2 w-2 fill-success-500 mr-1" viewBox="0 0 24 24">
                            <path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2z"></path>
                        </svg>
                        <span class="ml-1 w-20">Available</span>
                    </span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5  stroke-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </span>
                </div>

            </div>
        </div>

        <div class="flex items-center space-x-2 text-xs bg-base-800 hover:bg-base-900  cursor-pointer text-info px-6 py-3 rounded-lg">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                </svg>
            </span>
            <span>
                Meeting Now
            </span>
        </div>
    </div>

    <section class="grid grid-cols-3 gap-x-6 mt-6">

        <!-- Members -->
        <section class="col-span-2">
            <div class="text-xs flex items-center justify-between w-full">
                <span class="font-semibold">Team members (12)</span>
                <a href="#" class="text-accent-400 font-medium text-xs">View all</a>
            </div>

            <div class="grid grid-cols-4 gap-x-4 mt-4 ">
                <div class="aspect-square rounded-2xl bg-base-200 flex justify-center items-center flex-col text-accent-400 text-sm
                    hover:shadow hover:text-accent-500 hover:font-medium cursor-pointer group">
                    <span class="bg-accent-100 rounded-full group-hover:text-accent-500  text-accent-400 p-2.5 border border-accent-300  border-dashed mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                    </span>
                    <div>Add New</div>
                </div>



                <div class="relative aspect-square rounded-2xl bg-base-200 flex justify-center items-center flex-col text-gray-500 text-sm
                    hover:ring-2 hover:ring-accent-200">
                    <a href="#" class="absolute top-3 right-3 text-gray-400 hover:text-accent-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                        </svg>
                    </a>
                    <span class="relative">
                        <img src="https://api.lorem.space/image/face?w=44&amp;h=44&amp;hash=ic7a5vp4" class="w-14 h-14 rounded-full mb-3" alt="" srcset="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3  fill-green-500 stroke-white stroke-2 absolute bottom-3 right-1" viewBox="0 0 24 24">
                                <path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2z"></path>
                            </svg>
                    </span>
                    <div class="">Mac Bean</div>
                    <div class="text-xxs text-gray-400 mt-1">Product Designer</div>
                </div>
                <div class="relative aspect-square rounded-2xl bg-base-200 flex justify-center items-center flex-col text-gray-500 text-sm
                    hover:ring-2 hover:ring-accent-200">
                    <a href="#" class="absolute top-3 right-3 text-gray-400 hover:text-accent-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                        </svg>
                    </a>
                    <span class="relative">
                        <img src="https://api.lorem.space/image/face?w=44&amp;h=44&amp;hash=ic7a5vp4" class="w-14 h-14 rounded-full mb-3" alt="" srcset="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3  fill-green-500 stroke-white stroke-2 absolute bottom-3 right-1" viewBox="0 0 24 24">
                                <path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2z"></path>
                            </svg>
                    </span>
                    <div class="">Mac Bean</div>
                    <div class="text-xxs text-gray-400 mt-1">Product Designer</div>
                </div>

                <div class="relative aspect-square rounded-2xl bg-base-200 flex justify-center items-center flex-col text-gray-500 text-sm
                    hover:ring-2 hover:ring-accent-200">
                    <a href="#" class="absolute top-3 right-3 text-gray-400 hover:text-accent-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                        </svg>
                    </a>
                    <span class="relative">
                        <img src="https://api.lorem.space/image/face?w=44&amp;h=44&amp;hash=ic7advp4" class="w-14 h-14  rounded-full mb-3" alt="" srcset="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3  fill-red-500 stroke-white stroke-2 absolute bottom-3 right-1" viewBox="0 0 24 24">
                                <path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2z"></path>
                            </svg>
                    </span>
                    <div class="">Jane Doe</div>
                    <div class="text-xxs text-gray-400 mt-1">Visual Designer</div>
                </div>

            </div>

            {{-- <div class="grid grid-cols-5 gap-x-4 mt-6 ">
                <!-- activities -->
                <div class="col-span-3 ">
                    <div class="font-semibold text-xs ">Team activities</div>
                    <div class="relative mt-4 bg-base-200 w-full rounded-2xl">
                        <div class="absolute top-4 right-4 inline-flex items-center text-xs text-gray-500 space-x-1">
                            <span>This month</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 stroke-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </span>
                        </div>
                        <div class="px-6 pt-10 pb-6 h-72">
                            <img src="images/chart.jpg" class="" alt="" srcset="">
                        </div>
                    </div>
                </div>
                <!-- /activities -->

                <!-- meetings -->
                <div class="col-span-2">
                    <div class="font-semibold text-xs">Today meetings (3)</div>
                    <div class="mt-4 flex flex-col space-y-4 overflow-hidden h-72 overflow-y-auto no-scrollbar">

                        <div class="bg-base-200 rounded-2xl p-5 flex space-x-4">
                            <div class="flex w-10 h-10  text-center items-center justify-center bg-purple-600 rounded-full text-white text-xs">
                                FUI</div>
                            <div class="flex-1">
                                <div class="text-sm text-gray-500">Flow UI discussion</div>
                                <div class="text-xxs text-gray-400 mt-1">3.00 pm - 4.00 pm</div>
                                <div class="flex items-center justify-between mt-5">
                                    <div class="flex -space-x-1 items-center">
                                        <img class="rounded-full w-7 h-7 shadow-lg border border-white" src="images/avatar.jpg" alt="" srcset="">
                                        <img class="rounded-full w-7 h-7 shadow-lg border border-white" src="https://api.lorem.space/image/face?w=32&amp;h=32&amp;hash=zsrj8cck" alt="" srcset="">
                                        <img class="rounded-full w-7 h-7 shadow-lg border border-white" src="https://api.lorem.space/image/face?w=32&amp;h=32&amp;hash=zsfj8cck" alt="" srcset="">
                                    </div>
                                    <a href="#" class="text-xs text-accent-400">view</a>
                                </div>
                            </div>
                        </div>

                        <div class="bg-base-200 rounded-2xl p-5 flex space-x-4">
                            <div class="flex w-10 h-10  text-center items-center justify-center bg-emerald-600 rounded-full text-white text-xs">
                                EH</div>
                            <div class="flex-1">
                                <div class="text-sm text-gray-500">Email HTML discussion</div>
                                <div class="text-xxs text-gray-400 mt-1">4.30 pm - 5.00 pm</div>
                                <div class="flex items-center justify-between mt-5">
                                    <div class="flex -space-x-1 items-center">
                                        <img class="rounded-full w-7 h-7 shadow-lg border border-white" src="images/avatar.jpg" alt="" srcset="">
                                        <img class="rounded-full w-7 h-7 shadow-lg border border-white" src="https://api.lorem.space/image/face?w=32&amp;h=32&amp;hash=zsr38cck" alt="" srcset="">
                                        <img class="rounded-full w-7 h-7 shadow-lg border border-white" src="https://api.lorem.space/image/face?w=32&amp;h=32&amp;hash=zsfj1cck" alt="" srcset="">
                                    </div>
                                    <a href="#" class="text-xs text-accent-400">view</a>
                                </div>
                            </div>
                        </div>

                        <div class="bg-base-200 rounded-2xl p-5 flex space-x-4">
                            <div class="flex w-10 h-10  text-center items-center justify-center bg-yellow-600 rounded-full text-white text-xs">
                                ET</div>
                            <div class="flex-1">
                                <div class="text-sm text-gray-500">Email template</div>
                                <div class="text-xxs text-gray-400 mt-1">3.00 pm - 4.00 pm</div>
                                <div class="flex items-center justify-between mt-5">
                                    <div class="flex -space-x-1 items-center">
                                        <img class="rounded-full w-7 h-7 shadow-lg border border-white" src="images/avatar.jpg" alt="" srcset="">
                                        <img class="rounded-full w-7 h-7 shadow-lg border border-white" src="https://api.lorem.space/image/face?w=32&amp;h=32&amp;hash=zstj8cck" alt="" srcset="">
                                        <img class="rounded-full w-7 h-7 shadow-lg border border-white" src="https://api.lorem.space/image/face?w=32&amp;h=32&amp;hash=zsfjvcck" alt="" srcset="">
                                    </div>
                                    <a href="#" class="text-xs text-accent-400">view</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /meetings -->

            </div> --}}


        </section>
        <!-- /Members -->



        <!-- profile -->
        <section class="col-span-1 bg-base-200 h-full rounded-2xl px-6 pt-10 pb-6">
            <div class="mx-auto w-full text-center flex justify-center">
                <div class="relative aspect-square rounded-2xl bg-base-200 flex justify-center items-center flex-col text-gray-500 text-sm">
                    <label tabindex="0" class="btn btn-ghost btn-circle avatar {{ Auth::check() ? 'online' : 'offline' }}">
                        <div class="w-24 rounded-full ">

                            <img src="{{  Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->full_name }}" class="w-14 h-14">
                        </div>
                    </label>
                    <div class="font-semibold">{{ Auth::user()->full_name }}</div>
                    <div class="text-xxs text-gray-400 mt-1.5">Web Developer</div>
                </div>
            </div>


            <div class="mt-8 text-xs">
                <div class="text-gray-500">Email</div>
                <div class="mt-1.5 font-semibold ">{{ Auth::user()->email }}</div>

                <div class="text-gray-500 mt-5">Telephone</div>
                <div class="mt-1.5 font-semibold{{ Auth::user()->telephone ?? ' Telephone Number' }}</div>

                <div class="text-gray-500 mt-5">Profile</div>
                <div class="mt-1.5 font-semibold">{{ __('Add Profile information') }}</div>

            </div>
        </section>
        <!-- /profile -->

    </section>

</x-app-layout>
