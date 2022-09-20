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
            <div class="d-flex align-items-center py-3"><img class="me-2"
                    src="../assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span
                    class="font-sans-serif">falcon</span></div>
        </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <li class="nav-item">
                    <a class="nav-link" href="/superadmin-dashboard" aria-expanded="false">
                      <div class="d-flex align-items-center">
                          <span class="nav-link-icon">
                              <span class="fas fa-chart-pie"></span>
                          </span>
                          <span class="nav-link-text ps-1">Dasbor</span></div>
                    </a><!-- more inner pages-->
                  </li>
                {{-- Divider --}}
                <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">Konfigurasi</div>
                    <div class="col ps-0">
                        <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                </div>
                <!-- parent pages-->
                <li class="nav-item">
                  <a class="nav-link" href="/manage-admin" aria-expanded="false">
                    <div class="d-flex align-items-center">
                        <span class="nav-link-icon">
                            <span class="fas fa-user-tie"></span>
                        </span>
                        <span class="nav-link-text ps-1">Admin</span></div>
                  </a><!-- more inner pages-->
                </li>
                {{-- Divider --}}
                <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">Data</div>
                    <div class="col ps-0">
                        <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                </div>
                <li class="nav-item">
                    <!-- parent pages-->
                    <a class="nav-link" href="/superadmin-washing-data" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <span class="fas fa-car-side"></span>
                            </span>
                            <span class="nav-link-text ps-1">Pencucian</span></div>
                      </a><!-- more inner pages-->
                </li>
            </ul>
        </div>
    </div>
</nav>
