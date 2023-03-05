<div class="left-sidebar">
        <p>MAIN NAVIGATION</p>
        <ul>
           <li><a href="{{ url('dashboard')}}" class="nav-item nav-dashboard {{ (Request::is('dashboard') || Request::is('dashboard/*')) ? 'active' : '' }}">Dashboard</a></li>
            <li><a href="{{ url('farmers')}}" class="nav-item {{ (Request::is('farmers') || Request::is('farmers/*')) ? 'active' : '' }}">Farmers</a></li>
            <li><a href="" class="nav-item">Staff</a></li>
            <li><a href="" class="nav-item">Synchronization</a></li>
            <li><a href="" class="nav-item">Settings</a></li>
            <li><a href="" class="nav-item">Report</a></li>
        </ul>  
    </div>