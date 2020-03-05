      <li class="nav-item has-treeview menu-open">
        <a href="#" class="nav-link">
          <i class="nav-icon {{ $icon }}"></i>
          <p>
            {{-- expr --}}
            {{ $menu_head }}
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>

        <ul class="nav nav-treeview">
          @php
            $submenus = DB::table('submenus')->where([['menu_id','=', $level],['id','=',$submenu_id]])->get();
          @endphp

          @foreach ($submenus as $submenu)
          <li class="nav-item">

            <a href="{{ url($role.$menu_head_link.$submenu->link) }}" class="nav-link 
              @if(url()->current() == url($role.$menu_head_link.$submenu->link))
              active
              @endif">

              <i class="far fa-circle nav-icon"></i>
              <p>{{ $submenu->nama }}</p>
            </a>
          </li>
          @endforeach

        </ul>
      </li>