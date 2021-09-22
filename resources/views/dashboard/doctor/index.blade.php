@extends('dashboard.master')
@section('content')
    <a href="{{ route('doctor.create') }}" target="_blank" class="btn btn-success mt-3 mb-3">Añadir Doctor</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Código</th>
                <th scope="col">RUT</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Correo</th>
                <th scope="col">Dirección</th>
                <th scope="col">Especialidad</th>
                <th scope="col">Fecha Creación</th>
                <th scope="col">Fecha actualización</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($doctors as $doctor)
                <tr>
                    <td>{{ $doctor->id }}</td>
                    <td>{{ $doctor->RUT }}</td>
                    <td>{{ $doctor->name }}</td>
                    <td>{{ $doctor->lastname}}</td>
                    <td>{{ $doctor->email }}</td>
                    <td>{{ $doctor->address }}</td>
                    <td>{{ $doctor->especialidad }}</td>
                    <td>{{ $doctor->created_at->format('d-m-y') }}</td>
                    <td>{{ $doctor->updated_at->format('d-m-y') }}</td>
                    <td>
                        <a href="{{ route('doctor.show', $doctor->id) }}" class="btn btn-primary">Ver</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
{{ $doctors->links() }}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar registro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Desea eliminar el post?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <form id="formActionDelete" action="{{ route('doctor.destroy', 0) }}"
                    data-action="{{ route('doctor.destroy', 0) }}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    window.onload = function() {
        $('#exampleModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id');
            var modal = $(this)
            action = $("#formActionDelete").attr('data-action').slice(0, -1);
            action += id;
            $("#formActionDelete").attr('action', action)
            console.log(action);
            modal.find('.modal-title').text(`Vas a eliminar el id ${id}`);
        })
    }
</script>
