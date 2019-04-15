<aside class="main-sidebar">

    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('dashboard/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">
            <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-th"></i><span>@lang('site.main')</span></a></li>

            {{--sliders--}}
            @if (auth()->user()->hasPermission('read_sliders'))
                <li><a href="{{ route('dashboard.sliders.index') }}"><i class="fa fa-th"></i><span>@lang('site.sliders')</span></a></li>
            @endif

            {{--services--}}
            @if (auth()->user()->hasPermission('read_services'))
                <li><a href="{{ route('dashboard.services.index') }}"><i class="fa fa-th"></i><span>@lang('site.services')</span></a></li>
            @endif

            {{--projects--}}
            @if (auth()->user()->hasPermission('read_projects'))
                <li><a href="{{ route('dashboard.projects.index') }}"><i class="fa fa-th"></i><span>@lang('site.projects')</span></a></li>
            @endif

            {{--team members--}}
            @if (auth()->user()->hasPermission('read_team_members'))
                <li><a href="{{ route('dashboard.team_members.index') }}"><i class="fa fa-th"></i><span>@lang('site.team_members')</span></a></li>
            @endif

            {{--blog posts--}}
            @if (auth()->user()->hasPermission('read_blog_posts'))
                <li><a href="{{ route('dashboard.blog_posts.index') }}"><i class="fa fa-th"></i><span>@lang('site.blog_posts')</span></a></li>
            @endif

            {{--cotact us requests--}}
            @if (auth()->user()->hasPermission('read_contact_us_requests'))
                <li><a href="{{ route('dashboard.contact_us_requests.index') }}"><i class="fa fa-th"></i><span>@lang('site.contact_us_requests')</span></a></li>
            @endif

            {{--site settings--}}
            @if (auth()->user()->hasRole('super_admin'))
                <li><a href="{{ route('dashboard.site_settings.create') }}"><i class="fa fa-th"></i><span>@lang('site.site_settings')</span></a></li>
            @endif

            {{--<li class="treeview">--}}
            {{--<a href="#">--}}
            {{--<i class="fa fa-pie-chart"></i>--}}
            {{--<span>الخرائط</span>--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-left pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li>--}}
            {{--<a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a>--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--</li>--}}
        </ul>

    </section>

</aside>

