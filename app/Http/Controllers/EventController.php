<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(Request $request){
        $user = $request->user();
        $events = Event::all();
        return view('organisasi.ievent')
            ->with([
                "user"=>$user,
                "events"=>$events
        ]);
    }

    public function addView(Request $request){
        $user = $request->user();
        $events = Event::all();
        return view('organisasi.tambahEvents')
            ->with([
            'user' => $user,
            "events"=>$events
        ]);
    }

    public function add(Request $request){
        $validation = $request->validate([
            'tittle' => 'required',
            'type' => 'required',
            'location' => 'required',
            'city' => 'required',
            'status' => 'required',
            'deskripsi' => 'required',
            'rincian' => 'required',
            'link_register' => 'required',
            'link_detail' => 'required',
        ]);
        $user = $request->user();
        if ($validation){
            $event = Event::create([
                'id_user' => $user->id_user,
                'tittle' => $validation['tittle'],
                'type' => $validation['type'],
                'location' => $validation['location'],
                'city' => $validation['city'],
                'status' => $validation['status'],
                'deskripsi' => $validation['deskripsi'],
                'rincian' => $validation['rincian'],
                'link_register' => $validation['link_register'],
                'link_detail' => $validation['link_detail'],
            ]);
            if ($event){
                return redirect()
                    ->route("my_eventView")
                    ->with([
                        "status"=>"true",
                        "message"=>"Event berhasil ditambahkan"
                    ]);
            }
            return redirect()
                ->route("add_eventView")
                ->with([
                    "status"=>"false",
                    "message"=>"Event gagal ditambahkan"
                ]);
        }
    }
}
