@extends('layouts.app')

@section('title', '| Registrar')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div class="min-vh-100 d-flex justify-content-center align-items-center">
    <form class="mw-100" action="{{ route('signup') }}" method="post" style="width: 400px;">
        @csrf

        <h1 class="mb-5 text-secondary text-center">Cadastro</h1>

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
            <input type="date" class="form-control" name="dataNascimento" placeholder="Data de Nascimento" required>
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
            <select id="specialty" name="specialty" class="form-select" aria-label="Default select example">
                <option selected disabled>Selecione sua especializado</option>
                <option value="Anestesiologia">Anestesiologia</option>
                <option value="Cancerologia">Cancerologia</option>
                <option value="Cirurgia geral">Cirurgia geral</option>
                <option value="Clínica médica">Clínica médica</option>
                <option value="Cirurgia plástica">Cirurgia plástica </option>
                <option value="Coloproctologia">Coloproctologia</option>
                <option value="Dermatologia">Dermatologia</option>
                <option value="Endocrinologia">Endocrinologia</option>
                <option value="Gastroenterologia">Gastroenterologia</option>
                <option value="Genética médica">Genética médica</option>
                <option value="Geriatria">Geriatria</option>
                <option value="Ginecologia e obstetrícia">Ginecologia e obstetrícia</option>
                <option value="Hematologia">Hematologia</option>
                <option value="Mastologia">Mastologia</option>
                <option value="Medicina de emergência">Medicina de emergência</option>
                <option value="Medicina legal ou medicina forense">Medicina legal ou medicina forense</option>
                <option value="Neurologia">Neurologia</option>
                <option value="Oftalmologia">Oftalmologia</option>
                <option value="Ortopedia">Ortopedia</option>
                <option value="Pediatria">Pediatria</option>
                <option value="Psiquiatria">Psiquiatria</option>
                <option value="Urologia">Urologia</option>
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

        <div class="d-grid gap-2">
            <button class="btn btn-outline-primary" type="submit">Cadastrar</button>
            <a class="link-secondary" href="{{ route('login') }}">Login</a>
        </div>
    </form>
</div>
@endsection
