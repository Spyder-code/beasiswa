<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
    <div class="sidebar-brand-text mx-3">Beasiswa Unggulan</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ url('admin/beasiswa') }}">
    <i class="fas fa-book"></i>
        <span>Katalok beasiswa</span></a>
</li>

{{-- <li class="nav-item">
    <a class="nav-link" href="index.html">
    <i class="fas fa-info-circle"></i>
        <span>Info Beasiswa</span></a>
</li> --}}

<li class="nav-item">
    <a class="nav-link" href="{{ route('form.index') }}">
    <i class="far fa-newspaper"></i>
        <span>Form Beasiswa</span></a>
</li>

<hr class="sidebar-divider">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->