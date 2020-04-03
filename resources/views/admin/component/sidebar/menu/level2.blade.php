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
            $submenus = DB::table('submenus')->where('menu_id',$id)->get();
          @endphp

          @foreach ($submenus as $submenu)
          <li class="nav-item pl-3">

            <a href="{{ url($role.$submenu->link) }}" class="nav-link 
              @if(url()->current() == url($role.Str::singular($submenu->link)))
              active
              @endif">

              <i class="nav-icon {{ $submenu->submenuicon }}"></i>
              <p>{{ $submenu->nama }}</p>
            </a>
          </li>
          @endforeach

        </ul>
      </li>