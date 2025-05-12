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
});
