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
                <select name="doctor" class="form-select" size="3" aria-label="size 3 select example">
                    <option disabled selected>Selecione o Médico</option>
                    @foreach($doctors as $doctor)
                    @foreach($specialists as $specialist)
                    <option
                        value="{{ $doctor->name .' - '. $specialist->where('user_id',$doctor->id)->limit(1)->get() }}">
                        {{
                        $doctor->name
                        . ' - '.
                        $specialist->specialty }}</option>
                    @endforeach
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <select name="patient" class="form-select" size="3" aria-label="size 3 select example">
                    <option disabled selected>Selecione o Paciente</option>
                    @foreach($patients as $patient)
                    <option value="{{ $patient->name }}">{{ $patient->name }}</option>
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
