<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request){
        $user = $request->user();
        $projects = $user->project()->get();
        return view('mahasiswa.iproyek')->with([
            'user' => $user,
            "projects"=>$projects,
        ]);
    }

    public function indexSearch(Request $request){
        $user = $request->user();
        $validate = $request->validate([
            "search"=>"required"
        ]);
        $find = $validate["search"];
        $projects = Project::query()->where("id_user", $user->id_user)
            ->where('tittle', 'LIKE', "%{$find}%")
            ->orWhere('type', 'LIKE', "%{$find}%")
            ->orWhere('location', 'LIKE', "%{$find}%")
            ->orWhere('deskripsi', 'LIKE', "%{$find}%")
            ->orWhere('rincian', 'LIKE', "%{$find}%")
            ->get();
        return view('mahasiswa.iproyek')
            ->with([
                "projects"=>$projects,
                "user"=>$user
            ]);
    }

    public function addView(Request $request){
        $user = $request->user();
        $projects = Project::all();
        return view('mahasiswa.tambahProyek')->with([
            'user' => $user,
            "projects"=>$projects,
        ]);
    }

    public function add(Request $request){
        $validation = $request->validate([
            'tittle' => 'required',
            'type' => 'required',
            'location' => 'required',
            'status' => 'required',
            'contact' => 'required',
            'deskripsi' => 'required',
            'rincian' => 'required',
            'link_detail' => 'required',
        ]);
        $user = $request->user();
        if ($validation){
            $event = Project::create([
                'id_user' => $user->id_user,
                'tittle' => $validation['tittle'],
                'type' => $validation['type'],
                'location' => $validation['location'],
                'status' => $validation['status'],
                'contact' => $validation['contact'],
                'deskripsi' => $validation['deskripsi'],
                'rincian' => $validation['rincian'],
                'link_detail' => $validation['link_detail'],
                'link_register' => "",
            ]);
            if ($event){
                return redirect()
                    ->route("my_projectView")
                    ->with([
                        "status"=>"true",
                        "message"=>"Project berhasil ditambahkan"
                    ]);
            }
            return redirect()
                ->route("add_projectView")
                ->with([
                    "status"=>"false",
                    "message"=>"Project gagal ditambahkan"
                ]);
        }
    }

}
