<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

  <!-- Sidebar Toggle (Topbar) -->
  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
  </button>

  <!-- Topbar Search -->

  <!-- Topbar Navbar -->
  <ul class="navbar-nav ml-auto">


    <!-- Nav Item - Messages -->

    @if (App\Models\Message::getUnreadMessage()->count() > 0)
    <li class="nav-item dropdown no-arrow mx-1">
      <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-envelope fa-fw"></i>
        <!-- Counter - Messages -->

          <span class="badge badge-danger badge-counter">{{ App\Models\Message::getUnreadMessage()->count()  }}</span>
      </a>
      <!-- Dropdown - Messages -->
      <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
        <h6 class="dropdown-header">
          Message Center
        </h6>
        @foreach (App\Models\Message::getUnreadMessage() as $mess)
          <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.blog.messages.show',$mess->id) }}">
            <div class="font-weight-bold">
              <div class="text-truncate">{{ $mess->message }}</div>
              <div class="small text-gray-500">{{ $mess->name }} · {{ $mess->created_at }}</div>
            </div>
          </a>        
        @endforeach
    
        <a class="dropdown-item text-center small text-gray-500" href="{{ route('admin.blog.messages.index') }}">Read More Messages</a>
      </div>
    </li>
    @endif


    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small text-capitalize">{{ Auth::guard('admin')->user() ? Auth::guard('admin')->user()->name : 'Valerie Luna'}}</span>
        <img class="img-profile rounded-circle" src="{{ asset('images/profil.jpeg') }}">
      </a>
      <!-- Dropdown - User Information -->
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

        <a class="dropdown-item" href="{{ route('admin.edite',Auth::user()->id) }}">
          <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
          Profile
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#" onclick="event.preventDefault();document.getElementById('form-logout').submit();" >
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          Logout
        </a>
        <form action="{{ route('logout-admin') }}" method="post" id="form-logout" style="display: none;">
          @csrf
        </form>
      </div>
    </li>

  </ul>

</nav>
<!-- End of Topbar -->