@extends('Proyectos.create')
@extends('Proyectos.table')
@sectionMissing('home')
    <div class="pull-right">
        @include('home')
    </div>
@endif
<div class="container ">
    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Crear nuevo producto</button>
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