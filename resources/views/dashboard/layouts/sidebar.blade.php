<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <i class="fas fa-home"></i>
            Dashboard
          </a>
        </li><hr>
        <li class="nav-item ">
          <a class="nav-link {{ Request::is('dashboard/programs*') ? 'active' : '' }}" href="/dashboard/programs">
            <i class="fas fa-book"></i>
            Data All Section
          </a>
          @if(Request::is('dashboard/programs*'))
          @foreach ($pinggirs as $pinggir)
            <a href="/dashboard/sub/{{ $pinggir->id }}" class="mx-4 nav-link" style="margin-bottom: -15px"> <i class="fas fa-circle fa-xs"></i> {{ $pinggir->nama_jenis }}</a> 
          @endforeach
          <hr>
          @endif
        </li>
        <li class="nav-item" style="margin-bottom: -10px">
          <a class="nav-link {{ Request::is('dashboard/aktivitas*') ? 'active' : '' }}" href="/dashboard/aktivitas">
            <i class="fas fa-tag"></i>
            Data Aktivitas
          </a>
        </li>
        <li class="nav-item" style="margin-bottom: -10px">
          <a class="nav-link {{ Request::is('dashboard/sponsors*') ? 'active' : '' }}" href="/dashboard/sponsors">
            <i class="fas fa-users"></i>
            Data sponsor
          </a>
        </li>
        <li class="nav-item" style="margin-bottom: -10px">
          <a class="nav-link {{ Request::is('dashboard/success*') ? 'active' : '' }}" href="/dashboard/success">
            <i class="fas fa-user-graduate"></i>
            Data Success Story
          </a>
          <hr>
        </li>

        <li class="nav-item" style="margin-bottom: -10px">
          <a class="nav-link {{ Request::is('dashboard/pengaturan') ? 'active' : '' }}" href="/dashboard/pengaturan">
            <i class="fas fa-book"></i>
            Pengaturan Website
          </a>
          <hr>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/beritas*') ? 'active' : '' }}" href="/dashboard/beritas">
            <i class="fas fa-newspaper"></i>
            Data Berita
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/kategoris*') ? 'active' : '' }}" href="/dashboard/kategoris">
            <i class="fas fa-tags"></i>
            Data Kategori Berita
          </a>
        </li><hr>
      </ul>
    </div>
  </nav>