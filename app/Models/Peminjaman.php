<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = 'peminjamen';
    protected $PrimaryKey= 'id';
    protected $fillable = ['id','UserId','BukuId','TanggalPeminjaman','TanggalHarusKembali','status'];

    /**
     * Get the user that owns the Peminjaman
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'UserId', 'id');
    }


    /**
     * Get the buku that owns the Peminjaman
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function buku(): BelongsTo
    {
        return $this->belongsTo(Buku::class, 'BukuId', 'id');
    }
}
