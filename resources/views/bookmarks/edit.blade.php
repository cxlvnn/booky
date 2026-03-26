<x-layout>
<div class="flex item-center justify-center">
    <form class="bg-gray-800 w-full rounded-lg shadow-md p-10" autocomplete="off" method="POST" action="/bookmarks/{{$bookmark->id}}">
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
                placeholder="ex. https://example.com"
                value="{{$bookmark->url}}"
            />
            <x-error name="url"/>
        </div>

        <div>
            <button class="mt-5 btn" type="submit">Edit</button>
        </div>
    </form>
</div>
</x-layout>
