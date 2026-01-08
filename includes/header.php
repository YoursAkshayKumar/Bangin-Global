  <div id="app">
    <header id="stickyNav" class="banner py-1 py-lg-1 position-fixed w-100">
      <div class="container">
        <div class="row justify-content-between align-items-center">
          <div class="col-0 position-static col-lg-auto">
            <nav class="nav-primary d-flex d-lg-block justify-content-between justify-content-lg-center">
              <div class="h-100 d-flex flex-column flex-lg-row">
                <ul id="menu-main-menu_left" class="nav">
                  <li class="nav-item">
                    <a href="about.php" title="About" class="nav-link">ABOUT</a>
                  </li>
                  <li class="nav-item">
                    <a href="product.php" title="Products" class="nav-link">PRODUCTS</a>
                  </li>
                  <li class="nav-item">
                    <a href="quality-control.php" title="Quality Control" class="nav-link">QUALITY CONTROL</a>
                  </li>
                  <li class="nav-item">
                    <a href="contact.php" title="Contact" class="nav-link">CONTACT</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>

          <div class="col-auto px-1 mx-1 d-lg-none">
            <a href="#" class="nav-toggle d-lg-none">
              <span class="sr-only">Menu Toggle</span>
              <span class="burger-line"></span>
            </a>
          </div>

          <div class="col col-md-auto">
            <a class="brand d-flex d-lg-block justify-content-center" href="./index.php">
              <img class="img-fluid m-auto m-md-0" src="assets/images/bangin-logo.png" loading="lazy">
            </a>
          </div>

          <div class="col-auto col-md col-lg-auto position-static d-none navigation d-lg-block">
            <!-- Desktop social icons -->
            <div class="h-100 d-flex flex-column flex-lg-row align-items-center d-none d-lg-flex">
              <div class="ml-xl-1 py-2 py-lg-0 d-flex justify-content-center align-items-center">
                <div class="social-icons">
                  <div>
                    <a href="https://www.instagram.com/banginglobal/" target="_blank" aria-label="instagram"
                      class="instagram" rel="noopener"><i class="fab fa-instagram" aria-hidden="true"></i><span
                        class="sr-only">instagram</span></a>
                    <a href="https://www.facebook.com/banginglobal/" target="_blank" aria-label="facebook-f"
                      class="facebook-f" rel="noopener"><i class="fab fa-facebook-f" aria-hidden="true"></i><span
                        class="sr-only">facebook-f</span></a>
                    <a href="https://twitter.com/banginglobal" target="_blank" aria-label="twitter" class="twitter"
                      rel="noopener"><i class="fab fa-twitter" aria-hidden="true"></i><span
                        class="sr-only">twitter</span></a>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Mobile navigation overlay content -->
            <div class="mobile-nav-content d-lg-none">
              <!-- Mobile social icons -->
              <div class="mobile-social-icons">
                <div class="social-icons">
                  <a href="https://www.instagram.com/banginglobal/" target="_blank" aria-label="instagram"
                    class="instagram" rel="noopener"><i class="fab fa-instagram" aria-hidden="true"></i><span
                      class="sr-only">instagram</span></a>
                  <a href="https://www.facebook.com/banginglobal/" target="_blank" aria-label="facebook-f"
                    class="facebook-f" rel="noopener"><i class="fab fa-facebook-f" aria-hidden="true"></i><span
                      class="sr-only">facebook-f</span></a>
                  <a href="https://twitter.com/banginglobal" target="_blank" aria-label="twitter" class="twitter"
                    rel="noopener"><i class="fab fa-twitter" aria-hidden="true"></i><span
                      class="sr-only">twitter</span></a>
                </div>
              </div>
              
              <!-- Mobile menu items -->
              <nav class="nav-primary">
                <ul id="menu-main-menu_mobile" class="nav">
                  <li class="nav-item">
                    <a href="about.php" title="About" class="nav-link">ABOUT</a>
                  </li>
                  <li class="nav-item">
                    <a href="product.php" title="Products" class="nav-link">PRODUCTS</a>
                  </li>
                  <li class="nav-item">
                    <a href="quality-control.php" title="Quality Control" class="nav-link">QUALITY CONTROL</a>
                  </li>
                  <li class="nav-item">
                    <a href="contact.php" title="Contact" class="nav-link">CONTACT</a>
                  </li>
                </ul>
              </nav>
            </div>

            <div id="searchForm" class="collapse px-2 px-lg-0">
              <form role="search" method="get" class="search-form form-inline ml-lg-1 mt-1"
                action="https://banginglobal.com/">
                <div class="form-group w-100">
                  <label class="sr-only" for="searchField">Search for:</label>
                  <input type="text" class="form-control w-100" id="searchField" name="s"
                    placeholder="search for&hellip;" value="" required />
                </div>

                <button type="submit" class="btn btn-link"><span class="sr-only">Search</span><i
                    class="fas fa-chevron-right"></i></button>
              </form>
            </div>
          </div>

          <div class="px-0 px-sm-1 px-lg-0 px-xl-1 col-auto col-lg-auto">
          </div>
        </div>

      </div>
      <object data="assets/images/curve.svg" type="image/svg+xml" class="curve position-absolute"
        aria-label="Curve decoration">
        <!-- Fallback for browsers that don't support object tag -->
        <img src="assets/images/curve.svg" alt="Curve decoration" class="curve position-absolute" />
      </object>
    </header>
