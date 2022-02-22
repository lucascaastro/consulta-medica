<style>
    .navbar {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1030;
        bottom: 0;
        width: 232px;
        flex-flow: column nowrap;
        align-items: flex-start;
    }

    .icon-doctor {
        margin-left: -75px;
    }
</style>


<nav class="navbar navbar-expand-md navbar-light bg-light">

    <div class="navbar-header">
        <a class="nav-link me-3 mb-4" href="/dashboard">
            <img src="{{ asset('images/logo.png') }}" width="100">
        </a>
        <h1 class=" fs-6 text-success">Olá - {{ auth()->user()->name }}</h1>
    </div>
    <div class="container-fluid" style="width: 900px; max-width: 100%;">
        <div class="navbar-nav flex-column">
            @if(auth()->user()->type == 'Operador')
            <ul class="navbar-nav me-auto mb-2 mb-md-0 flex-column  ">
                <li class="nav-item">
                    <a class="nav-link btn" href="/consults/create">
                        <i class="bi bi-calendar-plus-fill fs-5 btn-outline-success"></i>
                        <span class="font-weight-bold text-success h6">Adicionar Consulta</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn" href="/doctors/index">
                        <i class=" bi bi-person-fill fs-5 btn-outline-success mr-4" style="margin-left: -76px;"></i>
                        <span class=" font-wei ght-bold text-success h6">Médicos</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn" href="/specialists/index">
                        <i class=" bi bi-bandaid-fill fs-5 btn-outline-success mr-4" style="margin-left: -37px;"></i>
                        <span class=" font-wei ght-bold text-success h6">Especialidades</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn" href="/specialists/create">
                        <i class=" bi bi-bandaid-fill fs-5 btn-outline-success mr-4" style="margin-left: -8px;"></i>
                        <span class=" font-wei ght-bold text-success h6">Criar Especialidade</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn" href="/patients/index">
                        <i class="bi bi-person-fill fs-5 btn-outline-success" style="margin-left: -76px;"></i>
                        <span class="font-weight-bold text-success h6">Pacientes</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn" href="{{ route('register') }}">
                        <i class="bi bi-person-plus-fill fs-5 btn-outline-success" style="margin-left: -22px;"></i>
                        <span class="font-weight-bold text-success h6">Criar um usuário</span>
                    </a>
                </li>
            </ul>
            @endif
            <a class="nav-link fixed-bottom" href="/user/edit/{{ auth()->user()->id }}">
                <i class="bi bi-person-circle fs-2 btn-outline-success "></i>
            </a>
        </div>
    </div>
</nav>
