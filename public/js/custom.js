/*!
 * Custom Js
 * Copyright 2011-2015 CuriouzMind Tech.
 * 
 */
 		// TOOLTIPS
        $(document).ready(function() {
          $('[data-toggle="tooltip"]').tooltip();
        });
        // POST-CARDS
        $(document).ready(function($) {
          $('.card__share > a.share-icon').on('click', function(e){ 
            e.preventDefault() // prevent default action - hash doesn't appear in url
              $(this).parent().find( 'div' ).toggleClass( 'card__social--active' );
            $(this).toggleClass('share-expanded');
            });          
        });