<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            <li><a href="{{ route('home-admin')}}"><i class="fa fa-bar-chart-o"></i>Home</a>      
            </li>
            
            <li><a href="{{ route('manage-user') }}"><i class="fa fa-user"></i> Manage User </a>
            </li>

            <li><a href="{{ route('manage-subscription' ) }}"><i class="fa fa-users"></i> Manage Subscription </a>
            </li>

            <li><a href="{{ route('manage-video' ) }}"><i class="fa fa-video-camera"></i> Manage Video </a>
            </li>

            <li><a href="{{ route('manage-videotype' ) }}"><i class="glyphicon glyphicon-th" style="font-size:18px; margin-right:8px;"></i> Manage Videotype </a>
            </li>
            
            <li><a href="{{ route('manage-comment' ) }}"><i class="fa fa-wechat"></i> Manage Comment </a>
            </li>

            <li><a href="{{ route('manage-playlist' ) }}"><i class="fa fa-music"></i> Manage Playlist </a>
            </li>

            {{-- <li><a href="{{ route('manage-playlistDetail' ) }}"><i class="fa fa-file-audio-o"></i> Manage Playlist Detail </a>
            </li> --}}

            <li><a href="{{ route('manage-vote' ) }}">
                <i class="fa fa-thumbs-o-up"></i> 
                <i class="fa fa-thumbs-o-down">
                </i> Manage Vote </a>
            </li>
          
        </ul>
    </div>
</div>