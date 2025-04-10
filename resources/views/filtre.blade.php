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

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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






        <section class="contact-section section-padding bg-black">
            <div class="container">
                <div class="row mt-5">



                    <div class="col-lg-6 col-12 d-none d-lg-block">
                        <img src="images/education-online-books.png" class="hero-image img-fluid"
                            alt="education online books">

                        {{-- <p class="copyright-text">Copyright © 2048 ebook company
                            <br><br><a rel="nofollow" href="https://templatemo.com" target="_blank">designed by templatemo</a></p> --}}
                    </div>
                    <div class="col-lg-5 col-12 mx-auto mt-5">
                        <form class="custom-form ebook-download-form bg-white shadow" action="#" method="post"
                            role="form">
                            <div class="text-center mb-5">
                                <h2 class="mb-1">Identification</h2>
                            </div>

                            <div class="ebook-download-form-body">
                                <div class="input-group mb-4">
                                    <input type="text" name="imei" id="imei" class="form-control"
                                        aria-label="ebook-form-name" aria-describedby="basic-addon1"
                                        placeholder="Saisissez le nom de votre entreprise" required>


                                </div>



                                <div class="col-lg-8 col-md-10 col-8 mx-auto">
                                    <a href="" id="url_site" class=""
                                        style=" box-shadow: none;
  color: #fbfbfb;
  padding-top: 13px;
  padding-bottom: 13px;
  padding-right: 40px;
  padding-left: 40px;
  background: #F4A261;
  border-radius:  100px;
  outline: none;">Aller
                                        au site</a>
                                    {{-- <input type="text"  id="url_site" class="form-control" aria-label="ebook-form-name" aria-describedby="basic-addon1" placeholder="Nom de votre entreprise" required> --}}
                                </div>
                            </div>
                        </form>
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
                    <a class=" btn-floating m-1 mt-5" href="#!" role="button"><i
                            class="social-icon-link bi-instagram"></i></a>

                    <!-- Twitter -->
                    <a class=" btn-floating m-1" href="#!" role="button"><i
                            class="social-icon-link bi-twitter"></i></a>

                    <!-- Google -->
                    <a class=" btn-floating m-1" href="#!" role="button"><i
                            class="social-icon-link bi-facebook"></i></a>

                    <!-- Instagram -->
                    <a class=" btn-floating m-1" href="#!" role="button"><i
                            class="social-icon-link bi-whatsapp"></i></a>

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
    <script>
        $(document).ready(function() {
            console.log("Script chargé !");

            $("#imei").on("input", function() {
                console.log("IMEI saisi :", $(this).val());

                var imei = $(this).val();

                // Si le champ IMEI est vide, on vide les champs correspondants
                if (imei === "" || imei.length <= 3) {
                    $("#url_site").val("");
                } else if (imei.length > 3) {
                    $.ajax({
                        url: "{{ route('get.article.details') }}",
                        type: "GET",
                        data: {
                            imei: imei
                        },
                        success: function(response) {
                            console.log("Réponse du serveur :", response);

                            if (response.success) {
                                $("#url_site").val(response.data.url_site);
                                const linkElement = document.getElementById("url_site");
                                linkElement.href = response.data.url_site;
                                linkElement.textContent =
                                "Aller au site"; // Met à jour le texte du lien
                                linkElement.target = "_blank";
                            } else {
                                // Si l'IMEI ne correspond à rien, on vide les champs
                                $("#url_site").val("");
                            }
                        },
                        error: function(xhr, status, error) {
                            console.log("Erreur AJAX :", error);
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>
