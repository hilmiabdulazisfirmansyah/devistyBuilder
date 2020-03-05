<li class="nav-item has-treeview">
  <a href="#" class="nav-link @if($page){{ 'active' }}@endif">
    <i class="nav-icon fas fa-circle"></i>
    <p>
      {{ $menu_head }}
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item has-treeview">

      @php
      $submenus = DB::table('submenus')->where('menu_id', $level)->get();
      @endphp

      @foreach ($submenus as $submenu)
      <a href="{{ $role }}{{ $submenu->subheadlink }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>
         {{ $submenu->subhead }}
         <i class="right fas fa-angle-left"></i>
       </p>
     </a>

     <ul class="nav nav-treeview">

       <li class="nav-item">
        <a href="{{ $role }}{{ $submenu->subchildlink }}" class="nav-link">
          <i class="far fa-dot-circle nav-icon"></i>
          <p>{{ $submenu->subchild }}</p>
        </a>
      </li>
      @endforeach

    </ul>
  </li>

</ul>
</li>