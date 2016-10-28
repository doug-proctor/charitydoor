@extends('app')
@section('content')

	<div class="modal w-clearfix">
		<a class="w-clearfix w-inline-block x" href="#">
		<img class="x" data-ix="new-interaction-3" height="25" src="http://uploads.webflow.com/56b22c8c02de80c46a44196b/57f4d2f646d7daec0edce6db_X.png" width="25"></a>
		<div class="pot-header w-container">
			<h3>Donate to the charity pot</h3>
			<p class="centre">We'll be in touch each quarter to see if you want to give all or some of your pot to a charity</p>
		</div>
		<div class="pot-container w-container">
			<div class="w-form">

				{{-- POT FORM --}}

				<form action="/pot" method="POST">
					
					<label class="label" for="user_name_pot">Your name</label>
					<input class="field w-input" id="user_name_pot" maxlength="256" name="user_name" placeholder="Your name" required="required" type="text">

					<label class="label" for="user_email_pot">Your email</label>
					<input class="field w-input" id="user_email_pot" maxlength="256" name="user_email" placeholder="Your email address" required="required" type="text">
		
					<label class="label" for="amount_pot">How much, in total, would you like to donate each month?</label>
					<input class="field w-input" data-name="Amount" id="amount_pot" maxlength="256" name="amount" placeholder="£ Amount" required="required" type="text">

					<div class="confirmation w-checkbox">
						<input class="confirmation w-checkbox-input" data-name="Confirmation 3" id="Confirmation-3" name="Confirmation-3" required="required" type="checkbox">
						<label class="label label-small w-form-label" for="Confirmation-3">I confirm that I would like to donate this amount to this charity every month from my pay, until I decide otherwise.</label>
					</div>
					
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input class="btn-a btn-form w-button" type="submit" value="Submit">
				</form>


				<div class="success w-form-done">
					<p class="label success-label">Thank you! Your submission has been received!</p>
					<a class="btn-a btn-c w-button w--current" href="/enter">Give to another charity</a>
				</div>
				<div class="error-message w-form-fail">
					<p class="bullet error-message">Oops! Something went wrong while submitting the form</p>
				</div>
			</div>
		</div>
	</div>

	<div class="hero"><div class="w-container"><h1>Great, that's half the battle!</h1><h2>Now, let's choose an amount and set up your monthly donation.</h2></div><div class="steps w-container"><div class="w-row"><div class="w-col w-col-4 w-col-small-4 w-col-tiny-4"><a class="current-step step w-inline-block" href="/get-started"><div class="current-number number">1</div></a></div><div class="w-col w-col-4 w-col-small-4 w-col-tiny-4"><div class="current-step step"><div class="current-number number">2</div></div></div><div class="w-col w-col-4 w-col-small-4 w-col-tiny-4"><div class="step"><div class="number">3</div></div></div></div></div></div>

	<div class="bottom-section section-a">
		<div class="engine-will-help w-container">
			<h3><strong data-new-link="true">Engine will help you donate £3 or more every month, deducting it straight from your pay before the tax man takes his cut.&nbsp;</strong><span class="you-can-choose"><br></span></h3>
			<p class="complete">To start the process, complete the form below.<br>If you'd like to give to more than one charity, simply complete the form again.</p>
		</div>
		<div class="w-container">
			<div class="w-row">
				<div class="w-col w-col-6">
					<div class="w-form">

						{{-- FORM --}}

						<form action="/signup" method="POST">
						{{-- <form data-name="Email Form" data-redirect="/thanks" id="email-form" name="email-form"> --}}

							{{-- 
								<input 
									id="search" 
									type="text" 
									v-model="query"
									@keyup="search" 
									placeholder="Type your name..." 
								>

								<p>(( query ))</p>

								<div class="userfields" style="display: xnone">
									<input type="text" name="user_id" placeholder="user_id" value="">
									<input type="text" name="user_firstname" placeholder="user_firstname">
									<input type="text" name="user_lastname" placeholder="user_lastname">
									<input type="text" name="user_email" placeholder="user_email">
								</div>
								
								<input type="text" name="amount" placeholder="amount">
								<input type="text" name="charity_name" placeholder="Charity name...">
								<input type="text" name="charity_number" placeholder="Charity number...">
								<input type="text" name="charity_address" placeholder="Charity address...">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="submit" name="submit" value="Submit">
								
							--}}
							
							<label class="label" for="user_name">Your name</label>
							<input class="field w-input" id="name" maxlength="256" name="user_name" placeholder="Your name" required="required" type="text">

							<label class="label" for="user_email">Your email address</label>
							<input class="field w-input" id="name" maxlength="256" name="user_email" placeholder="Your email address" required="required" type="text">
							
							<label class="label" for="Charity-s-name">Which charity would you like to support?</label>
							<input class="charity-field field w-input" id="Charity-s-name" maxlength="256" name="charity_name" placeholder="Charity's name" required="required" type="text">
							<p class="pot-link">Alternatively you can <a data-ix="new-interaction-2" href="#">accumulate a Charity Pot</a>, to enable you to make ad hoc charity donations of your choice.</p>

							<label class="label" for="Charity-s-address">What's their registered address?</label>
							<input class="field w-input" id="Charity-s-address" maxlength="256" name="charity_address" placeholder="Charity's address" type="text">

							<label class="label" for="Charity-number">and their registered charity number?</label>
							<input class="field w-input" id="Charity-number" maxlength="256" name="charity_number" placeholder="Registered charity number" required="required" type="text">
							
							<label class="label" for="Amount-3">How much would you like to donate each month?</label>
							<input class="field w-input" id="Amount-3" maxlength="256" name="amount" placeholder="£ Amount" required="required" type="text">
							
							<label class="label" for="Amount-3">Would you like your donation to be anonymous?</label>
							<div class="anonymous-radio w-clearfix w-radio">
								<input class="radio-button w-radio-input" id="Yes" name="Anonymous" type="radio" value="Yes">
								<label class="label label-small w-form-label" for="Yes">Yes</label>
							</div>

							<div class="anonymous-radio anonymous-radio-right w-clearfix w-radio">
								<input class="radio-button w-radio-input" id="No" name="Anonymous" type="radio" value="No">

								<label class="label label-small w-form-label" for="No">No</label>
							</div>
						
							<div class="confirmation w-checkbox">
								<input class="confirmation w-checkbox-input" data-name="Confirmation" id="Confirmation" name="Confirmation" required="required" type="checkbox">
								<label class="label label-small w-form-label" for="Confirmation">I agree to the noted monthly deductions being processed via Engine payroll (or drawings if I'm a partner). Deductions will start in December 2016 and will be ongoing.</label>
							</div>
							
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							
							{{-- <input type="hidden" name="user_email" value="hello@dougproctor.co.uk">
							<input type="hidden" name="user_firstname" value="test">
							<input type="hidden" name="user_lastname" value="test"> --}}

							<input class="btn-a btn-form w-button" type="submit" value="Submit">
						</form>



						<div class="success w-form-done">
							<p class="label success-label">Thank you! Your submission has been received!</p>
							<a class="btn-a btn-c w-button w--current" href="/enter">Give to another charity</a>
						</div>

						<div class="error-message w-form-fail">
							<p class="bullet error-message">Oops! Something went wrong while submitting the form</p>
						</div>
					</div>
				</div>
				<div class="w-col w-col-6">
					<div class="bullet-block">
						<div class="bullet">Your first donation will be taken from your pay at the end of December 2016</div>
					</div>
					<div class="bullet-block">
					<div class="bullet">If you have any questions about the scheme or would just like to talk things through with a human, come and see us in the bar on these days:<br><br>Wednesday 2nd November 9am – 12pm<br>Friday 4th November 9am – 12pm<br>Thursday 11th November 9am – 11am<br><br>or speak to your HR representative directly.
					</div>
				</div>
				<div class="bullet-block">
					<div class="bullet">Still not sure who you'd like to give to or how much?<br>Don't worry, <a target="_blank" href="http://www.justgiving.com/giving">Just Giving have a great tool</a> with plenty of information to help you decide.</div>
				</div>
			</div>
		</div>
	</div>
</div>

@include('shared.footer');
	
@endsection

{{-- 
<label class="label" for="Your-name">Your name</label>
<input class="field w-input" data-name="Your name" id="Your-name" maxlength="256" name="Your-name" placeholder="Your name" required="required" type="text">

<label class="label" for="Charity-s-name">Which charity would you like to support?</label>
<input class="charity-field field w-input" data-name="Charity's name" id="Charity-s-name" maxlength="256" name="Charity-s-name" placeholder="Charity's name" required="required" type="text">
<p class="pot-link">Alternatively you can <a data-ix="new-interaction-2" href="#">accumulate a Charity Pot</a>, to enable you to make ad hoc charity donations of your choice.</p>

<label class="label" for="Charity-s-address">What's their registered address?</label>
<input class="field w-input" data-name="Charity's address" id="Charity-s-address" maxlength="256" name="Charity-s-address" placeholder="Charity's address" type="text">

<label class="label" for="Charity-number">and their registered charity number?</label>
<input class="field w-input" data-name="Charity number" id="Charity-number" maxlength="256" name="Charity-number" placeholder="Registered charity number" required="required" type="text">

<label class="label" for="Amount-3">How much would you like to donate each month?</label>
<input class="field w-input" data-name="Amount" id="Amount-3" maxlength="256" name="Amount" placeholder="£ Amount" required="required" type="text">

<label class="label" for="Amount-3">Would you like your donation to be anonymous?</label>
<div class="anonymous-radio w-clearfix w-radio">
	<input class="radio-button w-radio-input" data-name="Anonymous?" id="Yes" name="Anonymous" type="radio" value="Yes">
	<label class="label label-small w-form-label" for="Yes">Yes</label>
</div>

<div class="anonymous-radio anonymous-radio-right w-clearfix w-radio">
	<input class="radio-button w-radio-input" data-name="Anonymous?" id="No" name="Anonymous" type="radio" value="No">

	<label class="label label-small w-form-label" for="No">No</label>
</div>

<div class="confirmation w-checkbox">
	<input class="confirmation w-checkbox-input" data-name="Confirmation" id="Confirmation" name="Confirmation" required="required" type="checkbox">
	<label class="label label-small w-form-label" for="Confirmation">I agree to the noted monthly deductions being processed via Engine payroll (or drawings if I'm a partner). Deductions will start in December 2016 and will be ongoing.</label>
</div>

<input class="btn-a btn-form w-button" data-ix="new-interaction" data-wait="Please wait..." type="submit" value="Submit">
 --}}
