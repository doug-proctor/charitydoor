@extends('app')
@section('content')

	<div class="hero">
		<div class="w-container">
			<h1>Done!</h1>
			<h2>We've emailed you your free coffee voucher, redeemable at the bar.<br><br>Your first donation will be taken from your pay at the end of December 2016</h2>			
		</div>
		<div class="steps w-container">
			<div class="w-row">
				<div class="w-col w-col-4 w-col-small-4 w-col-tiny-4">
					<a class="current-step step w-inline-block" href="/get-started">
						<div class="current-number number">1</div>
					</a>
				</div>
				<div class="w-col w-col-4 w-col-small-4 w-col-tiny-4">
					<a class="current-step step w-inline-block" href="/enter">
						<div class="current-number number">2</div>
					</a>
				</div>
				<div class="w-col w-col-4 w-col-small-4 w-col-tiny-4">
					<div class="current-step step">
						<div class="current-number number">3</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="bottom-section changed-mind section-a">
			
			<div class="btn-container container w-container">
				<a class="btn-a w-button" data-ix="new-interaction" href="/enter">Give to another charity</a>
			</div>
			
			<div class="btn-container container w-container">
				<a class="btn-a btn-b w-button" data-ix="new-interaction" href="/increase">Increase your donation</a>
			</div>

			<div class="do-you-know grey-bg w-container">
				<p class="centre label">What if I change my mind?</p>
				<p class="cancel">Don't worry, if you want to change the amount you give or the charity you give to, or even if you'd like to cancel, just login to your <a href="http://www.enginebenefits.com">Engine Benefits portal</a> and head to the 'benefits' area using the top navigation.</p>
			</div>
		</div>

	@include('shared.footer')

@endsection
