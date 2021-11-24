<?php

namespace App\Http\Controllers;

use App\Models\Lyrics;
use App\Http\Requests\StoreLyricsRequest;
use App\Http\Requests\UpdateLyricsRequest;
class LyricsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreLyricsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLyricsRequest $request)
    {
        //
    }

    /**
     * @param  \App\Models\Lyrics  $lyrics
     * @return \Illuminate\Http\Response
     */
    public function show(int $spotify_id)
    {
        return Lyrics::where('spotify_id', $spotify_id)->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lyrics  $lyrics
     * @return \Illuminate\Http\Response
     */
    public function edit(Lyrics $lyrics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLyricsRequest  $request
     * @param  \App\Models\Lyrics  $lyrics
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLyricsRequest $request, Lyrics $lyrics)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lyrics  $lyrics
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lyrics $lyrics)
    {
        //
    }
}
