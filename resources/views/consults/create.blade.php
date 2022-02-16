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
            <div class="text-center mb-1 ">
                <img src="{{ asset('images/logo.png') }}" width="150">
            </div>
            <div class="mb-1 text-center align-items-center">
                <h2 class="mt-0 fs-4 text-success">Insira uma consulta</h2>
            </div>
            <div class="mb-3">
                <select name="doctor_id" id="doctor_id" class="form-select">
                    <option disabled selected>Selecione o Médico</option>
                    @foreach($doctors as $doctor)
                    <option value="{{ $doctor->id }}">{{ $doctor->name}}</option>
                    @endforeach
                </select>
            </div>
            <div id="div_specialist" class=" mb-3">
                <select name="specialist_id" id="specialist_id" class="form-select">
                </select>
            </div>
            <div class=" mb-3">
                <select name="patient_id" class="form-select">
                    <option disabled selected>Selecione o Paciente</option>
                    @foreach($patients as $patient)
                    <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <input type="date" class="form-control" name="date" required>
            </div>
            <div class="mb-3">
                <input type="time" class="form-control" name="hour" required>
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
    $("#div_specialist").hide();
    $("#doctor_id").on('change', function () {
        $("#div_specialist").show();
        const url = "/specialists/api/" + $("#doctor_id").val();
        $.ajax({
            url: url,
            success: function( result ) {
               // const  option = " <option disabled selected>Selecione o especialidade</option>";
                const html = result.map(function(specialist){
                   return "<option value=" + specialist.specialists.id + ">" + specialist.specialists.name + "</option>"
                }).join();
                $( "#specialist_id" ).html(" <option disabled selected>Selecione o especialidade</option>" + html);
            }
        });
    })
</script>
@endpush
