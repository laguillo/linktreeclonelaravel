<div class="p-6 text-gray-900">
    <img class="mx-auto h-48 w-48 rounded-full object-cover"
        src="{{ $avatar ?? 'https://i.blogs.es/ceda9c/dalle/1366_2000.jpg' }}" alt="">

    <form wire:submit.prevent="saveAvatar">
        <label for="title" class="block text-sm font-medium text-gray-700">Avatar</label>
        <input type="file" id="fileInput" accept="image/*" required wire:model="photo"
            class="focus:shadow-outline w-full appearance-none rounded border bg-gray-50 px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none">
        <button type="submit"
            class="mt-2 rounded bg-blue-500 px-4 py-2 font-bold text-white hover:bg-blue-700">Save</button>
    </form>

    <form wire:submit.prevent="update">
        <div class="my-6">
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" id="title" required wire:model="title"
                class="focus:shadow-outline w-full appearance-none rounded border bg-gray-50 px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none">
            <label for="title" class="mt-2 block text-sm font-medium text-gray-700">Description</label>
            <input type="text" id="description" required wire:model="description"
                class="focus:shadow-outline w-full appearance-none rounded border bg-gray-50 px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none">
        </div>
        <button type="submit"
            class="rounded bg-blue-500 px-4 py-2 font-bold text-white hover:bg-blue-700">Update</button>
    </form>
</div>
