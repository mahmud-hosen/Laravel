

<nav class="navbar navbar-expand-lg navbar-light bg-light">

<div class="container">



  <a class="navbar-brand" href="{{ route('home')}}">Ecommerce Site</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
  
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('home')}}">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('index')}}">Products</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('contact')}}">Contract</a>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>

    </ul>

    <form class="form-inline my-2 my-lg-0" action="{!! route('search') !!}" method="get">
      
      <div class="input-group mb-3">
          <input type="text" class="form-control" name="search" placeholder=" Search Products" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="submit"><i class="fa fa-search"></i> </button>
            </div>
      </div>
    </form>
  </div>
  </div>
  
</nav>
