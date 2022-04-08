<main>
    <article class="container">
    

    <section class="card-wrapper " >
        <a name="descripcion"></a>
        <div class="card-header"><h3 class="card-title">{{$tagdata["nombre"]}}</h3></div>
        <div class="card-body">
        <p class="card-text">{{$tagdata["descripcion"]}}</p>
        <p class="card-text"><strong>Vacio:</strong>  
            @if ($tagdata["vacio"] == true)
                true
            @else
                false
            @endif
        </p>
        @foreach ($tagdata["ejemplo"] as $item => $valor)
             <p class="card-text"><strong>Ejemplo:</strong> <code>{{$tagdata["ejemplo"][$item]}}</code> </p>
        @endforeach
       
        </div>
        
    </section>
    <hr>
    <section class="card-wrapper " >
        <a name="atributos"></a>

        <div class="card-header"><h3 class="card-title"># Atributos</h3></div>
        <div class="card-body">
        @foreach ($tagdata["atributo"] as $clave => $valor)
            <h3 class="card-title"><strong>{{$clave}}</strong></h3>
            @foreach ($tagdata["atributo"][$clave] as $subclave => $subvalor)
            
            @if (is_array($tagdata["atributo"][$clave][$subclave]))
                <p><strong>Admite:</strong></p>
                @php
                    $i = 0;
                @endphp
                @foreach ($tagdata["atributo"][$clave][$subclave] as $subclave2 => $subvalor2)
                
                    @if ($tagdata["atributo"][$clave][$subclave] == $tagdata["atributo"][$clave]["ejemplo"])
                        
                    <p class="card-text"><strong>Ejemplo:</strong> <code>{{$tagdata["atributo"][$clave]["ejemplo"][$i++]}}</code> </p>
                    
                    @else
 
                    <ul>
                        <li class="card-text"><strong>{{$subclave2}}</strong>: {{$subvalor2}}</li>
                    </ul>
                    
                    @endif
                
                    @endforeach
                    
            @elseif (is_bool($tagdata["atributo"][$clave][$subclave]) && true)
                
                <p class="card-text"><strong>Booleano:</strong> true</p>
            
            @elseif (is_bool($tagdata["atributo"][$clave][$subclave]) && false)
                
                <p class="card-text"><strong>Booleano:</strong> false</p>

            @else
                    <p class="card-text"><strong>{{$subclave}}:</strong> {{$subvalor}}</p>
            @endif
                
            @endforeach
            
        @endforeach
        
        </div>
        
    </section>
    <hr>
    <section class="card-wrapper " >
        <a name="ejemplos"></a>

        <div class="card-header"><h3 class="card-title">Descripcion de ejemplos</h3></div>
        <div class="card-body">
        
        <p class="card-text"></p>
        
        </div>
        
    </section>
        
    </article> 