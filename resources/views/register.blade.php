<x-guestlayout>

     <x-slot:title>
        Register
    </x-slot:title>

    <div class="card auth-card">
    <div class="card-body p-4 p-md-5">

        <div class="text-center mb-4">
            <div class="logo-circle mb-3">C</div>
            <h2 class="fw-bold">Create Account</h2>
            <p class="text-muted mb-0">
                Join the messaging platform
            </p>
        </div>

        <form action="POST" method="{{route('register') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input
                    type="text"
                    class="form-control"
                    name="name"
                    placeholder="Enter full name">
            </div>

            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input
                    type="email"
                    class="form-control"
                    name="email"
                    placeholder="Enter email">
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input
                    type="password"
                    class="form-control"
                    name="password"
                    placeholder="Create password">
            </div>

            <div class="mb-4">
                <label class="form-label">Confirm Password</label>
                <input
                    type="password"
                    class="form-control"
                    name="confirm_password"
                    placeholder="Confirm password">
            </div>

            <button class="btn btn-primary w-100 py-2">
                Create Account
            </button>

        </form>

        <div class="text-center mt-4">
            <span class="text-muted">
                Already have an account?
            </span>
            <a href="{{ route('login') }}" class="text-decoration-none">
                Login
            </a>
        </div>

    </div>
</div>
</x-guestlayout>