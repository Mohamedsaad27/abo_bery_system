<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
  <div class="sidebar-inner px-4 pt-3">
    <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
      <div class="d-flex align-items-center">
        <div class="avatar-lg me-4">
          <img src="{{asset('assets/images/team/profile-picture-3.jpg')}}"
            class="card-img-top rounded-circle border-white" alt="Bonnie Green">
        </div>
        <div class="d-block">
          <h2 class="h5 mb-3">Hi, Jane</h2>
          <a href="{{route('login')}}" class="btn btn-secondary btn-sm d-inline-flex align-items-center">
            <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
            </svg>
            Sign Out
          </a>
        </div>
      </div>
      <div class="collapse-close d-md-none">
        <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu"
          aria-expanded="true" aria-label="Toggle navigation">
          <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>
        </a>
      </div>
    </div>
    <ul class="nav flex-column pt-3 pt-md-0">
      <li class="nav-item">
        <a href="{{route('dashboard')}}" class="nav-link d-flex align-items-center">
          <span class="sidebar-icon">
            <svg width="20" height="20" viewBox="0 0 137 230" xmlns="http://www.w3.org/2000/svg">
              <g fill="#f8bd7a">
                <path d="m922.9 113.8-2.3-.3c.2 1.2.3 2.5.5 3.8.5-1.2 1.2-2.4 1.8-3.5z" />
                <path
                  d="m53.3 119.3-42.1 106.8 117.5-146.4-51.8 1.2 43.7-72.5c0-.1 0-.1.1-.2 0-.1 0-.2.1-.3s0-.1.1-.1c.1-.2.1-.4.2-.6 0-.1.1-.3.2-.4-.1-.2 0-.4.1-.5s.2-.2.3-.2v-.1c0-.1 0-.1 0-.2s.1-.3.2-.4v-.1c0-.1.1-.1.1-.1v-.1c0-.2.1-.4.2-.6l-59.6 1.4-54 114.7z" />
              </g>
            </svg>
          </span>
          <span class="mt-1 ms-1 sidebar-text">Abo Bery Dashboard</span>
        </a>
      </li>
      <li class="nav-item @@if (context.page === 'overview') { active }">
        <a href="{{route('dashboard')}}" class="nav-link">
          <span class="sidebar-icon">
            <svg width="20" height="20" viewBox="0 0 137 230" xmlns="http://www.w3.org/2000/svg">
              <g fill="#f8bd7a">
                <path d="m922.9 113.8-2.3-.3c.2 1.2.3 2.5.5 3.8.5-1.2 1.2-2.4 1.8-3.5z" />
                <path
                  d="m53.3 119.3-42.1 106.8 117.5-146.4-51.8 1.2 43.7-72.5c0-.1 0-.1.1-.2 0-.1 0-.2.1-.3s0-.1.1-.1c.1-.2.1-.4.2-.6 0-.1.1-.3.2-.4-.1-.2 0-.4.1-.5s.2-.2.3-.2v-.1c0-.1 0-.1 0-.2s.1-.3.2-.4v-.1c0-.1.1-.1.1-.1v-.1c0-.2.1-.4.2-.6l-59.6 1.4-54 114.7z" />
              </g>
            </svg>
          </span>
          <span class="sidebar-text">Dashboard</span>
        </a>
      </li>
      <!-- Categories Menu -->
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#categoriesMenu" role="button" aria-expanded="false"
          aria-controls="categoriesMenu">
          <span class="sidebar-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M19 13H5v-2h14v2z" fill="currentColor"></path>
          </svg>
          </span>
          <span class="sidebar-text">Categories</span>
        </a>
        <div class="collapse" id="categoriesMenu">
          <ul class="nav flex-column ms-3">
            <li class="nav-item">
              <a href="{{ route('categories.create') }}" class="nav-link">Add Category</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('categories.index') }}" class="nav-link">View Categories</a>
            </li>
          </ul>
        </div>
      </li>

      <!-- Products Menu -->
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#productsMenu" role="button" aria-expanded="false"
          aria-controls="productsMenu">
          <span class="sidebar-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M19 13H5v-2h14v2z" fill="currentColor"></path>
            </svg>
          </span>
          <span class="sidebar-text">Products</span>
        </a>
        <div class="collapse" id="productsMenu">
          <ul class="nav flex-column ms-3">
            <li class="nav-item">
              <a href="{{ route('products.create') }}" class="nav-link">Add Product</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('products.index') }}" class="nav-link">View Products</a>
            </li>
          </ul>
        </div>
      </li>


  </div>
</nav>