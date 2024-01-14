<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fraunces:wght@700&family=Outfit:wght@300;400;600&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:wght@400;500;700;900&display=swap');
body{
    background-color: #eaeaea;
    font-family: 'poppins', sans-serif;
    font-size: 20px;
    color: #2d2d2d;
}
.navbar{
  background-color: #0e345f;
  height: 70px;
  margin: 20px;
  border-radius: 16px;
  padding: 0.5rem;
}
.navbar-brand{
  font-weight: 500;
  color: #219900;
  font-size: 24px;
  transition: 0.3 color;
}
.login-button{
  background-color: #b9a20e;
  color: #fff;
  font-size: 14px;
  padding: 8px 20px;
  border-radius: 50px;
  text-decoration: none;
  transition: 0.3s background-color;
}

.login-button:hover{
  background-color: #b6bc10;
}

.navbar-toggler{
  border:none;
  font-size: 1.25rem;
}

.navbar-toggler:focus, .btn-close:focus{
  box-shadow: none;
  outline: none;
}

.nav-link{
  color: #666777;
  font-weight: 500;
  position: relative;
}

.nav-link:hover, .nav-link.active{
  color: #000;
}

@media(min-width: 991px){
  .nav-link::before{
    content: "";
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 0;
    height: 2px;
    background-color: #009970;
    visibility: hidden;
    transition: 0.3s ease-in-out;
  }

  .nav-link:hover::before, .nav-link.active::before{
    width: 100%;
    visibility: visible;
  }
}
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Apotek</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/products">Prodak</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">Informasi</a>
              </li>
          </div>
          <a href="{{route('logout')}}" class="login-button">Log out</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

        </div>
      </nav>

    @yield('navbar')
</body>
</html>