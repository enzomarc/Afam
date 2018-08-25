@section('navbar')

<div class="navbar">

    <div class="container">

        <div class="header">
            <div class="logo"><a href="/"><img src="assets/custom/images/logo.png" alt="logo"></a></div>
            <div class="shop">
                <a href="/shop"><i class="now-ui-icons shopping_cart-simple"></i>Boutique</a>
            </div>
        </div>

        <div class="columns">

            <div class="column is-6" id="contact">
                <div class="content">
                    <span>Cameroon</span>
                    <p>Yaoundé, Sonel TKC <br>
                    contact@afamcompany.com</p>
                </div>
            </div>

            <div class="column is-5" id="menu">

                <ul>
                    <a href="/company"><li>Entreprise</li></a>
                    <a href="/association"><li>Association</li></a>
                    <a href="/artists"><li>Nos Artistes</li></a>
                    <a href="/services"><li>Services</li></a>
                    <a href="/contact"><li>Nous Contacter</li></a>
                </ul>

            </div>

            <div class="column" id="socials">

                <a href="https://www.linkedin.com/afamcompany"><img src="assets/custom/images/socials/linkedin.png" alt="social-in"></a>
                <a href="https://www.facebook.com/afamcompany"><img src="assets/custom/images/socials/facebook.png" alt="social-fb"></a>
                <a href="https://www.twitter.com/afamcompany"><img src="assets/custom/images/socials/twitter.png" alt="social-tw"></a>
                <a href="https://www.instagram.com/afamcompany"><img src="assets/custom/images/socials/instagram.png" alt="social-ig"></a>

            </div>

        </div>

        <div class="h-footer">
            <a class="hide-menu-btn" href="#"><i class="now-ui-icons arrows-1_minimal-up"></i></a>
        </div>

    </div>

</div>

<div class="xheader">
    <a href="/"><img src="assets/custom/images/logo.png" alt="logo"></a>
</div>

<div class="navbar-btn">
    <a class="menu-btn" href="#"><i class="now-ui-icons arrows-1_minimal-down"></i></a>
</div>

@endsection
