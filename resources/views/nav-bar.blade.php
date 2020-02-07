<nav class="site-header navbar-dark bg-dark sticky-top py-1">
    <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="nav-link nav-item active py-2 d-none d-md-inline-block"
           href="{{ route('admin.articles') }}"><i class="fas fa-area-chart" style="font-size: 30px"></i></a>
        <a class="nav-link nav-item py-2 d-none d-md-inline-block"
           href="{{ route('admin.articles') }}">Articles</a>
        <form action="{{ url('admin/logout') }}" method="GET">
            @csrf
            <button type="submit" class="btn btn-danger nav-link nav-item py-2 d-none d-md-inline-block">Logout
                <span class="sr-only"></span></button>
        </form>
    </div>
</nav>
