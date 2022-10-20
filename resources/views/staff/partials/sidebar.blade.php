<nav class="navbar navbar-light navbar-vertical navbar-expand-xl" style="display: none;">
    <script>
        var navbarStyle = localStorage.getItem("navbarStyle");
        if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
        }

    </script>
    <div class="d-flex align-items-center">
        <div class="toggle-icon-wrapper">
            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip"
                data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span
                        class="toggle-line"></span></span></button>
        </div><a class="navbar-brand" href="../index.html">
            <div class="d-flex align-items-center py-3"><img class="me-"
                    src="../assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span
                    class="font-sans-serif">CarWash</span></div>
        </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <li class="nav-item">
                    @role('cashier')
                    <a class="nav-link" href="/cashier-dashboard" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <span class="fas fa-chart-pie"></span>
                            </span>
                            <span class="nav-link-text ps-1">Dasbor Kasir</span></div>
                    </a>
                    @endrole
                    @role('admin')
                    <a class="nav-link" href="/admin-dashboard" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <span class="fas fa-chart-pie"></span>
                            </span>
                            <span class="nav-link-text ps-1">Dasbor Admin</span></div>
                    </a>
                    @endrole
                </li>

                {{-- Divider --}}
                <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">
                        @role('admin||super_admin')
                        Konfigurasi
                        @endrole
                        @role('entry')
                        Antrian
                        @endrole
                    </div>
                    <div class="col ps-0">
                        <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                </div>

                {{-- Entry --}}
                @role('cashier')
                <!-- parent pages-->
                <li class="nav-item">
                    <a class="nav-link" href="/entry-list">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <span class="fas fa-users"></span>
                            </span>
                            <span class="nav-link-text ps-1">Kelola Antrian</span>
                        </div>
                    </a>
                </li>
                @endrole

                @role('super_admin')
                <!-- parent pages-->
                <li class="nav-item">
                    <a class="nav-link dropdown-indicator collapsed" href="#manage_member" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="manage_member">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <span class="fas fa-users"></span>
                            </span>
                            <span class="nav-link-text ps-1">Member</span>
                        </div>
                    </a>
                    <ul class="nav false collapse" id="manage_member" style="">
                        <li class="nav-item ms-2">
                            <a class="nav-link" href="/manage-member" aria-expanded="false">
                                <div class="d-flex align-items-center">
                                    <span class="nav-link-icon">
                                        <span class="fas fa-user-cog"></span>
                                    </span>
                                    <span class="nav-link-text ps-1">Kelola</span>
                                </div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item ms-2">
                            <a class="nav-link" href="/recycle-member" aria-expanded="false">
                                <div class="d-flex align-items-center">
                                    <span class="nav-link-icon">
                                        <span class="fas fa-trash-alt"></span>
                                    </span>
                                    <span class="nav-link-text ps-1">Tempat Sampah</span>
                                </div>
                            </a><!-- more inner pages-->
                        </li>
                    </ul>
                </li>
                @endrole

                @role('super_admin||admin')
                <li class="nav-item">
                    <a class="nav-link dropdown-indicator collapsed" href="#manage_cashier" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="manage_cashier">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <span class="fas fa-user-friends"></span>
                            </span>
                            <span class="nav-link-text ps-1">Kasir</span>
                        </div>
                    </a>
                    <ul class="nav false collapse" id="manage_cashier" style="">
                        <li class="nav-item ms-2">
                            <a class="nav-link" href="/manage-cashier" aria-expanded="false">
                                <div class="d-flex align-items-center">
                                    <span class="nav-link-icon">
                                        <span class="fas fa-user-cog"></span>
                                    </span>
                                    <span class="nav-link-text ps-1">Kelola</span>
                                </div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item ms-2">
                            <a class="nav-link" href="/recycle-cashier" aria-expanded="false">
                                <div class="d-flex align-items-center">
                                    <span class="nav-link-icon">
                                        <span class="fas fa-trash-alt"></span>
                                    </span>
                                    <span class="nav-link-text ps-1">Tempat Sampah</span>
                                </div>
                            </a><!-- more inner pages-->
                        </li>
                    </ul>
                </li>
                @endrole

                @role('super_admin')
                <!-- parent pages-->
                <li class="nav-item">
                    <a class="nav-link dropdown-indicator collapsed" href="#manage_admin" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="manage_admin">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <span class="fas fa-user-tie"></span>
                            </span>
                            <span class="nav-link-text ps-1">Admin</span>
                        </div>
                    </a>
                    <ul class="nav false collapse" id="manage_admin" style="">
                        <li class="nav-item ms-2">
                            <a class="nav-link" href="/manage-admin" aria-expanded="false">
                                <div class="d-flex align-items-center">
                                    <span class="nav-link-icon">
                                        <span class="fas fa-user-cog"></span>
                                    </span>
                                    <span class="nav-link-text ps-1">Kelola</span>
                                </div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item ms-2">
                            <a class="nav-link" href="/recycle-admin" aria-expanded="false">
                                <div class="d-flex align-items-center">
                                    <span class="nav-link-icon">
                                        <span class="fas fa-trash-alt"></span>
                                    </span>
                                    <span class="nav-link-text ps-1">Tempat Sampah</span>
                                </div>
                            </a><!-- more inner pages-->
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link dropdown-indicator collapsed" href="#subsidiary" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="manage_admin">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <span class="fas fa-building"></span>
                            </span>
                            <span class="nav-link-text ps-1">Cabang</span>
                        </div>
                    </a>
                    <ul class="nav false collapse" id="subsidiary" style="">
                        <li class="nav-item ms-2">
                            <a class="nav-link" href="/show-subsidiaries" aria-expanded="false">
                                <div class="d-flex align-items-center">
                                    <span class="nav-link-icon">
                                        <span class="fas fa-list-alt"></span>
                                    </span>
                                    <span class="nav-link-text ps-1">Lihat Cabang</span>
                                </div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item ms-2">
                            <a class="nav-link" href="/manage-subsidiaries" aria-expanded="false">
                                <div class="d-flex align-items-center">
                                    <span class="nav-link-icon">
                                        <span class="fas fa-user-cog"></span>
                                    </span>
                                    <span class="nav-link-text ps-1">Kelola</span>
                                </div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item ms-2">
                            <a class="nav-link" href="/recycle-subsidiary" aria-expanded="false">
                                <div class="d-flex align-items-center">
                                    <span class="nav-link-icon">
                                        <span class="fas fa-trash-alt"></span>
                                    </span>
                                    <span class="nav-link-text ps-1">Tempat Sampah</span>
                                </div>
                            </a><!-- more inner pages-->
                        </li>
                    </ul>
                </li>

                @endrole

                @role('admin||super_admin')
                {{-- Divider --}}
                <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">Data</div>
                    <div class="col ps-0">
                        <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                </div>

                @endrole

                @role('super_admin')
                <li class="nav-item">
                    <a class="nav-link" href="/admin-washing-data" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <span class="fas fa-car-side"></span>
                            </span>
                            <span class="nav-link-text ps-1">Pencucian</span></div>
                    </a>
                </li>
                @endrole

                @role('super_admin')
                <!-- parent pages-->

                <a class="nav-link" href="/pricing" aria-expanded="false">
                    <div class="d-flex align-items-center">
                        <span class="nav-link-icon">
                            <span class="fas fa-user-friends"></span>
                        </span>
                        <span class="nav-link-text ps-2">Paket Pencucian</span></div>
                </a>
            </ul>
            @endrole

            </ul>
        </div>
    </div>
</nav>
