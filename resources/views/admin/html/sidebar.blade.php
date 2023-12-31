<aside class="sidebar-wrapper">
    <div class="sidebar sidebar-collapse" id="sidebar">
        <div class="sidebar__menu-group">
            <ul class="sidebar_nav">
                <li class="menu-title">
                    <span>Main menu</span>
                </li>
                <li class="">
                    <a href="{{url("admin/dashboard")}}" class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
                        <span data-feather="home" class="nav-icon"></span>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>
                <li class="has-child">
                    <a href="#" class="">
                        <span data-feather="layout" class="nav-icon"></span>
                        <span class="menu-text">Layouts</span>
                        <span class="toggle-icon"></span>
                    </a>
                    <ul>
                        <li class="l_sidebar">
                            <a href="#" data-layout="light">Light Mode</a>
                        </li>
                        <li class="l_sidebar">
                            <a href="#" data-layout="dark">Dark Mode</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-title m-top-30">
                    <span>Applications</span>
                </li>
                <li class="has-child {{ request()->is('admin/category*') ? 'open' : '' }}">
                    <a href="{{url('admin/category')}}" class="{{ request()->is('admin/category*') ? 'active' : '' }}">
                        <span data-feather="clipboard" class="nav-icon"></span>
                        <span class="menu-text">Categories</span>
                        <span class="toggle-icon"></span>
                    </a>
                    <ul>
                        <li>
                            <a class="{{ request()->is('admin/category') ? 'active' : '' }}" href="{{url('admin/category')}}">Category List</a>
                        </li>

                        <li>
                            <a class="{{ request()->is('admin/category/create') ? 'active' : '' }}" href="{{url('admin/category/create')}}">Category Add</a>
                        </li>
                        @if(request()->is('admin/category/edit*'))
                            <li>
                                <a class="{{ request()->is('admin/category/edit*') ? 'active' : '' }}">Category Edit</a>
                            </li>
                        @endif
                        <li>
                            <a class="{{ request()->is('admin/category/deleted') ? 'active' : '' }}" href="{{url('admin/category/deleted')}}">Category Deleted</a>
                        </li>

                    </ul>
                </li>
                <li class="has-child {{ request()->is('admin/product*') ? 'open' : '' }}">
                    <a href="{{url('admin/product')}}" class="{{ request()->is('admin/product*') ? 'active' : '' }}">
                        <span data-feather="box" class="nav-icon"></span>
                        <span class="menu-text">Products</span>
                        <span class="toggle-icon"></span>
                    </a>
                    <ul>
                        <li>
                            <a class="{{ request()->is('admin/product') ? 'active' : '' }}" href="{{url('admin/product')}}">Product List</a>
                        </li>
                        @if(request()->is('admin/product/detail*'))
                            <li>
                                <a class="{{ request()->is('admin/product/detail*') ? 'active' : '' }}">Product Detail</a>
                            </li>
                        @endif

                        <li>
                            <a class="{{ request()->is('admin/product/create') ? 'active' : '' }}" href="{{url('admin/product/create')}}">Product Add</a>
                        </li>
                        @if(request()->is('admin/product/edit*'))
                            <li>
                                <a class="{{ request()->is('admin/product/edit*') ? 'active' : '' }}">Product Edit</a>
                            </li>
                        @endif
                        <li>
                            <a class="{{ request()->is('admin/product/deleted') ? 'active' : '' }}" href="{{url('admin/product/deleted')}}">Products Deleted</a>
                        </li>

                    </ul>
                </li>
                <li class="has-child {{ request()->is('admin/order*') ? 'open' : '' }}">
                    <a href="{{url('admin/order')}}" class="{{ request()->is('admin/order*') ? 'active' : '' }}">
                        <span data-feather="shopping-cart" class="nav-icon"></span>
                        <span class="menu-text">Orders</span>
                        <span class="toggle-icon"></span>
                    </a>
                    <ul>
                        <li>
                            <a class="{{ request()->is('admin/order') ? 'active' : '' }}" href="{{url('admin/order')}}">Order List</a>
                        </li>
                        @if(request()->is('admin/order/detail*'))
                        <li>
                            <a class="{{ request()->is('admin/order/detail*') ? 'active' : '' }}">Order Detail</a>
                        </li>
                        @endif
                    </ul>
                </li>

                <li class="has-child {{ request()->is('admin/user*') ? 'open' : '' }}">
                    <a href="{{route('user-list')}}" class="{{ request()->is('admin/user*') ? 'active' : '' }}">
                        <span data-feather="user-check" class="nav-icon"></span>
                        <span class="menu-text">Users</span>
                        <span class="toggle-icon"></span>
                    </a>
                    <ul>
                        <li>
                            <a class="{{ request()->is('admin/user') ? 'active' : '' }}" href="{{route('user-list')}}">User List</a>
                        </li>
                        @if(request()->is('admin/user/detail*'))
                        <li>
                            <a class="{{ request()->is('admin/user/detail*') ? 'active' : '' }}" href="">User Detail</a>
                        </li>
                        @endif
                    </ul>
                </li>

                <li class="has-child {{ request()->is('admin/match*') ? 'open' : '' }}">
                    <a href="{{url('admin/match')}}" class="{{ request()->is('admin/match*') ? 'active' : '' }}">
                        <span data-feather="clipboard" class="nav-icon"></span>
                        <span class="menu-text">Match</span>
                        <span class="toggle-icon"></span>
                    </a>
                    <ul>
                        <li>
                            <a class="{{ request()->is('admin/match') ? 'active' : '' }}" href="{{url('admin/match')}}">Match List</a>
                        </li>

                        <li>
                            <a class="{{ request()->is('admin/match/create') ? 'active' : '' }}" href="{{url('admin/match/create')}}">Match Add</a>
                        </li>
                        @if(request()->is('admin/match/edit*'))
                            <li>
                                <a class="{{ request()->is('admin/match/edit*') ? 'active' : '' }}">Match Edit</a>
                            </li>
                        @endif

                    </ul>
                </li>
                <li class="has-child {{ request()->is('admin/league*') ? 'open' : '' }}">
                    <a href="{{url('admin/league')}}" class="{{ request()->is('admin/league*') ? 'active' : '' }}">
                        <span data-feather="clipboard" class="nav-icon"></span>
                        <span class="menu-text">League</span>
                        <span class="toggle-icon"></span>
                    </a>
                    <ul>
                        <li>
                            <a class="{{ request()->is('admin/league') ? 'active' : '' }}" href="{{url('admin/league')}}">League List</a>
                        </li>

                        <li>
                            <a class="{{ request()->is('admin/league/create') ? 'active' : '' }}" href="{{url('admin/league/create')}}">League Add</a>
                        </li>
                        @if(request()->is('admin/league/edit*'))
                            <li>
                                <a class="{{ request()->is('admin/league/edit*') ? 'active' : '' }}">
                                    League Edit</a>
                            </li>
                        @endif

                    </ul>
                </li>
                <li class="">
                    <a href="{{url("admin/feedback")}}" class="{{ request()->is('admin/feedback') ? 'active' : '' }}">
                        <span data-feather="eye" class="nav-icon"></span>
                        <span class="menu-text">User Feedback</span>
                    </a>
                </li>



                <li class="has-child {{ request()->is('admin/blog*') ? 'open' : '' }}">
                    <a href="{{url('admin/blog')}}" class="{{ request()->is('admin/blog*') ? 'active' : '' }}">
                        <span data-feather="clipboard" class="nav-icon"></span>
                        <span class="menu-text">Blog</span>
                        <span class="toggle-icon"></span>
                    </a>
                    <ul>
                        <li>
                            <a class="{{ request()->is('admin/blog') ? 'active' : '' }}" href="{{url('admin/blog')}}">Blog List</a>
                        </li>

                        <li>
                            <a class="{{ request()->is('admin/blog/create') ? 'active' : '' }}" href="{{url('admin/blog/create')}}">Blog Add</a>
                        </li>
                        @if(request()->is('admin/blog/edit*'))
                            <li>
                                <a class="{{ request()->is('admin/blog/edit*') ? 'active' : '' }}">
                                    Blog Edit</a>
                            </li>
                        @endif

                    </ul>
                </li>



                {{--                <li>--}}
{{--                    <a href="bookmarks.html" class="">--}}
{{--                        <span data-feather="bookmark" class="nav-icon"></span>--}}
{{--                        <span class="menu-text">Discounts / Sales</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="editors.html" class="">--}}
{{--                        <span data-feather="edit" class="nav-icon"></span>--}}
{{--                        <span class="menu-text">Blog</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="chat.html" class="">--}}
{{--                        <span data-feather="message-square" class="nav-icon"></span>--}}
{{--                        <span class="menu-text">Chat</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="profile-setting.html" class="">--}}
{{--                        <span data-feather="settings" class="nav-icon"></span>--}}
{{--                        <span class="menu-text">Settings</span>--}}
{{--                    </a>--}}
{{--                </li>--}}

{{--                Team--}}
                <li class="has-child {{ request()->is('admin/team*') ? 'open' : '' }}">
                    <a href="{{route('team-list')}}" class="{{ request()->is('admin/team*') ? 'active' : '' }}">
                        <span data-feather="user-check" class="nav-icon"></span>
                        <span class="menu-text">Team</span>
                        <span class="toggle-icon"></span>
                    </a>
                    <ul>
                        <li>
                            <a class="{{ request()->is('admin/team') ? 'active' : '' }}" href="{{route('team-list')}}">Team List</a>
                        </li>
                        <li>
                            <a class="{{ request()->is('admin/team/create*') ? 'active' : '' }}" href="{{route('team-create')}}">Team create</a>
                        </li>
                    </ul>
                </li>

{{--                Player --}}

                <li class="has-child {{ request()->is('admin/player*') ? 'open' : '' }}">
                    <a href="{{route('player-list')}}" class="{{ request()->is('admin/player*') ? 'active' : '' }}">
                        <span data-feather="user-check" class="nav-icon"></span>
                        <span class="menu-text">Player</span>
                        <span class="toggle-icon"></span>
                    </a>
                    <ul>
                        <li>
                            <a class="{{ request()->is('admin/player') ? 'active' : '' }}" href="{{route('player-list')}}">Player List</a>
                        </li>
                        <li>
                            <a class="{{ request()->is('admin/player/create*') ? 'active' : '' }}" href="{{route('player-create')}}">Player create</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</aside>
