@extends('layouts.app')

@section('title', '| Registrar')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div class="min-vh-100 d-flex justify-content-center align-items-center">
    <form class="mw-100" action="/patients/update/{{ $patient->id }}" method="POST" style="width: 400px;">
        @csrf

        <div class="text-center mb-2 ">
            <img src="{{ asset('images/logo.png') }}" width="150">
        </div>
        <h4 class="text-center fs-5 text-success ">Edite - {{ $patient->name }}</h4>
        <div class="mb-3">
            <input class="form-control" name="name" value="{{ $patient->name }}" required>
        </div>
        <div class="mb-3">
            <input class="form-control" type="email" name="email" value="{{ $patient->email }}" required>
        </div>

        <div class="mb-3">
            <input class="form-control" name="cpf" value="{{ $patient->cpf }}" required>
        </div>

        <div class="mb-3">
            <input class="form-control" name="rg" value="{{ $patient->rg }}" required>
        </div>

        <div class="mb-3">
            <input type="date" class="form-control" name="birth" value="{{ $patient->birth }}" required>
        </div>

        <div class="mb-3">
            <input class="form-control" type="password" name="password" value="{{ $patient->password }}" required>
        </div>

        <div class="d-grid gap-2">
            <button class="btn btn-outline-success" type="submit">
                Editar agora
            </button>
        </div>
    </form>
</div>
@endsection
