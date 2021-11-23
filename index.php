<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Netflix</title>
		<link rel="icon" href="//logo.clearbit.com/netflix.com" sizes="16x16" type="image/png">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
			@import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');
			body{font-family:'Open Sans', sans-serif;background:url('netflix-bg.jpg');background-size:100%;}
			.logo{width:200px;margin-left:50px;}
			.banner-content{text-align:center;color:#FFF;margin-top:15%;}
			.banner-content h1{font-size:64px;line-height:1.2;font-weight:700;max-width:800px;margin:0 auto;}
			.banner-content h4{font-size:26px;line-height:1.2;margin:16px 75px;}
			.banner-content p{font-size:19.2px;line-height:1.2;}
			.banner-content input{font-size:20px;line-height:1.2;padding:20px 10px;border:1px solid #8c8c8c;width:400px;}
			.banner-content button{background:#E50914;font-size:30px;color:#FFF;padding:10px 25px;border:none;margin-top:2px;}
		</style>
	</head>
	<body>
		<header>
			<img src="logo.png" alt="" class="logo"/>
			<button class="btn btn-danger float-right m-2">Sign In</button>
			<select class="float-right m-2 py-2 px-3">
				<option value="English">English</option>
				<option value="हिन्दी">हिन्दी</option>
			</select>
		</header>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-12">
					<div class="banner-content">
						<h1>Unlimited movies, TV shows and more.</h1>
						<h4>Watch anywhere. Cancel anytime.</h4>
						<p>Ready to watch? Enter your email to create or restart your membership.</p>
						<input type="email" placeholder="Email Address"/>
						<button>Get Started <span class="fa fa-angle-right"></span></button>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>