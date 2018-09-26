<div class="navbar-fixed">
  <nav class="white" role="navigation">
      <div class="nav-wrapper container">
        <a id="logo-container" href="#" class="brand-logo">Logo</a>
        <ul class="right hide-on-med-and-down">
          <li <?php if($page == "home") { echo 'class="active"';}?>><a href="index">Home</a></li>
          <li><a class='dropdown-products' href="#" data-target='product-data-target'>Products</a></li>
          <li <?php if($page == "services") { echo 'class="active"';}?>><a href="services">Services</a></li>
          <li <?php if($page == "tuition") { echo 'class="active"';}?>><a href="tuition">Tuition</a></li>
          <li <?php if($page == "courses") { echo 'class="active"';}?>><a href="courses">Courses</a></li>
          <li <?php if($page == "portfolio") { echo 'class="active"';}?>><a href="portfolio">Portfolio</a></li>
        </ul>

        <ul id="nav-mobile" class="sidenav">
          <li><a href="#">Navbar Link</a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      </div>

    <!-- Dropdown Structure -->
    <ul id='product-data-target' class='dropdown-content'>
      <li><a href="#!">one</a></li>
      <li><a href="#!">two</a></li>
      <li class="divider" tabindex="-1"></li>
      <li><a href="#!">three</a></li>
      <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
      <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
    </ul>
  </nav>
</div>