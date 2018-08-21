@include('../partials.navbar')

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/custom/css/styles.css">
    <link rel="stylesheet" href="assets/lib/css/bulma.min.css">
    <title>Afam Company</title>
</head>
<body>

    <section class="hero">

        <div class="shadow"></div>

        <div class="hero-head">
    
            @yield('navbar')

        </div>

        <div class="hero-body">

            <div class="container">
                
                <div class="content">
                    <h1 style="text-align: center">Afam Enterprise</h1>
                </div>

            </div>

        </div>

    </section>

    <script src="assets/lib/js/jquery.js"></script>
    <script src="assets/custom/js/main.js"></script>

</body>
</html>
