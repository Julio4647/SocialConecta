<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-text mx-3 mp-3">
            <img src="{{asset('img/sc1.png')}}" style="width: 115px; height: 60px; align-items: center; margin-top: 10px; justify-content: center;">
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider " style="margin-top: 10px;">

    <!-- Nav Item - Dashboard -->
    <li class=" nav-item" >
        <a class=" nav-link" href="{{ route('dashboard') }}">
            <i><img class="img-side" src="{{asset('img/svg/home.svg')}}" alt=""></i>
            <span style="color:black">Inicio</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link">
            <i><img class="img-side" src="{{asset('img/svg/products.svg')}}" alt=""></i>
            <span style="color:black">Productos y servicios</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/profile">
            <i><img class="img-side" src="https://img.icons8.com/ios/50/000000/wrench--v1.png" alt="wrench--v1"/></i>
            <span style="color:black">Herramientas</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/profile">
            <i><img class="img-side" src="https://img.icons8.com/external-tanah-basah-basic-outline-tanah-basah/48/000000/external-blog-content-creator-tanah-basah-basic-outline-tanah-basah.png" alt="external-blog-content-creator-tanah-basah-basic-outline-tanah-basah"/></i>
            <span style="color:black">Blog Social Conecta</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/profile">
            <i><img class="img-side" src="https://img.icons8.com/ios-filled/100/000000/imac.png" alt="imac"/></i>
            <span style="color:black">Mi Equipo</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/profile">
            <i><img class="img-side" src="https://img.icons8.com/ios-filled/100/000000/groups.png" alt="groups"/></i>
            <span style="color:black">Mis Clientes</span></a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline" style="margin-top: 10px;">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>

