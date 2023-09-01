
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{asset('assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">RTI Admin </h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{route('admin.dashboard')}}" class="">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
            
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-user"></i>
                </div>
                <div class="menu-title">Enquiry Zone </div>
            </a>
            <ul>
                <li> <a href="{{route('addNewEnquiry')}}"><i class="bx bx-right-arrow-alt"></i>Add New Enquiry </a>
                </li>
                <li> <a href="{{route('listEnquiry')}}"><i class="bx bx-right-arrow-alt"></i>List Enquiry</a>
                </li>
            </ul>
        </li>
        {{-- <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Agent Manage</div>
            </a>
            <ul>
                <li> <a href="{{ route('addNewAgent')}}"><i class="bx bx-right-arrow-alt"></i>Add New Agent</a>
                </li>
                <li> <a href="{{ route('agentList')}}"><i class="bx bx-right-arrow-alt"></i>List Agents</a>
                </li>
                
            </ul>
        </li> --}}
        <li class="menu-label">Report Filter</li>
        <li>
            <a href="widgets.html">
                <div class="parent-icon"><i class='bx bx-border-outer'></i>
                </div>
                <div class="menu-title">Agent Report</div>
            </a>
        </li>
        
        
        <li>
            <a href="#!" target="_blank">
                <div class="parent-icon"><i class="bx bx-male"></i>
                </div>
                <div class="menu-title">Candidate Report</div>
            </a>
        </li>
        <li>
            <a href="#!" target="_blank">
                <div class="parent-icon"><i class="bx bx-dollar"></i>
                </div>
                <div class="menu-title">Amount Filter</div>
            </a>
        </li>
        <li>
            <a href="#!" target="_blank">
                <div class="parent-icon"><i class="bx bx-log-out-circle"></i>
                </div>
                <div class="menu-title">Logout</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>