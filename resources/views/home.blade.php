@extends('app')

@section('body_classes')
body body-hero
@endsection

@section('content')	
	<div class="total-hero"><div class="centre get-started w-container"><h1 class="herotop">Charity starts with a cup</h1><h2 class="top">Let's beat 97! <br>Number of sign-ups so far:</h2><h2 class="totaliser"><span>{{ $total }}/97</span></h2><h2 class="heroh2">Is this your first time signing up to Give As You Earn or would you like to increase the amount you currently give?</h2><a class="btn-a hero-button w-button" data-ix="new-interaction" href="/get-started" style="transition: transform 500ms; transform: translateX(0px) translateY(0px);">First time</a><a class="btn-a btna2 hero-button w-button" data-ix="new-interaction" href="/increase" style="transition: transform 500ms; transform: translateX(0px) translateY(0px);">Increase amount</a></div><div class="olb w-container"><img src="http://uploads.webflow.com/56b22c8c02de80c46a44196b/58135fd17c26cc8c35533eb1_ourlittlebitlogo.png" width="41" data-pin-nopin="true"></div></div>
@endsection
