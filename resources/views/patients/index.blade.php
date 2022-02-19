@extends('layouts.app')

@section('title', '| Pacientes')

@section('content')
@include('components.navbar')
<div class="min-vh-100 d-flex align-items-center " style="margin-left: 243px; overflow-y: auto ;">
    <div class="container-fluid ">
        <div class=" card card-header" style="margin-top: 30px;" data-bs-spy="scroll" data-bs-offset="0">
            <div class="card-body ">
                <h5 class="mt-0 card-title text-center align-items-center font-weight-bold text-success">Pacientes
                </h5>
            </div>
            <div class="card align-items-center" data-bs-offset="0">
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
                        @if($patients)
                        @foreach($patients as $patient)
                        <tr>

                            <td>{{ $patient->name }}</td>
                            <td> {{ $patient->email }}</td>
                            <td>{{ $patient->cpf }}</td>
                            <td>{{ $patient->rg }}</td>
                            <td>{{ $patient->birth }}</td>
                            <td>
                                <a href="/user/edit/{{ $patient->id }}">
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
@endsection
