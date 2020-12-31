<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

class userController extends Controller
{
    //
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $allUser = $this->userRepository->orderUser('name');
        return view('user', compact('allUser'));
    }

    public function getById($id)
    {
        $data = $this->userRepository->getById($id);
//        return $data;
        return view('single' , compact('data'));
    }

    public function delCache()
    {
        $res = $this->userRepository->delCache('name');
        if ($res)
        {
            return back();
        }
    }

    public function fullDelCache()
    {
        Cache::flush();
        return back();
    }

}
