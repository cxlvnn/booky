<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookmarkStoreRequest;
use App\Models\Bookmark;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Bookmark::pluck('type')->toArray();
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
        $types = Bookmark::get()->pluck('type');
        return view('bookmarks.create', [
            'types' => $types
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookmarkStoreRequest $request)
    {
        Bookmark::create([
            'type' => request('type'),
            'name' => request('name'),
            'url' => request('url')
        ]);

        return (redirect('/'));
    }

    /**
     * Display the specified resource.
     */
    public function show($type)
    {
        $specific_bookmark = Bookmark::where('type', $type)->get();

        return view('bookmarks.show', [
            'bookmarks' => $specific_bookmark
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bookmark $bookmark)
    {
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
        $bookmark->delete();

        return redirect("/bookmarks/$bookmark->type");
    }
}
