<section class="md:min-h-screen  grid grid-cols-1 md:grid-cols-3">
    <div
        class="min-h-[300px] md:min-h-screen md:col-span-1 flex flex-col md:grid place-items-center bg-blue-700 text-white text-9xl font-extrabold p-8 relative">
        <img alt="{{ config('app.name') }}" src="{{ asset('/images/clinic.jpg') }}"
            class="absolute inset-0 h-full w-full object-cover opacity-90" />
        <div class="flex justify-center items-center z-10"> {{ $logo }}</div>
        <div class="z-10 text-primary-content">
            <article class="prose text-primary-content">
                <h1 class="text-info">Garlic bread with cheese: What the science tells us</h1>
                <p>For years parents have espoused the health benefits of eating garlic bread with cheese to their
                    children, with the food earning such an iconic status in our culture that kids will often dress up
                    as warm, cheesy loaf for Halloween.</p>
                <p>But a recent study shows that the celebrated appetizer may be linked to a series of rabies cases
                    springing up around the country.</p>
                <!-- ... -->
            </article>
        </div>
        <div class="absolute left-8  h-16 w-16 " style="top:-40px; ">
            <label class="swap swap-rotate">

                <!-- this hidden checkbox controls the state -->
                <input type="checkbox" class="hidden" />

                <!-- sun icon -->
                <svg class="swap-on fill-current w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z" />
                </svg>

                <!-- moon icon -->
                <svg class="swap-off fill-current w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z" />
                </svg>

            </label>
        </div>
    </div>
    <div class="flex flex-col justify-center p-8  md:col-span-2">
        {{ $slot }}

</section>

