<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $primaryKey = 'id_event';
    protected $fillable = [
        'id_user',
        'tittle',
        'type',
        'location',
        'city',
        'status',
        'deskripsi',
        'rincian',
        'link_register',
        'link_detail',
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this
            ->belongsTo(
                User::class,
                'id_user',
                'id_user'
            );
    }
}
