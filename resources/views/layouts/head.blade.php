<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/plugins/iCheck/custom.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/plugins/steps/jquery.steps.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">
    <script src="{{asset('plugins/jquery/jquery-2.1.4.min.js')}}"></script>
    <link href="{{asset('assets/css/select2.min.css')}}" rel="stylesheet" />
    <script src="{{asset('assets/js/select2.min.js')}}"></script>

    <link href="{{asset('assets/css/bootstrap-select.min.css')}}" rel="stylesheet" />
    <script src="{{asset('assets/js/bootstrap-select.min.js')}}"></script>
    <link href="{{asset('assets/css/plugins/iCheck/custom.css')}}" rel="stylesheet">

    @yield('styles')
    @yield('scripts-header')
</head>

<body class="pace-done fixed-sidebar">

    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="{{asset('assets/img/users/'.Auth::user()->foto_path) }}" style="width: 50px;height: 50px;" />
                             </span>
                            <span class="clear"> 
                                <span class="block m-t-xs"> <strong class="font-bold">{{ucwords(auth()->user()->name)}}</strong>
                                </span>
                                <span class="text-muted text-xs block">{{ucwords(auth()->user()->level)}}
                                </span>
                            </span>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                @if(Auth::user()->level == "admin")
                <li  @if(url()->current() == "http://localhost:8000/admin" || url()->current() == "http://localhost:8000/admin/create") class="active" @endif>
                    <a href="{{url('admin')}}"><i class="fa fa-edit"></i> <span class="nav-label">Kelola Soal</span></a>
                </li>

                <li @if(url()->current() == "http://localhost:8000/admin/kelola-skor" || url()->current() == "http://localhost:8000/admin/kelola-skor/create") class="active" @endif>
                    <a href="{{url('admin/kelola-skor')}}"><i class="fa fa-edit"></i> <span class="nav-label">Kelola Skor Jawaban</span></a>
                </li>

                <li>
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Kelola Data Master</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li @if(url()->current() == "http://localhost:8000/admin/kelola-pekerjaan" || url()->current() == "http://localhost:8000/admin/kelola-pekerjaan/create") class="active" @endif>
                          <a href="{{url('admin/kelola-pekerjaan')}}">
                            Pekerjaan
                          </a>
                        </li>
                        <li @if(url()->current() == "http://localhost:8000/admin/kelola-suku" || url()->current() == "http://localhost:8000/admin/kelola-suku/create") class="active" @endif>
                          <a href="{{url('admin/kelola-suku')}}">
                            Suku
                          </a>
                        </li>
                        <li @if(url()->current() == "http://localhost:8000/admin/kelola-tinggal-bersama" || url()->current() == "http://localhost:8000/admin/kelola-tinggal-bersama/create") class="active" @endif>
                          <a href="{{url('admin/kelola-tinggal-bersama')}}">
                            Tinggal Bersama
                          </a>
                        </li>
                        <li @if(url()->current() == "http://localhost:8000/admin/kelola-kota" || url()->current() == "http://localhost:8000/admin/kelola-kota/create") class="active" @endif>
                          <a href="{{url('admin/kelola-kota')}}">
                            Kota
                          </a>
                        </li>
                        <li @if(url()->current() == "http://localhost:8000/admin/kelola-provinsi" || url()->current() == "http://localhost:8000/admin/kelola-provinsi/create") class="active" @endif>
                          <a href="{{url('admin/kelola-provinsi')}}">
                            Provinsi
                          </a>
                        </li>
                    </ul>
                </li>
                <li  @if(url()->current() == "http://localhost:8000/admin/all-data") class="active" @endif>
                    <a href="{{ route('admin.all') }}"><i class="fa fa-database"></i> <span class="nav-label">Semua Responden</span></a>
                </li>
                <li @if(url()->current() == "http://localhost:8000/admin/compare") class="active" @endif>
                    <a href="{{ route('admin.compare') }}"><i class="fa fa-exchange"></i> <span class="nav-label">Banding Data Responden</span></a>
                </li>
                <li @if(url()->current() == "http://localhost:8000/admin/table-data") class="active" @endif>
                    <a href="{{ route('admin.data') }}"><i class="fa fa-database"></i> <span class="nav-label">Data Responden</span></a>
                </li>
                <li @if(url()->current() == "http://localhost:8000/admin/kelola-users" || url()->current() == "http://localhost:8000/admin/kelola-users/create") class="active" @endif>
                    <a href="{{ url('admin/kelola-users') }}"><i class="fa fa-user-o"></i> <span class="nav-label">Kelola Users</span></a>
                </li>

                @elseif(Auth::user()->level == "satker")
                <li  @if(url()->current() == "http://localhost:8000/satker") class="active" @endif>
                    <a href="{{url('satker')}}"><i class="fa fa-user-o"></i> <span class="nav-label">Responden</span></a>
                </li>
                <li @if(url()->current() == "http://localhost:8000/satker/kelola-data" || url()->current() == "http://localhost:8000/satker/kelola-data/edit") class="active" @endif>
                    <a href="{{ route('satker.data') }}"><i class="fa fa-edit"></i> <span class="nav-label">Kelola Data Responden</span></a>
                </li>
                @elseif(Auth::user()->level == "pusat")
                <li  @if(url()->current() == "http://localhost:8000/pusat") class="active" @endif>
                    <a href="{{url('pusat')}}"><i class="fa fa-database"></i> <span class="nav-label">Semua Responden</span></a>
                </li>
                <li @if(url()->current() == "http://localhost:8000/pusat/compare") class="active" @endif>
                    <a href="{{ route('pusat.compare') }}"><i class="fa fa-exchange"></i> <span class="nav-label">Banding Data Responden</span></a>
                </li>
                <li @if(url()->current() == "http://localhost:8000/pusat/table-data") class="active" @endif>
                    <a href="{{ route('pusat.data') }}"><i class="fa fa-database"></i> <span class="nav-label">Table Data Responden</span></a>
                </li>
                @endif
            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#" style="margin-top: 28px;"><i class="fa fa-bars"></i> </a>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted">Welcome {{ucwords(auth()->user()->name)}}.</span>
                </li>

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset('assets/img/users/'.Auth::user()->foto_path) }}" class="img-circle" alt="User Image" style="width: 50px;height: 50px;">
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="{{ route('profile.index') }}">
                                <div>
                                <center>
                                    <i class="fa fa-envelope fa-user-o"></i> Profile
                                </center>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="{{ route('logout') }}">
                                    <strong>Logout</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>

        </nav>
        </div>