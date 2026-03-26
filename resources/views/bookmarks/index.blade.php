<x-layout>
@if (count($types))
    <h1 class="text-xl text-center">Your Bookmarks</h1>
    <div class="mt-5">
        <ul class="mt-5 grid grid-cols-2 gap-x-5 gap-y-2">
            @foreach ($types as $type)
                <div class="card card-border group bg-base-300 w-96">
                    <div class="card-body">
                        <div class="flex justify-between items-start">
                            <a href="/bookmarks/{{$type}}" class="flex-1">
                                <h2 class="card-title hover:text-primary transition-colors">{{$type}}</h2>
                            </a>
                            <div class="flex gap-2 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                <form method="POST" action="/types/{{$type}}" class="inline">
                                    @csrf
                                    @method("DELETE")
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
@else
    <p class="text-lg text-center">You have no bookmarks. <a class="underline text-blue-600" href="/bookmarks/create">Create one</a></p>
@endif
</x-layout>
