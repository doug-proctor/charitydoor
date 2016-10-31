@extends('app')
@section('content')

<div class="hero"><div class="w-container"><h1>THAT'S NICE OF YOU!</h1><h2>Now, let's choose an amount and add it to your monthly donation.</h2></div><div class="steps w-container"><div class="w-row"><div class="w-col w-col-4 w-col-small-4 w-col-tiny-4"><a class="current-step step w-inline-block" href="/get-started"><div class="current-number number">1</div></a></div><div class="w-col w-col-4 w-col-small-4 w-col-tiny-4"><div class="current-step step"><div class="current-number number">2</div></div></div><div class="w-col w-col-4 w-col-small-4 w-col-tiny-4"><div class="step"><div class="number">3</div></div></div></div></div></div>

<div class="bottom-section section-a">
	<div class="engine-will-help w-container">
		<p class="complete">To increase the amount you currently give, complete the form below.<br>If you'd like to increase the amount for more than one charity, simply complete the form again.</p>
	</div>
	<div class="w-container">
		<div class="w-row">
			<div class="w-col w-col-6">
				<div class="w-form">

					{{-- INCREASE FORM --}}

					<form action="/increase" method="POST">

						<label class="label" for="user_name">Your name</label>
						<input class="field w-input" id="user_name" maxlength="256" name="user_name" placeholder="Your name" required="required" type="text">

						<label class="label" for="user_email">Your email address</label>
						<input class="field w-input" id="user_email" maxlength="256" name="user_email" placeholder="Your email address" required="required" type="email">

						<label class="label" for="charity_name">Which charity would you like to increase the amount for?</label>
						<input class="field w-input" id="charity_name" maxlength="256" name="charity_name" placeholder="Charity's name" required="required" type="text">

						<label class="label" for="amount">How much would you like to increase your monthly donation by?</label>
						<input class="field w-input" data-name="Amount" id="amount" maxlength="256" name="amount" placeholder="£ Amount" required="required" type="number" min="3">

						<div class="confirmation w-checkbox">
							<input class="confirmation w-checkbox-input" data-name="Confirmation" id="Confirmation" name="Confirmation" required="required" type="checkbox">
							<label class="label label-small w-form-label" for="Confirmation">I agree to the noted monthly deductions being processed via Engine payroll (or drawings if I'm a partner). Deductions will start in December 2016 and will be ongoing.</label>
						</div>
						
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="increase" value="1">
						<input class="btn-a btn-form w-button" type="submit" value="Submit">
					</form>

<div class="success w-form-done"><p class="label success-label">Thank you! Your submission has been received!</p><a class="btn-a btn-c w-button" href="/enter">Give to another charity</a></div><div class="error-message w-form-fail"><p class="bullet error-message">Oops! Something went wrong while submitting the form</p></div></div></div><div class="w-col w-col-6"><div class="bullet-block"><div class="bullet">Your first donation will be taken from your pay at the end of December 2016</div></div><div class="bullet-block"><div class="bullet">If you have any questions about the scheme or would just like to talk things through with a human, come and see us in the bar on these days:<br><br>Wednesday 2nd November 9am – 12pm
<br>Friday 4th November 9am – 12pm
<br>Thursday 11th November 9am – 11am<br><br>or speak to your HR representative directly.</div></div></div></div></div></div>

@include('shared.footer')

@endsection
