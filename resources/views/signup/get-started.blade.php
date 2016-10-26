@extends('app')
@section('content')

	<div class="hero" id="hero"><div class="w-container"><h1>So, you'd like to give to charity?</h1><h2>Give us the details of your chosen charity and how much you'd like to give per month and we'll do the rest. We can even help you choose a cause if you're not sure where to start.<br><br>Scroll down and follow the steps.</h2></div><div class="steps w-container"><div class="w-row"><div class="w-col w-col-4 w-col-small-4 w-col-tiny-4"><div class="current-step step"><div class="current-number number">1</div></div></div><div class="w-col w-col-4 w-col-small-4 w-col-tiny-4"><div class="step"><div class="number">2</div></div></div><div class="w-col w-col-4 w-col-small-4 w-col-tiny-4"><div class="step"><div class="number">3</div></div></div></div></div></div>

	<div class="bottom-section section-a"><div class="w-container"><h3 class="do-you-know"><strong data-new-link="true">First, do you know which charity you want to support? </strong><br><span class="you-can-choose">You can choose any, as long as they have a registered charity number.</span></h3></div><div class="btn-container container w-container"><a class="btn-a w-button" data-ix="new-interaction" href="/enter">Yes, let's do it!</a></div><div class="btn-container container w-container"><a class="btn-a btn-b w-button" data-ix="new-interaction" href="/unsure">I'm not sure, I'd like some help choosing</a></div></div>

	@include('shared.footer');

@endsection
