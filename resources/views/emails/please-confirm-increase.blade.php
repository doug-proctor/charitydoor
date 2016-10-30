@include('emails.header')
<body>

	<h1>Donation increase confirmation required</h1>

	<p>Dear {{ ucfirst($increase->user_name) }},</p>

	<p>Thank you for adjusting your Give As You Earn donation. To make sure you really did ask to set this up, we need you to confirm this request by clicking the confirmation link below:</p>

	<p><a href="charitydoor.dev/auth/{{ $increase->authorisation_code }}">Authorise</a></p>

	{{--
		<p>Here are the details of the donation request:</p>
		<ul>
			<li>Donation amount: &pound;{{ $increase->amount }}</li>
			<li>Charity name: {{ $increase->charity_name }}</li>
		</ul>
	 --}}

	@include('emails.footer')

</body>
</html>
