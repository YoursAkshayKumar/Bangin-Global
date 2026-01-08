<?php
// Page-specific meta data
$page_title = 'Contact Us - Bangin';
$page_description = 'Get in touch with Bangin - We\'d love to hear from you';
$canonical_url = 'contact.php';
$og_title = 'Contact Us - Bangin';
$og_description = 'Get in touch with Bangin - We\'d love to hear from you';
$og_url = 'https://banginglobal.com/contact.php';
$og_site_name = 'Bangin';
$gtm_page_post_type = 'page';
$include_tidio_preconnect = true;
$include_trustpilot = true;
$custom_css_file = 'assets/css/contact.css';

include 'includes/head.php';
?>

<body class="wp-singular page wp-embed-responsive wp-theme-caleno theme-caleno woocommerce-no-js">

  <?php include 'includes/header.php'; ?>

  <main class="main">
    <!-- Contact Hero Section -->
    <section class="contact-hero-section" style="background: linear-gradient(135deg, #1540D8 0%, #75B5FF 100%); padding: 140px 20px 80px; position: relative; overflow: hidden;">
      <div class="wave-pattern" style="position: absolute; width: 100%; height: 100%; background-image: repeating-linear-gradient(45deg, transparent, transparent 10px, rgba(113, 185, 255, 0.05) 10px, rgba(113, 185, 255, 0.05) 20px); pointer-events: none;"></div>
      <div class="container position-relative" style="z-index: 1;">
        <div class="row align-items-center">
          <div class="col-12 col-lg-6 text-center text-lg-left mb-4 mb-lg-0">
            <h1 class="text-white mb-3" style="font-size: 3.5rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.05em;">GET IN TOUCH</h1>
            <p class="text-white lead" style="font-size: 1.5rem; opacity: 0.95;">We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
          </div>
          <div class="col-12 col-lg-6 text-center">
            <img src="assets/images/bangin-logo.png" alt="Bangin Logo" class="img-fluid" style="max-width: 300px; filter: drop-shadow(0 20px 40px rgba(242, 187, 5, 0.4)); animation: float 3s ease-in-out infinite;" loading="lazy">
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Page Section -->
    <section class="contact-page-wrapper">
      <div class="container">
        <div class="contact-cards-container">
          <!-- Contact Form Card -->
          <div class="contact-card">
            <div style="text-align: center; margin-bottom: 2rem;">
              <div style="width: 120px; height: 120px; margin: 0 auto 1.5rem; background: linear-gradient(135deg, #1540D8 0%, #75B5FF 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 10px 30px rgba(21, 64, 216, 0.3);">
                <i class="fas fa-envelope" style="font-size: 3rem; color: #fff;"></i>
              </div>
            </div>
            <h2 class="card-title">SEND US A MESSAGE</h2>
            <div class="card-title-underline">
              <div class="underline-yellow"></div>
              <div class="underline-blue"></div>
            </div>
            <p class="card-description">Fill out the form below and we'll get back to you soon.</p>
              
              <?php
              // Form processing
              $success = false;
              $error = false;
              $error_message = '';
              
              if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Sanitize input
                $name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
                $email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
                $phone = isset($_POST['phone']) ? htmlspecialchars(trim($_POST['phone'])) : '';
                $subject = isset($_POST['subject']) ? htmlspecialchars(trim($_POST['subject'])) : '';
                $message = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : '';
                
                // Validation
                if (empty($name)) {
                  $error = true;
                  $error_message = 'Please enter your name.';
                } elseif (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $error = true;
                  $error_message = 'Please enter a valid email address.';
                } elseif (empty($message)) {
                  $error = true;
                  $error_message = 'Please enter your message.';
                } else {
                  // Here you would typically send an email or save to database
                  // For now, we'll just show a success message
                  $success = true;
                  
                  // Example: Send email (uncomment and configure)
                  /*
                  $to = 'support@banginglobal.com';
                  $email_subject = 'Contact Form: ' . $subject;
                  $email_body = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";
                  $headers = "From: $email\r\nReply-To: $email";
                  mail($to, $email_subject, $email_body, $headers);
                  */
                }
              }
              ?>
              
              <?php if ($success): ?>
                <div class="alert alert-success">
                  <strong>Thank you!</strong> Your message has been sent successfully. We'll get back to you soon.
                </div>
              <?php endif; ?>
              
              <?php if ($error): ?>
                <div class="alert alert-error">
                  <strong>Error:</strong> <?php echo $error_message; ?>
                </div>
              <?php endif; ?>
              
            <form method="POST" action="" id="contactForm">
              <div class="form-row">
                <div class="form-group">
                  <label for="name" class="form-label">
                    FULL NAME<span class="required">*</span>
                  </label>
                  <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    class="form-control" 
                    placeholder="Enter your full name"
                    value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>"
                    required
                  >
                </div>
                
                <div class="form-group">
                  <label for="email" class="form-label">
                    EMAIL ADDRESS<span class="required">*</span>
                  </label>
                  <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    class="form-control" 
                    placeholder="your.email@example.com"
                    value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>"
                    required
                  >
                </div>
              </div>
              
              <div class="form-row">
                <div class="form-group">
                  <label for="phone" class="form-label">PHONE NUMBER</label>
                  <input 
                    type="tel" 
                    id="phone" 
                    name="phone" 
                    class="form-control" 
                    placeholder="+1 (555) 123-4567"
                    value="<?php echo isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : ''; ?>"
                  >
                </div>
                
                <div class="form-group">
                  <label for="subject" class="form-label">SUBJECT</label>
                  <input 
                    type="text" 
                    id="subject" 
                    name="subject" 
                    class="form-control" 
                    placeholder="What is this regarding?"
                    value="<?php echo isset($_POST['subject']) ? htmlspecialchars($_POST['subject']) : ''; ?>"
                  >
                </div>
              </div>
              
              <div class="form-group">
                <label for="message" class="form-label">
                  MESSAGE<span class="required">*</span>
                </label>
                <textarea 
                  id="message" 
                  name="message" 
                  class="form-control" 
                  placeholder="Tell us what's on your mind..."
                  required
                ><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
              </div>
              
              <button type="submit" class="btn-submit">
                SEND MESSAGE
              </button>
            </form>
          </div>
          
          <!-- Contact Information Card -->
          <div class="contact-card">
            <div style="text-align: center; margin-bottom: 2rem;">
              <div style="width: 120px; height: 120px; margin: 0 auto 1.5rem; background: linear-gradient(135deg, #F2BB05 0%, #1540D8 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 10px 30px rgba(242, 187, 5, 0.3);">
                <i class="fas fa-map-marker-alt" style="font-size: 3rem; color: #fff;"></i>
              </div>
            </div>
            <h2 class="card-title">CONTACT INFORMATION</h2>
            <div class="card-title-underline">
              <div class="underline-yellow"></div>
              <div class="underline-blue"></div>
            </div>
            
            <div class="contact-info-item">
              <div class="contact-icon">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <div class="contact-info-content">
                <h4>ADDRESS</h4>
                <p>
                  KHASRA NO.298 M & 300, <br>
                  PART OF PLOT NO. 44, 33, 45, 32 MOHKAM PUR, <br>
                  DELHI ROAD, <br>
                  BEHIND DANIK JAGRAN, <br>
                  MEERUT, <br>
                  UTTAR PARDESH-250002.
                </p>
              </div>
            </div>
            
            <div class="contact-info-item">
              <div class="contact-icon">
                <i class="fas fa-phone"></i>
              </div>
              <div class="contact-info-content">
                <h4>PHONE</h4>
                <p>
                  <a href="tel:+919068169354">+91 0121-4523053</a>
                </p>
              </div>
            </div>
            
            <div class="contact-info-item">
              <div class="contact-icon">
                <i class="fas fa-envelope"></i>
              </div>
              <div class="contact-info-content">
                <h4>EMAIL</h4>
                <p>
                  <a href="mailto:support@banginglobal.com">support@banginglobal.com</a>
                </p>
              </div>
            </div>
            
            <div class="contact-info-item">
              <div class="contact-icon">
                <i class="fab fa-instagram"></i>
              </div>
              <div class="contact-info-content">
                <h4>FOLLOW US</h4>
                <p>
                  <a href="https://www.instagram.com/banginglobal/" target="_blank" rel="noopener">@banginglobal</a><br>
                  <a href="https://www.facebook.com/banginglobal/" target="_blank" rel="noopener">Facebook</a><br>
                  <a href="https://twitter.com/banginglobal" target="_blank" rel="noopener">Twitter</a>
                </p>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Additional Image Section -->
        <div class="row mt-5 mb-4">
          <div class="col-12">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-top: 4rem;">
              <div style="text-align: center; padding: 2rem; background: linear-gradient(135deg, rgba(21, 64, 216, 0.1) 0%, rgba(113, 185, 255, 0.1) 100%); border-radius: 20px; transition: transform 0.3s ease;">
                <img src="assets/images/bangin-logo.png" alt="Bangin Product" style="max-width: 200px; width: 100%; height: auto; margin-bottom: 1rem; filter: drop-shadow(0 10px 20px rgba(21, 64, 216, 0.2));" loading="lazy">
                <h4 style="color: #1540D8; font-weight: 700; margin-top: 1rem;">PREMIUM QUALITY</h4>
                <p style="color: #666; margin: 0;">Natural Shilajit Energy</p>
              </div>
              <div style="text-align: center; padding: 2rem; background: linear-gradient(135deg, rgba(242, 187, 5, 0.1) 0%, rgba(21, 64, 216, 0.1) 100%); border-radius: 20px; transition: transform 0.3s ease;">
                <div style="font-size: 4rem; margin-bottom: 1rem;">⚡</div>
                <h4 style="color: #1540D8; font-weight: 700; margin-top: 1rem;">FEEL THE HIT</h4>
                <p style="color: #666; margin: 0;">Stay Bangin</p>
              </div>
              <div style="text-align: center; padding: 2rem; background: linear-gradient(135deg, rgba(113, 185, 255, 0.1) 0%, rgba(242, 187, 5, 0.1) 100%); border-radius: 20px; transition: transform 0.3s ease;">
                <div style="font-size: 4rem; margin-bottom: 1rem;">🌊</div>
                <h4 style="color: #1540D8; font-weight: 700; margin-top: 1rem;">NATURAL POWER</h4>
                <p style="color: #666; margin: 0;">Clean Energy Source</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include 'includes/footer.php'; ?>

  <?php include 'includes/scripts.php'; ?>
  <script src="assets/js/app.js?v=<?= rand(); ?>"></script>
  
  <!-- Mobile Menu Toggle Fix for Contact Page - Ensures menu works after all scripts load -->
  <script>
    (function() {
      // Wait for all scripts to load, especially jQuery and app.js
      function initContactPageMenu() {
        if (typeof jQuery === 'undefined') {
          setTimeout(initContactPageMenu, 50);
          return;
        }
        
        var $ = jQuery;
        
        // Remove any existing handlers to avoid conflicts
        $(document.body).off('click', '.nav-toggle');
        
        // Add click handler using event delegation
        $(document.body).on('click', '.nav-toggle', function(e) {
          e.preventDefault();
          e.stopPropagation();
          
          // Toggle nav-open class on body
          $('body').toggleClass('nav-open');
          
          // Toggle d-none class on navigation element
          $('.navigation').toggleClass('d-none');
        });
        
        // Close menu when clicking on a menu link (mobile navigation)
        $(document).off('click', '.mobile-nav-content .nav-link').on('click', '.mobile-nav-content .nav-link', function() {
          $('body').removeClass('nav-open');
          $('.navigation').addClass('d-none');
        });
        
        // Close menu when clicking outside of it
        $(document).off('click', '.menu-overlay-close').on('click', function(e) {
          if ($('body').hasClass('nav-open')) {
            if (!$(e.target).closest('.navigation, .nav-toggle').length) {
              $('body').removeClass('nav-open');
              $('.navigation').addClass('d-none');
            }
          }
        });
      }
      
      // Initialize when DOM is ready
      if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function() {
          setTimeout(initContactPageMenu, 100);
        });
      } else {
        // DOM is already ready
        setTimeout(initContactPageMenu, 100);
      }
      
      // Also try after window load as a fallback
      window.addEventListener('load', function() {
        setTimeout(initContactPageMenu, 50);
      });
    })();
  </script>
 
</body>

</html>
