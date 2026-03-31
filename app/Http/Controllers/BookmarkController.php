<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookmarkStoreRequest;
use App\Models\Bookmark;
use App\Policies\BookmarkPolicy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class BookmarkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Bookmark::pluck('type');
        $types = Bookmark::where(['user_id' => Auth::id()])->pluck('type')->toArray();
        $types = array_unique($types);
        return view('bookmarks.index', [
            'types' =>  $types
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Bookmark::where('user_id', Auth::user()->id)->get()->pluck('type');
        return view('bookmarks.create', [
            'types' => $types
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookmarkStoreRequest $request)
    {
        Auth::user()->bookmarks()->create([
            'type' => request('type'),
            'name' => request('name'),
            'url' => request('url')
        ]);

        return (redirect('/bookmarks'));
    }

    /**
     * Display the specified resource.
     */
    public function show($type)
    {
        $bookmarks = Bookmark::where('type', $type)->where('user_id', Auth::user()->id)->get();
        Gate::authorize('viewOrModify', $bookmarks[0]);

        return view('bookmarks.show', [
            'bookmarks' => $bookmarks
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bookmark $bookmark)
    {
        Gate::authorize('viewOrModify', $bookmark);
        $types = Bookmark::pluck('type');
        return view('bookmarks.edit', [
            'bookmark' => $bookmark,
            'types' => $types
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookmarkStoreRequest $request, $id)
    {
        $bookmark = Bookmark::findOrFail($id);
        Gate::authorize('viewOrModify', $bookmark);
        $bookmark->type = $request->type;
        $bookmark->name = $request->name;
        $bookmark->url = $request->url;
        $bookmark->save();

        return redirect("/bookmarks/$bookmark->type");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bookmark $bookmark)
    {
        Gate::authorize('viewOrModify', $bookmark);
        $bookmark->delete();
        $type_exists = Bookmark::where('type', $bookmark->type)->exists();

        if ($type_exists) {
            return redirect("/bookmarks/$bookmark->type");
        }

        return redirect('/bookmarks');
    }
}
