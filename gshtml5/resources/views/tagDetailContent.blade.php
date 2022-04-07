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
                <p class="card-text">{{$subclave}}: </p>
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