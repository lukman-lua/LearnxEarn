<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'role',
        'second',
        'colab_project',
        'saved',
        'profile_requirements',
        'profile_pict',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_user';

    public function mahasiswa(): HasOne
    {
        return $this
            ->hasOne(
                Mahasiswa::class,
                'id_user',
                'id_user'
            );
    }

    public function organisasi(): HasOne
    {
        return $this
            ->hasOne(
                Organisasi::class,
                'id_user',
                'id_user'
            );
    }

    public function event(): HasOne
    {
        return $this
            ->hasOne(
                Event::class,
                'id_user',
                'id_user'
            );
    }

    public function project(): HasOne
    {
        return $this
            ->hasOne(
                Project::class,
                'id_user',
                'id_user'
            );
    }
}
