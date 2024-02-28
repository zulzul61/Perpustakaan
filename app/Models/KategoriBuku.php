<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KategoriBuku extends Model
{
    use HasFactory;
    protected $table = 'kategori_buku';
    protected $PrimaryKey = 'id';
    protected $fillable = ['BukuId','KategoriId'];



    /**
     * Get the kategori that owns the KategoriBuku
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Buku::class, 'BukuId', 'id');
    }

    /**
     * Get the kategorirelasi that owns the KategoriBuku
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kategorirelasi(): BelongsTo
    {
        return $this->belongsTo(KategoriBukuRelasi::class, '', '');
    }




}
