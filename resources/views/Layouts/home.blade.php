<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Dashboard</title>
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="{{ asset("/css/stylesdash.css") }}">
    <!-- Link to JS file -->
    <script src="{{ asset("/js/dash.js") }}"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
@include('Layouts.nav')

<div>{{$slot}}</div>



<footer class="py-4">
    <div class="container">
        <div class="row py-4">
            <div class="col-12 col-lg-3 mb-4 mb-lg-0">
                <p class="small mb-1">Mountain View</p>
                <p class="small mb-1">California, United States</p>
                <p class="small mb-1">Tel: +1 123-456-7890</p>
                <p class="small mb-0"><a class="text-dark text-decoration-none" href="">hello@yourdomain.com</a></p>
            </div>
            <div class="col-6 col-lg-2 mb-4 mb-lg-0">
                <h4>Quick Links</h4>
                <ul class="list-unstyled">
                    <li class="mb-1">
                        <a class="text-dark text-decoration-none" href="">Home</a>
                    </li>
                    <li class="mb-1">
                        <a class="text-dark text-decoration-none" href="">About</a>
                    </li>
                    <li class="mb-1">
                        <a class="text-dark text-decoration-none" href="">Shop</a>
                    </li>
                    <li class="mb-1">
                        <a class="text-dark text-decoration-none" href="">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="col-6 col-lg-2 mb-4 mb-lg-0">
                <h4>Useful Info</h4>
                <ul class="list-unstyled">
                    <li class="mb-1">
                        <a class="text-dark text-decoration-none" href="">How it Works</a>
                    </li>
                    <li class="mb-1">
                        <a class="text-dark text-decoration-none" href="">FAQ</a>
                    </li>
                    <li class="mb-0">
                        <a class="text-dark text-decoration-none" href="">Contacts</a>
                    </li>
                </ul>
            </div>
            <div class="col-6 col-lg-2 mb-4 mb-lg-0">
                <h4>My Account</h4>
                <ul class="list-unstyled">
                    <li class="mb-1">
                        <a class="text-dark text-decoration-none" href="">Get Help</a>
                    </li>
                    <li class="mb-1">
                        <a class="text-dark text-decoration-none" href="">My Orders</a>
                    </li>
                    <li class="mb-1">
                        <a class="text-dark text-decoration-none" href="">Track Order</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-lg-3">
                <div class="border-top pt-4 d-lg-none"></div>
                <h4>Subscribe</h4>
                <div class="input-group mb-2">
                    <input class="form-control bg-light" placeholder="Email address" type="text">
                    <button class="btn btn-primary" type="button">Subscribe</button>
                </div>
                <p class="small text-muted mb-0">Sign up for our newsletter to get the latest updates on features and releases.</p>
            </div>
        </div>
        <div class="d-lg-flex align-item-ceneter justify-content-between border-top py-3 py-lg-2 mt-lg-5">
            <div class="small mb-2 mb-lg-0 text-muted">
                © 2023 FreeFrontend.dev. All rights reserved.
            </div>
            <div class="small">
                <a class="d-block d-lg-inline text-muted ms-lg-3 mb-2 mb-lg-0" href="">Privacy Policy</a>
                <a class="d-block d-lg-inline text-muted ms-lg-3 mb-2 mb-lg-0" href="">Terms of Service</a>
            </div>
            <div class="d-none d-lg-block ms-auto">
                <a class="me-2" href=""><svg class="bi bi-pinterest text-primary" fill="currentColor" height="16" viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0z"></path>
                </svg></a>
                <a class="me-2" href=""><svg class="bi bi-twitter text-primary" fill="currentColor" height="16" viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                </svg></a>
                <a class="me-2" href=""><svg class="bi bi-facebook text-primary" fill="currentColor" height="16" viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                </svg></a>
            </div>
            <div class="d-lg-none">
                <div class="input-group mb-2">
                    <input class="form-control bg-light" placeholder="Email address" type="text">
                    <button class="btn btn-primary" type="button">Subscribe</button>
                </div>
                <p class="small text-muted mb-0">Sign up for our newsletter to get the latest updates on features and releases.</p>
            </div>
            <div class="small">
                <a class="d-block d-lg-inline text-muted ms-lg-3 mb-2 mb-lg-0" href="">Privacy Policy</a>
                <a class="d-block d-lg-inline text-muted ms-lg-3 mb-2 mb-lg-0" href="">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
