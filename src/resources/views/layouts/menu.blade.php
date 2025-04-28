<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('grupos.index') }}" class="nav-link {{ Request::is('grupos*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Grupos</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('empresas.index') }}" class="nav-link {{ Request::is('empresas*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Empresas</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('setores.index') }}" class="nav-link {{ Request::is('setores*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Setores</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('unidades.index') }}" class="nav-link {{ Request::is('unidades*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Unidades</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('funcoes.index') }}" class="nav-link {{ Request::is('funcoes*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Funcoes</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('funcionarios.index') }}" class="nav-link {{ Request::is('funcionarios*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Funcionarios</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('medicos.index') }}" class="nav-link {{ Request::is('medicos*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Medicos</p>
    </a>
</li>
