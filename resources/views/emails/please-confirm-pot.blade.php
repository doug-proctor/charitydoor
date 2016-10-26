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

	<h1>Pot signup confirmation required</h1>

	<p>Dear {{ ucfirst($pot->user_name) }},</p>

	<p>Thank you for setting up a Give As You Earn donation. To make sure you really did ask to set this up, we need you to confirm this request by clicking the confirmation link below:</p>

	<p><a href="charitydoor.dev/auth/pot/{{ $pot->authorisation_code }}">Authorise</a></p>

	<p>Here are the details of the donation request:</p>

	<ul>
		<li>Donation amount: &pound;{{ $pot->amount }}</li>
	</ul>

	<p>Thanks!<br>
	Engine HR</p>

</body>
</html>
