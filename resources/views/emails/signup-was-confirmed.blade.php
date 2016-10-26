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

	<h1>Donation confirmed!</h1>

	<p>Dear {{ ucfirst($user->first_name) }} {{ ucfirst($user->last_name) }},</p>

	<p>Thank you for setting up a Give As You Earn donation. Everything is confirmed. Here are the details of the donation:</p>

	<p>Here's your free coffee code. To redeemm it, show this email to the staff in the Engine canteen:</p>

	<p>{{ strtoupper($user->first_name) }}{{ $signup->authorisation_code }}</p>

	<ul>
		<li>Donation amount: &pound;{{ $signup->amount }}</li>
		<li>Charity name: {{ $signup->charity_name }}</li>
		<li>Charity address: {{ $signup->charity_address }}</li>
		<li>Charity number: {{ $signup->charity_number }}</li>
	</ul>

	<p>Thanks!<br>
	Engine HR</p>

</body>
</html>
