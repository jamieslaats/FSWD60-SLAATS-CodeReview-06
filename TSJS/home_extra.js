
//jQuery Code to be able to set the hight of the card-body equally across the page. 
jQuery(document).ready(function($){
        var container_height = $('#dataset').height(); // Get the height of our container
        $('.travelcard-body').height(container_height);  // Set target DIVs height to container height
      });