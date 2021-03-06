
/* Fix header on scroll */
let scrollpos = window.scrollY
const header = document.querySelector("header")
const header_height = header.offsetHeight

const add_class_on_scroll = () => header.classList.add("scroll-header")
const remove_class_on_scroll = () => header.classList.remove("scroll-header")

window.addEventListener('scroll', function() { 
  scrollpos = window.scrollY;

  if (scrollpos >= header_height) { add_class_on_scroll() }
  else { remove_class_on_scroll() }
    
})
/* Slider setup */
var sliders = document.querySelectorAll('.glide');

for (var i = 0; i < sliders.length; i++) {
  var glide = new Glide(sliders[i], {
    gap: 15,
  });
  
  glide.mount();
}



