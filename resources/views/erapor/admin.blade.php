@extends('erapor.template')
@section('title', 'Admin')

@section('main')
<div id="wrapper">

@include('erapor.partial.sidebar')
@include('erapor.partial.maddadmin')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                        @foreach(Auth::user()->admin as $a)
                            {{ $a->name }}
                        @endforeach
                    </span>
                    <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                    </a>
                    <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}" data-toggle="modal" data-target="#logoutModal" 
                            onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Beranda</h1>
                </div> -->

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Admin</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-3 col-md-6 mb-4">
                                <a class="btn btn-primary btn-icon-split"
                                    style="cursor: pointer" 
                                    data-remote="true"
                                    data-toggle="modal" 
                                    data-target="#addAdminModal">
                                    <span class="icon text-white-50">
                                    <i class="fas fa-plus"></i>
                                    </span>
                                    <span class="text">Tambah Admin</span>
                                </a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Nomor HP</th>
                                        <th>Alamat</th>
                                        <th width="15%" class="text-center">Role</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach($user as $u)
                                        @if($u->role_id == 1)
                                        <tr>
                                            <td>
                                                @foreach($u->admin as $a)
                                                    {{$a->name}}
                                                @endforeach
                                            </td>
                                            <td>
                                                {{$u->email}}
                                            </td>
                                            <td>
                                                @foreach($u->admin as $a)
                                                    {{$a->phone}}
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($u->admin as $a)
                                                    {{$a->address}}
                                                @endforeach
                                            </td>
                                            <td class="text-center">{{ $u->role_id }}</td>
                                        </tr>
                                        @endif
                                        @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
@endsection