 <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            @foreach ($notification_messages as $message)
              {{-- expr --}}
            <div class="media">
              <img src="{{ asset($message->user->avatar) }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  {{ $message->user->name }}
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">{{ $message->message }}</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i>{{ $message->created_at }}</p>
              </div>
            </div>

            @endforeach
            <!-- Message End -->
          </a>
        
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">Lihat Semua Pesan</a>
        </div>
      </li>