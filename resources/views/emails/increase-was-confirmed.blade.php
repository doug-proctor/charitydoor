<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Signup confirmation required</title>
	<style>
		a {
			padding: 10px 20px;
			background-color: green;
			color: white;
			display: inline-block;
			border-radius: 2px;
			-moz-border-radius: 2px;
			-webkit-border-radius: 2px;
			text-decoration: none;
		}
	</style>
</head>
<body>

	<h1>Donation increase confirmed!</h1>

	<p>Dear {{ ucfirst($increase->user_name) }},</p>

	<p>Thank you for setting up a Give As You Earn donation. Everything is confirmed. Here are the details of the donation:</p>

	<p>Here's your free coffee code. To redeemm it, show this email to the staff in the Engine canteen:</p>

	<p>{{ strtoupper($increase->user_name) }}{{ $increase->authorisation_code }}</p>

	<ul>
		<li>Donation amount: &pound;{{ $increase->amount }}</li>
		<li>Charity name: {{ $increase->charity_name }}</li>
	</ul>

	<p>Thanks!<br>
	Engine HR</p>

</body>
</html>
