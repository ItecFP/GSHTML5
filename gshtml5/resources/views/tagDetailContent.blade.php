<main>
    <article class="container">
    

    <section class="card-wrapper " >
        <a name="descripcion"></a>
        <div class="card-header"><h3 class="card-title">{{$tagdata["nombre"]}}</h3></div>
        <div class="card-body">
        <p class="card-text">{{$tagdata["descripcion"]}}</p>
        <p class="card-text">Vacio: 
            @if ($tagdata["vacio"] == true)
                true
            @else
                false
            @endif
        </p>
        <p class="card-text">Ejemplo: {{$tagdata["ejemplo"][0]}}</p>
        </div>
        
    </section>
    <hr>
    <section class="card-wrapper " >
        <a name="atributos"></a>

        <div class="card-header"><h3 class="card-title"># Atributos</h3></div>
        <div class="card-body">
        @foreach ($tagdata["atributo"] as $clave => $valor)
            <h3 class="card-title">{{$clave}}</h3>
            @foreach ($tagdata["atributo"][$clave] as $subclave => $subvalor)
            
            @if (is_array($tagdata["atributo"][$clave][$subclave]))
                <p>Valores:</p>
                @foreach ($tagdata["atributo"][$clave][$subclave] as $subclave2 => $subvalor2)
                    @if ($tagdata["atributo"][$clave][$subclave] == $tagdata["atributo"][$clave]["ejemplo"])
                    <p class="card-text">Ejemplo: {{$tagdata["atributo"][$clave]["ejemplo"][0]}}</p>
                    
                    @else
 
                    <ul>
                        <li class="card-text">{{$subclave2}}: {{$subvalor2}}</li>
                    </ul>
                    
                    @endif
                
                    @endforeach
                    
            @elseif (is_bool($tagdata["atributo"][$clave][$subclave]) && true)
                
                <p class="card-text">Booleano: true</p>
            
            @elseif (is_bool($tagdata["atributo"][$clave][$subclave]) && false)
                
                <p class="card-text">Booleano: false</p>

            @else
                    <p class="card-text">{{$subclave}}: {{$subvalor}}</p>
            @endif
                
            @endforeach
            
        @endforeach
        
        </div>
        
    </section>
    <hr>
    <section class="card-wrapper " >
        <a name="ejemplos"></a>

        <div class="card-header">Ejemplo</div>
        <div class="card-body">
        <h5 class="card-title">Descripcion de ejemplos</h5>
        <p class="card-text"></p>
        
        </div>
        
    </section>
        
    </article> 