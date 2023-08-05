$(document).ready(function () {
    (function () {
        "use strict";

        var carousels = function () {
            $(".owl-carousel1").owlCarousel({
                center: true,
                margin: 0,
                responsiveClass: true,
                autoplay: true,
                nav: true,
                dots: true,
                loop: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true,
                        margin: 0,
                    },
                    680: {
                        items: 2,
                        nav: true,
                        loop: false,
                    },
                    1000: {
                        items: 3,
                        nav: true,
                    },
                },
            });
        };

        (function ($) {
            carousels();
        })(jQuery);
    })();

    const targetDiv = document.getElementById("nav");
    const sections = document.querySelectorAll("section");
    const navLi = document.querySelectorAll(".nav-link");
    const offLi = document.querySelectorAll(".off-link");

    function handleScroll() {
        if (window.scrollY > 200) {
            $("#up").fadeIn();
            targetDiv.classList.add("custom-nav-fixed");
        } else {
            targetDiv.classList.remove("custom-nav-fixed");
            $("#up").fadeOut();
        }
        sections.forEach((section, index) => {
            const rect = section.getBoundingClientRect();
            const offset = 100; // adjust this value to control when the link becomes active

            if (rect.top >= -offset && rect.top <= offset) {
                navLi.forEach((link) => link.classList.remove("active"));
                navLi[index].classList.add("active");

                offLi.forEach((link) => link.classList.remove("active"));
                offLi[index].classList.add("active");
            }
        });
    }

    window.addEventListener("scroll", handleScroll);
    $("#up").click(function () {
        $("html, body").animate(
            {
                scrollTop: 0,
            },
            "slow"
        );
    });
    AOS.init();
});
