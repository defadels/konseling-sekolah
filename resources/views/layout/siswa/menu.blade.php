@php

use App\LayananBK;

$konseling_pribadi = LayananBK::where('dibuat_oleh_id',Auth::user()->id)->where('jenis','Konseling Pribadi')->where('status','Sudah Ditanggapi')->get();
$bk_karir = LayananBK::where('dibuat_oleh_id',Auth::user()->id)->where('jenis','Bimbingan Konseling Karir')->where('status','Sudah Ditanggapi')->get();
$bk_kelompok = LayananBK::where('dibuat_oleh_id',Auth::user()->id)->where('jenis','Bimbingan Konseling Kelompok')->where('status','Sudah Ditanggapi')->get();
$konseling_kelompok = LayananBK::where('dibuat_oleh_id',Auth::user()->id)->where('jenis','Konseling Kelompok')->where('status','Sudah Ditanggapi')->get();

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
                    href="{{route('siswa.dashboard')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                        class="hide-menu">Dashboard</span></a></li>
                        
                <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i>
                    <span class="hide-menu">Bimbingan Konseling</span></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{route('siswa.bimbingan.pribadi')}}" aria-expanded="false"><i class="mdi mdi-account"></i><span
                            class="hide-menu">Pribadi @if(count($konseling_pribadi) > 0) <button class="btn btn-sm btn-info btn-rounded ml-3">{{$konseling_pribadi->count()}}</button> @endif</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{route('siswa.bimbingan.karir')}}" aria-expanded="false"><i class="mdi mdi-worker"></i><span
                            class="hide-menu">Karir @if(count($bk_karir) > 0) <button class="btn btn-sm btn-info btn-rounded ml-3">{{$bk_karir->count()}}</button> @endif</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{route('siswa.bimbingan.kelompok')}}" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span
                            class="hide-menu">Kelompok @if(count($konseling_kelompok) > 0) <button class="btn btn-sm btn-info btn-rounded ml-3">{{$konseling_kelompok->count()}}</button> @endif</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{route('siswa.bimbingan.konseling.kelompok')}}" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span
                            class="hide-menu">BK Kelompok @if(count($bk_kelompok) > 0) <button class="btn btn-sm btn-info btn-rounded ml-3">{{$bk_kelompok->count()}}</button> @endif</span></a></li>
                

                      
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <!-- End Bottom points-->
</aside>