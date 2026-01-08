
  <link rel="stylesheet" href="assets/css/wc-blocks.css?v=<?= rand(); ?>">
  <script async src='https://static.klaviyo.com/onsite/js/VufgKh/klaviyo.js?v=<?= rand(); ?>'></script>
  <script src="assets/js/jquery.min.js?v=<?= rand(); ?>"></script>
  <script src="assets/js/jquery-migrate.min.js?v=<?= rand(); ?>"></script>
  <script src="assets/js/jquery.blockUI.min.js?v=<?= rand(); ?>" data-wp-strategy="defer"></script>
  <script src="assets/js/js.cookie.min.js?v=<?= rand(); ?>" data-wp-strategy="defer"></script>
  <script src="assets/js/woocommerce.min.js?v=<?= rand(); ?>" data-wp-strategy="defer"></script>
  <script src="assets/js/site_main.js?v=<?= rand(); ?>"></script>
  
  <!-- Mobile Menu Toggle Fix - Ensures menu button works on all pages -->
  <script>
    (function() {
      // Wait for jQuery to be available
      function initMobileMenuWhenReady() {
        if (typeof jQuery === 'undefined') {
          setTimeout(initMobileMenuWhenReady, 50);
          return;
        }
        
        var $ = jQuery;
        // Flag to track if handlers are initialized
        var menuInitialized = false;
        
        // Ensure mobile menu toggle works on all pages
        function initMobileMenu() {
          // Only initialize once per page load
          if (menuInitialized) {
            return;
          }
          menuInitialized = true;
          
          // Add click handler using event delegation (works even after page navigation)
          $(document.body).on('click', '.nav-toggle', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            // Toggle nav-open class on body
            $('body').toggleClass('nav-open');
            
            // Toggle d-none class on navigation element
            $('.navigation').toggleClass('d-none');
          });
          
          // Close menu when clicking on a menu link (mobile navigation)
          $(document).on('click', '.mobile-nav-content .nav-link', function() {
            $('body').removeClass('nav-open');
            $('.navigation').addClass('d-none');
          });
          
          // Close menu when clicking outside of it
          $(document).on('click', function(e) {
            // Only close if menu is open and click is outside menu/nav-toggle
            if ($('body').hasClass('nav-open')) {
              if (!$(e.target).closest('.navigation, .nav-toggle').length) {
                $('body').removeClass('nav-open');
                $('.navigation').addClass('d-none');
              }
            }
          });
        }
        
        // Initialize on document ready
        $(document).ready(function() {
          initMobileMenu();
        });
        
        // Also initialize immediately if DOM is already ready (for fast page loads)
        if (document.readyState === 'complete' || document.readyState === 'interactive') {
          setTimeout(initMobileMenu, 1);
        }
      }
      
      // Start initialization
      initMobileMenuWhenReady();
    })();
  </script>

