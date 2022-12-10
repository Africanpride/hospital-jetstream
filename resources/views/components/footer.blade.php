

<footer class=" bg-base-200 body-font sticky top-[100vh]">
    <div class="container px-5 py-4 mx-auto flex items-center sm:flex-row flex-col">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
        <x-application-logo class="w-5 h-5 fill-current " />
        <span class="ml-3 text-xl  ">{{ config('app.fullname') }}&trade;</span>
      </a>
      <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-300 sm:py-2 sm:mt-0 mt-4">© {{ now()->year }}

        {{ config('app.name') }} —
        <a href="https://twitter.com/africanpride" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">by - @africanpride</a>
      </p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
        <a class="text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>

      </span>
    </div>
  </footer>
<!-- Put this part before </body> tag -->
<input type="checkbox" id="my-modal-3" class="modal-toggle" />
<div class="modal modal-middle">
  <div class="modal-box relative">
    <label for="my-modal-3" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
    <h3 class="text-lg font-bold">Add New Staff Member</h3>
    <p class="py-4">Fill form to add new staff member and assign role (eg. Doctor, Pharmacist, Nurse etc..).
        An Email would be sent to staff member's email address.</p>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div  class="grid grid-cols-2 gap-4">
            <div>
                <x-jet-label for="firstName" value="{{ __('First Name') }}" />
                <x-jet-input id="firstName" class="block mt-1 w-full" type="text" name="firstName" :value="old('firstName')" required autofocus autocomplete="firstName" />
            </div>
            <div>
                <x-jet-label for="lastName" value="{{ __('Last Name') }}" />
                <x-jet-input id="lastName" class="block mt-1 w-full" type="text" name="lastName" :value="old('lastName')" required autofocus autocomplete="lastName" />
            </div>
        </div>
        <div class="mt-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
        </div>

        <div class="mt-4">
            <x-jet-label for="password" value="{{ __('Password') }}" />
            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
        </div>

        <div class="mt-4">
            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
            <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
        </div>

        {{-- @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mt-4">
                <x-jet-label for="terms">
                    <div class="flex items-center">
                        <x-jet-checkbox name="terms" id="terms" required />

                        <div class="ml-2">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                            ]) !!}
                        </div>
                    </div>
                </x-jet-label>
            </div>
        @endif --}}

        <div class="flex flex-col items-center space-y-3 justify-end mt-4">

            <x-jet-button class="ml-4">
                {{ __('Add New Staff') }}
            </x-jet-button>
        </div>
    </form>
  </div>
</div>

@stack('modals')
@livewireScripts
</body>
</html>
