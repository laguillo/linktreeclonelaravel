<div class="p-6 text-gray-900">
    <form wire:submit.prevent="save">
        @foreach ($socials as $social)
            <div class="my-6">
                <label for="title" class="block text-sm font-medium text-gray-700">{{ $social->social }}</label>
                <input type="text" id="title" wire:model="socials.{{ $loop->index }}.url"
                    class="focus:shadow-outline w-full appearance-none rounded border bg-gray-50 px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none">
            </div>
        @endforeach
        <button type="submit"
            class="rounded bg-blue-500 px-4 py-2 font-bold text-white hover:bg-blue-700">save</button>
    </form>
</div>
