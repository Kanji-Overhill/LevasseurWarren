
// init Isotope
var $grid = jQuery('.grid');
// filter items on button click
jQuery('.filter-button-group').on( 'click', 'button', function() {
  var filterValue = jQuery(this).attr('data-filter');
  $grid.isotope({ filter: filterValue, isOriginLeft: false, layoutMode: 'fitRows', itemSelector: '.grid-item' });
});