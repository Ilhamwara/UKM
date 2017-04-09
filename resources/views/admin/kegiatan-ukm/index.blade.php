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
                    <a class="navbar-brand" href="#">Kegiatan UKM</a>
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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><b>Kegiatan UKM</b></h4><br>
                                <a href="{{url('admin/kegiatan-ukm/tambah')}}" class="btn btn-success">Tambah Kegiatan UKM</a>
                            </div>
                            <br>
                            <div class="content" style="overflow: hidden;">
                                <div class="col-md-12">
                                    <h4>
                                        <b><a href="{{url('admin/kegiatan-ukm/detail')}}">Seven Soccer</a></b><br>
                                    </h4>
                                    <p>
                                        <h6><i><a href="{{url('admin/ukm/detail')}}">PSM Liga Unas</a></i></h6><br>
                                        <small>04-04-2017</small><br><br>
                                        <a href="{{url('admin/kegiatan-ukm/edit')}}" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="{{url('admin/kegiatan-ukm/hapus')}}" class="btn btn-sm btn-danger">Hapus</a>
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
                                        <small>04-04-2017</small><br><br>
                                        <a href="{{url('admin/kegiatan-ukm/edit')}}" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="{{url('admin/kegiatan-ukm/hapus')}}" class="btn btn-sm btn-danger">Hapus</a>
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