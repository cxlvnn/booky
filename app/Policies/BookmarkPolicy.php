<?php

namespace App\Policies;

use App\Models\Bookmark;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class BookmarkPolicy
{
    public function viewOrModify(User $user, Bookmark $bookmark): Response
    {
        return $user->id === $bookmark->user_id ? Response::allow() : Response::denyAsNotFound();
    }
}
