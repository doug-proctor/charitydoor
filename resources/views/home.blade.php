@extends('app')
@section('content')

	<div class="total-hero">
		<div class="centre get-started w-container">
			<h1 class="hero-top">Charity starts with a cup</h1>
			<h2 class="top">Number of you who Give As You Earn:</h2>
			<h2 class="totaliser"><span>{{ $total }}/800</span></h2>
			<h2>Interested in giving to a new charity or increasing the amount you currently give?</h2>
			<a class="btn-a hero-button w-button" data-ix="new-interaction" href="/get-started">New charity</a>
			<a class="btn-a btna2 hero-button w-button" data-ix="new-interaction" href="/increase">Increase amount</a>	
		</div>
	</div>

@endsection
