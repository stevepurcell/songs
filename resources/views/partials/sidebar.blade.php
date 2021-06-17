<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <ul class="c-sidebar-nav">

        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-link" href="http://songs.test/">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="http://songs.test/vendors/@coreui/icons/svg/free.svg#cil-library-add"></use>
                </svg>
                    Song Manager</a>
        </li>

          <li class="c-sidebar-nav-title">{{ __('Manage Songs') }}</li>
                <li class="c-sidebar-nav-item c-sidebar-nav-dropdown c-show">
                    <a class="c-sidebar-nav-link"
                       href="http://songs.test/">
                        <svg class="c-sidebar-nav-icon">
                            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-folder-open') }}"></use>
                        </svg> All Songs
                    </a>
                    <ul class="c-sidebar-nav-dropdown-items">
                            <li class="c-sidebar-nav-item">
                                <a class="c-sidebar-nav-link" style="padding: .5rem .5rem .5rem 76px"
                                   href="#">
                                    <svg class="c-sidebar-nav-icon">
                                        <use
                                            xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-list') }}"></use>
                                    </svg>
                                    Ready to Rock</a>
                            </li>
                            <li class="c-sidebar-nav-item">
                                <a class="c-sidebar-nav-link" style="padding: .5rem .5rem .5rem 76px"
                                   href="#">
                                    <svg class="c-sidebar-nav-icon">
                                        <use
                                            xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-list') }}"></use>
                                    </svg>
                                    In Process</a>
                            </li>
                            <li class="c-sidebar-nav-item">
                                <a class="c-sidebar-nav-link" style="padding: .5rem .5rem .5rem 76px"
                                   href="#">
                                    <svg class="c-sidebar-nav-icon">
                                        <use
                                            xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-list') }}"></use>
                                    </svg>
                                    New</a>
                            </li>
                            <li class="c-sidebar-nav-item">
                                <a class="c-sidebar-nav-link" style="padding: .5rem .5rem .5rem 76px"
                                   href="#">
                                    <svg class="c-sidebar-nav-icon">
                                        <use
                                            xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-list') }}"></use>
                                    </svg>
                                    Wishlist</a>
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