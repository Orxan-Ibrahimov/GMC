<div class="container-fluid">
    <div class="row border-top px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="d-flex align-items-center justify-content-between bg-secondary w-100 text-decoration-none" data-toggle="collapse" href="#navbar-vertical" style="height: 67px; padding: 0 30px;">
                <h5 class="text-info m-0"><i class="fa fa-book-open mr-2"></i>Təlim Növləri</h5>
                <i class="fa fa-angle-down text-info"></i>
            </a>
            <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 9;">
                <div class="navbar-nav w-100">
                    <a href="" class="nav-item nav-link">İnsan Resursları</a>
                    <a href="" class="nav-item nav-link">Risklərin İdarəsi</a>
                    <a href="" class="nav-item nav-link">Kiber Təhlükəsizlik</a>
                    <a href="" class="nav-item nav-link">Coaching</a>
                    <a href="" class="nav-item nav-link">Marketinq</a>
                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <h1 class="m-0"><span class="text-info">E</span>COURSES</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav py-0">
                        <a href="/" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Ana Səhifə</a>
                        <a href="{{ url('/about') }}" class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">Haqqımızda</a>
                        <a href="/course" class="nav-item nav-link {{ request()->is('course') ? 'active' : '' }}">Təlimlər</a>
                        <a href="/teacher" class="nav-item nav-link {{ request()->is('teacher') ? 'active' : '' }}">Təlimçilər</a>
                        <a href="/blog" class="nav-item nav-link {{ request()->is('blog') ? 'active' : '' }}">Qalereya və bloq</a>

                        <a href="/contact" class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">Bizimlə əlaqə</a>
                    </div>
                    <a class="btn btn-info py-2 px-4 ml-auto d-none d-lg-block" href="">Join Now</a>
                </div>
            </nav>
        </div>
    </div>
</div>