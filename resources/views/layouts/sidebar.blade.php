<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu" style="background-color: #009B9B;">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
            <li>
                    <a href="{{url('/admin')}}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>

                        <span>Dashboard</span>
                    </a>

                </li>
                
                <li>
                    <a href="{{ url('admin/users') }}" class="">
                        <i class="fas fa-users"></i>
                        <span>User Management</span>
                    </a>
                    
                </li>

                <li>
                    <a href="{{ url('admin/interest') }}" class="">
                        <i class="fab fa-pushed"></i>
                        <span>Interest Management</span>
                    </a>
                    
                </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect" aria-expanded="false">
                            <i class="fas fa-th-large"></i>
                                <span key="t-ui-elements">CMS</span>
                        </a>
                        <ul class="sub-menu mm-collapse" aria-expanded="false" style="height: 0px;">

                            <li><a href="javascript: void(0);" class="waves-effect">
                                <i class="bx bx-radio-circle-marked"></i>
                                <span>Faq</span></a>
                            </li>

                            <li><a href="javascript: void(0);" class="waves-effect">
                                <i class="bx bx-radio-circle-marked"></i>
                                <span>About us</span></a>
                            </li>

                            <li><a href="javascript: void(0);" class="waves-effect">
                                <i class="bx bx-radio-circle-marked"></i>
                                <span>Privacy Policy</span></a>
                            </li>

                            <li><a href="javascript: void(0);" class="waves-effect">
                                <i class="bx bx-radio-circle-marked"></i>
                                <span>Terms & Conditions</span></a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('admin/settings') }}" class="">
                            <i class="fas fa-cog"></i>
                            <span>Settings</span>
                        </a>
                    </li>
                    <li>
                    <a href="{{ url('admin/notifications') }}" class="">
                        <i class="fas fa-bell"></i>
                        <span>Notifications</span>
                    </a>
                    
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
