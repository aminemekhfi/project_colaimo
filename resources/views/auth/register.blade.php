<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Muhamad Nauval Azhar">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<title>Bootstrap 5 Login Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
				<div class="text-center my-5">
					<img src="colaimo.png" alt="logo" width="150">
				</div>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">{{ __('Ajouter un utilisateur') }}</h1>
							<form method="POST" class="needs-validation" novalidate="" autocomplete="off">
                                @csrf
								<div class="mb-3">
                                    <label for="name" class="col-md-4 col-form-label mb-2 text-muted">{{ __('Nom') }}</label>
									<input id="name" type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
								</div>

								<div class="mb-3">
                                    <label for="email" class="col-md-4 col-form-label mb-2 text-muted">{{ __('Email') }}</label>
									<input id="email" type="text" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
								</div>
								<div class="mb-3">
                                    <label for="password" class="col-md-4 col-form-label mb-2 text-muted">{{ __('Mot de passe') }}</label>
									<input id="password" type="text" class="form-control  @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
								</div>
                                <div class="mb-3">
                                    <label for="password-confirm" class="col-md-4 col-form-label mb-2 text-muted">{{ __('Confirmer mot de passe') }}</label>
									<input id="password-confirm" type="text" class="form-control  @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password" autofocus>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
								</div>
								<div class="align-items-center d-flex">
									<button type="submit" class="btn btn-success ms-auto">
										Ajouter	
									</button>
								</div>
								<div class="mb-3">
                                    <label for="type" class="col-md-4 col-form-label mb-2 text-muted">{{ __('Type') }}</label>
									<input type="text" class="form-control  @error('type') is-invalid @enderror" name="type" value="{{ old('type') }}" required autocomplete="password" autofocus>
                                    @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
								</div>
							</form>
						</div>
					</div>
					<div class="text-center mt-5 text-muted">
						Copyright &copy; 2023 &mdash; COLAIMO
					</div><br>
				</div>
			</div>
		</div>
	</section>
</body>
</html>