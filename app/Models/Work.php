<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'name',
    //     'description',
    //     'status',
    //     'priority',
    //     'type',
    //     'category',
    //     'tags',
    // ];
    public static function getAllJobs(){
return [    [
            'id'=>1,
            'title'=>'this is the best job to have in the entre world',
            'status'=>'available fill in to apply',
            'description'=>'Before working with this theme, you should become familiar with the Bootstrap framework, especially the utility classes.',
          ],
          [
              'id'=>2,
              'title'=>'the best job for an it expert who want to improve their woring skills',
              'status'=>'available to fill in',
              'description'=>'Before working with this theme, you should become familiar with the Bootstrap framework, especially the utility classes.',
          ]
          ];

    }
    public static function find($id){
        $jobs = self::getAllJobs();
        
        foreach($jobs as $job) {
            if ($job['id'] == $id) {
                return $job;
            }
        }
        
        return null;
    }

    // search and filter
    // public function ScopeFilter ($query, array $filters){
    //     if($filters['tag'] ?? false) {
    //         $query->where('tags', 'like', '%' . request('tag') . '%');
    //     }
    //     if($filters['search'] ?? false) {
    //         $query->where('name', 'like', '%' . request('search') . '%')
    //     ->orWhere ('description', 'like', '%' . request('search') . '%')
    //     ->orWhere ('tags', 'like', '%' . request('search') . '%')
    //     ;
    //     }


    // }
}
