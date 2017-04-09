@extends('layouts.master')

@section('css')

@endsection

@section('content')
<div class="wrapper">
    @include('include.sidebar')
    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-settings"></i>
                                <p>Settings</p>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('admin/profile')}}">Profile Saya</a></li>
                                <li><a href="{{url('logout')}}">Logout</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-flag-alt-2"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>UKM</p>
                                            +9999
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-reload"></i> Updated now
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center">
                                            <i class="ti-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Mahasiswa</p>
                                            +9999
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-reload"></i> Updated now
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-danger text-center">
                                            <i class="ti-medall"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Kegiatan UKM</p>
                                            23
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-reload"></i> Updated now
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">UKM</h4>
                            </div>
                            <div class="content">
                                <ul class="list-unstyled team-members">
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <div class="avatar">
                                                    <img src="{{asset('img/logoukm/psm_liga.jpg')}}" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <b>PSM Liga Unas</b>
                                                <br />
                                                <span class="text-muted"><small>Members</small></span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card" style="overflow: hidden;">
                            <div class="header">
                                <h4 class="title">Kegiatan UKM</h4>
                            </div>
                            <div class="content">
                             <div class="col-md-12">
                                <h4>
                                    <b><a href="{{url('admin/kegiatan-ukm/detail')}}">Seven Soccer</a></b><br>
                                </h4>
                                <p>
                                    <h6><i><a href="{{url('admin/ukm/detail')}}">PSM Liga Unas</a></i></h6><br>
                                    <small>04-04-2017</small>
                                </p>
                                <p>
                                    Seven soccer mulai pendaftaran tanggal 8 Maret 2017 dan batas pendaftaran tanggal 14 Maret 2017
                                </p>
                                <hr>
                            </div>
                            <div class="col-md-12">
                                <h4>
                                    <b><a href="{{url('admin/kegiatan-ukm/detail')}}">Seven Soccer</a></b><br>
                                </h4>
                                <p>
                                    <h6><i><a href="{{url('admin/ukm/detail')}}">PSM Liga Unas</a></i></h6><br>
                                    <small>04-04-2017</small>
                                </p>
                                <p>
                                    Seven soccer mulai pendaftaran tanggal 8 Maret 2017 dan batas pendaftaran tanggal 14 Maret 2017
                                </p>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@section('js')
<script src="{{asset('js/chartist.min.js')}}"></script>
@endsection