<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        $events = Event::all();
        $projects = Project::all();
        $users = User::all();
        return view('mahasiswa.dashboard')
            ->with([
                "events"=>$events,
                "projets"=>$projects,
                "users"=>$users,
                "user"=>$user
            ]);
    }

    public function search(Request $request)
    {
        $validate = $request->validate([
            "search"=>"required"
        ]);
        $users = User::all();
        $find = $validate["search"];
        $user = $request->user();
        $events = Event::query()
            ->where('tittle', 'LIKE', "%{$find}%")
            ->orWhere('type', 'LIKE', "%{$find}%")
            ->orWhere('location', 'LIKE', "%{$find}%")
            ->orWhere('deskripsi', 'LIKE', "%{$find}%")
            ->orWhere('rincian', 'LIKE', "%{$find}%")
            ->get();
        if (count($events)==0){
            $events = array();
            $getEvent = User::query()
                ->where('name', 'LIKE', "%{$find}%")
                ->get();
            foreach ($getEvent as $event){
                $events[] = $event->event;
            }
        }
        $projects = Project::query()
            ->where('tittle', 'LIKE', "%{$find}%")
            ->orWhere('type', 'LIKE', "%{$find}%")
            ->orWhere('location', 'LIKE', "%{$find}%")
            ->orWhere('deskripsi', 'LIKE', "%{$find}%")
            ->orWhere('rincian', 'LIKE', "%{$find}%")
            ->get();
        if (count($projects)==0){
            $projects = array();
            $getProject = User::query()
                ->where('name', 'LIKE', "%{$find}%")
                ->get();
            foreach ($getProject as $project){
                if ($project->project!=null){
                    $projects[] = $project->project;
                }
            }
        }
        return view('mahasiswa.dashboard')
            ->with([
                "events"=>$events,
                "projets"=>$projects,
                "find"=>$find,
                "users"=>$users,
                "user"=>$user
            ]);
    }

        public function searchUser(Request $request)
    {
        $validate = $request->validate([
            "searchUser"=>"required"
        ]);
        $user = $request->user();
        $find = $validate["searchUser"];
        $users = User::query()
            ->where('name', 'LIKE', "%{$find}%")
            ->orWhere('email', 'LIKE', "%{$find}%")
            ->orWhere('second', 'LIKE', "%{$find}%")
            ->get();
        $events = Event::all();
        $projects = Project::all();
        return view('mahasiswa.dashboard')
            ->with([
                "events"=>$events,
                "projets"=>$projects,
                "find"=>$find,
                "users"=>$users,
                "user"=>$user
            ]);
    }



}
