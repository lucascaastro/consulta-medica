@extends('layouts.app')

@section('title', '| Dashboard')

@section('content')

@section('content')
@include('components.navbar')
<div class="min-vh-100 d-flex align-items-center" style="margin-top: -209px;margin-left: 243px; overflow-y: auto ;">
    <div class="container-fluid">
        <div class="card-body">
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
                                <th>Paciente</th>
                                <th>Médico</th>
                                <th>Data</th>
                                <th>Horário</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
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
                                <td>{{ $consult->patients->name }}</td>
                                <td>{{ $consult->doctors->name }}</td>
                                <td>{{ $consult->date }}</td>
                                <td>{{ $consult->hour }}</td>
                                <td>
                                    <a href="/user/edit/">
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




@endsection
