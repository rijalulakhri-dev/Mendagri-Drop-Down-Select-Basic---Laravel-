        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar">
            <div class="sidebar-header">
                <a href="#" class="sidebar-brand">
                    Noble<span>UI</span>
                </a>
                <div class="sidebar-toggler not-active">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="sidebar-body">
                <ul class="nav">
                    <li class="nav-item">
                        <a href="dashboard.html" class="nav-link">
                            <i class="link-icon" data-feather="box"></i>
                            <span class="link-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false"
                            aria-controls="emails">
                            <i class="link-icon" data-feather="mail"></i>
                            <span class="link-title">Pelayanan</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="emails">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="{{ 'pasienbaru' }}" class="nav-link fs-6">Pasien Baru</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ 'rawatjalan' }}" class="nav-link fs-6">Rawat Jalan</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ 'rawatinap' }}" class="nav-link fs-6">Rawat Inap</a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="link-icon" data-feather="box"></i>
                            <span class="link-title">Keluar</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
