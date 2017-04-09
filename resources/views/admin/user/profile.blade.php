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
                    <a class="navbar-brand" href="#">Profile Saya</a>
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
                                    <img class="avatar border-white" src="{{asset('img/faces/face-2.jpg')}}" alt="..."/>
                                    <h4 class="title">Admin<br />
                                     <a href="#"><small>421523415142</small></a>
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
                <div class="col-lg-8 col-md-7">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Edit Profile</h4>
                        </div>
                        <div class="content">
                            <form>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label><b>NPM</b><sup class="text-danger">*</sup></label>
                                            <input type="text" class="form-control border-input" placeholder="NPM" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label><b>Nama Lengkap</b><sup class="text-danger">*</sup></label>
                                            <input type="text" class="form-control border-input" placeholder="Nama Lengkap" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><b>Jurusan</b><sup class="text-danger">*</sup></label>
                                            <input type="text" class="form-control border-input" placeholder="Jurusan" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><b>Fakultas</b><sup class="text-danger">*</sup></label>
                                            <input type="text" class="form-control border-input" placeholder="Fakultas" required>
                                        </div>
                                    </div>
                                </div>

                                 <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label><b>Password</b><sup class="text-danger">*</sup></label>
                                            <input type="text" class="form-control border-input" placeholder="Password" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label><b>Status</b></label>
                                            <textarea rows="5" class="form-control border-input" placeholder="Here can be your description"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-info btn-fill btn-wd">Update Profile</button>
                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
@endsection