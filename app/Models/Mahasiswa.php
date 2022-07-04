<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mahasiswa';
    protected $primaryKey = 'id_role';
    protected $fillable = [
        'id_user',
        'full_name',
        'department',
        'faculty',
        'univeristy',
        'province',
        'hobi',
        'keahlian',
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
