 <!-- Navbar Start -->
 <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <!-- <a href="/" class="navbar-brand p-0">
            <h1 class="m-0 text-uppercase text-primary"><img src="1.png" width="115" height="88">     </h1>
        </a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav  py-0 me-n3">
                <a href="/" class="nav-item nav-link ">Home</a>
                <a href="/post" class="nav-item nav-link">Article</a>
            </div>
        </div>

        <ul class="navbar-nav ms-auto">
            @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome back , <i class="bi bi-person-fill"></i> {{auth() -> user() -> name}}
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar"></i> My Dashboard</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i> Logout</button>
                        </form>
                    </li>
                </ul>
            </li>
            @else
            <li class="nav-item">
                <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Login</a>
            </li>
            @endauth
        </ul>
    </nav>