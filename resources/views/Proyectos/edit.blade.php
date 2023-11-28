@sectionMissing('home')
    <div class="pull-right">
        @include('home')
    </div>
@endif
<div class="container mt-3">
    
        <a href="{{ route('Proyectos.index')}}" class="nav-link text-secondary" placeholder="Inicio" title="Atrás">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
            </svg>
        </a>
       
</div>

</button>
<div class="main-content">
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0 ">
                        <h3 class="mb-0">Modulo Editar </h3>
                        <br>
                        <form action="{{ url('/Proyectos/'.$Proyecto->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                             {{ method_field('PATCH') }}
                    
                            <div class="row">
                                <div class="col">
                                  <label for="nombre">Nombre</label>
                                  <input type="text" class="form-control"  name="nombre" value="{{$Proyecto->nombre}}" id="nombre">
                                </div>
                                
                                <div class="col">
                                  <label for="precio">Precio</label>
                                  <input type="text" class="form-control"  aria-label="Last name" name="precio" value="{{$Proyecto->precio}}" id="precio">
                                </div>
                                
                                <div class="col">
                                    <label for="precio">Descripción</label>
                                    <input type="text" class="form-control" name="descripcion" value="{{$Proyecto->descripcion}}"id="descripcion">
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-5">
                                    <label for="imagen">Imagen</label>
                                    <br>
                                    <img src="{{ asset('imagen/').'/'.$Proyecto->imagen }}" width="100px" alt="">
                                    <input type="file" class="form-control"  name="imagen" id="imagen">
                                <br>
                                </div>
                            </div>
                            
                            <input class="btn btn-warning" type="submit" value="Guardar datos">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
