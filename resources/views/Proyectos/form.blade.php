<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Crear nuevo producto</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('Proyectos.store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field()}}
            <div class="row g-3">
              <div class="col-sm-7">
                <label class="form-label">Nombre</label>
                <input  name="nombre"  class="form-control"  id="nombre" >
              </div>
              <div class="col-sm">
                <label class="form-label">Precio</label>
                <input  name="precio" class="form-control"  id="precio">
              </div>
              <div class="form-floating">
                <textarea class="form-control" name="descripcion"  style="height: 100px"  id="descripcion"></textarea>
                <label  >Descripción</label>
              </div>
  
              <div class="grid grid-col-1 mt-5 mx-7">
                <center><img id="imagenSeleccionada" style="max-height: 200px;"></center>
              </div>
  
  
              <div class="grid text-center">
                <label class="form-label">Subir imagen</label>
                <div class="flex items-center justify-center w-full">
                  <label class="flex flex-column border border-2 border-success-subtle rounded-3">
                    <div class="flex flex-col items-center justify-center pt-7">
                      <input name="imagen" id="imagen" type="file" class="hidden form-control border-success-subtle" />
                    </div>
                  </label>
                </div>
              </div>     
            </div>
            <div class="modal-footer">
              <a  href="{{ route('Proyectos.index') }}" type="button" class="btn btn-danger " data-bs-dismiss="modal">Cerrar</a>
              <button type="submit" class="btn btn-success" id="btnGuardar">Guardar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script>
    $(document).ready(function(e) {
      $('#imagen').change(function() {
        event.preventDefault();
        let reader = new FileReader();
        reader.onload = (e) => {
          $('#imagenSeleccionada').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
      });
    });
  </script>
  