<?php

namespace App\Http\Controllers\Api;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserFollowerController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index($id)
    {
        $user = $this->userRepository->byId($id);

        $followers = $user->followersUser()->pluck('follower_id')->toArray();

        if ( in_array(user('api')->id, $followers) ) {

            return response()->json(['followed' => true]);
        }

        return response()->json(['followed' => false]);
    }

    public function follow()
    {
        $userToFollow = $this->userRepository->byId(\request('user'));

        $followed = user('api')->followThisUser(\request('user'));

        if ( count($followed['attached']) > 0 ) {
//            $userToFollow->notify(new NewUserFollowNotification());

            $userToFollow->increment('followers_count');

            return response()->json(['followed' => true]);
        }

        $userToFollow->decrement('followers_count');

        return response()->json(['followed' => false]);
    }
}
