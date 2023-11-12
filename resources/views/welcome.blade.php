@include('layouts.mater')
<body class="antialiased">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">

                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/feedback') }}">Feedbacks</a>
                    </li>
                @else
                    @if(!Auth::user()->isAdmin())
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/feedback') }}">Feedbacks</a>
                        </li>
                    @endif
                @endguest


            @if (Route::has('login'))
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/feedback') }}">Dashboard</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Log in</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                            </li>
                        @endif
                    @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <section class="py-5 text-center">
        <h1 class="display-4 mb-4">Welcome to our platform!</h1>
        <p class="lead text-muted mb-5">Share your feedback and engage in discussions with our commenting system.</p>
        <a href="#" class="btn btn-primary btn-lg animate__animated animate__fadeIn">Get Started <i class="fas fa-arrow-right"></i></a>
    </section>

    <section class="bg-light py-5">
        <div class="container">
            <h2 class="display-3 text-center mb-4">Why Choose Us?</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-0 shadow">
                        <div class="card-body text-center">
                            <h3 class="mb-3">User-Friendly</h3>
                            <p class="card-text">Our platform is designed to be easy to use, ensuring a smooth and enjoyable experience for all users.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-0 shadow">
                        <div class="card-body text-center">
                            <h3 class="mb-3">Engaging Discussions</h3>
                            <p class="card-text">Participate in vibrant discussions and connect with other users who share similar interests.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-0 shadow">
                        <div class="card-body text-center">
                            <h3 class="mb-3">Responsive Design</h3>
                            <p class="card-text">Access our platform on any device, whether it's a desktop, tablet, or smartphone.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 text-center">
        <h2 class="display-3 mb-4">Join Us Today!</h2>
        <p class="lead text-muted mb-5">Sign up now to start sharing your thoughts and connecting with a community of like-minded individuals.</p>
        <a href="{{ route('register') }}" class="btn btn-primary btn-lg animate__animated animate__fadeIn">Register Now <i class="fas fa-arrow-right"></i></a>
    </section>
</div>

<footer class="bg-dark text-white py-4">
    <div class="container text-center">
        <p class="mb-0">© 2023 Ahmer Faiz. All rights reserved.</p>
    </div>
</footer>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>
</html>
