@extends('dashboard.master')
@section('content')
    @include('dashboard.partials.validation-error')
    <form action={{ route('doctor.store') }} method="post" class="form">
        @include('dashboard.doctor.form')
    </form>

@endsection
