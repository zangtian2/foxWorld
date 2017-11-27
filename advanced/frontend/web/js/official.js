/* 
 * @Author: anchen
 * @Date:   2017-03-29 09:43:43
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-03-29 09:54:46
 */

    $('.cd-slider-nav li').on('click', function(event){
  event.preventDefault();
  var selectedItem = $(this);
  if(!selectedItem.hasClass('selected')) {
    // if it's not already selected
    var selectedPosition = selectedItem.index(),
      activePosition = $('.cd-hero-slider .selected').index();
    if( activePosition < selectedPosition) {
      nextSlide($('.cd-hero-slider'), $('.cd-slider-nav'), selectedPosition);
    } else {
      prevSlide($('.cd-hero-slider'), $('.cd-slider-nav'), selectedPosition);
    }
     
    updateNavigationMarker(selectedPosition+1);
  }
});      


