@extends('layouts.app')

@section('title', '| Registrar')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div class="card shadow align-items-center">
    <a href="{{  redirect()->back()->getTargetUrl() }}" class="position-absolute top-0 start-0 link-secondary p-3">
        <i class="bi bi-box-arrow-left fs-3"></i>
    </a>
</div>
<div class="min-vh-100 d-flex justify-content-center align-items-center">
    @if($users)
    <form class="mw-100" action="{{ route('registerUser') }}" method="post" style="width: 400px;">
        @elseif(!$users)
        <form class="mw-100" action="{{ route('signup') }}" method="post" style="width: 400px;">
            @endif
            @csrf

            <div class="text-center mb-2 ">
                <img src="{{ asset('images/logo.png') }}" width="150">

            </div>
            @if($users)
            <h4 class="text-center text-success ">Crie um usuário</h4>
            @elseif(!$users)
            <h4 class="text-center text-success ">Cadastre-se</h4>
            @endif
            <div class="mb-3">
                <input class="form-control" name="name" placeholder="Nome" required>
            </div>

            <div class="mb-3">
                <input class="form-control" type="email" name="email" placeholder="E-mail" required>
            </div>

            <div class="mb-3">
                <input class="form-control" name="cpf" placeholder="CPF" required>
            </div>

            <div class="mb-3">
                <input class="form-control" name="rg" placeholder="RG" required>
            </div>

            <div class="mb-3">
                <input type="date" class="form-control" name="birth" placeholder="Data de Nascimento" required>
            </div>

            <div class="mb-3">
                <select id="type" name="type" class="form-select" aria-label="Default select example">
                    <option disabled selected>Selecione seu tipo de usuário</option>
                    <option value="Operador">Operador</option>
                    <option value="Médico">Médico</option>
                    <option value="Paciente">Paciente</option>
                </select>
            </div>

            <div class="mb-3">
                <select id="specialty" name="specialty[]" class="form-select" multiple>
                    <option selected disabled>Selecione sua especializado</option>
                    @foreach($specialists as $specialist)
                    <option value="{{ $specialist->id }}">{{ $specialist->name }}</option>
                    @endforeach
                </select>
            </div>

            <script>
                $("#specialty").hide();
            $("#type").on('change', function() {
                if(this.value =='Médico'){
                     $("#specialty").show();

                }else{
                    $("#specialty").hide();
                }});
            </script>

            <div class="mb-3">
                <input class="form-control" type="password" name="password" placeholder="Senha" required>
            </div>
            @if($users)
            <div class="d-grid gap-2">
                <button class="btn btn-outline-success" type="submit">Criar usuário agora</button>
                <a class="link-secondary" href="{{ route('dashboard') }}">Login</a>
            </div>
            @elseif(!$users)
            <div class="d-grid gap-2">
                <button class="btn btn-outline-success" type="submit">Cadastrar agora</button>
                <a class="link-secondary" href="{{ route('signin') }}">Login</a>
            </div>
            @endif

        </form>
</div>
@endsection
