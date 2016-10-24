@extends('app')
@section('content')
	<h1>Enter</h1>
	<form action="/signup/" method="POST">
		{{-- user --}}

		<div class="userfields">
			<input type="text" name="user_id" placeholder="user_id">
			<input type="text" name="user_firstname" placeholder="user_firstname">
			<input type="text" name="user_lastname" placeholder="user_lastname">
			<input type="text" name="user_email" placeholder="user_email">
		</div>
		
		{{-- Charity --}}
		<input type="text" name="amount" placeholder="amount">
		<input type="text" name="charity_name" placeholder="Charity name...">
		<input type="text" name="charity_number" placeholder="Charity number...">
		<input type="text" name="charity_address" placeholder="Charity address...">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="submit" name="submit" value="Submit">
	</form>
@endsection
