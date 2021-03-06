<table width="100%">
	<tr>
		<td>First Name</td>
		<td>
			<input class="form-control @error('first_name') is-invalid @enderror" type="text" name="first_name" value="{{ old('first_name', (isset($reg_data->first_name)) ? $reg_data->first_name : '') }}">
			@error('first_name')<small class="text-danger">{{ $message }}</small>@enderror
		</td>
	</tr>
	<tr>
		<td>Last Name</td>
		<td>
			<input class="form-control @error('last_name') is-invalid @enderror" type="text" name="last_name" value="{{ old('last_name', (isset($reg_data->last_name)) ? $reg_data->last_name : '') }}">
			@error('last_name')<small class="text-danger">{{ $message }}</small>@enderror
		</td>
	</tr>
	<tr>
		<td>Email</td>
		<td>
			<input class="form-control @error('email') is-invalid @enderror" type="text" name="email" value="{{ old('email', (isset($reg_data->email)) ? $reg_data->email : '') }}">
			@error('email')<small class="text-danger">{{ $message }}</small>@enderror
		</td>
	</tr>
	<tr>
		<td>Mobile Number</td>
		<td>
			<input class="form-control @error('mobile_num') is-invalid @enderror" type="text" name="mobile_num" value="{{ old('mobile_num', (isset($reg_data->mobile_num)) ? $reg_data->mobile_num : '') }}">
			@error('mobile_num')<small class="text-danger">{{ $message }}</small>@enderror
		</td>
	</tr>
	<tr><td>&nbsp;</td></tr>

	<tr>
		<td>Location</td>
		<td>
			<input class="form-control @error('location') is-invalid @enderror" type="text" name="location" value="{{ old('location', (isset($reg_data->location)) ? $reg_data->location : '') }}">
			@error('location')<small class="text-danger">{{ $message }}</small>@enderror
		</td>
	</tr>
	<tr>
		<td>Course</td>
		<td>
			<input class="form-control @error('course_num') is-invalid @enderror" type="text" name="course_num" value="{{ old('course_num', (isset($reg_data->course_num)) ? $reg_data->course_num : '') }}">
			@error('course_num')<small class="text-danger">{{ $message }}</small>@enderror
		</td>
	</tr>
	<tr><td>&nbsp;</td></tr>

	<tr>
		<td>Check In Date</td>
		<td>
			<div class="input-group">
				<div class="input-group-prepend">
					<button id="toggle1" class="btn btn-primary" type="button"><i class="fa fa-calendar-day"></i></button>
				</div>
				<input id="picker1" class="form-control @error('check_in_date') is-invalid @enderror" type="text" name="check_in_date" value="{{ old('check_in_date', (isset($reg_data->check_in_date)) ? $reg_data->check_in_date : '') }}" placeholder="MM/DD/YYYY" autocomplete="off">
			</div>
			@error('check_in_date')<small class="text-danger">{{ $message }}</small>@enderror
		</td>
	</tr>
	<tr>
		<td>Check Out Date</td>
		<td>
			<div class="input-group">
				<div class="input-group-prepend">
					<button id="toggle2" class="btn btn-primary" type="button"><i class="fa fa-calendar-day"></i></button>
				</div>
				<input id="picker2" class="form-control @error('check_out_date') is-invalid @enderror" type="text" name="check_out_date" value="{{ old('check_out_date', (isset($reg_data->check_out_date)) ? $reg_data->check_out_date : '') }}" placeholder="MM/DD/YYYY" autocomplete="off">
			</div>
			@error('check_out_date')<small class="text-danger">{{ $message }}</small>@enderror
		</td>
	</tr>
	<tr><td>&nbsp;</td></tr>

	<tr>
		<td>Special Requests</td>
		<td>
			<textarea class="form-control @error('special_req') is-invalid @enderror" name="special_req">{{ old('special_req', (isset($reg_data->special_req)) ? $reg_data->special_req : '') }}</textarea>
			@error('special_req')<small class="text-danger">{{ $message }}</small>@enderror
		</td>
	</tr>
	<tr>
		<td>Handicapped Accessible</td>
		<td>
			<select class="form-control" name="handicapped">
				<option value="0" {{ old("handicapped", (isset($reg_data->handicapped)) ? $reg_data->handicapped : -1) == 'No'  ? 'selected' : '' }}>No</option>
				<option value="1" {{ old("handicapped", (isset($reg_data->handicapped)) ? $reg_data->handicapped : -1) == 'Yes' ? 'selected' : '' }}>Yes</option>
			</select>
		</td>
	</tr>
	<tr><td>&nbsp;</td></tr>
</table>

@include("partials._datepicker_check_in_out")
