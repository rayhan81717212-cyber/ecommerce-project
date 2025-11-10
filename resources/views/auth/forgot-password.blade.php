<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-sm">
                <div class="card-body">

                    <!-- Title -->
                    <h4 class="card-title mb-3">Forgot your password?</h4>

                    <!-- Instruction Text -->
                    <p class="mb-4 text-muted">
                        No problem. Just enter your email address and we will send you a password reset link.
                    </p>

                    <!-- Session Status (example alert) -->
                    <div id="session-status" class="mb-3">
                        <!-- Example: -->
                        <!-- <div class="alert alert-success">Password reset link sent!</div> -->
                    </div>

                    <!-- Form -->
                    <form method="POST" action="/password/email">
                        <!-- CSRF Token for Laravel -->
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <!-- Email Address -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input 
                                type="email" 
                                class="form-control @error('email') is-invalid @enderror" 
                                id="email" 
                                name="email" 
                                value="{{ old('email') }}" 
                                required 
                                autofocus
                            >
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="/login" class="btn btn-primary btn-link">Back to Login</a>
                            <button type="submit" class="btn btn-warning">
                                Send Password Reset Link
                            </button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

<!-- Bootstrap 5 JS Bundle CDN (optional for components) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
