<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'image',
        'body',
        'author',
        'image_author',
        'category',
    ];

    protected $table = 'posts';

    protected $primaryKey = 'id';

    public $incrementing = true;

    protected $casts = [
        'category' => 'array',
        'is_sponsored' => 'boolean',
    ];

    // Method untuk menyimpan data array menjadi string JSON
    public function setCategoryAttribute($value)
    {
        if (is_array($value)) {
            // Konversi array menjadi JSON string sebelum disimpan ke database
            $this->attributes['category'] = json_encode($value);
        } else {
            // Jika bukan array, simpan langsung
            $this->attributes['category'] = $value;
        }
    }

    // Method untuk mengambil data category sebagai array
    public function getCategoryAttribute($value)
    {
        return json_decode($value, true);
    }

    public function scopeSponsored($query)
    {
        $query->where('is_sponsored', true);
    }
}
