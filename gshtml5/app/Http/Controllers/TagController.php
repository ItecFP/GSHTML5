<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
   public function showTag($name)
    {
        return Tag::where("nombre", "=", $name)->first();
    }


    public function getTags()
    {
        return Tag::all();
    }

    public function getCategory($category = "")
    {
        return Tag::where('categoria', '=', $category)->get();
    }

    public function getCategories()
    {
        $documents = Tag::get(['categoria'])
        ->groupBy(['categoria'])
        ->all();

        $categories = array_keys($documents);

        $result = [];
        foreach ($categories as $value) {
            array_push($result, [
                "categoria" => $value,
                "url" => "/categoria/$value"
            ]);
        }

        return $result;
    }

    public function search(Request $request)
    {
        $nombreCampo = $request->input("nombreCampo", "nombre");
        $busqueda = $request->input("busqueda", "");

        return Tag::where($nombreCampo, "like", "%$busqueda%")->get();
    }

    //funciones con los datos de las etiquetas

    public function tag_a(){
        $content_etiqueta = file_get_contents('C:\a\docker\db\mongodb\data\a.json');
        $json_en_array_php = json_decode($content_etiqueta, true);

        print_r($json_en_array_php);
    }

}
