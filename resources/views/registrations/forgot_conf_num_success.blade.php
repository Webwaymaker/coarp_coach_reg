@extends('layouts.app')
 
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Reservations</div>

				<div class="card-body">
					<h3>Success</h3>

					<p>
						An email has been sent to {{ $email }} with all the confirmation
						numbers associated to this address.
					</p>

					<div class="text-right">
						<a href="/registration_login">Return to My Reservations</a>
					</div>
				</div>					
			</div>
		</div>
	</div>
</div>
@endsection