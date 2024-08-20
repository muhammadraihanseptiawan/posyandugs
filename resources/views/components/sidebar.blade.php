<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">posyandu</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">PGS</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item {{ $type_menu === 'dashboard' ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item dropdown {{ $type_menu === 'data_balita' ? 'active' : '' }}">
                <a href="{{ route('bayi.index') }}" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Data Balita</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                        <a class="nav-link" href="{{ route('bayi.filter') }}">Filter Data Balita</a>
                    </li>
                    <li class="{{ Request::is('dashboard-ecommerce-dashboard') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('bayi.tambah') }}">
                            Input Data Balita
                        </a>
                    </li>
                    <li class="{{ Request::is('dashboard-ecommerce-dashboard') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('bayi.index') }}">
                            Lihat Data Balita
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown {{ $type_menu === 'gizi' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Pengukuran gizi</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                        <a class="nav-link" href="{{route('bayi.gizi')}}">Input Pengukuran Balita</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown {{ $type_menu === 'data_hamil' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Data hamil</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                        <a class="nav-link" href="{{ route('bumil.filter') }}">Filter Data ibu hamil</a>
                    </li>
                    <li class="{{ Request::is('dashboard-ecommerce-dashboard') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('bumil.tambah') }}">
                            Input Data ibu hamil
                        </a>
                    </li>
                    <li class="{{ Request::is('dashboard-ecommerce-dashboard') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('bumil.index') }}">
                            Lihat Data ibu hamil
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown {{ $type_menu === 'data_nifas' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Data nifas</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                        <a class="nav-link" href="{{ route('nifas.filter') }}">Filter Data ibu nifas</a>
                    </li>
                    <li class="{{ Request::is('dashboard-ecommerce-dashboard') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('nifas.tambah') }}">
                            Input Data ibu nifas
                        </a>
                    </li>
                    <li class="{{ Request::is('dashboard-ecommerce-dashboard') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('nifas.index') }}">
                            Lihat Data ibu nifas
                        </a>
                    </li>
                </ul>
            </li>
            @if($user->role_id == 1)
            <li class="nav-item dropdown {{ $type_menu === 'pengguna' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Data pengguna</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('dashboard-ecommerce-dashboard') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.tambah') }}">
                            Input Data pengguna baru
                        </a>
                    </li>
                    <li class="{{ Request::is('dashboard-ecommerce-dashboard') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.index') }}">
                            Lihat data pengguna baru
                        </a>
                    </li>
                </ul>
            </li>
            @endif
        </ul>

    </aside>
</div>