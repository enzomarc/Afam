@extends('layouts.default', ['title' => 'Accueil'])

@section('header-content')
    
<div class="home-header">

    <h1 class="title is-3" style="font-size: 70px;">A Fast-Growing Pharma Leader</h1>
    <p>Afam is a global, privately owned pharmaceutical company</p>

</div>

@endsection

@section('content')
    
<section class="hero home-about type1">

    <div class="hero-body">

        <div class="columns">
        	
			<div class="column is-7" id="side1">
				
				<div class="content">
					
					<span>01 <hr style="background-color: #FFCC00; margin: 0.2rem 1rem; display: inline-block;"> ENTREPRISE</span>

					<h1 class="title is-2">A major player driving change</h1>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quisquam est, doloribus officia minus ipsam omnis rem. Lorem ipsum dolor sit amet.</p>

					<div class="goto">
						<a href="company"><i class="now-ui-icons arrows-1_minimal-right"></i></a>
					</div>

				</div>

			</div>

			<div class="column is-5" id="side2">
				<img src="assets/custom/images/background/side.jpg" alt="img">
			</div>

        </div>

    </div>

</section>

<section class="hero home-association type2">

    <div class="hero-body">

        <div class="columns">

        	<div class="column is-5" id="side2">
				<img src="assets/custom/images/background/side2.jpg" alt="img">
			</div>
        	
			<div class="column is-8" id="side1">
				
				<div class="content">
					
					<span>02 <hr style="background-color: #FFCC00; margin: 0.2rem 1rem; display: inline-block;"> ASSOCIATION</span>

					<h1 class="title is-2">A major player driving change</h1>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quisquam est, doloribus officia minus ipsam omnis rem. Lorem ipsum dolor sit amet.</p>

					<div class="goto">
						<a href="company"><span style="display: none;">Let's connect&nbsp; &nbsp;</span><i class="now-ui-icons arrows-1_minimal-right"></i></a>
					</div>

				</div>

			</div>

        </div>

    </div>

</section>

<section class="hero home-artists type1">

    <div class="hero-body">

        <div class="columns">
        	
			<div class="column is-7" id="side1">
				
				<div class="content">
					
					<span>03 <hr style="background-color: #FFCC00; margin: 0.2rem 1rem; display: inline-block;"> ARTISTES</span>

					<h1 class="title is-2">A major player driving change</h1>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quisquam est, doloribus officia minus ipsam omnis rem. Lorem ipsum dolor sit amet.</p>

					<div class="goto">
						<a href="company"><i class="now-ui-icons arrows-1_minimal-right"></i></a>
					</div>

				</div>

			</div>

			<div class="column is-5" id="side2">
				<img src="assets/custom/images/background/side3.jpg" alt="img">
			</div>

        </div>

    </div>

</section>

<section class="hero home-services">

    <div class="hero-body">

        <div class="top-section">
        	
			<span>04 <hr style="background-color: #FFCC00; margin: 0.2rem 1rem; display: inline-block; width: 4%;"> SERVICES</span>

	        <h1 class="title is-1">Latest initiatives, programs and news</h1>

	        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, quod temporibus pariatur modi! Quis quibusdam. Sed, quod Quis quibusdam.</p>

        </div>

        <div class="body-section">
        	
			<div class="columns">
				
				<div class="column is-4">
					<img src="assets/custom/images/background/side3.jpg" alt="service">
					<span>MARKETING <hr style="background-color: #FFCC00; margin: 0.1rem 0.5rem; display: inline-block; width: 13%;"></span>
					<a href="#"><h1 class="title is-4">Communication Marketing</h1></a>
				</div>

				<div class="column is-4">
					<div class="goto">
						<a href="company"><i class="now-ui-icons arrows-1_minimal-right"></i></a>
					</div>
					<img src="assets/custom/images/background/side3.jpg" alt="service">
					<span>AUDIO-VISUEL <hr style="background-color: #FFCC00; margin: 0.1rem 0.5rem; display: inline-block; width: 13%;"></span>
					<a href="#"><h1 class="title is-4">Production audio-visuelle</h1></a>
				</div>

				<div class="column is-4">
					<img src="assets/custom/images/background/side3.jpg" alt="service">
					<span>PRESTATION <hr style="background-color: #FFCC00; margin: 0.1rem 0.5rem; display: inline-block; width: 13%;"></span>
					<a href="#"><h1 class="title is-4">Prestation de services</h1></a>
				</div>

			</div>

        </div>

    </div>

</section>

<section class="hero footer">
	
	<div class="footer-content">
		
		<div class="columns">
			
			<div class="column is-2"></div>

			<div class="column is-10" style="display: flex;">

				<div class="li" id="li1">
					<ul>
						<a href="#"><li>Company</li></a>
						<a href="#"><li>Products</li></a>
						<a href="#"><li>Partnerships</li></a>
						<a href="#"><li>Worldwide</li></a>
						<a href="#"><li>Citizenship</li></a>
					</ul>
				</div>

				<div class="li" id="li2">
					<ul>
						<a href="#"><li>Join Us</li></a>
						<a href="#"><li>Contact US</li></a>
						<a href="#"><li>Suppliers</li></a>
						<a href="#"><li>Meet Management</li></a>
						<a href="#"><li>History</li></a>
					</ul>
				</div>

				<div class="li" id="li3">
					<img src="assets/custom/images/logo.png" alt="logo">
					<p>Afam Company <br>Yaoundé, Sonel TKC <br>contact@afamcompany.com</p>

					<div class="socials" style="display: flex;">
						<a href="https://www.linkedin.com/afamcompany"><img src="assets/custom/images/socials/linkedin.png" alt="social-in"></a>
		                <a href="https://www.facebook.com/afamcompany"><img src="assets/custom/images/socials/facebook.png" alt="social-fb"></a>
		                <a href="https://www.twitter.com/afamcompany"><img src="assets/custom/images/socials/twitter.png" alt="social-tw"></a>
		                <a href="https://www.instagram.com/afamcompany"><img src="assets/custom/images/socials/instagram.png" alt="social-ig"></a>
					</div>

				</div>

			</div>

		</div>

		<hr style="background-color: #333; height: 1px; margin: 5% 13% 0 13%; display: inline-block; width: 70%;">

		<div class="columns" id="bottom">
			
			<div class="column is-6" id="column1">
				<a href="#">Terms of use</a>
				<a href="#">Privacy Policy</a>
			</div>

			<div class="column is-4" id="column2">
				<span>&copy; 2018 Afam Company. All Rights Reserved</span>
			</div>
		
		</div>

	</div>

</section>

@endsection
