<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KategoriBukuRelasi extends Model
{
    use HasFactory;
    protected $table = 'kategoribuku_relasi';
    protected $PrimaryKey = "id";
    protected $fillable = ['BukuId', 'KategoriId'];



    /**
     * Get the user that owns the KategoriBukuRelasi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function buku(): BelongsTo
    {
        return $this->belongsTo(Buku::class, 'BukuId', 'id');
    }

    /**
     * Get the kategorirelasi that owns the KategoriBukuRelasi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kategori(): BelongsTo
    {
        return $this->belongsTo(KategoriBuku::class, 'Kategori', 'id');
    }


}
