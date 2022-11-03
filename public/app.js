const navSlide = () =>{
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navlinks = document.querySelectorAll('.nav-links li');

    burger.addEventListener('click',()=>{
        nav.classList.toggle('nav-active');
    });
    navlinks.forEach((links, index)=>{
        link.style.animation = 'navLinkFade 0.5s ease forwards ${index / 7 + 0.3}s';
        console.log(index / 7 + 0.2);
    });
}
navSlide();