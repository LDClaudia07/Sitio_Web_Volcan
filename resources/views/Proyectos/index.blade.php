@sectionMissing('home')
    <div class="pull-right">
        @include('home')
    </div>
@endif
<div class="container-fluid pb-3">
    <div class="d-grid gap-3" style="grid-template-columns: 1fr 2fr;">
      <div class="bg-body-tertiary border rounded-3">
          <br>
          <center>
              <a type="button" class="btn btn-outline-success" href="{{ route('Proyectos.create') }}" >Crear Producto</a>
          </center>
      </div>
      <div class="bg-body-tertiary border rounded-3">
        <br><center><h5>Productos</h5></center>
        <table class="table table-success table-hover">
            <thead>
                <tr class=" bg-gray-800 text-white">
                    <th>ID</th>
                    <th class="border px-4 py-2">Nombre</th>
                    <th class="border px-4 py-2">Descripción</th>
                    <th class="border px-4 py-2">Precio</th>
                    <th class="border px-14 py-1">Imagen</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Proyectos as $Proyecto)
                <tr>
                    <td>{{$Proyecto->id}}</td>
                    <td>{{$Proyecto->nombre}}</td>
                    <td>{{$Proyecto->descripcion}}</td>
                    <td>{{$Proyecto->precio}}</td>
                    <td>
                        <img src="/imagen/{{$Proyecto->imagen}}" width="50%">
                    </td>

                    <td class="border px-4 py-2">
                        <div class=" flex justify-center rounded-lg text-lg" role="group">
                            <a href=href="{{ route('Proyectos.edit', $Proyecto->id) }}" class="btn btn-outline-warning"> Editar</a>
                            
                            <form action="{{ route('Proyectos.destroy', $Proyecto->id) }}" method="POST" class="formEliminar">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-outline-danger">Borrar</button>
                            </form>
                        </div>

                    </td>    
                </tr>
            </tbody>
            @endforeach
        </table>

          <div>
              {!! $Proyectos->links()!!}
          </div>
    </div>
</div>

<script>
    (function () {
        var forms=document.querySelectorAll('.formEliminar')
        Array.prototype.slice.call(forms)
        .forEach(function(form){
            form.addEventListener('submit', function(event){
                event.preventDefault()
                event.stopPropagation()
                Swal.fire({
                    title: '¿Confirma la eliminación del registro?',
                    icon: 'info',
                    showCancelButton: true,
                    confirmButtonColor: '#20c997',
                    cancelButtonColor:'#6c757d',
                    confirmButtonText: 'Confirmar'
                }).then((result)=>{
                    if(result.isConfirmed){
                        this.submit();
                        Swal.fire('¡Eliminado!', 'El registro ha sido eliminado exitosamente.', 'success');
                    }
                })
            }, false)
        })
    })()
</script>