<?php

namespace App\Http\Controllers;

use App\Competition;
use App\Department;
use App\Event;
use App\Team;
use Illuminate\Http\Request;
use Carbon\Carbon;
use View;
use App\Image;

class GuestPagesController extends Controller
{
    public function index()
    {
        $competitionsupcoming = Competition::where('start_time','>=',Carbon::now())->orderBy('start_time', 'desc')->get();
        $competitionsended = Competition::where('end_time','<=',Carbon::now())->orderBy('start_time', 'desc')->get();
        $competitionscurrent = Competition::where('end_time','>=',Carbon::now())
            ->where('start_time','<=',Carbon::now())->orderBy('start_time', 'desc')->get();
        $competitionlisttitle = "Competitions In University";
        $images = Image::all();
        return view('pages.welcome', compact('competitionsupcoming','competitionsended', 'competitionscurrent' ,'competitionlisttitle', 'images'));
    }
    public function competition($id)
    {
        $competition = Competition::findOrFail($id);
        $events = Event::whereCompetitionId($id)->get();
        $images = Image::whereCompetitionId($competition->id)->get();
        return view('pages.competitiondetails', compact('competition', 'events', 'images'));
    }
    public function event($id)
    {
        $event = Event::findOrFail($id);
        $ranklist = Team::whereEventId($id)->get();
        return view('pages.eventdetails', compact('event', 'ranklist'));
    }

    public function allcompetition()
    {
        $competitionsupcoming = Competition::where('start_time','>=',Carbon::now())->orderBy('start_time', 'desc')->get();
        $competitionsended = Competition::where('end_time','<=',Carbon::now())->orderBy('start_time', 'desc')->get();
        $competitionscurrent = Competition::where('end_time','>=',Carbon::now())
            ->where('start_time','<=',Carbon::now())->orderBy('start_time', 'desc')->get();
        $competitionlisttitle = "Competitions In University";
        return view('pages.allcompetitions', compact('competitionsupcoming','competitionsended', 'competitionscurrent' ,'competitionlisttitle'));
    }
    public function departmentslist()
    {
        return view('pages.departmentslist');
    }
    public function department($id)
    {
        $department = Department::findOrFail($id);
        $competitionsupcoming = Competition::whereDepartmentId($department->id)->where('start_time','>=',Carbon::now())->orderBy('start_time', 'desc')->get();
        $competitionsended = Competition::whereDepartmentId($department->id)->where('end_time','<=',Carbon::now())->orderBy('start_time', 'desc')->get();
        $competitionscurrent = Competition::whereDepartmentId($department->id)->where('end_time','>=',Carbon::now())
            ->where('start_time','<=',Carbon::now())->orderBy('start_time', 'desc')->get();
        $competitionlisttitle = "Competitions In Department of ".$department->full_name;
        return view('pages.department', compact('department', 'competitionsupcoming','competitionsended', 'competitionscurrent' ,'competitionlisttitle'));
    }
}
