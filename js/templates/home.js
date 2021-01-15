/* Slider setup */
var sliders = document.querySelectorAll('.glide');

for (var i = 0; i < sliders.length; i++) {
  var glide = new Glide(sliders[i], {
    gap: 15,
  });
  
  glide.mount();
}