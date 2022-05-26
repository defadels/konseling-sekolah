<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile position-relative" style="background: url(materialpro/assets/images/background/user-info.jpg) no-repeat;">
            <!-- User profile image -->
            <div class="profile-img"> <img src="{{asset('materialpro/assets/images/users/profile.png')}}" alt="user" class="w-100" /> </div>
            <!-- User profile text-->
            <div class="profile-text pt-1"> 
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
            </div>
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
                            class="hide-menu">Pribadi</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{route('siswa.bimbingan.karir')}}" aria-expanded="false"><i class="mdi mdi-worker"></i><span
                            class="hide-menu">Karir</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{route('siswa.bimbingan.kelompok')}}" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span
                            class="hide-menu">Kelompok</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{route('siswa.bimbingan.konseling.kelompok')}}" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span
                            class="hide-menu">BK Kelompok</span></a></li>
                

                      
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <!-- End Bottom points-->
</aside>