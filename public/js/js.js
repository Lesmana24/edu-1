// JavaScript untuk efek tambahan
        document.addEventListener('DOMContentLoaded', function() {
            // Animasi untuk card produk saat dihover
            const productCards = document.querySelectorAll('.product-card');
            productCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transition = 'transform 0.3s, box-shadow 0.3s';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transition = 'all 0.3s';
                });
            });
            
            // Animasi untuk tombol "Tambah ke Keranjang"
            const addToCartButtons = document.querySelectorAll('.btn-primary');
            addToCartButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const originalText = this.innerHTML;
                    this.innerHTML = '<i class="bi bi-check2"></i> Ditambahkan!';
                    this.classList.add('btn-success');
                    this.classList.remove('btn-primary');
                    
                    setTimeout(() => {
                        this.innerHTML = originalText;
                        this.classList.remove('btn-success');
                        this.classList.add('btn-primary');
                    }, 2000);
                });
            });
        });

document.addEventListener('DOMContentLoaded', function() {
            // Quantity adjustment
            document.querySelectorAll('.quantity-btn.plus').forEach(btn => {
                btn.addEventListener('click', function() {
                    const input = this.previousElementSibling;
                    input.value = parseInt(input.value) + 1;
                    updateCart();
                });
            });
            
            document.querySelectorAll('.quantity-btn.minus').forEach(btn => {
                btn.addEventListener('click', function() {
                    const input = this.nextElementSibling;
                    if (parseInt(input.value) > 1) {
                        input.value = parseInt(input.value) - 1;
                        updateCart();
                    }
                });
            });
            
            // Quantity input validation
            document.querySelectorAll('.quantity-input').forEach(input => {
                input.addEventListener('change', function() {
                    if (this.value < 1 || isNaN(this.value)) {
                        this.value = 1;
                    }
                    updateCart();
                });
            });
            
            // Remove items
            document.querySelectorAll('.remove-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const card = this.closest('.product-card');
                    card.style.opacity = '0';
                    setTimeout(() => {
                        card.remove();
                        updateCart();
                    }, 300);
                });
            });
            
            // Shipping option selection
            document.querySelectorAll('.shipping-option').forEach(option => {
                option.addEventListener('click', function() {
                    document.querySelectorAll('.shipping-option').forEach(o => {
                        o.classList.remove('selected');
                    });
                    this.classList.add('selected');
                    const radio = this.querySelector('input[type="radio"]');
                    radio.checked = true;
                });
            });
            
            // Promo code application
            document.querySelector('.promo-btn').addEventListener('click', function() {
                const promoCode = document.querySelector('.promo-input').value;
                if (promoCode) {
                    alert(`Kode promo "${promoCode}" berhasil diterapkan!`);
                } else {
                    alert('Silakan masukkan kode promo');
                }
            });
            
            function updateCart() {
                // In a real application, this would update cart totals
                console.log('Cart updated');
            }
        });