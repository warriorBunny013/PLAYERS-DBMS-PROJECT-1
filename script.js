const hero = document.querySelector(".hero");
const slider = document.querySelector(".slider");
const headline = document.querySelector(".home-heading-text");
const subheadline = document.querySelector(".welcome-text");
const scrollBelow = document.querySelector(".scroll");
const t1 = new TimelineMax();
t1.fromTo(hero, 1, { height: "0%" }, { height: "80%", ease: Power2.easeInOut })
  .fromTo(
    hero,
    1.2,
    { width: "100%" },
    { width: "80%", ease: Power2.easeInOut },
    "-=0.5"
  )
  .fromTo(
    slider,
    1.2,
    { x: "-100%" },
    { x: "0%", ease: Power2.easeInOut },
    "-=1.2"
  )
  .fromTo(headline, 0.5, { opacity: 0, x: 30 }, { opacity: 1, x: 0 }, "-=0.5")
  .fromTo(
    subheadline,
    0.5,
    { opacity: 0, x: 30 },
    { opacity: 1, x: 0 },
    "-=0.5"
  )
  .fromTo(
    scrollBelow,
    0.5,
    { opacity: 0, x: 30 },
    { opacity: 1, x: 0 },
    "-=0.5"
  );
// // scrollSpy
// let section=document.querySelectorAll("section");
// let navlinks=document.querySelectorAll("header nav a");  
// window.onscroll=()=>{
//   section.forEach(sec =>{
//     let top=window.scrollY;
//     let offset=sec.offsetHeight;
//     let id=sec.getAttribute('id');
//     if(top>=offset && top<offset+height){
//       navlinks.forEach(links=>{
//         links.classList.remove('is-active'); 
//         console.log.
//         document.querySelector('header nav a[href*='+id+']').classList.add("active");
//       });
//     };
//   });
// };