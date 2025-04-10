<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>MobiGest</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;400;600;700&display=swap" rel="stylesheet">
        
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-ebook-landing.css" rel="stylesheet">
<!--

TemplateMo 588 ebook landing

https://templatemo.com/tm-588-ebook-landing

-->
    </head>
    
    <body>

        <main>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand text-black" href="/">
                        <i class="navbar-brand-icon bi-book me-2"></i>
                        <span>MobiGest</span>
                    </a>

                    {{-- <div class="d-lg-none ms-auto me-3">
                        <a href="#" class="btn custom-btn custom-border-btn btn-naira btn-inverted">
                            <i class="btn-icon bi-cloud-download"></i>
                            <span>Download</span>
                        </a>
                    </div> --}}
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-auto me-lg-4 ">
                            <li class="nav-item">
                                <a class="nav-link click-scroll fw-bolder" style="font-size: 15px;" href="/">ACCUEIL
                                </a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" style="font-size: 15px;" href="/#section_2">A PROPOS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link click-scroll" style="font-size: 15px;" href="/#section_3">FONCTIONALITES</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" style="font-size: 15px;" href="/contact">CONTACTS</a>
                            </li>
                        </ul>
    
                        <div class="">
                            <a href="/filtres" class="btn custom-btn custom-border-btn " style="font-size: 15px;">
                                {{-- <i class="btn-icon bi-cloud-download"></i> --}}
                                <span>Se connecter </span><!-- duplicated above one for mobile -->
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
            

        



            <section class="contact-section section-padding bg-black" >
                <div class="container">
                    <div class="row">

                        <div class="col-lg-5 col-12 mx-auto">
                            <form class="custom-form ebook-download-form bg-white shadow" action="#" method="post" role="form">
                                <div class="text-center mb-5">
                                    <h2 class="mb-1">Besoin d'informations</h2>
                                </div>

                                <div class="ebook-download-form-body">
                                    <div class="input-group mb-4">
                                        <input type="text" name="ebook-form-name" id="ebook-form-name" class="form-control" aria-label="ebook-form-name" aria-describedby="basic-addon1" placeholder="Votre nom" required>

                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="custom-form-icon bi-person"></i>
                                        </span>
                                    </div>

                                    <div class="input-group mb-4">
                                        <input type="email" name="ebook-email" id="ebook-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="ton@company.com" aria-label="ebook-form-email" aria-describedby="basic-addon2" required="">

                                        <span class="input-group-text" id="basic-addon2">
                                            <i class="custom-form-icon bi-envelope"></i>
                                        </span>
                                    </div>
                                    <div class="input-group mb-4">
                                        <textarea name="ebook-text" id="ebook-text" class="form-control" placeholder="votre message" aria-label="ebook-form-email" aria-describedby="basic-addon2" required="" style="height: 300px;"></textarea>
                                    
                                    
                                    </div>
                                    
                                    <div class="col-lg-8 col-md-10 col-8 mx-auto">
                                        <button type="submit" class="form-control">Envoyer</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-6 col-12">
                            {{-- <h6 class="mt-5">Contactez-nous</h6> --}}

                            <h2 class="mb-4 mt-5 text-white">Contactez-nous</h2>

                            <p class="mb-3">
                                <i class="bi-geo-alt me-2"></i>
                                Abomey-Calavi/Togoudo,Bénin
                            </p>

                            <p class="mb-2">
                                <a href="tel: 010-020-0340" class="contact-link">
                                    +229 01 97 82 58 20 / +229 01 94 86 37 86
                                </a>
                            </p>

                            <p>
                                <a href="mailto:info@company.com" class="contact-link">
                                    info@mobigest.com / info@digitalis-bénin.com
                                </a>
                            </p>

                            <h6 class="site-footer-title mt-5 mb-3">Nos réseaux sociaux</h6>

                            <ul class="social-icon mb-4">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-instagram"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-twitter"></a>
                                </li>
                                
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-facebook"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-whatsapp"></a>
                                </li>
                            </ul>

                            {{-- <p class="copyright-text">Copyright © 2048 ebook company
                            <br><br><a rel="nofollow" href="https://templatemo.com" target="_blank">designed by templatemo</a></p> --}}
                        </div>

                    </div>
                </div>
            </section>
            <!-- Remove the container if you want to extend the Footer to full width. -->


    <footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class=" btn-floating m-1 mt-5" href="#!" role="button"
          ><i class="social-icon-link bi-instagram"></i
        ></a>
  
        <!-- Twitter -->
        <a class=" btn-floating m-1" href="#!" role="button"
          ><i class="social-icon-link bi-twitter"></i
        ></a>
  
        <!-- Google -->
        <a class=" btn-floating m-1" href="#!" role="button"
          ><i class="social-icon-link bi-facebook"></i
        ></a>
  
        <!-- Instagram -->
        <a class=" btn-floating m-1" href="#!" role="button"
          ><i class="social-icon-link bi-whatsapp"></i
        ></a>
  
        <!-- Linkedin -->
        {{-- <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-linkedin-in"></i
        ></a>
  
       
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-github"></i
        ></a> --}}
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2025 Copyright:
      <a class="text-white" href="/login">MobiGest</a> Designé Par Digitalis
    </div>
    <!-- Copyright -->
  </footer>
    

  <!-- End of .container -->
        </main>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>