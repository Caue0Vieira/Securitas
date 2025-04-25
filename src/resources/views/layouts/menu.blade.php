<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item has-treeview
    {{ Request::is('grupos*') || Request::is('empresas*') || Request::is('unidades*') ||
       Request::is('setores*') || Request::is('funcoes*') || Request::is('funcionarios*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link
        {{ Request::is('grupos*') || Request::is('empresas*') || Request::is('unidades*') ||
           Request::is('setores*') || Request::is('funcoes*') || Request::is('funcionarios*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-folder"></i>
        <p>
            Cadastro
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('grupos.index') }}" class="nav-link {{ Request::is('grupos*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Grupos</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('empresas.index') }}" class="nav-link {{ Request::is('empresas*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Empresas</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('unidades.index') }}" class="nav-link {{ Request::is('unidades*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Unidades</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('setores.index') }}" class="nav-link {{ Request::is('setores*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Setores</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('funcoes.index') }}" class="nav-link {{ Request::is('funcoes*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Funções</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('funcionarios.index') }}" class="nav-link {{ Request::is('funcionarios*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Funcionários</p>
            </a>
        </li>
    </ul>
</li>



<li class="nav-item">
    <a href="{{ route('medicoResponsavels.index') }}"
       class="nav-link {{ Request::is('medicoResponsavels*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Medico Responsavels</p>
    </a>
</li>

