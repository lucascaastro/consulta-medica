@extends('layouts.app')

@section('title', '| Dashboard')

@section('content')

@section('content')
@include('components.navbar')
<a href="{{ route('logout') }}" class="position-absolute top-0 end-0 link-secondary p-3">
    <i class="bi bi-box-arrow-right fs-3"></i>
</a>
<div class="min-vh-100 d-flex justify-content-center align-items-center">
    <div class="min-vh-100 d-flex justify-content-center align-items-center">
        <form class="mw-100" action="/consults/store" method="post" style="width: 400px;">
            @csrf
            <h1>Insira uma consulta</h1>
            <div class="mb-3">
                <select name="doctor" id="doctor" class="form-select">
                    <option disabled selected>Selecione o Médico</option>
                    @foreach($doctors as $doctor)
                    <option value="{{ $doctor->name }}">{{ $doctor->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class=" mb-3">
                <select name="specialist" id="specialist" class="form-select">
                    <option disabled selected>Selecione o especialidade</option>
                </select>
            </div>
            <div class=" mb-3">
                <select name="patient" class="form-select">
                    <option disabled selected>Selecione o Paciente</option>
                    @foreach($patients as $patient)
                    <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <input type="date" class="form-control" name="date" placeholder="Nome" required>
            </div>
            <div class="mb-3">
                <input type="time" class="form-control" name="hour" placeholder="Nome" required>
            </div>

            <div class="d-grid gap-2">
                <button class="btn btn-outline-success" type="submit">Cadastrar consulta</button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $("#doctor").on('change', function () {
    alert($("#doctor").val());
    })
</script>
@endpush
