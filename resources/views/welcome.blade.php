<!doctype html>
<html lang="en">

<head>
    <title>{{ env('APP_NAME', 'MobilPlus') }}
    </title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="shortcut icon" href="{{ asset('assets/logo/logo.png') }}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('/assets/fa/css/all.min.css') }}">
    <!-- Bootstrap CSS v5.2.1 -->

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.3/lottie.min.js"></script>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"
        integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"
        integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
        integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="p-0" style="padding: 0 !important">

    <div class="offcanvas offcanvas-start bg-transparent" tabindex="-1" id="offcanvasNavbar"
        style="max-width: 80vw;position: fixed;top:0;" aria-labelledby="offcanvasNavbarLabel">
        <div class="bg-light-color1"></div>
        <div class="offcanvas-header" style="z-index: 200">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
            <button type="button" class="btn-close text-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-flex align-items-start justify-content-center" style="z-index: 200;">
            <div class=" d-flex flex-column align-items-center justify-content-evenly h-100 ">
                {{-- <img src="{{ asset('assets/logo/logo.png') }}" alt="" class="img-fluid  "
                    style="width: 150px"> --}}
                <div id="cont_phone" data-aos="fade-left" data-aos-delay="0" data-aos-duration="1300">
                    <div class="nav-item mb-3 display-6"><a class="off-link active" href="#slider1">Accueil</a>
                    </div>
                    <div class="nav-item mb-3 display-6"><a class=" off-link" href="#about">Qui sommes
                            nous?</a></div>
                    <div class="nav-item mb-3 display-6"><a class="off-link" href="#service">Nos services</a>
                    </div>
                    <div class="nav-item mb-3 display-6"><a class=" off-link" href="#projects">Projets et
                            références</a>
                    </div>
                    {{-- <div class="nav-item mb-3 display-6"><a class=" off-link" href="#contact">Nos Contacts</a>
                    </div> --}}
                </div>

            </div>

        </div>
    </div>
    {{-- contact_off --}}


    <div class="offcanvas offcanvas-start " style="width: 500px" data-bs-scroll="true" tabindex="-1" id="contact_off"
        aria-labelledby="Enable both scrolling & backdrop">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="Enable both scrolling & backdrop"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body =">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col-md-12 d-flex align-items-stretch">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4 color-1">Contactez-nous par email</h3>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert"
                                        style="display: none" id="success">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                        Nous avons bien reçu votre message.
                                    </div>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert"
                                        style="display: none" id="error">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                        Opération échouée. Veuillez réssayez plus tard.
                                    </div>


                                    <script>
                                        var alertList = document.querySelectorAll('.alert');
                                        alertList.forEach(function(alert) {
                                            new bootstrap.Alert(alert)
                                        })
                                    </script>


                                    <form method="POST" action="{{ route('email.send') }}" id="contactForm"
                                        name="contactForm">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-3" name="name"
                                                        id="name" placeholder="Votre nom" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="email" class="form-control mb-3" required
                                                        name="email" id="email" placeholder="Votre mail">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-3" name="subject"
                                                        id="subject" placeholder="Sujet">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control mb-3" id="message" cols="30" rows="7"
                                                        placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <button
                                                        class="btn d-flex btn-color1 justify-content-center align-items-center fw-bold w-100 ">
                                                        <span class="mx-1">Envoyer</span>
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <div class="spinner-border color-2 spinner-border-sm"
                                                                id="spinner" style="display: none" role="status">
                                                                <span class="visually-hidden">Loading...</span>
                                                            </div>
                                                        </div>
                                                    </button>
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                        @csrf
                                    </form>
                                    <script>
                                        $("#contactForm").on("submit", (e) => {
                                            $("#spinner").fadeIn()
                                            e.preventDefault();
                                            axios.post(e.target.action, $("#contactForm").serialize())
                                                .then(res => {
                                                    console.log(res)
                                                    $("#success").fadeIn()
                                                    $("#contactForm").trigger("reset")
                                                    $("#spinner").fadeOut()


                                                })
                                                .catch(err => {
                                                    console.error(err);
                                                    $("#error").fadeIn()
                                                    $("#spinner").fadeOut()


                                                })

                                        })
                                    </script>
                                </div>
                            </div>
                            {{-- <div class="col-md-5 d-flex align-items-stretch">
                                <div class="info-wrap w-100 p-lg-5 p-4 text-dark">
                                    <h3 class="mb-4 mt-md-4 color-2">Autres Contacts</h3>

                                    <div class="dbox w-100 d-flex align-items-center justify-content-evenly">
                                        <div
                                            class="icon d-flex align-items-center mx-2 bg-light justify-content-center">
                                            <span class="far fa-map-marker color-1"></span>
                                        </div>
                                        <div class="text pl-3 text-dark">
                                            <p><span class="">Adresse:</span> 198 West 21th Street, Suite 721
                                                New York NY
                                                10016</p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center justify-content-evenly">
                                        <div
                                            class="icon d-flex align-items-center mx-2 bg-light justify-content-center">
                                            <span class="far fa-phone color-1"></span>
                                        </div>
                                        <div class="text pl-3 text-dark">
                                            <p><span class="">Téléphone:</span> <a class="text-decoration-none"
                                                    href="tel://1234567920">+
                                                    1235 2355 98</a></p>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="dbox w-100 d-flex align-items-center justify-content-center">
                                        <div
                                            class="icon d-flex align-items-center mx-2 bg-light justify-content-center">
                                            <span class="fab fa-facebook color-1"></span>
                                        </div>
                                        <div
                                            class="icon d-flex align-items-center mx-2 bg-light justify-content-center">
                                            <span class="fab fa-linkedin-in color-1"></span>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <header class="custom-nav" id="nav">
        <!-- place navbar here -->
        <nav class="navbar navbar-expand-lg  py-2  ">
            <div class="container">
                <a class="navbar-brand " href="#">
                    <img src="{{ asset('assets/logo/logo_white.png') }}" alt=""
                        class="img-fluid d-none d-lg-block " style="width: 140px">
                    <img src="{{ asset('assets/logo/logo_white.png') }}" alt=""
                        class="img-fluid d-block d-lg-none " style="width: 95px">
                </a>
                <div class="d-flex phone">
                    <a class="text-white text-decoration-none " href="tel:+33 06 52 45 55 32"> <i
                            class="fas fa-phone-alt" aria-hidden="true"></i> +33 06 52 45 55 32 </a>
                </div>
                <button class="navbar-toggler" data-bs-toggle="offcanvas" id="open_side"
                    data-bs-target="#offcanvasNavbar"><span class="visually-hidden">Toggle navigation</span><span
                        class="navbar-toggler-icon"></span></button>
                <div id="navcol-3" class="collapse navbar-collapse">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link active fs-5" href="#slider1">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link fs-5" href="#about">Qui sommes nous?</a></li>
                        <li class="nav-item"><a class="nav-link fs-5" href="#service">Nos services</a></li>
                        <li class="nav-item"><a class="nav-link fs-5" href="#projects">Projets et références</a></li>
                        {{-- <li class="nav-item"><a class="nav-link" href="#contact">Nos Contacts</a></li> --}}
                    </ul>
                    {{-- <button class="btn bg-color-1" type="button">Button</button> --}}
                </div>
            </div>
        </nav>
    </header>
    <div class="ccontainer-fullwidth m-0" style="margin: 0 !important;padding: 0 !important">

        <section id="slider1" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#slider1" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#slider1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#slider1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#slider1" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                    <img src="{{ asset('assets/img/carousel1.jpg') }}" alt="" class="d-block w-100">
                    <div
                        class="carousel-caption w-100 h-100 d-flex flex-column justify-content-center align-items-center  p-3">

                        {{-- <h5 class="fw-bold text-white carousel-title" style="text-transform: capitalize"
                            data-aos="fade-zoom-in" data-aos-delay="0" data-aos-offset="0" data-aos-duration="800">
                            <span class="color-2">Mobil</span><strong class="color-1">Plus</strong>
                        </h5> --}}
                        <h5 class="fw-bold text-white carousel-title " data-aos="fade-zoom-in" data-aos-delay="300"
                            data-aos-offset="0" data-aos-duration="800">
                            Société de <br>
                            <span class=""> <strong class="color-2">Rénova</strong>tion</span>

                        </h5>


                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="10000">
                    <img src="{{ asset('assets/img/carousel2.jpg') }}" alt="" class="d-block w-100">
                    <div class="carousel-caption w-100 h-100 d-flex">
                        <h5 class=" carousel-parag my-auto mx-auto p-3"> Nous sommes
                            fiers de vous présenter notre
                            entreprise spécialisée dans les travaux de plomberie et de peinture!</h5>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="10000">

                    <img src="{{ asset('assets/img/carousel3.jpg') }}" alt="" class="d-block w-100">
                    <div class="carousel-caption w-100 h-100 d-flex">
                        <h5 class=" carousel-parag my-auto mx-auto p-3"> Avec une expérience de plusieurs années, une
                            équipe
                            dévouée et passionnée, nous nous sommes taillé une place de choix dans le secteur. </h5>
                    </div>

                </div>
                <div class="carousel-item" data-bs-interval="10000">

                    <img src="{{ asset('assets/img/carousel4.jpg') }}" alt="" class="d-block w-100">
                    <div class="carousel-caption w-100 h-100 d-flex">
                        <h5 class=" carousel-parag my-auto mx-auto p-3"> Notre mission ? Vous aidez à créer, entretenir
                            et
                            rénover votre espace de vie ou de travail en assurant un service impeccable et une
                            satisfaction à 100%. </h5>
                    </div>

                </div>
            </div>

        </section>
        <section class="p-4 my-3 " id="about" data-aos="zoom-in" data-aos-delay="0" data-aos-duration="1300">
            <div class="row justify-content-evenly">
                {{-- <div class="col-md-6 px-3  d-none d-lg-block">
                    <img class="rounded-5 img-fluid w-100 fit-cover" style="min-height: 200px;"
                        src="{{ asset('assets/img/carousel5.jpg') }}" />
                </div> --}}
                <div class="col-lg-6  p-4  rounded-5 card-about">
                    <h3 class=" fw-bold pb-md-4 color-1" style="font-size: 1.8rem"><strong
                            class="color-2">Qui</strong>
                        sommes-nous ?
                    </h3>
                    <span class="text-dark mb-4 text-size-md">Nous sommes une équipe des professionnels qualifiés,
                        dédiés
                        et
                        passionnés
                        par leur métier. Nous croyons en l’importance du détail, de la qualité, de la ponctualité, et
                        surtout, de la satisfaction de nos clients. Notre entreprise est à votre service pour tous vos
                        projets de plomberie. <br>Chaque projet, grand ou petit, est traité avec le même souci du détail
                        et du professionnalisme.</span>
                </div>
                <div class="col-lg-3" id="cle">

                </div>
                <script>
                    const animation = lottie.loadAnimation({
                        container: document.getElementById('cle'),
                        renderer: 'svg', // You can choose 'svg', 'canvas', or 'html' (default is 'svg')
                        loop: true,
                        autoplay: true,
                        path: '{{ asset('assets/lottie/worker.json') }}', // Replace with the actual path to your Lottie JSON file
                    });
                </script>
            </div>
            <div class="row gy-4 gy-md-0">
                <div
                    class="col-md-6 d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center">
                    <div>
                        <div class="row gy-2 row-cols-1 row-cols-sm-2">


                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-6 order-first order-md-last d-block d-lg-none">
                    <div><img class="rounded-5 img-fluid w-100 fit-cover" style="min-height: 200px;"
                            src="{{ asset('assets/img/carousel1.jpg') }}" /></div>
                </div> --}}
            </div>
        </section>

        <section id="service" class="mb-3 " data-aos="zoom-in" data-aos-delay="0" data-aos-duration="1300">
            <div class="row flex-column align-items-center justify-content-start py-4 px-2">
                <h3 class="fw-bold pb-md-2 color-1 text-center " style="font-size: 1.8rem"><strong
                        class="color-2">Nos</strong> Services
                </h3>
                <p class="text-center text-size-md w-75">Notre entreprise offre une variété de services en plomberie et
                    tous
                    travaux de
                    rénovation intérieur,
                    toujours dans le souci du détail et de la qualité.</p>
            </div>
            <div class="gtco-testimonials">
                <div class="owl-carousel owl-carousel1 owl-theme">
                    <div>
                        <div class="card text-center">
                            <div class="pt-3">
                                <i class="color-1 fad fa-tools display-3"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="color-2 fw-bold">Plomberie <br />
                                </h5>
                                <p class="card-text text-left text-size-md" style="text-align: left !important">Nous
                                    offrons une
                                    gamme complète de services de
                                    plomberie, incluant
                                    l’installation, la réparation, et le remplacement des équipements de plomberie. Que
                                    ce soit pour une urgence, une installation ou une rénovation, notre équipe de
                                    plombiers qualifiés est à votre service. Nous comprenons que chaque situation est
                                    unique, c'est pourquoi nous vous offrons des solutions sur mesure pour répondre à
                                    vos besoins spécifiques. </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card text-center">
                            <div class="pt-3">
                                <i class="color-1 fad fa-user-hard-hat display-3"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="color-2 fw-bold">Travaux de renovation <br />
                                </h5>
                                <p class="card-text text-left text-size-md" style="text-align: left !important">
                                    Laissez-nous transformer vos espaces intérieurs et extérieurs avec nos services de
                                    peinture. Nos salariés sont formés aux dernières techniques pour vous offrir une
                                    finition impeccable. Des murs de votre salon aux façades de votre maison, nous
                                    apportons couleur et vie à votre espace. </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card text-center">
                            <div class="pt-3">
                                <i class="color-1 fad fa-check-double display-3"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="color-2 fw-bold">Engagement Qualité<br />
                                </h5>
                                <p class="card-text text-left text-size-md" style="text-align: left !important">
                                    Nous nous engageons à fournir des services de haute qualité, à respecter nos délais,
                                    à offrir des tarifs compétitifs et à garantir votre satisfaction. Nous utilisons des
                                    matériaux et des produits de qualité supérieure, respectueux de l'environnement et
                                    durables.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>



        </section>

        <section id="projects" class="py-3 mb-3 " data-aos="zoom-in" data-aos-delay="0" data-aos-duration="1300">
            <div class="row flex-column align-items-center justify-content-start py-4 px-2">
                <h3 class="fw-bold pb-md-2  text-center " style="font-size: 1.8rem"><strong
                        class="color-2">Projets</strong> et <strong class="color-1">Références</strong>
                </h3>
                <p class="text-center text-size-md w-75">Visitez cette page pour voir certains des projets sur lesquels
                    nous
                    avons travaillé. Nous sommes fiers de la qualité de notre travail et nous aimons partager nos succès
                    avec nos futurs clients.</p>
            </div>
        </section>



    </div>
    <div class="sidebar shadow-sm " data-aos="fade-left" data-aos-delay="700" data-aos-duration="1300">
        <div class="social d-flex align-items-center ctc justify-content-center p-2"
            style="border-top-left-radius: 8px;">
            <a href="#contact_off" data-bs-toggle="offcanvas" class=""><span class="sideway"> <i
                        class="fal fa-envelope" aria-hidden="true"></i>&nbsp; Nous contactez</span></a>
        </div>
        <div class="social d-flex align-items-center whatsapp justify-content-center p-2">
            {{-- <a href="https://web.whatsapp.com/send?phone=+330652455532" target="_blank" class=""><i
                    class="fab fa-whatsapp" aria-hidden="true"></i></a> --}}
            <a href=" https://api.whatsapp.com/send?phone=330652455532" target="_blank" class=""><i
                    class="fab fa-whatsapp" aria-hidden="true"></i></a>

        </div>
        <div class="social d-flex align-items-center facebook justify-content-center p-2"
            style="border-bottom-left-radius: 8px;">
            <a href="#" class=""><i class="fab fa-facebook" aria-hidden="true"></i></a>
        </div>
    </div>
    <button id="up" class="up btn rounded-circle bg-color-1"><i class="fal fa-arrow-up"></i></button>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script></script>

    <script src="{{ asset('js/theme.js') }}"></script>

</body>

</html>
