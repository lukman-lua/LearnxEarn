<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Organisasi;
use App\Models\Participant;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        if ($user->role == 0){
            $profile = $user->mahasiswa;
            if(!$profile){
                $user->mahasiswa = Mahasiswa::create([
                    "id_user" => $user->id_user
                ]);
            }
            return view('mahasiswa.profil')
                ->with([
                    'user' => $user,
                    'profile' => $profile,
                    'hobi'=>$profile->hobi ?? "[]",
                    'keahlian'=>$profile->keahlian ?? "[]"
                ]);
        }
        $profile = $user->organisasi;
        if(!$profile){
            $user->organisasi = Organisasi::create([
                "id_user" => $user->id_user
            ]);
        }
        return view('organisasi.profil')
            ->with([
                'user' => $user,
                'profile' => $profile,
            ]);


    }

    public function storeOrg(Request $request): RedirectResponse
    {
        $validation = $request->validate([
            'profile_pict' => 'mimes:jpg,jpeg|file|max:1000',
            'name' => 'required|max:50',
            'second_name' => 'required',
            'sector' => 'required',
            'alamat' => 'required',
            'city' => 'required',
            'province' => 'required',
            'link_website' => 'required',
            'instagram' => '',
            'twitter' => '',
            'facebook' => '',
        ]);
        $user = $request->user();
        $user->name = $validation['name'];
        $user->second = $validation['second_name'];
        if($request->file('profile_pict')){
            $photo = $user->id_user.'.' . $request->file('profile_pict')->extension();
            if($user->profile_pict){
                File::delete($user->profile_pict);
            }
            $user->profile_pict = $request->file('profile_pict')->storeAS('public/images/profiles', $photo);
        }
        $before = $user->profile_requirements;
        $user->profile_requirements=true;
        $user->save();
        $profile = $user->organisasi;
        if($validation){
            $profile->name = $validation['name'];
            $profile->second_name = $validation['second_name'];
            $profile->sector = $validation['sector'];
            $profile->alamat = $validation['alamat'];
            $profile->city = $validation['city'];
            $profile->province = $validation['province'];
            $profile->link_website = $validation['link_website'];
            if($request->get('instagram')){
                $profile->instagram = $validation['instagram'];
            }
            if($request->get('twitter')){
                $profile->twitter = $validation['twitter'];
            }
            if($request->get('facebook')){
                $profile->facebook = $validation['facebook'];
            }
        }
        $profile->save();

        if ($before){
            return redirect()
                ->route('profileView')
                ->with([
                    "status"=>"true",
                    "message"=>"Profil berhasil disimpan"
                ]);
        }
        return redirect()
            ->route('dashboard.index')
            ->with([
                "status"=>"true",
                "message"=>"Profil berhasil disimpan"
            ]);
    }

    public function update_password(Request $request){
        // Validate the new password length...
        $form_check = $request->validate([
            'current_password' => 'required|min:5|max:50',
            'new_password' => 'required|min:5|max:50',
            'confirm_password' => 'required|min:5|max:50',
        ]);
        if(Hash::check($form_check['current_password'], $request->user()->password)){
            if($form_check['new_password'] == $form_check['confirm_password']){
                $request->user()->fill([
                    'password' => bcrypt($form_check['new_password'])
                ])->save();
                return redirect()
                    ->route('profileView')
                    ->with([
                        'status'=>"true",
                        'message'=>'Password Berhasil Diperbaruhi'
                    ]);
            }
            return redirect()
                ->route('profileView')
                ->with([
                    'status'=>"false",
                    'message'=>'Konfirmasi Password Salah'
                ]);
        }
        return redirect()
            ->route('profileView')
            ->with([
                'status'=>"false",
                'message'=>'Password Lama Salah'
            ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validation = $request->validate([
            'profile_pict' => 'mimes:jpg,jpeg|file|max:1000',
            'full_name' => 'required|max:50',
            'department' => 'required',
            'faculty' => 'required',
            'univeristy' => 'required',
            'city' => 'required',
            'province' => 'required',
            'hobi' => 'required',
            'keahlian' => 'required',
        ]);
        $user = $request->user();
        $user->name = $validation['full_name'];
        $user->second = $validation['univeristy'];
        if($request->file('profile_pict')){
            $photo = $user->id_user.'.' . $request->file('profile_pict')->extension();
            if($user->profile_pict){
                File::delete($user->profile_pict);
            }
            $user->profile_pict = $request->file('profile_pict')->storeAS('public/images/profiles', $photo);
        }
        $before = $user->profile_requirements;
        $user->profile_requirements=true;
        $user->save();
        $profile = $user->mahasiswa;
        if($validation){
            $profile->full_name = $validation['full_name'];
            $profile->department = $validation['department'];
            $profile->faculty = $validation['faculty'];
            $profile->univeristy = $validation['univeristy'];
            $profile->city = $validation['city'];
            $profile->province = $validation['province'];
            $profile->hobi = $validation['hobi'];
            $profile->keahlian = $validation['keahlian'];
        }
        $profile->save();

        if ($before){
            return redirect()
                ->route('profileView')
                ->with([
                    "status"=>"true",
                    "message"=>"Profil berhasil disimpan"
                ]);
        }
        return redirect()
            ->route('dashboard.index')
            ->with([
                "status"=>"true",
                "message"=>"Profil berhasil disimpan"
            ]);
    }

}
