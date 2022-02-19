@extends('layouts.app')

@section('title', '| Médicos')

@section('content')
@include('components.navbar')
<div class="min-vh-100 d-flex align-items-center" style="margin-top: -209px;margin-left: 243px;">
    <div class="container-fluid">
        <div class="card-body">
            <div class="card shadow align-items-center">
                <div class="card-header" style="margin-top: 30px;">
                    <h5 class="mt-0 align-items-center font-weight-bold text-success">Médicos</h6>
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
                                <th>Especialidades</th>
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
                                <th>Especialidades</th>
                                <th>Ações</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                @foreach($doctors as $doctor)
                                <td>{{ $doctor->name }}</td>
                                <td> {{ $doctor->email }}</td>
                                <td>{{ $doctor->cpf }}</td>
                                <td>{{ $doctor->rg }}</td>
                                <td>{{ $doctor->birth }}</td>
                                <td>
                                    @foreach($specialists as $specialist)
                                    {{ $specialist->name }}
                                    @endforeach
                                </td>
                                <td>
                                    <a href="/doctors/edit/{{ $doctor->id }}">
                                        <button type="submit" class="btn btn-outline-success">
                                            Editar
                                        </button>
                                    </a>
                                    <button class=" btn btn-outline-danger">
                                        Excluir
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
