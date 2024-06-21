<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{ route('front.home') }}">Materi</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ route('front.home') }}">PH</a>
    </div>

    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard Admin</li>
        

    </ul>

    <hr>

    <ul class="sidebar-menu">
        <li class="menu-header">Data </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-file"></i><span>Materi</span></a>
            <ul class="dropdown-menu">
                <li class=''>
                    <a class="nav-link" href="{{ route('index.obat') }}">Data Materi</a>
                </li>
            </ul>
           
        </li>

    </ul>
</aside>
