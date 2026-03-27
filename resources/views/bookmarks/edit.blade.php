<x-layout>
<div class="flex item-center justify-center">
    <div class="bg-gray-800 w-full rounded-lg shadow-md p-10">
        <form autocomplete="off" method="POST" action="/bookmarks/{{$bookmark->id}}">
            @csrf
            @method('PATCH')

            <div>
                <label class="label text-lg my-2 font-medium block">Bookmark Type</label>
                <input
                    class="input w-full px-4 focus:border-transparent"
                    list="existing-types"
                    type="text"
                    name="type"
                    placeholder="ex. YoutubeVideos"
                    value="{{$bookmark->type}}"
                />
                <datalist id="existing-types">
                    @foreach ($types as $type)
                        <option value="{{$type}}"/>
                    @endforeach
                </datalist>
                <x-error name="type"/>
            </div>

            <div>
                <label class="label text-lg my-2 font-medium block">Bookmark Name</label>
                <input
                    class="input w-full px-4 focus:border-transparent"
                    type="text"
                    name="name"
                    placeholder="ex. Must watch videos"
                    value="{{$bookmark->name}}"
                />
                <x-error name="name"/>
            </div>

            <div>
                <label class="label text-lg my-2 font-medium block">Bookmark URL</label>
                <input
                    class="input w-full px-4 focus:border-transparent"
                    type="text"
                    name="url"
                    placeholder="ex. https://example.com "
                    value="{{$bookmark->url}}"
                />
                <x-error name="url"/>
            </div>

            <div class="flex gap-4 mt-5">
                <button class="btn" type="submit">Save</button>

                <button type="button"
                        class="btn bg-red-600"
                        onclick="document.getElementById('delete-form').submit()">
                    Delete
                </button>
            </div>
        </form>

        <form id="delete-form" method="POST" action="/bookmarks/{{$bookmark->id}}" class="hidden">
            @csrf
            @method('DELETE')
        </form>

    </div>
</div>
</x-layout>
