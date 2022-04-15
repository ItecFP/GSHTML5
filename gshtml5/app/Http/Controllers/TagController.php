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

        $content_etiqueta = file_get_contents('C:\GSHtml5\docker\db\mongodb\data\a.json');


        $json_en_array_php = json_decode($content_etiqueta, true);

        return view("tagDetail",["tagdata"=>$json_en_array_php]);
    }
    public function tag_abbr(){
        $content_etiqueta = file_get_contents('C:\a\docker\db\mongodb\data\abbr.json');
        $json_en_array_php = json_decode($content_etiqueta, true);

        return view("tagDetail",["tagdata"=>$json_en_array_php]);
    }
    public function tag_address(){
        $content_etiqueta = file_get_contents('C:\a\docker\db\mongodb\data\address.json');
        $json_en_array_php = json_decode($content_etiqueta, true);

        return view("tagDetail",["tagdata"=>$json_en_array_php]);
    }
    public function tag_del(){
        $content_etiqueta = file_get_contents('C:\a\docker\db\mongodb\data\del.json');
        $json_en_array_php = json_decode($content_etiqueta, true);

        return view("tagDetail",["tagdata"=>$json_en_array_php]);
    }
    //prueba Sergio de mongoDB
    public function pruebaMongoSergio() {
 
        // Defino el servidor local y el puerto 
        $host = 'localhost';
        $puerto = '27017';

        // Realizamos la conexión a la Base de Datos MongoDB 
        $conexion = new \MongoDB\Driver\Manager("mongodb://$host:$puerto"); 

        // En estas 2 variables puedo filtrar y colocar opciones, pero por 
        // el momento no deseo aplicar alguna, asi que las dejare con el valor array()
        // a ambas variables 
        $filtrar = array();
        $options = array();

        // Pasamos las 2 variables anteriores en la variable '$query' 
        $query = new \MongoDB\Driver\Query($filtrar, $options);

        // Definimos la cosntante definida RP_PRIMARY que es la predeterminada
        // Puedes leer más en php.net/manual/es/class.mongodb-driver-readpreference.php
        //$leerPreferencia = new \MongoDB\Driver\ReadPreference(\MongoDB\Driver\ReadPreference::PRIMARY_PREFERRED);		
        
        // Seleccionamos la base de datos 'bD_prueba' y la colección 'Coleccion_prueba'
        $tagdata = $conexion->executeQuery("bD_prueba.Coleccion_prueba", $query);			

        // Enviamos la variable '$datos' a la vista 'pruebaBD.blade.php' 
        return view('pruebaBD', compact('tagdata')); 

    }

}
