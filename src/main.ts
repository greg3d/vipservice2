import "./theme.scss"
import "./styles.scss"
import Hammer from "hammerjs";

// import Swiper from "swiper"

/*
const carousels = () => {
    new Swiper(".main-carousel", {
        loop: true,
        slidesPerView:4,
        direction: "horizontal",
        spaceBetween: 10,
    })
}
*/


document.addEventListener("DOMContentLoaded", () => {

    // Get all "navbar-burger" elements
    const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll(".navbar-burger"), 0)

    // Add a click event on each of them
    $navbarBurgers.forEach(el => {
        el.addEventListener("click", () => {

            // Get the target from the "data-target" attribute
            const target = el.dataset.target
            const $target = document.getElementById(target)

            // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
            el.classList.toggle("is-active")
            $target!.classList.toggle("is-active")

        })
    })

    let languages = document.querySelector<HTMLElement>('.languages');

    if (languages !== null) {
        const hammer = new Hammer(languages);
        hammer.on('tap', () => languages.classList.toggle('opened'));
        //languages.addEventListener('mouseenter', () => languages.classList.add('opened'));
        //languages.addEventListener('mouseleave', () => languages.classList.remove('opened'));
    }

    let dropdowns = document.querySelector<HTMLElement>('.sidemenu .dropdown');
    if (dropdowns !== null) {
        const hammer2 = new Hammer(dropdowns);
        hammer2.on('tap', () => dropdowns.classList.toggle('opened'));
        //languages.addEventListener('mouseenter', () => languages.classList.add('opened'));
        //languages.addEventListener('mouseleave', () => languages.classList.remove('opened'));
    }

    const $spravkaItems = document.querySelectorAll<HTMLElement>('.spravka-item');

    $spravkaItems.forEach(item=>{
        item.addEventListener("click", ()=>{
            if (item.dataset.link) {
                document.location.href = item.dataset.link;
            }
        });
    })

    // carousels()

})