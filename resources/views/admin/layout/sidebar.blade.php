<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center cursor-pointer">
        <div class="sidebar-brand-text mx-1">{{ auth()->user()->name }}</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Divider -->
    <hr class="sidebar-divider">


    <?php
    $route_name = request()->route()->getName();
    $quote_active = $route_name == 'quote.index' ? true : false;
    ?>
    <li class="nav-item {{ $quote_active ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('quote.index') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Quotes</span></a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline my-4">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
