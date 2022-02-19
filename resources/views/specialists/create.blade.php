@extends('layouts.app')

@section('title', '| Registrar')

@section('content')
@include('components.navbar')
<div class="min-vh-100 d-flex align-items-center" style="margin-top: -209px;margin-left: 243px;">
    <div class="container-fluid ">
        <div class="card-body">
            <div class="card shadow align-items-center">
                <div class="card-header">
                    <h5 class="mt-0 align-items-center font-weight-bold text-success">Criar Especialidade
                    </h5>
                </div>
                <form class="mw-100" action="/specialists/store" method="POST" style="width: 400px;">
                    @csrf
                    <div class="mb-3">
                        <input name="name" class="form-control" required>
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-outline-success" type="submit">
                            Criar agora
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
