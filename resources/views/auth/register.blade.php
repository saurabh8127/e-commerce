@extends('layouts.auth')

@section('content')

	<div class="card w-25x flex-grow-1 flex-sm-grow-0 m-sm-auto">
		<div class="card-body p-sm-5 m-sm-3 flex-grow-0">
			<form method="POST" action="{{route('addUser')}}" enctype="multipart/form-data">
				@csrf
				<h1 class="mb-0 fs-3">Sign Up</h1>
				<div class="fs-exact-14 text-muted mt-2 pt-1 mb-5 pb-2">Fill out the form to create a new account.</div>
				<div class="mb-4">
					<label class="form-label">Full name</label>
					<input type="text" class="form-control form-control-lg" name="name" id="name"/>
				</div>
				<div class="mb-4">
					<label class="form-label">Email Address</label>
					<input type="email" class="form-control form-control-lg" name="email" id="email" autocomplete="off" />
				</div>
				<div class="mb-4">
					<label class="form-label">Password</label>
					<input type="password" class="form-control form-control-lg" name="password" id="password" autocomplete="off"/>
				</div>
				<div class="mb-4">
					<select class="form-select" id="role_id" name="role_id">
						<option selected="">Select Role</option>
						@foreach($roles as $role)
							<option value="{{$role->id}}">{{$role->role_name}}</option>
						@endforeach
						
					</select>
				</div>
				<div class="mb-4 py-2">
					<label class="form-check mb-0">
						<input type="checkbox" class="form-check-input" />
						<span class="form-check-label">I agree to the <a href="page-terms.html">terms and conditions</a>.</span>
					</label>
				</div>
				<div>
					<button type="submit" class="btn btn-primary btn-lg w-100">Sign Up</button>
				</div>
			</form>
		</div>
		<div class="sa-divider sa-divider--has-text">
			<div class="sa-divider__text">Or continue with</div>
		</div>
		<div class="card-body p-sm-5 m-sm-3 flex-grow-0">
			<div class="d-flex flex-wrap me-n3 mt-n3"><button type="button"
					class="btn btn-secondary flex-grow-1 me-3 mt-3">Google</button><button type="button"
					class="btn btn-secondary flex-grow-1 me-3 mt-3">Facebook</button><button type="button"
					class="btn btn-secondary flex-grow-1 me-3 mt-3">Twitter</button></div>
			<div class="form-group mb-0 mt-4 pt-2 text-center text-muted">Already have an account? <a
					href="auth-sign-in.html">Sign in</a></div>
		</div>
	</div>

@endsection
