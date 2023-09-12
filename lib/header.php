<?php ?>
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="http://127.0.0.1/plummy/">PC SPECS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="http://127.0.0.1/plummy/">Home</a>
          </li>
          <li class="nav-item">
            <a href="#myModal" class="nav-link active" data-toggle="modal">Login</a>
          </li>
          <li class="nav-item">
            <a href="#myModalreg" class="nav-link active" data-toggle="modal">Register</a>
          </li>
          <li class="nav-item">
          <span class="nav-link active"><i class="fa-solid fa-cart-shopping"></i>= <span class="cart-items">0</span> item(s)</span>
          </li>
        </ul>
        <form class="d-flex" method="post" action="search.php">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
 <select class="form-control me-2" aria-label="Default select Search" name="mode" style="width: 100px">
 <option value="name">Keyword</option>
 <option value="price">Price</option>
 <option value="category">Category</option>
</select>
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</header>