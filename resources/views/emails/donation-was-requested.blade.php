@include('emails.header')
<body>

	<h1 style="color: #0a446e;">Donation confirmation required</h1>

	<p>{{ ucfirst($donation->user_name) }}, thank you for signing up to Give As You Earn, you’re the best!</p>

	<p>To make sure you really did ask to set this up, we need you to confirm this request by clicking the confirmation link below:</p>

	<p><a class="button" href="charitydoor.dev/auth/{{ $donation->authorisation_code }}">Confirm this donation</a></p>

	{{--
		<p>Here are the details of the donation request:</p>
		<ul>
			<li>Donation amount: &pound;{{ $donation->amount }}</li>
			<li>Charity name: {{ $donation->charity_name }}</li>
			<li>Charity address: {{ $donation->charity_address }}</li>
			<li>Charity number: {{ $donation->charity_number }}</li>
		</ul>
	--}}

	@include('emails.footer')

</body>
</html>
