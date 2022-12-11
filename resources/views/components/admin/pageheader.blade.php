<livewire:alert>
<div class="bg-base-300 flex items-center justify-between my-5 px-5 py-10">
    <div class="flex items-stretch">
        <div class="text-current text-xs">{{ __('Maintain') }} <br> {{ $description}} </div>
        <div class="h-10 border border-l  border-base-200 mx-4"></div>
        <div class="flex flex-nowrap  ">
            <div class="h-9 w-9">
                <img class="object-cover w-full h-full rounded-full"
                    src="https://ui-avatars.com/api/?name={!! Auth::user()->full_name ?? config('app.name') !!}">
            </div>
        </div>
    </div>

    <div class="hidden md:block">
        <div class="badge badge-neutral badge-lg py-4 ">
            <x-fluentui-people-team-32-o class="w-5 h-5 mr-2 text-current" />
            {{ $modelName }}
        </div>
    </div>

</div>
