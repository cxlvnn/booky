<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookmark;

class TypeController extends Controller
{
    public function destroy($type)
    {
        Bookmark::where('type', $type)->delete();
        return redirect('/bookmarks');
    }
}
