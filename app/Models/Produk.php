<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory , Sluggable;

    protected $guarded = ['id'];
    protected $table = 'produks';

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function($query , $search) {
            return $query->where('nama_produk' , 'like' , '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false , function($query , $category) {
            return $query->whereHas('category' , function($query) use($category) {
                $query->where('slug', $category); 
            });
        });
        $query->when($filters['outlet'] ?? false , function($query , $category) {
            return $query->whereHas('outlet' , function($query) use($category) {
                $query->where('slug', $category); 
            });
        });
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function outlet()
    {
        return $this->belongsTo(Outlet::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama_produk'
            ]
        ];
    }
}
