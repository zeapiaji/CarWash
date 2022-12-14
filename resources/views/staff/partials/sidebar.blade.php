<nav class="navbar navbar-light navbar-vertical navbar-expand-xl" style="display: none;">
    <div class="d-flex align-items-center">
        <div class="toggle-icon-wrapper">
            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip"
                data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span
                        class="toggle-line"></span></span></button>
        </div><a class="navbar-brand" href="/">
            <div class="d-flex align-items-center py-3"><img class="me-"
                    src="{{asset('member/assets/images/logo.png')}}" alt="" width="160" /></div>
        </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <li class="nav-item">
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
                    <a class="nav-link" href="/entry/list">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <span class="fas fa-users"></span>
                            </span>
                            <span class="nav-link-text ps-1">Kelola Antrian</span>
                        </div>
                    </a>
                </li>
                @endrole

                {{-- Entry --}}
                @role('member')
                <!-- parent pages-->
                <li class="nav-item">
                    <a class="nav-link" href="/member-home">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <span class="fas fa-users"></span>
                            </span>
                            <span class="nav-link-text ps-1">Dasbor</span>
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
                    <a class="nav-link " href="/manage-subsidiaries">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <span class="fas fa-building"></span>
                            </span>
                            <span class="nav-link-text ps-1">Cabang</span>
                        </div>
                    </a>
                </li>

                @endrole

                @role('admin||super_admin||member||cashier')
                {{-- Divider --}}
                <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">Data</div>
                    <div class="col ps-0">
                        <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                </div>
                @endrole

                @role('member')
                 <!-- parent pages-->
                 <li class="nav-item">
                    <a class="nav-link" href="/history/transaction">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <span class="fas fa-users"></span>
                            </span>
                            <span class="nav-link-text ps-1">Riwayat</span>
                        </div>
                    </a>
                </li>
                @endrole

                @role('admin||cashier')
                <!-- parent pages-->
                <li class="nav-item">
                   <a class="nav-link" href="/transaction/subsidiary/{{Auth::user()->staff->subsidiary_id}}">
                       <div class="d-flex align-items-center">
                           <span class="nav-link-icon">
                               <span class="fas fa-file-invoice-dollar"></span>
                           </span>
                           <span class="nav-link-text ps-1">Riwayat Transaksi</span>
                       </div>
                   </a>
               </li>
               @endrole

               @role('admin||cashier')
                <!-- parent pages-->
                <li class="nav-item">
                   <a class="nav-link" href="/washing/subsidiary/{{Auth::user()->staff->subsidiary_id}}">
                       <div class="d-flex align-items-center">
                           <span class="nav-link-icon">
                               <span class="fas fa-car-side"></span>
                           </span>
                           <span class="nav-link-text ps-1">Riwayat Pencucian</span>
                       </div>
                   </a>
               </li>
               @endrole

                @role('super_admin')
                 <!-- parent pages-->
                 <li class="nav-item">
                    <a class="nav-link" href="/all-transaction">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <span class="fas fa-users"></span>
                            </span>
                            <span class="nav-link-text ps-1">Pencucian</span>
                        </div>
                    </a>
                </li>
                @endrole

                @role('admin')
                <li class="nav-item">
                    <a class="nav-link" href="/doorsmeer/" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <span class="fas fa-smog"></span>
                            </span>
                            <span class="nav-link-text ps-1">Doorsmeer</span></div>
                    </a>
                </li>
                @endrole

                @role('super_admin')
                <li class="nav-item">
                    <a class="nav-link" href="/pricing" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <span class="fas fa-car-side"></span>
                            </span>
                            <span class="nav-link-text ps-1">Harga Pencucian</span></div>
                    </a>
                </li>
                @endrole

            </ul>

            </ul>
        </div>
    </div>
</nav>
