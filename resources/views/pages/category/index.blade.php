@extends("layouts.app")

@section("app")
<div id="top" class="sa-app__body">
	<div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
		<div class="container container--max--xl">
			<div class="py-5">
				<div class="row g-4 align-items-center">
					<div class="col">
						<h1 class="h3 m-0">Edit Category</h1>
					</div>
				</div>
			</div>
			<div class="sa-entity-layout">
				<form method="POST" action="{{route('addCategory')}}" enctype="multipart/form-data">
					@csrf
					<div class="sa-entity-layout__body">
						<div class="sa-entity-layout__main">
							<div class="card">
								<div class="card-body p-5">
									<div class="mb-4">
										<label for="form-category/name" class="form-label">Name</label>
										<input type="text" class="form-control" id="name" value="" name="name" />
									</div>
									
									<div class="mb-4">
										<label for="form-category/description" class="form-label">Description</label>
										<textarea id="description" name="description" class="form-control" rows="8"></textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="sa-entity-layout__sidebar">
							<div class="card w-100">
								<div class="card-body p-5">
									<div class="col-auto">
										<button type="submit" class="btn btn-primary btn-lg">Submit</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
