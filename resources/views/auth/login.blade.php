@extends('layout.auth')
@section('title', 'Login')
@section('content')

    <div class="container-xl px-4">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <!-- Basic login form-->
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header justify-content-center">
                        <h3 class="fw-light my-4">Login</h3>
                    </div>
                    <div class="card-body">
                        <!-- Login form-->
                        <form>
                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                <input class="form-control" id="inputEmailAddress" type="email"
                                    placeholder="Enter email address" />
                            </div>

                            <!-- Form Group (password)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="password">Password</label>
                                <div class="input-group">
                                    <input class="form-control" id="password" name="password" type="password"
                                        placeholder="Enter password" required />
                                    <button class="btn btn-outline-toggle" type="button" onclick="togglePassword()">
                                        <i class="fa-solid fa-eye" id="toggleIcon"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Form Group (remember password checkbox)-->
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" id="rememberPasswordCheck" type="checkbox"
                                        value="" />
                                    <label class="form-check-label" for="rememberPasswordCheck">Remember password</label>
                                </div>
                            </div>
                            <!-- Form Group (login box)-->
                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                <a class="small" href="auth-password-basic.html">Forgot Password?</a>
                                <a class="btn btn-primary" href="dashboard-1.html">Login</a>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <div class="small"><a href="{{ url('/register') }}">Need an account? Sign up!</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.getElementById('toggleIcon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        }
    </script>

@endsection
