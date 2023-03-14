<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Muhamad Nauval Azhar">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<title>COLAIMO</title>
	<link rel="icon" type="image/png" href="colaimo.png "/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	<div class="container h-100">
		<div class="row justify-content-sm-center h-100">
			<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
				<div class="text-center my-5">
					<img src="colaimo.png" alt="logo" width="200">
				</div>
				<div class="card shadow-lg">
					<div class="card-body p-5">
						<h1 class="fs-4 card-title fw-bold mb-4">Se connecter</h1>
						<form method="POST" class="needs-validation" action="{{ route('login') }}">
                            @csrf
                            <!-- Email -->
							<div class="mb-3">
                                <label for="email" class="mb-2 text-muted">{{ __('Email') }}</label>
								<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
                            <!-- Mot de passe -->
							<div class="mb-3">
								<div class="mb-2 w-100">
									<label class="text-muted" for="password">{{ __('Mot de passe') }}</label>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
								</div>
								<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
							</div>
							<div class="d-flex justify-content-end">
								<button type="submit" class="btn btn-success ms-auto">
                                {{ __('Se connecter') }}
								</button><br>
                                <!-- @if (Route::has('password.request'))
                                    <a class="btn btn-link link-success" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif -->
							</div>
						</form>
					</div>
				</div>
                <div class="text-center mt-5 text-muted">
						Copyright &copy; 2023 &mdash; COLAIMO
					</div>
			</div>
		</div>
	</div>
</body>
</html>