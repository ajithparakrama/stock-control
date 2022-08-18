<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link active">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>
<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-tree"></i>
      <p>
        Category
        <i class="fas fa-angle-left right"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{ route('category.index') }}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>All Category</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('category.create') }}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>new Category</p>
        </a>
      </li>
  
    </ul>
  </li>
