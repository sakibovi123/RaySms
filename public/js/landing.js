//Select the Elements
// var toggle_btn = document.querySelector(".toggle-btn");
// var big_wrapper = document.querySelector(".big-wrapper");
// const main = document.querySelector("main");

// let dark = false;

// function toggleAnimation(){
//    //clone the wrapper
//    dark = !dark;
//    let clone = big_wrapper.cloneNode(true);
//    if (dark) {
//     clone.classList.remove("light");
//     clone.classList.add("dark");
//    } else {
//     clone.classList.remove("dark");
//     clone.classList.add("light");
//    }
//    main.appendChild(clone);
// }

// toggle_btn.addEventListener("click", toggleAnimation);
const swiper = new Swiper('.swiper', {
    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
// And if we need scrollbar
scrollbar:{
    el: '.swiper-scrollbar',
},

})