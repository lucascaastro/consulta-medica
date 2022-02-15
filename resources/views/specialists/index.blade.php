@extends('layouts.app')

@section('title', '| Registrar')

@section('content')
@include('components.navbar')
<div class="min-vh-100 d-flex align-items-center" style="margin-top: -209px;margin-left: 243px;">
    <div class="container-fluid ">
        <div class="card-body">
            <div class="card shadow align-items-center">
                <div class="card-header" style="margin-top: 210px;">
                    <h5 class="mt-0 align-items-center font-weight-bold text-success">Especialidades</h6>
                </div>
                <div class="table-responsive align-items-center">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id Especilidades</th>
                                <th>Nome</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Id Especilidades</th>
                                <th>Nome</th>
                                <th>Ações</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($specialists as $specialist)
                            <tr>
                                <td>
                                    {{$specialist->id }}
                                </td>
                                <td>
                                    {{$specialist->name }}
                                </td>

                                <td>
                                    <a href="/specialists/edit/{{ $specialist->id }}">
                                        <button type="submit" class="btn btn-outline-success">
                                            Editar
                                        </button>
                                    </a>
                                    <a href="/specialists/delete/{{ $specialist->id }}">
                                        <button class=" btn btn-outline-danger">
                                            Excluir
                                        </button>
                                    </a>
                                </td>
                                @endforeach
                            </tr>
                            <tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
