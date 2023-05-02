<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#">Buku-ku.com</a>
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
        <div class="navbar-nav text-white">
          <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
          <a class="nav-link text-white" href="#">Publiser</a>
          <a class="nav-link disabled text-white"
            >Conttact</a
            <div class="container-fluid">
                <ul class="navbar-nav">
                  <!-- Dropdown -->
                  <li class="nav-item dropdown">
                    <a
                      class="nav-link dropdown-toggle text-white"
                      href="#"
                      id="navbarDropdownMenuLink"
                      role="button"
                      data-mdb-toggle="dropdown"
                      aria-expanded="false"
                    >
                      Category
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li>
                        <a class="dropdown-item" href="{{Route('category',['id'=>1])}}">Anime</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="{{Route('category',['id'=>2])}}">Romance</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="{{Route('category',['id'=>3])}}">Horor</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="{{Route('category',['id'=>4])}}">Historial</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
        </div>
      </div>
    </div>
  </nav>
