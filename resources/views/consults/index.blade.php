@extends('layouts.app')

@section('title', '| Registrar')

@section('content')
@include('components.navbar')
<div class="min-vh-100 d-flex align-items-center" style="margin-top: -209px;margin-left: 243px;">
    <div class="container-fluid">
        <div class="card-body">
            <div class="card shadow align-items-center">
                <div class="card-header" style="margin-top: 30px;">
                    <h5 class="mt-0 align-items-center font-weight-bold text-success">Pacientes</h6>
                </div>
                <div class="table-responsive align-items-center">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>CPF</th>
                                <th>RG</th>
                                <th>Data de Nascimento</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>CPF</th>
                                <th>RG</th>
                                <th>Data de Nascimento</th>
                                <th>Ações</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                @if($consults)
                                @foreach($patients as $patient)

                                <td>{{ $patient->name }}</td>
                                <td> {{ $patient->email }}</td>
                                <td>{{ $patient->cpf }}</td>
                                <td>{{ $patient->rg }}</td>
                                <td>{{ $patient->birth }}</td>
                                <td>
                                    <a href="/patients/edit/{{ $patient->id }}">
                                        <button type="submit" class="btn btn-outline-success">
                                            Editar
                                        </button>
                                    </a>
                                    <a href="/patients/delete/{{ $patient->id }}">
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
