<?php
// Page-specific meta data
$page_title = 'Products - Bangin Shilajit Energy Drink';
$page_description = 'Discover Bangin - Natural Shilajit Energy Drink. Clean energy, no synthetic caffeine, premium quality.';
$canonical_url = 'product.php';
$og_title = 'Products - Bangin Shilajit Energy Drink';
$og_description = 'Discover Bangin - Natural Shilajit Energy Drink. Clean energy, no synthetic caffeine, premium quality.';
$og_url = 'https://banginglobal.com/product.php';
$og_site_name = 'Bangin';
$gtm_page_post_type = 'page';
$include_trustpilot = true;
$include_tidio_preconnect = true;
$custom_css_file = 'assets/css/product.css';

include 'includes/head.php';
?>

<body class="wp-singular page wp-embed-responsive wp-theme-caleno theme-caleno woocommerce-no-js">

  <?php include 'includes/header.php'; ?>

  <main class="main">
    <!-- Hero Section -->
    <section class="product-hero">
      <div class="container hero-content">
        <div class="row justify-content-center align-items-center">
          <div class="col-12 text-center">
            <h1 class="text-white mb-4" style="font-size: 4rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.1em;">
              OUR PRODUCTS
            </h1>
            <p class="text-white lead" style="font-size: 1.5rem; opacity: 0.95; max-width: 800px; margin: 0 auto;">
              Natural Shilajit Energy. Clean Power. Premium Quality.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Product Section -->
    <section class="product-section product-main-section">
      <div class="section-container">
        <div class="row align-items-center">
          <!-- Product Image -->
          <div class="col-12 col-lg-6 mb-5 mb-lg-0">
            <div class="product-image-container" style="min-height: 500px; background: linear-gradient(135deg, rgba(21, 64, 216, 0.1) 0%, rgba(113, 185, 255, 0.1) 100%);">
              <img src="assets/images/bangin-logo.png" alt="Bangin Shilajit Energy Drink Can" style="max-height: 500px;" loading="lazy">
            </div>
          </div>
          
          <!-- Product Details -->
          <div class="col-12 col-lg-6">
            <div class="product-badge" style="position: relative; top: 0; right: 0; margin-bottom: 1.5rem; display: inline-block;">
              NATURAL SHILAJIT
            </div>
            <h2 class="product-title" style="text-align: left; font-size: 3rem; margin-bottom: 1rem;">
              BANGIN
            </h2>
            <p class="product-subtitle" style="text-align: left; font-size: 1.5rem; margin-bottom: 2rem;">
              Shilajit Energy Drink
            </p>
            <p class="product-description" style="font-size: 1.125rem; line-height: 1.8; margin-bottom: 2rem;">
              Premium Himalayan Shilajit energy drink delivering clean, sustained energy without synthetic caffeine. Feel the natural power of ancient adaptogens in every refreshing sip. Built for hustle, backed by nature.
            </p>
            
            <ul class="product-features" style="margin-bottom: 2.5rem;">
              <li>
                <i class="fas fa-check-circle"></i>
                <span><strong>100% Natural Shilajit</strong> - Sourced from pristine Himalayas</span>
              </li>
              <li>
                <i class="fas fa-check-circle"></i>
                <span><strong>Zero Synthetic Caffeine</strong> - No crash, no jitters</span>
              </li>
              <li>
                <i class="fas fa-check-circle"></i>
                <span><strong>Natural Flavors</strong> - Rich, refreshing taste</span>
              </li>
              <li>
                <i class="fas fa-check-circle"></i>
                <span><strong>Premium Quality</strong> - Certified excellence</span>
              </li>
              <li>
                <i class="fas fa-check-circle"></i>
                <span><strong>Sustained Energy</strong> - Feel the hit, stay Bangin</span>
              </li>
            </ul>
            
          </div>
        </div>
      </div>
    </section>

    <!-- Product Details Section -->
    <section class="product-section">
      <div class="section-container">
        <h2 class="section-title">WHY CHOOSE WAVY?</h2>
        <div class="product-details-grid">
          <div class="detail-card">
            <div class="detail-icon">
              <i class="fas fa-mountain"></i>
            </div>
            <h3>Himalayan Shilajit</h3>
            <p>Sourced from the pristine Himalayas, our Shilajit is nature's most potent energy source, tested for purity and authenticity.</p>
          </div>
          <div class="detail-card">
            <div class="detail-icon">
              <i class="fas fa-bolt"></i>
            </div>
            <h3>Clean Energy</h3>
            <p>Zero synthetic caffeine means no crash, no jitters. Just sustained, natural energy that keeps you going without the burn.</p>
          </div>
          <div class="detail-card">
            <div class="detail-icon">
              <i class="fas fa-leaf"></i>
            </div>
            <h3>100% Natural</h3>
            <p>Every ingredient is natural. No artificial flavors, colors, or preservatives. Just pure, clean energy in every bottle.</p>
          </div>
          <div class="detail-card">
            <div class="detail-icon">
              <i class="fas fa-award"></i>
            </div>
            <h3>Premium Quality</h3>
            <p>Certified quality control ensures every batch meets our rigorous standards. Excellence in every sip.</p>
          </div>
          <div class="detail-card">
            <div class="detail-icon">
              <i class="fas fa-heart"></i>
            </div>
            <h3>Wellness Focused</h3>
            <p>Shilajit is an adaptogen that supports your body's natural energy systems, helping you perform at your peak.</p>
          </div>
          <div class="detail-card">
            <div class="detail-icon">
              <i class="fas fa-star"></i>
            </div>
            <h3>Premium Taste</h3>
            <p>Rich, refreshing flavor that doesn't compromise on taste. Natural ingredients that actually taste good.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Nutritional Information Section -->
    <section class="product-section">
      <div class="section-container">
        <h2 class="section-title">NUTRITIONAL INFORMATION</h2>
        <div class="nutritional-info">
          <h3 style="font-size: 2rem; font-weight: 700; color: #1540D8; margin-bottom: 1.5rem; text-align: center;">
            Per 250ml Serving
          </h3>
          <table class="nutrition-table">
            <thead>
              <tr>
                <th>Nutrient</th>
                <th>Amount</th>
                <th>% Daily Value*</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td data-label="Nutrient"><strong>Energy</strong></td>
                <td data-label="Amount">45 kcal</td>
                <td data-label="% Daily Value*">2%</td>
              </tr>
              <tr>
                <td data-label="Nutrient"><strong>Total Carbohydrates</strong></td>
                <td data-label="Amount">11g</td>
                <td data-label="% Daily Value*">4%</td>
              </tr>
              <tr>
                <td data-label="Nutrient"><strong>Sugars</strong></td>
                <td data-label="Amount">8g</td>
                <td data-label="% Daily Value*">-</td>
              </tr>
              <tr>
                <td data-label="Nutrient"><strong>Protein</strong></td>
                <td data-label="Amount">0.5g</td>
                <td data-label="% Daily Value*">1%</td>
              </tr>
              <tr>
                <td data-label="Nutrient"><strong>Total Fat</strong></td>
                <td data-label="Amount">0g</td>
                <td data-label="% Daily Value*">0%</td>
              </tr>
              <tr>
                <td data-label="Nutrient"><strong>Sodium</strong></td>
                <td data-label="Amount">15mg</td>
                <td data-label="% Daily Value*">1%</td>
              </tr>
              <tr>
                <td data-label="Nutrient"><strong>Himalayan Shilajit</strong></td>
                <td data-label="Amount">500mg</td>
                <td data-label="% Daily Value*">-</td>
              </tr>
            </tbody>
          </table>
          <p style="margin-top: 2rem; color: #666; font-size: 0.875rem; text-align: center;">
            *Percent Daily Values are based on a 2,000 calorie diet. Your daily values may be higher or lower depending on your calorie needs.
          </p>
          <div style="margin-top: 2rem; padding: 2rem; background: rgba(21, 64, 216, 0.05); border-radius: 15px;">
            <h4 style="color: #1540D8; font-weight: 700; margin-bottom: 1rem;">Key Ingredients:</h4>
            <ul style="list-style: none; padding: 0; color: #333; line-height: 2;">
              <li><i class="fas fa-check" style="color: #F2BB05; margin-right: 0.5rem;"></i> Premium Himalayan Shilajit Extract</li>
              <li><i class="fas fa-check" style="color: #F2BB05; margin-right: 0.5rem;"></i> Natural Fruit Flavors</li>
              <li><i class="fas fa-check" style="color: #F2BB05; margin-right: 0.5rem;"></i> Natural Sweeteners</li>
              <li><i class="fas fa-check" style="color: #F2BB05; margin-right: 0.5rem;"></i> Citric Acid (Natural)</li>
              <li><i class="fas fa-check" style="color: #F2BB05; margin-right: 0.5rem;"></i> Purified Water</li>
            </ul>
            <p style="margin-top: 1.5rem; color: #1540D8; font-weight: 600;">
              <i class="fas fa-info-circle" style="margin-right: 0.5rem;"></i>
              Contains NO synthetic caffeine, artificial colors, or preservatives.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Benefits Section -->
    <section class="product-section">
      <div class="section-container">
        <h2 class="section-title">FEEL THE HIT. STAY BANGIN.</h2>
        <div class="row justify-content-center">
          <div class="col-12 col-lg-10">
            <div class="product-details-grid">
              <div class="detail-card" style="background: linear-gradient(135deg, #1540D8 0%, #71B5FF 100%); color: #fff;">
                <div class="detail-icon" style="background: rgba(255, 255, 255, 0.2);">
                  <i class="fas fa-bolt" style="color: #F2BB05;"></i>
                </div>
                <h3 style="color: #fff;">Sustained Energy</h3>
                <p style="color: rgba(255, 255, 255, 0.9);">Shilajit provides sustained energy release without the crash associated with synthetic caffeine.</p>
              </div>
              <div class="detail-card" style="background: linear-gradient(135deg, #F2BB05 0%, #1540D8 100%); color: #fff;">
                <div class="detail-icon" style="background: rgba(255, 255, 255, 0.2);">
                  <i class="fas fa-brain" style="color: #fff;"></i>
                </div>
                <h3 style="color: #fff;">Mental Clarity</h3>
                <p style="color: rgba(255, 255, 255, 0.9);">Adaptogenic properties support mental focus and clarity, helping you stay sharp throughout the day.</p>
              </div>
              <div class="detail-card" style="background: linear-gradient(135deg, #71B5FF 0%, #1540D8 100%); color: #fff;">
                <div class="detail-icon" style="background: rgba(255, 255, 255, 0.2);">
                  <i class="fas fa-dumbbell" style="color: #F2BB05;"></i>
                </div>
                <h3 style="color: #fff;">Physical Performance</h3>
                <p style="color: rgba(255, 255, 255, 0.9);">Supports physical endurance and recovery, making it perfect for active lifestyles and workouts.</p>
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
</body>

</html>

