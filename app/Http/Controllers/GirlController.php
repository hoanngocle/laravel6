<?php

namespace App\Http\Controllers;

use App\Girl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class GirlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Using Eloquent function where + Time
        $products = Girl::whereDate('created_at', '2022-02-23')->get();
        $products = Girl::whereMonth('created_at', '02')->get();
        $products = Girl::whereDay('created_at', '22')->get();
        $products = Girl::whereYear('created_at', date('Y'))->get();
        $products = Girl::whereTime('created_at', '=', '10:33:27')->get();

        $seconds = 10;
        $lock = Cache::lock('foo', $seconds);

        if ($lock->get()) {
            // Lock acquired for 10 seconds...
            logger('tets');
            $lock->release();
        }



        // One value
//        Cache::put('girl', 'vivian', $seconds);
        $add = Cache::add('girl', 'ikaros', $seconds);
        $value = Cache::get('girl');
        dd($value, $add);

        // Get from multi store

        $value = Cache::store('file')->get('foo');

        Cache::store('redis')->put('bar', 'baz', 10);

        Cache::increment('key');
        Cache::increment('key', 2);
        Cache::decrement('key');
        Cache::decrement('key', 3);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Girl  $girl
     * @return \Illuminate\Http\Response
     */
    public function show(Girl $girl)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Girl  $girl
     * @return \Illuminate\Http\Response
     */
    public function edit(Girl $girl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Girl  $girl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Girl $girl)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Girl  $girl
     * @return \Illuminate\Http\Response
     */
    public function destroy(Girl $girl)
    {
        //
    }
}
