<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['user_id', 'nip', 'nama', 'jabatan', 'unit_kerja'])]
class Pegawai extends Model
{
    /** @use HasFactory */
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pegawai';

    /**
     * Get the user that owns the pegawai.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
