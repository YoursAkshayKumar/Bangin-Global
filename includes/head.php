<!doctype html>
<html lang="en-GB">

<?php if (!isset($skip_meta_content_type)): ?>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<?php endif; ?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
  <style>
    img:is([sizes="auto" i], [sizes^="auto," i]) {
      contain-intrinsic-size: 3000px 1500px
    }
  </style>

  <?php if (isset($page_title)): ?>
    <title><?php echo htmlspecialchars($page_title); ?></title>
  <?php endif; ?>

  <?php if (isset($page_description)): ?>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>" />
  <?php endif; ?>

  <?php if (isset($canonical_url)): ?>
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>" />
  <?php endif; ?>

  <meta property="og:locale" content="en_GB" />
  <meta property="og:type" content="website" />

  <?php if (isset($og_title)): ?>
    <meta property="og:title" content="<?php echo htmlspecialchars($og_title); ?>" />
  <?php endif; ?>

  <?php if (isset($og_description)): ?>
    <meta property="og:description" content="<?php echo htmlspecialchars($og_description); ?>" />
  <?php endif; ?>

  <?php if (isset($og_url)): ?>
    <meta property="og:url" content="<?php echo htmlspecialchars($og_url); ?>" />
  <?php endif; ?>

  <?php if (isset($og_site_name)): ?>
    <meta property="og:site_name" content="<?php echo htmlspecialchars($og_site_name); ?>" />
  <?php endif; ?>

  <?php if (isset($og_publisher)): ?>
    <meta property="article:publisher" content="<?php echo htmlspecialchars($og_publisher); ?>" />
  <?php endif; ?>

  <?php if (isset($og_modified_time)): ?>
    <meta property="article:modified_time" content="<?php echo htmlspecialchars($og_modified_time); ?>" />
  <?php endif; ?>

  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@banginglobal" />
  <?php if (isset($yoast_seo_comment)): ?>
    <!-- / Yoast SEO plugin. -->
  <?php endif; ?>


  <link rel="preload" href="assets/fonts/fa-brands-400.woff2?v=<?= rand(); ?>" as="font" type="font/woff2"
    crossorigin />
  <link rel="preload" href="assets/fonts/fa-light-300.woff2?v=<?= rand(); ?>" as="font" type="font/woff2" crossorigin />
  <link rel="preload" href="assets/fonts/fa-solid-900.woff2?v=<?= rand(); ?>" as="font" type="font/woff2" crossorigin />

  <!-- Brand Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
  <link href="https://api.fontshare.com/v2/css?f[]=satoshi@300,400,500,700,900&display=swap" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/yorkmade" rel="stylesheet">

  <link rel="preload" href="assets/fonts/knockout-htf54-sumo-webfont.woff2?v=<?= rand(); ?>" as="font" type="font/woff2"
    crossorigin />
  <link rel="preload" href="assets/fonts/knockout-htf32-juniorcruiserwt-webfont.woff2?v=<?= rand(); ?>" as="font"
    type="font/woff2" crossorigin />
  <link rel="preload" href="assets/fonts/thunderhouse_pro-webfont.woff2?v=<?= rand(); ?>" as="font" type="font/woff2"
    crossorigin />
  <style id='classic-theme-styles-inline-css'>
    <?php if (isset($include_wp_file_button)): ?>
      /*! This file is auto-generated */
    <?php endif; ?>
    .wp-block-button__link {
      color: #fff;
      background-color: #1540D8;
      border-radius: 9999px;
      box-shadow: none;
      text-decoration: none;
      padding: calc(.667em + 2px) calc(1.333em + 2px);
      font-size: 1.125em
    }

    <?php if (isset($include_wp_file_button)): ?>
      .wp-block-file__button {
        background: #1540D8;
        color: #fff;
        text-decoration: none
      }

    <?php endif; ?>
  </style>
  <link rel="stylesheet" href="assets/css/pinterest-for-woocommerce-pins.min.css?v=<?= rand(); ?>">
  <link rel="stylesheet" href="assets/css/brands.css?v=<?= rand(); ?>">
  <link rel="stylesheet" href="assets/css/awdr_style.css?v=<?= rand(); ?>">
  <link rel="stylesheet" href="assets/css/app.css?v=<?= rand(); ?>">
  <link rel="stylesheet" href="assets/css/color-palette-override.css?v=<?= rand(); ?>">
  <link rel="stylesheet" href="assets/css/global-styles.css?v=<?= rand(); ?>">
  <link rel="stylesheet" href="assets/css/countries-slider.css?v=<?= rand(); ?>">

  <?php if (isset($custom_css_file)): ?>
    <link rel="stylesheet" href="<?php echo htmlspecialchars($custom_css_file); ?>">
  <?php endif; ?>

  <?php if (isset($custom_styles)): ?>
    <style>
      <?php echo $custom_styles; ?>
    </style>
  <?php endif; ?>

  <!-- Google Tag Manager for WordPress by gtm4wp.com -->
  <!-- GTM Container placement set to footer -->
  <script data-cfasync="false" data-pagespeed-no-defer>
    window.dataLayer = window.dataLayer || [];
    var dataLayer_content = { "pagePostType": "<?php echo isset($gtm_page_post_type) ? $gtm_page_post_type : 'page'; ?>", "pagePostType2": "single-page", "pagePostAuthor": "sequel", "cartContent": { "totals": { "applied_coupons": [], "discount_total": 0, "subtotal": 0, "total": 0 }, "items": [] } };
    dataLayer.push(dataLayer_content);
  </script>

  <!-- End Google Tag Manager for WordPress by gtm4wp.com -->
  <link rel="icon" type="image/png" href="assets/images/site-icon.png">
  <link rel="apple-touch-icon" href="assets/images/site-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/site-icon.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/site-icon.png">
  <link rel="manifest" href="assets/images/favicons/site.webmanifest">
  <link rel="mask-icon" href="assets/images/favicons/safari-pinned-tab.svg" color="#151922">
  <link rel="shortcut icon" href="assets/images/site-icon.png">
  <meta name="msapplication-TileColor" content="#151922">
  <?php if (isset($msapplication_config)): ?>
    <meta name="msapplication-config" content="<?php echo htmlspecialchars($msapplication_config); ?>">
  <?php endif; ?>
  <meta name="theme-color" content="#151922">

  <?php if (isset($include_trustpilot)): ?>
    <script type="text/javascript" src="https://widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js"
      async></script>
  <?php endif; ?>

  <noscript>
    <style>
      .woocommerce-product-gallery {
        opacity: 1 !important;
      }
    </style>
  </noscript>

  <?php if (isset($include_tidio_preconnect)): ?>
    <link rel="preconnect" href="http://code.tidio.co/">
  <?php endif; ?>
</head>