<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'tags',
        'company',
        'location',
        'email',
        'website',
        'description',
    ];
    public static function all($columns = ['*']){
        return [
            [
                'id'=>1,
                'title'=>'job one',
                'description'=>'lorem ipsium delectus sufacation em sue dueets licas dtyiop uoums',
                'tags'=>'Laravel Mysql Django',
            ],
            [
                'id'=>2,
                'title'=>'job two',
                'description'=>'lorem ipsum freity sioni duet ems fract ico siem liam payse payne ',
                'tags'=>'Laravel Mysql Django',
            ]
            
    
            ];
    }
    public static function find($id){
        $jobs = self::all();

        foreach ($jobs as $job){
            if($job['id']==$id){
                return $job;
            }
        }

    }
}
