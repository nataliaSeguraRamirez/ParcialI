@extends('dashboard.master')
@section('content')
    <form action="{{ route('doctor.store') }}" method="post" class="form">

        <div class="row form-group">
            <label for="name">RUT</label>
            <input readonly type="text" name="RUT" id="RUT" class="form-control" value="{{ $doctors->RUT}}">
        </div>
        <div class="row form-group">
            <label for="name">Titulo publicación</label>
            <input readonly type="text" name="name" id="name" class="form-control" value="{{ $doctors->name }}">
        </div>
        <div class="row form-group">
            <label for="lastname">Titulo publicación</label>
            <input readonly type="text" name="lastname" id="lastname" class="form-control" value="{{ $doctors->lastname }}">
        </div>
        <div class="row form-group">
            <label for="email">Titulo publicación</label>
            <input readonly type="text" name="email" id="email" class="form-control" value="{{ $doctors->email }}">
        </div>
        <div class="row form-group">
            <label for="address">Titulo publicación</label>
            <input readonly type="text" name="address" id="address" class="form-control" value="{{ $doctors->address }}">
        </div>
        <div class="row form-group">
            <label for="especialidad">Descripción</label>
            <textarea readonly name="especialidad" id="especialidad" cols="30" rows="5" class="form-control">
                        {{ $doctors->especialidad }}
                    </textarea>
        </div>
        <div class="row center">
            <div class="col s6">
                <a class="btn btn-outline-dark mt-3 mb-3" href="{{ URL::previous() }}">Regresar</a>
            </div>
        </div>
    </form>
@endsection
