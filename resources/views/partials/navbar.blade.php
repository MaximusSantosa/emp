<nav class="navbar navbar-expand-lg sticky-top" style="background-color: #99c2ff">
    <div class="container-fluid">
        <ul class="navbar-nav navbar-left">
            <li class="nav-item active">
                <a class="nav-link" href="/" style="color:#cc5200"><i data-feather="home" style="vertical-align: text-top; height:20px"></i></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/list" style="color:#0052cc"><i data-feather="list" style="vertical-align: text-top; height:20px"></i> LIST</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" style="color:#0052cc" data-toggle="dropdown" ><i data-feather="bar-chart" style="vertical-align: text-top; height:20px"></i> SDM REPORTS</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/sdmreports/Bpt">BPT</a>
                    <a class="dropdown-item" href="/sdmreports/Skl">SKL</a>
                </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/updates" style="color:#0052cc"><i data-feather="list" style="vertical-align: text-top; height:20px"></i> UPDATES</a>
            </li>
        </ul>
        @if(!empty($list))
        <ul class="navbar-nav navbar-right">
            <li class="nav-item active">
                <h4 id="status"></h4>
            </li>
            <li class="nav-item active">
                <button id="refresh" class="btn btn-primary"><i data-feather="refresh-ccw" style="vertical-align: middle; height:15px"></i>Refresh Table Data</button>
            </li>
        </ul>
        @endif
    </div>
    <script>feather.replace()</script>
</nav>