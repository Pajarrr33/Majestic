<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Dashboard</div>
                            <a class="nav-link" href="<?= base_url('admin/Dashboard') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Admin Handle</div>
                            <a class="nav-link" href="<?= base_url('admin/Orders') ?>">
                                <div class="sb-nav-link-icon"><i class="bi bi-newspaper"></i></div>
                                Orders
                            </a>
                            <a class="nav-link" href="<?= base_url('admin/Transaction') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Transaction
                            </a>
                            <div class="sb-sidenav-menu-heading">CRUD</div>
                            <a class="nav-link" href="<?= base_url('admin/Product') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Product
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
            </div>