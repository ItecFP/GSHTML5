<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    static public function getAllTags()
    {
        return Tag::all();
    }
    static public function getAllCategories(){
        $documents = Tag::get(['Category'])
        ->groupBy(['Category'])
        ->all();

        $categories = array_keys($documents);

        $result = [];
        foreach ($categories as $value) {
            array_push($result, [
                "nombre" => $value,
                "url" => "/categoria/$value"
            ]);
        }
        return $result;
    }
}
