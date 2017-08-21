<?php

namespace App\Http\Controllers;

use App\Event;
use App\Student;
use App\Team;
use Illuminate\Http\Request;

class EventsController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Event::create($request->all());
        return redirect('user/competitions/'.$request->competition_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::findOrFail($id);
        $ranklist = Team::whereEventId($id)->get();
        return view('admin.events.show', compact('event','ranklist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('admin.events.update', compact('event'));
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
        $event = Event::findOrFail($id);
        $event->update($request->all());
        return redirect('/user/events/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $competiton_id = $event->competition_id;
        Event::destroy($id);
        return redirect('user/competitions/'.$competiton_id);
    }
    public function updateranklist(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        Team::whereEventId($id)->delete();
        $path = $request->file('file');
        $file = fopen($path, "r");
        $all_data = array();
        while (($data = fgetcsv($file, 1000, ",")) !== FALSE){
            $rank = $data[0];
            $team_name = $data[1];
            $institution = $data[2];
            $team_id = Team::create([
                    'rank' => $rank,
                    'name' => $team_name,
                    'institution' => $institution,
                    'event_id' => $id
                ]
            )->id;
            for($i = 3; $i < count($data); $i++){
                if($data[$i] == null) continue;
                if(strlen($data[$i]) == 0) continue;
                Student::create([
                    'name' => $data[$i],
                    'team_id' => $team_id
                ]);
            }
        }
        return redirect('/user/events/'.$id);
    }
    public function deleteranklist(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        Team::whereEventId($id)->delete();
        return redirect('/user/events/'.$id);
    }
}
