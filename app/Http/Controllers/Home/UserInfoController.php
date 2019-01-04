<?php

namespace App\Http\Controllers\Home;

use App\Http\Requests\ChangePasswordRequest;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserInfoController extends Controller
{
    protected $userInfoRepository;

    public function __construct(UserRepository $userInfoRepository)
    {
        $this->middleware('auth');
        $this->userInfoRepository = $userInfoRepository;
    }

    public function userInfo()
    {
        return view('user.show');
    }

    public function userEdit()
    {
        return view('user.edit');
    }

    public function doUserEdit(Request $request)
    {
        user()->settings()->merge($request->all());

        return back();
    }

    public function userPhoto()
    {
        return view('user.photos');
    }

    public function photoEdit(Request $request)
    {
        $file = $request->file('img');

        $filename = md5(time().user()->id).'.'.$file->getClientOriginalExtension();

        $file->move(public_path('photo'), $filename);

        user()->photos = '/photo/'.$filename;

        user()->save();

        return ['url' => user()->photos];
    }

    public function userPassword()
    {
        return view('user.password');
    }

    public function passwordEdit(ChangePasswordRequest $request)
    {
        if(Hash::check($request->get('old_password'),user()->password)) {
            user()->password = bcrypt($request->get('password'));
            user()->save();
            return back();
        }
        return back();
    }
}
