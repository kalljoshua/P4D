<!--
   =============================================
    Theme Main Menu
   ==============================================
   -->
<header class="theme-main-menu sticky-menu theme-menu-one">
    <div class="inner-content">
        <div class="d-flex align-items-center justify-content-between">
            <div class="logo order-lg-0"><a href="/" class="d-block">{{-- <img src="images/logo/logo_01.png"
                        alt="" width="130"> --}}P4D Africa</a></div>

            <div class="right-widget d-flex align-items-center ms-auto ms-lg-0 order-lg-3">
                <button class="menu-search-btn tran3s" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"><i class="bi bi-search"></i></button>
                <a href="{{ route('contact') }}" class="req-demo-btn tran3s d-none d-lg-block">Request a File</a>
            </div> <!-- /.right-widget -->

            <nav class="navbar navbar-expand-lg order-lg-2">
                <button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="d-block d-lg-none">
                            <div class="logo"><a href="index.html"><img src="images/logo/logo_01.png" alt=""
                                        width="130"></a></div>
                        </li>
                        <li class="nav-item active dropdown">
                            <a class="nav-link" href="{{ route('home') }}" role="button" aria-expanded="false">Home</a>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ route('files') }}" role="button"
                                data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                aria-expanded="false">Files</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('budget_files') }}" class="dropdown-item"><span>Budget
                                            Files</span></a></li>
                                <li><a href="{{ route('plan_files') }}" class="dropdown-item"><span>Plan
                                            Files</span></a></li>
                            </ul>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}" role="button">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('files') }}" role="button">All Files</a>
                        </li>
                    </ul>
                    <!-- Mobile Content -->
                    <div class="mobile-content d-block d-lg-none">
                        <div class="d-flex flex-column align-items-center justify-content-center mt-70">
                            <a href="{{ route('contact') }}" class="req-demo-btn tran3s">Request a File</a>
                        </div>
                    </div> <!-- /.mobile-content -->
                </div>
            </nav>
        </div>
    </div> <!-- /.inner-content -->
</header> <!-- /.theme-main-menu -->
