<div>
   @if ($companyAdmin)
{{ __('') }}
   @else
   <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}"> {{ __('Register') }}  </a>
   @endif
</div>
