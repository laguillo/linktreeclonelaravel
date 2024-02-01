<div class="p-6 text-gray-900">
    <form wire:submit.prevent="update">
        <div class="my-6">
            <div class="my-6">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" id="title" required wire:model="title"
                    class="focus:shadow-outline w-full appearance-none rounded border bg-gray-50 px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none">
            </div>
            <div class="my-6">
                <label for="title" class="block text-sm font-medium text-gray-700">Description</label>
                <input type="text" id="description" required wire:model="description"
                    class="focus:shadow-outline w-full appearance-none rounded border bg-gray-50 px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none">
            </div>
            <div class="my-6">
                <label for="title" class="block text-sm font-medium text-gray-700">Author</label>
                <input type="text" id="author" required wire:model="author"
                    class="focus:shadow-outline w-full appearance-none rounded border bg-gray-50 px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none">
            </div>
            <div class="my-6">
                <label for="title" class="block text-sm font-medium text-gray-700">Url</label>
                <input type="text" id="url" wire:model="url"
                    class="focus:shadow-outline w-full appearance-none rounded border bg-gray-50 px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none">
            </div>
        </div>
        <button type="submit"
            class="rounded bg-blue-500 px-4 py-2 font-bold text-white hover:bg-blue-700">Update</button>
    </form>
</div>
