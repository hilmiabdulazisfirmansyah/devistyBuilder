<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ url('/') }}" class="brand-link">
    <img src="{{ asset('adminLTE/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
    style="opacity: .8">
    <span class="brand-text font-weight-light">SmartAppV2</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        {{-- auth user avatar --}}
        <img src="{{ asset(Auth::user()->avatar) }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        {{-- auth User name --}}
        <a href="#" class="d-block">{{ substr(Auth::user()->name, 0, 18) }}</a> 
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-header">PANEL {{ strToupper(\App\Role::find(Auth::user()->role_id)->nama) }}</li>

           @switch(Auth::user()->role_id)
           @case(1)
           @php
           $menus = DB::table('menus')->get();
           @endphp
           @break

           @default
           @php
           $menus = DB::table('menus')->where('role_id',3)->get();
           @endphp
           @endswitch


           @foreach ($menus as $menu)
           @if ($menu->menulevel_id == '1')
           @include('admin.component.sidebar.menu.level1',[
            'icon'  => $menu->icon,
            'nama'  =>  $menu->nama,
            'link'  =>  $menu->link,
            ])
            @endif
            @endforeach

            @foreach ($menus as $menu)
            @if ($menu->menulevel_id == '2')
            @include('admin.component.sidebar.menu.level2',[
              'menu_head'       =>  $menu->nama,
              'level'           =>  $menu->menulevel_id,
              'submenu_id'      =>  $menu->submenu_id,
              'menu_head_link'  =>  $menu->link,
              'role'            =>  $role,
              'icon'            =>  $menu->icon,
              'id'              =>  $menu->id,
              ])
              @endif
              @endforeach

              @foreach ($menus as $menu)
              @if ($menu->menulevel_id == '3')
              @include('admin.component.sidebar.menu.level3',[
                'menu_head' =>  $menu->nama,
                'level'     =>  $menu->menulevel_id,
                ])
                @endif
                @endforeach
                {{-- end if role --}}
                @include('admin.component.sidebar.menu.logout')


              </ul>
            </nav>
            <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
        </aside>
