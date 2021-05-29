@extends('layout0331')
@section('judul','artikel')
@section('isi')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<style>
img{
	background-image: url(P1.jpg);
	background-color: #eaeaea;
	background-size: cover;
	border-radius: 300px;
	width: 350px;
	height: 350px;
	margin: 0 auto;
	border: 1px solid #eaeaea;
}
.container{
    margin: 0 auto;
}
</style>
<section class="contact">
		<div class="container">
				<div class="col-sm-6 contact-info">
					<h1 class="contact-title text-uppercase "style="padding-top: 10px";>Contact us</h1>
                    <img src="{{url('img/p1.jpg')}}">
					<p class="st-name"><strong><br>AGIL NOTONEGORO</strong></p>
					<p class="st-phone"><i class="fa fa-mobile"></i> <strong>085604456171</strong></p>
					<p class="st-email"><i class="fa fa-envelope-o"></i> <strong>shooter.ngawi@gmail.com</strong></p>
					<p class="st-website"><i class="fa fa-globe"></i> <strong>@ag.n04</strong></p>
				</div>
		</div>
	</section>
</body>
</html>
@endsection