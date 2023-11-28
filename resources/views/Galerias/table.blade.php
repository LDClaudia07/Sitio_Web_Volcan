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
                    <th scope="col">Imagen</th>
                    <th scope="col">Acciones</th>
                    
                  </tr>
                </thead>
                <tbody>
                    @foreach ( $Galerias as $Galeria)
                        <tr>
                        <td>{{ $Galeria->id}}</td>
                        <td>
                            <img src="{{ asset('imagen_galeria/').'/'.$Galeria->foto }}"  width="70px" alt="">
                        </td>
                        <td>                        
                            <form action="{{ url('/Galerias/'.$Galeria->id)}}" method="POST" class="d-inline">
                            @csrf {{ method_field('DELETE') }} 
                            <button class="btn btn-danger bi bi-trash3-fill"" type="submit" onclick="return confirm ('¿Quieres borrar?')" value="Borar" title="Borrar">
                            </button>                             
                            </form>           
                        </td>
                        
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