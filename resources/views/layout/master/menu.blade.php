@php

use App\LayananBK;

$bk_masuk = LayananBK::where('status','Belum Ditanggapi')->get();
$bk_tanggapan = LayananBK::where('status','Sudah Ditanggapi')->get();

@endphp

<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile position-relative" style="background: url({{asset('materialpro/assets/images/background/user-info.jpg')}}) no-repeat;">
            <!-- User profile image -->
            <div class="profile-img"> <img src="{{asset('materialpro/assets/images/users/avatar.webp')}}" alt="user" class="w-100 rounded-circle" /> </div>
            <!-- User profile text-->
            {{-- <div class="profile-text pt-1"> 
                <a href="#" class="dropdown-toggle u-dropdown w-100 text-white d-block position-relative" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Markarn Doe</a>
                <div class="dropdown-menu animated flipInY"> 
                    <a href="#" class="dropdown-item"><i class="ti-user"></i>
                        My Profile</a> 
                    <a href="#" class="dropdown-item"><i class="ti-wallet"></i> My
                        Balance</a>
                    <a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                    <div class="dropdown-divider"></div> 
                    <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                    <div class="dropdown-divider"></div> 
                    <a href="authentication-login1.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                </div>
            </div> --}}
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="{{route('master.dashboard')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                        class="hide-menu">Dashboard</span></a></li>
                        
                <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i>
                    <span class="hide-menu">Data User</span></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{route('master.guru')}}" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span
                            class="hide-menu">Data Guru</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{route('master.siswa')}}" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span
                            class="hide-menu">Data Siswa</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{route('master.kelas')}}" aria-expanded="false"><i class="mdi mdi-archive"></i><span
                            class="hide-menu">Data Kelas</span></a></li>
                

                <li class="nav-small-cap">
                    <i class="mdi mdi-dots-horizontal"></i>
                    <span class="hide-menu">Bimbingan Konseling</span>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="{{route('master.laporan')}}" aria-expanded="false"><i class="mdi mdi-file-document"></i><span
                        class="hide-menu">Laporan</span></a></li>
                <li class="sidebar-item">  <a class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="{{route('master.bimbingan.masuk')}}" aria-expanded="false"><i class="mdi mdi-arrow-down-bold"></i><span
                        class="hide-menu">BK Masuk @if(count($bk_masuk) > 0) <button class="btn btn-sm btn-info ml-3">{{$bk_masuk->count()}}</button> @endif </span> </a> </li> 
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="{{route('master.bimbingan.ditanggapi')}}" aria-expanded="false"><i class="mdi mdi-check-all"></i><span
                        class="hide-menu">BK Ditanggapi @if(count($bk_tanggapan) > 0) <button class="btn btn-sm btn-info ml-3">{{$bk_tanggapan->count()}}</button> @endif </span></a> </li>        
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <!-- End Bottom points-->
</aside>