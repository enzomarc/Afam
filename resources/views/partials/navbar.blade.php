@section('navbar')
    
{{--

<nav class="navbar is-primary" role="navigation" aria-label="dropdown navigation">
    <div class="container">
        <div class="navbar-brand">
            <div class="navbar-burger burger" data-target="navbarMenu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div id="navbarMenu" class="navbar-menu">

            <div class="navbar-start">
                <a href="/enterprise" class="navbar-item">ENTREPRISE</a>
                <a href="/association" class="navbar-item">ASSOCIATION</a>
                <a href="/artists" class="navbar-item">NOS ARTISTES</a>
            </div>

            <a href="/" class="navbar-item">
                <img src="assets/custom/images/logo.png" alt="logo">
            </a>

            <div class="navbar-end">
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">NOS SERVICES</a>
                
                    <div class="navbar-dropdown is-boxed">
                        <a href="/services/audio" class="navbar-item">Audio-visuel</a>
                        <a href="/services/infography" class="navbar-item">Infographie</a>
                        <a href="/services/photography" class="navbar-item">Photographie</a>
                        <a href="/services/marketing" class="navbar-item">Communication marketing</a>
                    </div>
                </div>
                <a href="/shop" class="navbar-item">BOUTIQUE</a>
                <a href="/contact" class="navbar-item">NOUS CONTACTER</a>
            </div>

        </div>
    </div>
</nav>

--}}

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

            <div class="column is-6" id="menu">

                <ul>
                    <a href="/company"><li>Entreprise</li></a>
                    <a href="/association"><li>Association</li></a>
                    <a href="/artists"><li>Nos Artistes</li></a>
                    <a href="/services"><li>Services</li></a>
                    <a href="/contact"><li>Nous Contacter</li></a>
                </ul>

            </div>

        </div>

    </div>

</div>

@endsection
