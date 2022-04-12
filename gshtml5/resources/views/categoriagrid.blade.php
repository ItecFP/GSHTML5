<div class="row row-cols-1 row-cols-md-3 mb-3 text-center justify-content-center">
    @for($i=0; $i<count($categorias); $i++)
        <div class="col-12 col-sm-3 col-md-3 col-lg-3 ">
            <a href="{{$categorias[$i]["url"]}}" class="enlaces__categorias link">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="py-3 ">
                        <h2>{{$categorias[$i]["nombre"]}}</h2>
                    </div>
                </div>
            </a>
        </div>
    @endfor
</div>
