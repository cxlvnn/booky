<x-layout>
<div class="grid grid-cols-3 items-center">
    <span class="pl-3"><a href="/bookmarks"> <- </a></span>
    <h1 class="text-xl text-center col-span-1">{{ $bookmarks->first()->type ?? 'No bookmarks found' }}</h1>
    <div></div>
</div>
<div class="mt-5">
    <ul class="mt-5 grid grid-cols-2 gap-x-5 gap-y-2">
        @foreach ($bookmarks as $bookmark)
            <div class="card card-border group bg-base-300 w-96">
                <div class="card-body">
                    <div class="flex justify-between items-center">
                        <a href="{{$bookmark->url}}" target="_blank" rel="noopener noreferrer" class="flex-1">
                            <h2 class="card-title hover:text-primary transition-colors">{{$bookmark->name}}</h2>
                        </a>
                        <div class="flex gap-2 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                            <button class="btn btn-xs btn-primary">
                            <a href="/bookmarks/edit/{{$bookmark->id}}">
                                Edit
                            </a>
                            </button>
                            <form method="POST" action="/bookmarks/{{$bookmark->id}}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-xs btn-error">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </ul>
</div>
</x-layout>
