import "./bootstrap";
import.meta.glob(["../images/**", "../fonts/**"]);
import Alpine from "alpinejs";
import { collapse } from "@alpinejs/collapse";
import $ from "jquery";

window.Alpine = Alpine;
Alpine.plugin(collapse);
Alpine.start();

$(function () {
    $('[href^="#"]').on("click", function () {
        const id = $(this).attr("href");
        $("html, body").animate({ scrollTop: $(id).offset().top - 100 }, 500);
    });

    const sections = $("section");
    const navlinks = $("nav ul li a");

    $(this).on("scroll", function () {
        let currentSection = "home";

        sections.each(function () {
            const sectionTop = $(this).offset().top;
            const sectionHeight = $(this).outerHeight();
            if (
                pageYOffset >= sectionTop - 180 &&
                pageYOffset < sectionTop + sectionHeight
            ) {
                currentSection = $(this).attr("id");
            }
        });

        if (
            $(window).scrollTop() + $(window).height() >=
            $(document).height() - 10
        ) {
            currentSection = "contact";
        }

        navlinks.each(function () {
            $(this).removeClass("text-blue-600").addClass("text-gray-900");
            if ($(this).attr("href") === "#" + currentSection) {
                $(this).addClass("text-blue-600").removeClass("text-gray-900");
            }
        });
    });
});
