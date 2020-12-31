<?php


namespace App\Repositories;


use App\Models\User;
use Carbon\Carbon;
use Illuminate\Filesystem\Cache;

class UserRepository implements UserRepositoryInterface
{
    protected $user;
    const CACHE_KEY = "USER";

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function orderUser($order)
    {
        $cacheKey = $this->makeCacheKey("all_{$order}");
        return cache()->remember($cacheKey, Carbon::now()->addHours(1), function () use ($order) {
            return $this->user::orderBy($order)
                ->get()
                ->map->format();
        });

    }

    public function getById($id)
    {
        $cacheKey = $this->makeCacheKey("id_{$id}");
        return cache()->remember($cacheKey, Carbon::now()->addHours(1), function () use ($id) {
            return $this->user::where('id', $id)->first();
        });

    }


    public function delCache($order)
    {
        $cacheKey = $this->makeCacheKey("all_{$order}");
        if (Cache::put($cacheKey)) {
            return true;
        } else {
            return false;
        }

    }

    public function makeCacheKey($key)
    {
        $upperKey = strtoupper($key);
        return self::CACHE_KEY . "_$upperKey";
    }
}
