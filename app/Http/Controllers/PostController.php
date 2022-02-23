<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;

class PostController extends Controller
{
    public function index()
    {
        // One value
        $value = Cache::get('key');

        // Get from multi store

        $value = Cache::store('file')->get('foo');

        Cache::store('redis')->put('bar', 'baz', 10);

        Cache::increment('key');
        Cache::increment('key', 2);
        Cache::decrement('key');
        Cache::decrement('key', 3);
    }
}
