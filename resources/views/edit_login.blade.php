@extends('layouts.app')
 
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Edit / Cancel Registration</div>

				<div class="card-body">
					<h3>Registration Login</h3>

					<p>
						Please enter your the email address you used when creating your 
						registration and the registration's confirmation number below. 
						&nbsp; If you do not remember you confirmation number please 
						click  "Forgot Confirmation Number" to have it emailed to you.
					</p>
					<p>
						<strong>Note:</strong> Registrations may not be available to 
						modify if it is within 24 hours of the registration's check in 
						date. 
					</p>

					@if ($errors->any())
						<div class="alert alert-danger mb-4">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					@if(isset($invalid))
						<div class="alert alert-danger mb-4">
							The email and/or confirmation number you entered is not a 
							match for a registration.  If you are unsure of your 
							confirmation number please click the <a href="#">Here</a>
						</div>	
					@endif

					<form method="POST" action="/edit_login">
						@csrf

						<table class="w-100">
							<tr>
								<td width="30%">Registered Email</td>
								<td width="70%">
									<input class="form-control" type="text" name="email" value="{{ old('email') }}">
								</td>
							</tr>
							<tr>
								<td>Confirmation Number</td>
								<td>
									<input class="form-control" type="text" name="confirmation_num" value="{{ old('confirmation_num') }}">								
								</td>
							</tr>
							
							<tr>
								<td class="text-right" colspan="2">
									<a href="#">Forgot Confirmation Number</a>
								</td>
							</tr>

							<tr>
								<td class="text-right" colspan="2">
									<button class="btn btn-primary" type="submit">Access</div>
								</td>
							</tr>
						</table>
					</form>

				</div>					
			</div>
		</div>
	</div>
</div>
@endsection