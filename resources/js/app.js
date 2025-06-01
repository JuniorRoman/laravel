import Swiper from "swiper/bundle";
import "swiper/css/bundle";
// import Swiper and modules styles
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

document.addEventListener("livewire:navigated", () => {
    new Swiper(".swiper_promo", {
        loop: true,
        speed: 5000,
        autoplay: {
            delay: 5000,
        },
        // centeredSlides: true,
        spaceBetween: 20,
        slidesPerView: 1,
    });
});

document.addEventListener("livewire:navigated", () => {
    new Swiper(".swiper_gallery", {
        loop: true,
        speed: 3000,
        autoplay: {
            delay: 1500,
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 10,
                centeredSlides: true,
            },
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
});

document.addEventListener("livewire:navigated", () => {
    new Swiper(".swiper_minute", {
        loop: true,
        speed: 2000,
        freeMode: false,
        autoplay: {
            delay: 3000,
        },

        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            640: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            1024: {
                slidesPerView: 1,
                spaceBetween: 10,
                centeredSlides: true,
            },
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
});

document.addEventListener("livewire:navigated", () => {
    new Swiper(".swiper_master", {
        loop: true,
        speed: 3000,
        autoplay: {
            delay: 2000,
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            1024: {
                slidesPerView: 3.5,
                spaceBetween: 20,
                centeredSlides: true,
            },
        },
    });
});

document.addEventListener("scroll", () => {
    Livewire.dispatch("scrollUpdated", { scroll: window.scrollY });
});
