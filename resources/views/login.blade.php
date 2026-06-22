<x-guestlayout>

    <x-slot:title>
        Login
    </x-slot:title>
  

<div class="card auth-card">
    <div class="card-body p-4 p-md-5">

        <div class="text-center mb-4">
            <div class="logo-circle mb-3">C</div>
            <h2 class="fw-bold">Welcome Back</h2>
            <p class="text-muted mb-0">
                Login to continue messaging
            </p>
        </div>

        <form>

            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input
                    type="email"
                    class="form-control"
                    placeholder="Enter email">
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input
                    type="password"
                    class="form-control"
                    placeholder="Enter password">
            </div>

            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="checkbox">
                    <label class="form-check-label">
                        Remember me
                    </label>
                </div>

                <a href="#" class="text-decoration-none">
                    Forgot Password?
                </a>
            </div>

            <button class="btn btn-primary w-100 py-2">
                Login
            </button>

        </form>

        <div class="text-center mt-4">
            <span class="text-muted">
                Don't have an account?
            </span>
            <a href="{{ route('register') }}" class="text-decoration-none">
                Register
            </a>
        </div>

    </div>
</div>
</x-guestlayout>