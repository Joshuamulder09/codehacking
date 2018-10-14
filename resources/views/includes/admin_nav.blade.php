<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">


<!-- admin-top navigation-->


    @include('includes.admin_top_nav')




    <ul class="nav navbar-nav navbar-right">
        @if(auth()->guest())
            @if(!Request::is('login'))
                <li><a href="{{ url('login') }}">Login</a></li>
            @endif
            @if(!Request::is('register'))
                <li><a href="{{ url('register') }}">Register</a></li>
            @endif
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ auth()->user()->name }} <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ url('/logout') }}">Logout</a></li>

                    <li><a href="{{ url('/admin/users') }}/{{auth()->user()->id}}/edit">Profile</a></li>
                </ul>
            </li>
        @endif
    </ul>




    <!-- ADMIN SIDE NAVIGATION -->
    @include('includes.admin_side_nav')

    <!-- /.navbar-static-side -->
</nav>