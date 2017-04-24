<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset(Auth::user()->image) }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        {{--<form action="#" method="get" class="sidebar-form">--}}
            {{--<div class="input-group">--}}
                {{--<input type="text" name="q" class="form-control" placeholder="Search..."/>--}}
                {{--<span class="input-group-btn">--}}
                  {{--<button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>--}}
                {{--</span>--}}
            {{--</div>--}}
        {{--</form>--}}
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">MAIN MENU</li>
            <!-- Optionally, you can add icons to the links -->
            <li @if($active == 'Dashboard') class="active" @endif><a href="{{url('admin')}}"><span>Dashboard</span></a></li>
            <li @if($active == 'Menu') class="active" @endif><a href="{{url('adminMenu')}}"><span>Menu</span></a></li>
            <li @if($active == 'Event') class="active" @endif><a href="{{url('adminEvent')}}"><span>Event</span></a></li>
            <li @if($active == 'User') class="active" @endif><a href="{{url('adminUser')}}"><span>User</span></a></li>
            <li @if($active == 'Setting') class="active" @endif><a href="{{url('adminSetting')}}"><span>Setting</span></a></li>
            {{--<li class="treeview">--}}
                {{--<a href="#"><span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>--}}
                {{--<ul class="treeview-menu">--}}
                    {{--<li><a href="#">Link in level 2</a></li>--}}
                    {{--<li><a href="#">Link in level 2</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}

            <li><a href="{{url('/')}}"><span>Website</span></a></li>
            <li><a href="{{url('auth/logout')}}"><span>Logout</span></a></li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>