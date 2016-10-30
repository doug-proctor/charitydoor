@include('emails.header')
<body>

	<h1 style="color: #0a446e;">Donation confirmed</h1>

	<p>{{ ucfirst($donation->user_name) }}, thank you again for signing up to Give As You Earn.</p>

	<p>As a pat on the back for being so nice, you can use the unique code below to claim a free hot drink at the bar.</p>

	<p>{{ strtoupper($donation->user_name) }}{{ $donation->authorisation_code }}</p>

	{{-- 
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
