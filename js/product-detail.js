(() => {
  const qtyInput = document.getElementById("quantity-input");
  const qtyDecrease = document.getElementById("qty-decrease");
  const qtyIncrease = document.getElementById("qty-increase");

  if (qtyInput && qtyDecrease && qtyIncrease) {
    qtyDecrease.addEventListener("click", () => {
      const current = parseInt(qtyInput.value);
      if (current > 1) {
        qtyInput.value = current - 1;
      }
    });

    qtyIncrease.addEventListener("click", () => {
      const current = parseInt(qtyInput.value);
      const max = parseInt(qtyInput.max);
      if (current < max) {
        qtyInput.value = current + 1;
      }
    });

    // Validate input
    qtyInput.addEventListener("input", () => {
      let value = parseInt(qtyInput.value);
      const min = parseInt(qtyInput.min);
      const max = parseInt(qtyInput.max);

      if (isNaN(value) || value < min) value = min;
      if (value > max) value = max;

      qtyInput.value = value;
    });
  }

  // Add to Cart
  const addToCartBtn = document.querySelector(".add-to-cart-btn");
  if (addToCartBtn) {
    addToCartBtn.addEventListener("click", () => {
      const productId = addToCartBtn.dataset.productId;
      const quantity = qtyInput ? parseInt(qtyInput.value) : 1;

      // TODO: Integrate with cart API
      console.log(`Adding product ${productId} to cart (qty: ${quantity})`);

      // Show success feedback
      const originalHTML = addToCartBtn.innerHTML;
      addToCartBtn.innerHTML =
        '<span class="material-symbols-outlined">check</span> Added!';
      addToCartBtn.disabled = true;

      setTimeout(() => {
        addToCartBtn.innerHTML = originalHTML;
        addToCartBtn.disabled = false;
      }, 2000);
    });
  }

  // Wishlist Toggle
  const wishlistBtn = document.querySelector(".wishlist-btn");
  if (wishlistBtn) {
    wishlistBtn.addEventListener("click", () => {
      wishlistBtn.classList.toggle("active");
      const icon = wishlistBtn.querySelector(".material-symbols-outlined");
      icon.textContent = wishlistBtn.classList.contains("active")
        ? "favorite"
        : "favorite_border";
    });
  }
})();
