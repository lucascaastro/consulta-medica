<style>
    .navbar {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1030;
        bottom: 0;
        width: 240px;
        flex-flow: column nowrap;
        align-items: flex-start;
    }
</style>

<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="navbar-header">
        <a class="nav-link me-3 mb-4" href="/dashboard">
            <img src="{{ asset('images/logo.png') }}" width="100">
        </a>
    </div>
    <div class=" container-fluid" style="width: 900px; max-width: 100%;">
        <div class="navbar-nav flex-column">
            <ul class="navbar-nav me-auto mb-2 mb-md-0 flex-column  ">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/consults/create">
                        <i class="bi bi-calendar2-plus fs-4 btn-outline-success "></i>
                        <span class="font-weight-bold text-success h6"> Adicionar Consulta</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/consults/create">
                        <i class="bi bi-person-plus-fill fs-4 btn-outline-success "></i>
                        <span class="font-weight-bold text-success h6"> Médicos</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/doctor/index">
                        <i class="bi bi-person-plus-fill fs-4 btn-outline-success "></i>
                        <span class="font-weight-bold text-success h6"> Pacientes</span>
                    </a>
                </li>
            </ul>
            <a class="nav-link fixed-bottom" href="/consults/create">
                <i class="bi bi-person-circle fs-2 btn-outline-success "></i>
            </a>
            {{-- <a class=" nav-link me-3" href="/consults/create">
                <i class="bi bi-calendar2-plus fs-3 btn-outline-success "></i>
            </a>
            <a class="nav-link me-3" href="/users/create">
                <i class="bi  bi-person-plus-fill fs-3 btn-outline-success"></i>
            </a>
            <a class="nav-link me-3" href="/users/config">
                <i class="bi bi-person-circle fs-3 btn-outline-success"></i>
            </a> --}}
        </div>
    </div>
</nav>
