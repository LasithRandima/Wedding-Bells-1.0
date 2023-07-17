
 <div class="w-full flex flex-col items-center justify-center h-screen">
    <div class="w-full" style="max-width: 60%">
    <form wire:submit.prevent="submit" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4>
        {{ $this->form }}
        <input type="hidden" name="user_id" id="user_id" value="{{Auth::user()}}" />
        {{-- <button type="submit">
            Submit
        </button> --}}
        <x-happytodev-filament-social-networks name="Studio X"/>
    </form>
    </div>
</div>
