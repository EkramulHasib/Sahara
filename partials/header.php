<header>
  <h1 class="logo">
    <a href="/">Sahara</a>
  </h1>

  <?php
  $user = [
    'name' => 'John Doe',
    'email' => 'john@email.com'
  ];

  function aria_current($page)
  {
    $current = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    return $current === $page ? 'aria-current="page"' : '';
  }
  ?>

  <nav>
    <a href="/" <?php echo aria_current('/'); ?>>Home</a>
    <a href="shop.php" <?php echo aria_current('/shop.php'); ?>>Shop</a>
    <a href="about.php" <?php echo aria_current('/about.php'); ?>>About</a>
    <a href="contact.php" <?php echo aria_current('/contact.php'); ?>>Contact</a>
    <a href="seller.php" <?php echo aria_current('/seller.php'); ?> aria-label="Seller">Seller</a>
    <a href="admin.php" <?php echo aria_current('/admin.php'); ?> aria-label="Admin">Admin</a>
  </nav>

  <div class="header-right">
    <button
      class="btn-icon"
      type="button"
      id="search-toggle"
      aria-hidden="false"
      aria-controls="search-form">
      <span class="material-symbols-outlined">search</span>
    </button>

    <form class="search-form" id="search-form" aria-hidden="true">
      <span class="material-symbols-outlined">search</span>
      <input id="search-input" type="search" placeholder="Search products..." />
    </form>
    <script defer src="/js/search.js"></script>

    <button class="btn-icon" type="button" id="shopping-cart">
      <span class="material-symbols-outlined">shopping_cart</span>
    </button>

    <div class="account-dropdown">
      <button class="btn-account" type="button" id="account-btn" aria-expanded="false" aria-controls="account-menu">
        <span class="material-symbols-outlined">account_circle</span>
        <span class="btn-account-text">Account</span>
      </button>

      <div class="account-menu" id="account-menu" role="menu" aria-hidden="true">
        <div class="account-menu-header">
          <span class="material-symbols-outlined">person</span>
          <div>
            <p class="user-name"><?php echo htmlspecialchars($user['name']); ?></p>
            <p class="user-email"><?php echo htmlspecialchars($user['email']); ?></p>
          </div>
        </div>

        <div class="account-menu-divider"></div>

        <a href="/profile.php" class="menu-item">
          <span class="material-symbols-outlined">person</span>
          My Profile
        </a>
        <a href="/orders.php" class="menu-item">
          <span class="material-symbols-outlined">receipt_long</span>
          My Orders
        </a>
        <a href="/wishlist.php" class="menu-item">
          <span class="material-symbols-outlined">favorite</span>
          My Wishlist
        </a>

        <div class="account-menu-divider"></div>

        <a href="/auth/logout.php" class="menu-item logout">
          <span class="material-symbols-outlined">logout</span>
          Logout
        </a>
      </div>
    </div>
    <script defer src="/js/account.js"></script>
  </div>
</header>
