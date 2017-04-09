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
                    <a class="navbar-brand" href="#">Detail Kegiatan UKM</a>
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
                            <div class="content" style="overflow: hidden;">
                                <div class="col-md-12">
                                    <h4><b>Seven Soccer</b></h4>
                                    <p>
                                        <h6><i><a href="{{url('admin/ukm/detail')}}">PSM Liga Unas</a></i></h6><br>
                                        <small>04-04-2017</small><br><br>
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque doloribus, temporibus, nobis, dolor sequi alias facilis optio aperiam impedit ullam, vel quibusdam placeat deleniti quam atque officia aliquid voluptatem unde.
                                    </p>
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