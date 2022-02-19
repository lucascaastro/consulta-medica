@extends('layouts.app')

@section('title', '| Registrar')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div class=" align-items-center">
    <a href="{{  redirect()->back()->getTargetUrl() }}" class="position-absolute top-0 start-0 link-secondary p-3">
        <i class="bi bi-box-arrow-left fs-3"></i>
    </a>
</div>
<div class="min-vh-100 d-flex justify-content-center align-items-center">
    <form class="mw-100" action="/user/update/{{ $user->id }}" method="POST" style="width: 400px;">
        @csrf

        <div class="text-center mb-2 ">
            <img src="{{ asset('images/logo.png') }}" width="150">
        </div>
        <h4 class="text-center fs-5 text-success ">Edite - {{ $user->name }}</h4>
        <div class="mb-3">
            <input class="form-control" name="name" value="{{ $user->name }}" required>
        </div>
        <div class="mb-3">
            <input class="form-control" type="email" name="email" value="{{ $user->email }}" required>
        </div>

        <div class="mb-3">
            <input class="form-control" name="cpf" value="{{ $user->cpf }}" required>
        </div>

        <div class="mb-3">
            <input class="form-control" name="rg" value="{{ $user->rg }}" required>
        </div>

        <div class="mb-3">
            <input type="date" class="form-control" name="birth" value="{{ $user->birth }}" required>
        </div>

        <div class="mb-3">
            <input class="form-control" type="password" name="password" value="{{ $user->password }}" required>
        </div>

        <div class="d-grid gap-2">
            <button class="btn btn-outline-success" type="submit">
                Editar agora
            </button>
        </div>
    </form>
</div>
@endsection
