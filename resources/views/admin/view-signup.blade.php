<h1>admin view</h1>

<h2>Signup</h2>

@if(!$signup->authorised)
	<p style="color: red">
		Warning: this signup / donation request was not authorised by the person who owns the email address ({{ $signup->user_email }}). You may wish to contact this person to ask if they want to authorise this.
	</p>
@endif

@if($signup->increase)
	<p>
		Note: this is a request to increase a previous signup. 
	</p>
@endif

<ul>
	<li>Name: <strong>{{ $signup->user_name }} </strong></li>
	<li>Email address: <strong>{{ $signup->user_email }} </strong></li>
	<li>Signup amount: <strong>{{ $signup->amount }} </strong></li>
	<li>Charity name: <strong>{{ $signup->charity_name }} </strong></li>
	<li>Charity address: <strong>{{ $signup->charity_address }} </strong></li>
	<li>Charity number: <strong>{{ $signup->charity_number }} </strong></li>
	<li>Was authorised via email? <strong>{{ $signup->authorised ? 'yes' : 'no' }} </strong></li>
	<li>Anonymous? <strong>{{ $signup->anonymous ? 'yes' : 'no' }} </strong></li>
	<li>Was this an increase based on a previous donation? <strong>{{ $signup->increase ? 'yes' : 'no' }} </strong></li>
</ul>
