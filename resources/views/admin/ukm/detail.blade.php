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
                    <a class="navbar-brand" href="#">Profile UKM</a>
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
                    <div class="col-lg-4 col-md-5">
                        <div class="card card-user">
                            <div class="image">
                                <img src="{{asset('img/background.jpg')}}" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                    <img class="avatar border-white" src="{{asset('img/logoukm/psm_liga.jpg')}}" alt="..."/>
                                    <h4 class="title">PSM Liga Unas<br />
                                    </h4>
                                </div>
                                <p class="description text-center">
                                    "I like the way you work it <br>
                                    No diggity <br>
                                    I wanna bag it up"
                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Anggota UKM</h4>
                            </div>
                            <div class="content">
                                <ul class="list-unstyled team-members">
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <div class="avatar">
                                                    <img src="{{asset('img/faces/face-2.jpg')}}" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <b>Ilham Wara Nugroho</b>
                                                <br />
                                                <span class="text-muted"><small>Members</small></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <div class="avatar">
                                                    <img src="{{asset('img/faces/face-2.jpg')}}" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <b>Ilham Wara Nugroho</b>
                                                <br />
                                                <span class="text-muted"><small>Members</small></span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile</h4>
                            </div>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
@endsection