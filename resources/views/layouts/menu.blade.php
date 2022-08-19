<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link ">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item has-treeview {{  request()->routeIs('category*')?'menu-open':'' }} ">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-tree"></i>
      <p>
        Category
        <i class="fas fa-angle-left right"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{ route('category.index') }}" class="nav-link  {{ request()->routeIs('category.index') ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i>
          <p>All Category</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('category.inactive') }}" class="nav-link  {{ request()->routeIs('category.inactive') ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i>
          <p>Inactive Category</p>
        </a>
      </li> 
      <li class="nav-item">
        <a href="{{ route('category.create') }}" class="nav-link  {{ request()->routeIs('category.create') ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i>
          <p>new Category</p>
        </a>
      </li> 
    </ul>
  </li>

  
<li class="nav-item has-treeview {{  request()->routeIs('product*')?'menu-open':'' }} ">
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-tree"></i>
    <p>
      Product
      <i class="fas fa-angle-left right"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{ route('product.index') }}" class="nav-link  {{ request()->routeIs('product.index') ? 'active' : '' }}">
        <i class="far fa-circle nav-icon"></i>
        <p>All product</p>
      </a>
    </li>
 
    <li class="nav-item">
      <a href="{{ route('product.create') }}" class="nav-link  {{ request()->routeIs('product.create') ? 'active' : '' }}">
        <i class="far fa-circle nav-icon"></i>
        <p>new product</p>
      </a>
    </li> 
  </ul>
</li>
