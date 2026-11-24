// Menu untuk tampilan HP
    const menuToggle = document.getElementById('menuToggle');
    const mainNav = document.getElementById('mainNav');
    menuToggle.addEventListener('click', () => {
      const isOpen = mainNav.classList.toggle('show');
      menuToggle.setAttribute('aria-expanded', String(isOpen));
      menuToggle.textContent = isOpen ? '×' : '☰';
    });
    mainNav.querySelectorAll('a').forEach(link => link.addEventListener('click', () => {
      mainNav.classList.remove('show');
      menuToggle.setAttribute('aria-expanded', 'false');
      menuToggle.textContent = '☰';
    }));

    // Filter dan pengurutan katalog produk
    const filterButtons = document.querySelectorAll('.filter-btn');
    const productGrid = document.getElementById('productGrid');
    const sortSelect = document.getElementById('sortProducts');
    function updateProducts() {
      const activeButton = document.querySelector('.filter-btn.active');
      const activeFilter = activeButton ? activeButton.dataset.filter : 'all';
      const cards = Array.from(productGrid.querySelectorAll('.product-card'));
      cards.forEach(card => {
        card.hidden = activeFilter !== 'all' && card.dataset.category !== activeFilter;
      });
      const visibleCards = cards.filter(card => !card.hidden);
      if (sortSelect.value !== 'default') {
        visibleCards.sort((a, b) => sortSelect.value === 'low'
          ? Number(a.dataset.price) - Number(b.dataset.price)
          : Number(b.dataset.price) - Number(a.dataset.price));
        visibleCards.forEach(card => productGrid.appendChild(card));
      } else {
        cards.forEach(card => productGrid.appendChild(card));
      }
    }
    filterButtons.forEach(button => button.addEventListener('click', () => {
      filterButtons.forEach(item => item.classList.remove('active'));
      button.classList.add('active');
      updateProducts();
    }));
    sortSelect.addEventListener('change', updateProducts);

    // Buka/tutup jawaban FAQ
    document.querySelectorAll('.faq-question').forEach(button => {
      button.addEventListener('click', () => button.parentElement.classList.toggle('open'));
    });

    // Pesan produk melalui WhatsApp. Ganti nomor tujuan jika sudah ada nomor resmi.
    function orderProduct(product) {
      const message = `Halo, saya ingin bertanya atau memesan ${product} dari Beras Domba. Mohon informasi lebih lanjut.`;
      const phone = String(window.BERAS_DOMBA_WA || '').replace(/[^0-9]/g, '');
      const destination = phone ? `https://wa.me/${phone}?text=${encodeURIComponent(message)}` : `https://wa.me/?text=${encodeURIComponent(message)}`;
      window.open(destination, '_blank', 'noopener');
    }
    document.querySelectorAll('.order-btn').forEach(button => {
      button.addEventListener('click', () => orderProduct(button.dataset.product));
    });
