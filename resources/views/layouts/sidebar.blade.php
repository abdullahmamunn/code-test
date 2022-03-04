
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li>
                    <a href="{{route('home')}}" class="waves-effect active"><i class="md md-home"></i><span>Dashboard </span></a>
                </li>

                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="md md-assignment"></i><span> Url Shortening
                        </span><span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('url.create')}}">Create Form</a></li>
                        <li><a href="{{route('tracking.user')}}">Tracking capabilities</a></li>

                    </ul>
                </li>
                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="md md-assignment"></i><span> Reports
                        </span><span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('daily.trafic.report')}}">Daily Traffic reports</a></li>
                        <li><a href="{{route('weekly.trafic.report')}}">Weekly Traffic reports</a></li>
                        <li><a href="{{route('monthly.trafic.report')}}">Monthly Traffic reports</a></li>
                        {{-- <li><a href="{{route('tracking.user')}}">Tracking capabilities</a></li> --}}

                    </ul>
                </li>
            </ul>

            <div class="clearfix"></div>
        </div>
    </div>
</div>
