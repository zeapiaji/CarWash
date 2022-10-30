<nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" style="display: none;"
        data-move-target="#navbarVerticalNav" data-navbar-top="combo">
        <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse"
            aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                    class="toggle-line"></span></span></button>
        <a class="navbar-brand me-1 me-sm-3" href="../index.html">
            <div class="d-flex align-items-center"><img class="me-2"
                    src="../assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span
                    class="font-sans-serif">falcon</span></div>
        </a>
        <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
            <li class="nav-item">
                <div class="theme-control-toggle fa-icon-wait px-2"><input
                        class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox"
                        data-theme-control="theme" value="dark" /><label
                        class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
                        data-bs-toggle="tooltip" data-bs-placement="left" title="Tema terang"><span
                            class="fas fa-sun fs-0"></span></label><label
                        class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
                        data-bs-toggle="tooltip" data-bs-placement="left" title="Tema gelap"><span
                            class="fas fa-moon fs-0"></span></label></div>
            </li>
            <li class="nav-item">
                <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait"
                    href="../app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart"
                        data-fa-transform="shrink-7" style="font-size: 33px;"></span><span
                        class="notification-indicator-number"></span></a>
            </li>

            <li class="nav-item dropdown"><a class="nav-link pe-0 fw-bolder fs-1" id="navbarDropdownUser" href="#" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{Auth::user()->name}}
                </a>
            <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                <div class="bg-white dark__bg-1000 rounded-2 py-2">
                    <a class="dropdown-item" href="/edit/cashier/{{ Auth::user()->id}}">Profil &amp; akun</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </li>
        </ul>
    </nav>
