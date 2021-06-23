<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <ul class="c-sidebar-nav">

        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-link" href="/">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="http://songs.test/vendors/@coreui/icons/svg/free.svg#cil-paint-bucket"></use>
                </svg>
                    Bucket Lister</a>
        </li>

            <li class="c-sidebar-nav-title">Manage Song Lists</li>
                <li class="c-sidebar-nav-item c-sidebar-nav-dropdown">
                    <a class="c-sidebar-nav-link" href="/setlists">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="http://songs.test/vendors/@coreui/icons/svg/free.svg#cil-library-add"></use>
                    </svg>
                        Songlists</a>
                </li>

                <li class="c-sidebar-nav-item c-sidebar-nav-dropdown">
                    <a class="c-sidebar-nav-link" href="/createsetlist">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="http://songs.test/vendors/@coreui/icons/svg/free.svg#cil-library-add"></use>
                    </svg>
                        New Songlist</a>
                </li>
            </li>
        </ul>
                            

    @if (auth()->user()->is_admin)
        <li class="c-sidebar-nav-title">Manage Data</li>
            <li class="c-sidebar-nav-item c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-link"
                   href="http://songs.test/admin/users">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="http://songs.test/vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
                    </svg> Users
                </a>
        </li>
    @endif
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div>