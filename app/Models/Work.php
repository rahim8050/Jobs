<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'status',
        'priority',
        'type',
        'category',
        'tags',
    ];
    // search and filter
    public function ScopeFilter ($query, array $filters){
        if($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }
        if($filters['search'] ?? false) {
            $query->where('name', 'like', '%' . request('search') . '%')
        ->orWhere ('description', 'like', '%' . request('search') . '%')
        ->orWhere ('tags', 'like', '%' . request('search') . '%')
        ;
        }


    }
}
