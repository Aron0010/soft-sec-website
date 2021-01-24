<?php

namespace App\Actions\Jetstream;

use App\Models\Post;
use Laravel\Jetstream\Contracts\DeletesUsers;

class DeleteUser implements DeletesUsers
{
    /**
     * Delete the given user.
     *
     * @param  mixed  $user
     * @return void
     */
    public function delete($user)
    {
        $user->deleteProfilePhoto();
        $user->tokens->each->delete();
        $user->delete();

        foreach (Post::all()->where('user_id', $user->id) as $e) {
            $e->delete();
        }
    }
}
