<style>
	body {
		font-family: helvetica, arial, sans-serif;
	}
	table {
		border-collapse: collapse;
	}
	td {
		border-bottom: 1px solid #D4D4D4;
		padding: 10px;
	}
</style>

<h1>admin view</h1>
<h2>Signups</h2>
<table>
	<tr>
		<td>Date</td>
		<td>Name</td>
		<td>Email</td>
		<td>Amount</td>
		<td>Charity name</td>
		<td>Charity address</td>
		<td>Charity number</td>
		<td>Authorised</td>
		<td>Anonymous</td>
		<td>Increase</td>
		<td>Options</td>
	</tr>
	@foreach($signups as $signup)
		<tr>
			<td>{{ $signup->created_at }}</td>
			<td>{{ $signup->user_name }}</td>
			<td>{{ $signup->user_email }}</td>
			<td>{{ $signup->amount }}</td>
			<td>{{ $signup->charity_name }}</td>
			<td>{{ $signup->charity_address }}</td>
			<td>{{ $signup->charity_number }}</td>
			<td>{{ $signup->authorised }}</td>
			<td>{{ $signup->anonymous }}</td>
			<td>{{ $signup->increase }}</td>
			<td><a href="/admin/4f79462e77d50deed9f36f367e258632/signup/view/{{ $signup->authorisation_code }}">View/print</a></td>
		</tr>
	@endforeach
</table>


<h2>Pots</h2>
<table>
	<tr>
		<td>Name</td>
		<td>Email</td>
		<td>Amount</td>
		<td>Charity name</td>
		<td>Charity address</td>
		<td>Charity number</td>
		<td>Authorised</td>
		<td>Anonymous</td>
		<td>Increase</td>
	</tr>
	@foreach($pots as $pot)
		<tr>
			<td>{{ $pot->user_name }}</td>
			<td>{{ $pot->user_email }}</td>
			<td>{{ $pot->amount }}</td>
			<td>{{ $pot->charity_name }}</td>
			<td>{{ $pot->charity_address }}</td>
			<td>{{ $pot->charity_number }}</td>
			<td>{{ $pot->authorised }}</td>
			<td>{{ $pot->anonymous }}</td>
			<td>{{ $pot->increase }}</td>
		</tr>
	@endforeach
</table>
