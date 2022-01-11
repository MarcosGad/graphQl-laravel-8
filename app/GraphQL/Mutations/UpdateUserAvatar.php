<?php
namespace App\GraphQL\Mutations;

use App\Models\User;

class UpdateUserAvatar
{
    
    public function __invoke($_, array $args)
    {
        //return $args['image'];

        $file = $args['image'];
        $path =  $file->storePublicly('public/uploads');
        $user = User::find($args['id']);
        $user->update(['avatar' => $path]);
        return $user;
    }
}
