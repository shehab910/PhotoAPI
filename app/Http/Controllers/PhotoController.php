<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePhotoRequest;
use App\Http\Requests\UpdatePhotoRequest;
use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::with('albums')->get()->map(function ($photo) {
            $photo->in_albums = $photo->albums->map(fn ($album) => $album->id);
            // $photo->in_albums = $photo->albums->pluck('id');
            unset($photo->albums);
            return $photo;
        });
        return $photos;
    }

    /**
     * Show the form for    creating a new resource.
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
     * @param  \App\Http\Requests\StorePhotoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePhotoRequest $request)
    {
        $newPhoto = Photo::create($request->validated());
        $newPhoto->in_albums = [];
        return $newPhoto;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        $photoWithAlbum = Photo::with('albums')->find($photo->id);
        //leave id , remove everything else
        $photoWithAlbum->in_albums = $photoWithAlbum->albums->map(fn ($album) => $album->id);
        unset($photoWithAlbum->albums);
        return $photoWithAlbum;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePhotoRequest  $request
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePhotoRequest $request, Photo $photo)
    {
        $photo->update($request->validated());
        return response()->json([
            "msg" => "Photo updated successfully"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        Photo::find($photo->id)->delete();
        return response()->json([
            "msg" => "Photo deleted successfully"
        ]);
    }
}
