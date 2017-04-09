<div class="sidebar" data-background-color="white" data-active-color="danger">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a class="simple-text">
                Selamat Datang
            </a>
        </div>

        <ul class="nav">
            <li class="@if(Request::is('admin')) active @endif">
                <a href="{{url('admin/')}}">
                    <i class="ti-panel"></i>
                    <p>Beranda</p>
                </a>
            </li>
             <li class="@if(Request::is('admin/ukm')) active @endif">
                <a href="{{url('admin/ukm')}}">
                    <i class="ti-flag-alt-2"></i>
                    <p>List UKM</p>
                </a>
            </li>
            <li class="@if(Request::is('admin/mahasiswa')) active @endif">
                <a href="{{url('admin/mahasiswa')}}">
                    <i class="ti-user"></i>
                    <p>Mahasiswa</p>
                </a>
            </li>
            <li class="@if((Request::is('admin/kegiatan-ukm')) || (Request::is('admin/kegiatan-ukm/detail')) || (Request::is('admin/kegiatan-ukm/edit')) || (Request::is('admin/kegiatan-ukm/tambah'))) active @endif">
                <a href="{{url('admin/kegiatan-ukm')}}">
                    <i class="ti-medall"></i>
                    <p>Kegiatan UKM</p>
                </a>
            </li>
            <li>
                <a href="{{url('logout')}}">
                    <i class="ti-close"></i>
                    <p>Logout</p>
                </a>
            </li>
        </ul>
    </div>
</div>