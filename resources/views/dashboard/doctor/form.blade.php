@csrf
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ingresar Doctor') }}</div>

                <div class="card-body">
                    <div class="form-group row">
                        <label for="RUT" class="col-md-4 col-form-label text-md-right">{{ __('RUT') }}</label>
                        <div class="col-md-6">
                            <input type="text" name="RUT" id="RUT" class="form-control" placeholder="RUT"
                                value="{{ old('RUT', $doctors->RUT) }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                        <div class="col-md-6">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Nombre"
                                value="{{ old('name', $doctors->name) }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lasname"
                            class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>
                        <div class="col-md-6">
                            <input type="text" name="lastname" id="lastname" class="form-control"
                                placeholder="Apellido" value="{{ old('lastname', $doctors->lastname) }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                placeholder="Correo" name="email" value="{{  old('email', $doctors->email)}}" required
                                autocomplete="email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address"
                            class="col-md-4 col-form-label text-md-right">{{ __('Direccion') }}</label>
                        <div class="col-md-6">
                            <input type="text" name="address" id="address" class="form-control"
                                placeholder="Dirección"
                                value="{{ old('address', $doctors->address) }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="especialidad"
                            class="col-md-4 col-form-label text-md-right">{{ __('Especialidad') }}</label>
                        <div class="col-md-6">
                            <input type="text" name="especialidad" id="especialidad" class="form-control"
                                placeholder="Especialidad"
                                value="{{ old('especialidad', $doctors->especialidad) }}">
                        </div>
                    </div>

                    <div class="row center">
                        <div class="col s6">
                            <button type="submit" class="btn btn-success btn-sm" href="{{route('doctor.index')}}">Publicar</button>
                            <a class="btn btn-outline-dark mt-3 mb-3" href="{{route('doctor.index')}}">Regresar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
