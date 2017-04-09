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
                    <a class="navbar-brand" href="#">Daftar Mahasiswa</a>
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
                                <h4 class="title"><b>Daftar Mahasiswa</b></h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th class="text-center"><b>No</b></th>
                                        <th class="text-center"><b>NPM</b></th>
                                        <th class="text-center"><b>Nama</b></th>
                                        <th class="text-center"><b>Jurusan</b></th>
                                        <th class="text-center"><b>Fakultas</b></th>
                                        <th class="text-center"><b>Aksi</b></th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">123112700650023</td>
                                            <td class="text-center">Ilham Wara Nugroho</td>
                                            <td class="text-center">Sistem Informasi</td>
                                            <td class="text-center">FTKI</td>
                                            <td class="text-center">
                                                <a href="{{url('admin/mahasiswa/detail')}}" class="btn btn-info">View</a>
                                                <a href="{{url('admin/mahasiswa/edit')}}" class="btn btn-warning">Edit</a>
                                                <a href="{{url('admin/mahasiswa/hapus')}}" class="btn btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection