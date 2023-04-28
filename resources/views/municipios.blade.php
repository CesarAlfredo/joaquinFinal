@extends('home_tables')
@section('contenido')
<div class="row mt-3">
    <div class="col-md-4 offset-4">
        <div class="row mt-3">
            <i class="fa-solid fa-plate-wheat"><h1># Municipios</h1></i>
        </div>
        <br>
    </br>
<div class="d-grid mx-auto">
    <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalartes">
        <i class="fa-solid fa-circle-plus"> </i> Añadir Municipio
    </button>
    <br>
</br>

</div>
</div>
</div>
<div class="row mt-3">
<div class="col-12 col-lg-8 offset-0 offset-lg-2">
<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead><tr><th>Id</th><th>Nombre</th><th>Editar</th><th>Eliminar</th></tr></thead>
        <tbody class="table-group-divider">

        @php $i=1; @endphp
        @foreach($municipios as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->nombre}}</td>
            <td>
                <a href="{{ url('municipios',[$row]) }}" class="btn btn-dark"><i class="fa-solid fa-edit"></i> </a>
            </td>

            <td>
                <form method="POST" action="{{ url('bebidas',[$row]) }}">
                    @method("delete")
                    @csrf
                    <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
</div>
</div>
<div>
    <div class="modal fade" id="modalartes" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="h5" id="titulomodal"><i class="fa-solid fa-plus"></i>  Añadir Bebida</label>
                    <button type="button" class="btn-close" data-bs-dimiss="modal" aria-label="close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ url("bebidas") }}">
                        @csrf
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-fish"></i></span>
                            <input type="text" name="nombre_bebida" class="form-control" maxlength="45" placeholder="Nombre de la bebida" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-carrot"></i></span>
                            <select name="id_ingrediente_fk" class="form select" required>
                                <option value="">Ingrediente</option>
                                @foreach ($municipios as $row )
                                <option value="{{ $row->id}}">{{ $row->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-image"></i></span>
                        <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="bebida"  required>
                        </div>
                        <br>
                        </br>
                        <div class="d-grid col-6 mx-auto">
                            <button class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i>  Guardar</button>
                        </div>
                    </form>
                </div>
                        <div class="modal-footer">
                            <button type="button" id="btnclose" class="btn btn-secondary" data-bs-dimiss="modal">Cerrar</button>

                        </div>
            </div>
        </div>
    </div>
</div>
@endsection
