<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('judul')</title>
    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{url('/home')}}">My Blogger</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/artikel')}}">Artikel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{url('/contact')}}">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</nav>
@yield('isi')
<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="copyright">
					<p style="padding-top: 150px";>&copy; 2021 <a>AGIL NOTONEGORO</a>. All Rights Reserved.</p>
				</div>
			</div>
		</div>
	</footer>    
</body>
</html>