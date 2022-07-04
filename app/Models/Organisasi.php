<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Organisasi extends Model
{

    protected $fillable = [
        'id_user',
        'name',
        'second_name',
        'sector',
        'alamat',
        'city',
        'province',
        'link_website',
        'instagram',
        'twitter',
        'facebook',
    ];

    protected $table = 'organisasi';
    protected $primaryKey = 'id_role';
    public function user(): BelongsTo
    {
        return $this
            ->belongsTo(
                User::class,
                'id_user',
                'id_user'
            );
    }
}
