<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="#">Dashboard</a></li>
                </ul>
            </li>

            <li><a href="{{ route('manage-user') }}"><i class="fa fa-user"></i> Manage User </a>
            </li>

            <li><a href="{{ route('manage-subscription' ) }}"><i class="fa fa-users"></i> Manage Subscription </a>
            </li>

            <li><a href="{{ route('manage-video' ) }}"><i class="fa fa-video-camera"></i> Manage Video </a>
            </li>

            <li><a href="{{ route('manage-videotype' ) }}"><i class="fa fa-th-large"></i> Manage Videotype </a>
            </li>
            
            <li><a href="{{ route('manage-comment' ) }}"><i class="fa fa-wechat"></i> Manage Comment </a>
            </li>

            <li><a href="{{ route('manage-vote' ) }}">
                <i class="fa fa-thumbs-o-up"></i> 
                <i class="fa fa-thumbs-o-down">
                </i> Manage Vote </a>
            </li>
        </ul>
    </div>
</div>