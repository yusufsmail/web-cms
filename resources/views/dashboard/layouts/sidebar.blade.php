<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{Request::is('home')? 'active' : ''}}" aria-current="page" href="/">
              <span data-feather="home" class="align-text-bottom"></span>
              Back to Home
            </a>
          </li>
          <hr>
          <li class="nav-item">
            <a class="nav-link {{Request::is('dashboard/posts*')? 'active' : ''}}" aria-current="page" href="/dashboard">
              <span data-feather="airplay" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('posts')? 'active' : ''}}" href="/dashboard/posts">
              <span data-feather="file-text" class="align-text-bottom"></span>
              My Posts
            </a>
          </li>
        </ul>
      </div>
    </nav>