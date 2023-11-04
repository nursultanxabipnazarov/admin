
<?php

include __DIR__.'/../../path.php';

?>



<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= BASE_URL.'admin/category/index.php' ?>">
              <span data-feather="file"></span>
              Categories
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= BASE_URL.'admin/post/index.php' ?>">
              <span data-feather="shopping-cart"></span>
              Posts
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              users
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Integrations
            </a>
          </li>
          
        </ul>

        
      </div>
    </nav>