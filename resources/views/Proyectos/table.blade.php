<div class="main-content">
    <div class="container mt-3">
      <div class="row">
        <div class="col">
          <div class="card shadow ">
            <div class="card-header border-0 ">
              <h3 class="mb-0">Tabla de contenido</h3>
            </div>
            <div class="table-responsive  ">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Acciones</th>
                    
                  </tr>
                </thead>
                <tbody>
                    @foreach ( $Proyectos as $Proyecto)
                    <tr>
                      <td>{{ $Proyecto->id}}</td>
                      <td>{{ $Proyecto->nombre}}</td>
                      <td>{{ $Proyecto->precio}}</td>
                      <td>{{ $Proyecto->descripcion}}</td>
                      <td>
                        <img src="{{ asset('imagen/').'/'.$Proyecto->imagen }}"  width="50px" alt="">
                      </td>
                      <td>
                        <a href="{{  url('/Proyectos/'.$Proyecto->id.'/edit') }}" class="btn btn-warning" placeholder="Inicio" title="Editar" >
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                          </svg>
                        </a>

                        
                        
                          <form action="{{ url('/Proyectos/'.$Proyecto->id)}}" method="POST" class="d-inline">
                          @csrf {{ method_field('DELETE') }} 
                          <button class="btn btn-danger bi bi-trash3-fill"" type="submit" onclick="return confirm ('¿Quieres borrar?')" 
                          value="Borar" title="Borrar">
                          </button>                             
                          </form>           
                      </td>
                    </tr>
                    @endforeach      
                  </tbody>
                </table>
              </div>  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>