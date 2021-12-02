<div class="catagories-side-menu">
    <!-- Close Icon -->
    <div id="sideMenuClose">
        <i class="ti-close"></i>
    </div>
    <!--  Side Nav  -->
    <div class="nav-side-menu">
        <div class="menu-list">
            <h6>Categories</h6>
            <ul id="menu-content" class="menu-content collapse out">
              {!! $side_nav !!}
                <br>
                @if(Auth::check())
                <li class="w3-margin-top">
                    <a href="{{ route('logout') }}" style="text-align: center">
                        <strong id="dropdown-logout"><i class="fa fa-power-off"></i> Logout {{ explode(' ', auth()->user()->name)[0] }}</strong>
                    </a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</div>
