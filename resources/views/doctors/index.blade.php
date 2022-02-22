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
                                <th>Nome</th>
                                <th>Email</th>
                                <th>CPF</th>
                                <th>RG</th>
                                <th>Data de Nascimento</th>
                                <th>Especialidade</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>CPF</th>
                                <th>RG</th>
                                <th>Data de Nascimento</th>
                                <th>Especialidade</th>
                                <th>Ações</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($doctors as $doctor)
                            <tr>
                                <td>{{ $doctor->name }}</td>
                                <td> {{ $doctor->email }}</td>
                                <td>{{ $doctor->cpf }}</td>
                                <td>{{ $doctor->rg }}</td>
                                <td>{{ date( 'd/m/Y' , strtotime($doctor->birth))}}</td>
                                <td>
                                    @foreach($consults as $consult)
                                    {{$consult->specialist->name }}
                                    @endforeach
                                </td>
                                <td>
                                    <a href="/user/edit/{{ $doctor->id }}">
                                        <button type="submit" class="btn btn-outline-success">
                                            Editar
                                        </button>
                                    </a>
                                    <a href="/doctors/delete/{{ $doctor->id }}">
                                        <button class=" btn btn-outline-danger">
                                            Excluir
                                        </button>
                                    </a>
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
