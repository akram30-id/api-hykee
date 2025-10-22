<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} - Hykee Community Center</title>
    <link href={{ asset('bootstrap-5/bootstrap.min.css') }} rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href={{ asset('css/style.css') }}>
</head>

<body style="background-color: #3a3a3d">


    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-4">
                <div class="card p-3">
                    <div class="card-body">

                        <h3 class="text-center">Sign In</h3>
                        <p class="text-center">We need to verify who you are.</p>

                        <form id="signin-form" class="mt-3">

                            {{-- EMAIL INPUT --}}
                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email">
                            </div>


                            {{-- PASSWORD INPUT --}}
                            <div class="mb-3">

                                <label for="password" class="form-label text-white">Password</label>

                                <div class="position-relative">
                                    <input type="password" class="form-control pe-5" id="password">

                                    <!-- Eye icon -->
                                    <i class="bi bi-eye" id="togglePassword"
                                        style="
                                        position: absolute;
                                        right: 15px;
                                        top: 50%;
                                        transform: translateY(-50%);
                                        cursor: pointer;
                                        color: white;
                                    ">
                                    </i>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="checkDefault">
                                        <p>Remember me</p>
                                    </div>

                                    <a href="/web/reset-password" class="text-white">Forget password?</a>

                                </div>
                            </div>

                            <div class="mt-4 mb-3">
                                <div class="d-grid d-block">
                                    <button class="btn btn-hykee-primary rounded-pill" type="submit">Sign In</button>
                                </div>
                            </div>

                            <div class="d-flex justify-content-center">
                                <p style="margin-right: 5px;">Don't have an account?</p>
                                <a href="/web/signup" class="text-white fw-bold">Sign Up</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
        integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous">
    </script>

    <script>
        document.getElementById('togglePassword').addEventListener('click', function() {
            const password = document.getElementById('password');
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);

            // toggle icon
            this.classList.toggle('bi-eye');
            this.classList.toggle('bi-eye-slash');
        });
    </script>

</body>

</html>
