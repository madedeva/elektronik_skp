<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
    <div class="sidebar-brand-text mx-3">E-SKP UNDIKSHA</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="/home">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Nav Item - Tables -->
<li class="nav-item {{ Request::is('mahasiswa') ? 'active' : '' }}">
    <a class="nav-link" href="/mahasiswa">
        <i class="fas fa-fw fa-table"></i>
        <span>Data Mahasiswa</span></a>
</li>

<li class="nav-item {{ Request::is('event') ? 'active' : '' }}">
    <a class="nav-link" href="/event">
        <i class="fas fa-fw fa-calendar"></i>
        <span>Data Kegiatan</span></a>
</li>

<!-- rekap poin -->
<li class="nav-item {{ Request::is('poin') ? 'active' : '' }}">
    <a class="nav-link" href="/poin">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Rekap Poin</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- about -->
<li class="nav-item">
    <a class="nav-link" href="/about">
        <i class="fas fa-fw fa-info-circle"></i>
        <span>About</span></a>
</li>

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>