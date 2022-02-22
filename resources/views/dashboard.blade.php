@extends('layouts.app')

@section('title', '| Dashboard')

@section('content')

@section('content')
@include('components.navbar')
<div class="min-vh-100 d-flex align-items-center" style="margin-top: -209px;margin-left: 243px; overflow-y: auto ;">
    <div class="container-fluid">
        <div class="card-body" data-bs-spy="scroll" data-bs-offset="0">
            <div class="card shadow align-items-center">
                <a href="{{ route('logout') }}" class="position-absolute top-0 end-0 link-secondary p-3">
                    <i class="bi bi-box-arrow-right fs-3"></i>
                </a>
                <div class="card-header" style="margin-top: 30px;">
                    <h5 class="mt-0 align-items-center font-weight-bold text-success">Consultas</h6>
                </div>
                <div class="table-responsive align-items-center">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Número</th>
                                <th>Paciente</th>
                                <th>Médico</th>
                                <th>Data</th>
                                <th>Horário</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Número</th>
                                <th>Paciente</th>
                                <th>Médico</th>
                                <th>Data</th>
                                <th>Horário</th>
                                <th>Ações</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @if($consults)
                            @foreach($consults as $consult)
                            <tr>
                                <td>{{ $consult->id }}</td>
                                <td>{{ $consult->patient->name }}</td>
                                <td>{{ $consult->doctor->name }}</td>
                                <td>{{ date( 'd/m/Y' , strtotime($consult->date))}}</td>
                                <td>{{ date('H:i' , strtotime($consult->hour))}}</td>
                                <td>
                                    <a href="/consults/edit/{{ $consult->id }}">
                                        <button type="submit" class="btn btn-outline-success">
                                            Editar
                                        </button>
                                    </a>
                                    <a href="/consults/delete/{{ $consult->id }}">
                                        <button class=" btn btn-outline-danger">
                                            Excluir
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
