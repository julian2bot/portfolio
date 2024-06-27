// const slidingscroll_top = document.querySelector('.scroll_top')
// // console.log(slidingscroll_top);

// window.addEventListener('scroll', () =>{
//     const {scrollTop, clientHeight} = document.documentElement;
//     // console.log(scrollTop, clientHeight);

//     // console.log(slidingscroll_top.getBoundingClientRect());
//     const topElementToTopViewport = slidingscroll_top.getBoundingClientRect().top;
//     if(scrollTop > (scrollTop + topElementToTopViewport).toFixed() - clientHeight * .05) {
//         slidingscroll_top.classList.add('active')
//     }
// })

const slidingNewsletter = document.querySelector('.slide-in');

window.addEventListener('scroll', () => {

    const {scrollTop, clientHeight} = document.documentElement;

    // console.log(scrollTop, clientHeight);

    const topElementToTopViewport = slidingNewsletter.getBoundingClientRect().top;

    console.log(topElementToTopViewport);

    if(scrollTop > (scrollTop + topElementToTopViewport).toFixed() - clientHeight * 0.8){
        slidingNewsletter.classList.add('active')
    }
})