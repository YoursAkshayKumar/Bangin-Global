/**
 * Banner Slider Fix
 * Fixes slider width calculation and autoplay
 */
(function($) {
  'use strict';
  
  var autoplayInterval = null;
  var $banner = null;
  var $navButtons = null;
  
  function fixSliderWidths() {
    $banner = $('section.banner');
    if ($banner.length === 0) return;
    
    var $tnsOuter = $banner.find('.tns-outer');
    var $tnsInner = $banner.find('.tns-inner');
    var $tnsSlider = $banner.find('.tns-slider');
    var $tnsItems = $banner.find('.tns-item');
    
    if ($tnsOuter.length === 0 || $tnsItems.length === 0) return;
    
    // Get the container width - use outerWidth to include padding
    var containerWidth = $tnsOuter.outerWidth() || $tnsOuter.width() || window.innerWidth;
    
    if (containerWidth > 0) {
      // Force each item to be exactly the container width
      $tnsItems.each(function() {
        var $item = $(this);
        $item.css({
          'width': containerWidth + 'px',
          'min-width': containerWidth + 'px',
          'max-width': containerWidth + 'px',
          'flex-basis': containerWidth + 'px',
          'flex-grow': '0',
          'flex-shrink': '0'
        });
        
        // Also fix the slide inside
        var $slide = $item.find('.slide');
        if ($slide.length > 0) {
          $slide.css({
            'width': containerWidth + 'px',
            'min-width': containerWidth + 'px',
            'max-width': containerWidth + 'px'
          });
        }
      });
      
      // Force slider width to be sum of all items
      var totalWidth = containerWidth * $tnsItems.length;
      $tnsSlider.css({
        'width': totalWidth + 'px',
        'min-width': totalWidth + 'px',
        'transform': 'translate3d(0, 0, 0)' // Reset transform
      });
      
      // Force inner container width
      $tnsInner.css({
        'width': containerWidth + 'px',
        'max-width': containerWidth + 'px'
      });
      
      // Force outer container width
      $tnsOuter.css({
        'width': containerWidth + 'px',
        'max-width': containerWidth + 'px'
      });
    }
  }
  
  function startManualAutoplay() {
    $banner = $('section.banner');
    if ($banner.length === 0) return;
    
    $navButtons = $banner.find('.tns-nav button');
    if ($navButtons.length < 2) return;
    
    // Clear any existing interval
    if (autoplayInterval) {
      clearInterval(autoplayInterval);
    }
    
    // Get current active button
    var getCurrentIndex = function() {
      var $active = $navButtons.filter('[aria-pressed="true"], .tns-nav-active');
      if ($active.length === 0) {
        $active = $navButtons.eq(0);
      }
      return $navButtons.index($active);
    };
    
    // Advance to next slide - ensure full slide transition
    var advanceSlide = function() {
      // First, ensure widths are correct
      fixSliderWidths();
      
      var currentIndex = getCurrentIndex();
      var nextIndex = (currentIndex + 1) % $navButtons.length;
      var $nextButton = $navButtons.eq(nextIndex);
      
      if ($nextButton.length > 0) {
        // Use click to ensure proper slide transition
        $nextButton[0].click();
        
        // Also manually set transform if needed
        setTimeout(function() {
          var $tnsSlider = $banner.find('.tns-slider');
          var $tnsOuter = $banner.find('.tns-outer');
          if ($tnsSlider.length > 0 && $tnsOuter.length > 0) {
            var containerWidth = $tnsOuter.width();
            if (containerWidth > 0) {
              var transformValue = -(nextIndex * containerWidth);
              $tnsSlider.css('transform', 'translate3d(' + transformValue + 'px, 0, 0)');
            }
          }
        }, 50);
      }
    };
    
    // Start autoplay - advance every 5 seconds
    autoplayInterval = setInterval(advanceSlide, 5000);
  }
  
  function initializeSlider() {
    fixSliderWidths();
    
    // Force recalculation after a short delay
    setTimeout(function() {
      fixSliderWidths();
      
      // Try to access Tiny Slider instance and force update
      var $banner = $('section.banner');
      if ($banner.length > 0) {
        var $tnsOuter = $banner.find('.tns-outer');
        if ($tnsOuter.length > 0) {
          // Trigger resize event to force recalculation
          $(window).trigger('resize');
          
          // Also try to find and update the slider instance directly
          var tnsData = $tnsOuter.data('tns');
          if (tnsData && tnsData.instance && tnsData.instance.updateSliderSize) {
            try {
              tnsData.instance.updateSliderSize();
            } catch(e) {
              console.log('Could not update slider size:', e);
            }
          }
        }
      }
    }, 500);
    
    startManualAutoplay();
  }
  
  // Fix widths and start autoplay after page loads
  $(document).ready(function() {
    setTimeout(initializeSlider, 1000);
    setTimeout(initializeSlider, 2000);
  });
  
  $(window).on('load', function() {
    setTimeout(initializeSlider, 500);
    setTimeout(initializeSlider, 1500);
  });
  
  // Fix on resize
  $(window).on('resize', function() {
    setTimeout(fixSliderWidths, 100);
  });
  
  // Also try when slider is ready
  $(document).on('tns:ready', 'section.banner', function() {
    setTimeout(initializeSlider, 300);
  });
  
})(jQuery);

