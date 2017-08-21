<?php

namespace App\Http\Controllers;

use App\Competition;
use App\Event;
use App\Image;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CompetitionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$users = User::whereType(0)->get();
        //$title = "All Users";
        //return view('admin.competitions.index', compact('title','users'));
        $competitions = Competition::whereUserId(Auth::user()->id)->get();
        return view('admin.competitions.index', compact('competitions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.competitions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Competition::create($request->all());
        return redirect('user/competitions');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $competition = Competition::findOrFail($id);
        $events = Event::whereCompetitionId($id)->get();
        $images = Image::whereCompetitionId($competition->id)->get();
        return view('admin.competitions.show', compact('competition', 'events', 'images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $competition = Competition::findOrFail($id);
        return view('admin.competitions.update', compact('competition'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $competition = Competition::findOrFail($id);
        $competition->update($request->all());
        return redirect('/user/competitions/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Event::whereCompetitionId($id)->delete();
        Competition::destroy($id);
        return redirect('user/competitions');
    }

    public function createevent($id)
    {
        $competition = Competition::findOrFail($id);
        return view('admin.events.create', compact('competition'));
    }
    public function storeimage(Request $request, $id)
    {
        $competition = Competition::findOrFail($id);
        //return $request->image->store('public');
        $path = Storage::putFile('public', $request->file('image'));
        Image::create(
            [
                'competition_id' => $id,
                'path' => $path
            ]
        );
        return redirect('user/competitions/'.$id);
    }
    public function deleteimage(Request $request, $id)
    {
        $image = Image::findOrFail($request->image_id);
        if($image->competition_id == $id){
            Image::destroy($request->image_id);
        }
        return redirect('user/competitions/'.$id);
    }
}
