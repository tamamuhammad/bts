<?php
/**
 * Title: Order Form with API Integration
 * Slug: twentytwentyfive/order-form-api
 * Categories: about, featured
 * Description: A section with overlapping images, and a description.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>

<?php
/* Template Name: Halaman Pemesanan Produk */

// 1. Memanggil Header/Navbar bawaan WordPress (Twenty Twenty-Five)
get_header(); 
?>

<link
  href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
  rel="stylesheet"
/>

<style>
  .custom-order-section {
    padding: 80px 0;
    font-family: var(
      --wp--preset--font-family--system-font,
      system-ui,
      sans-serif
    );
  }
  .custom-order-card {
    border: 1px solid var(--wp--preset--color--accent-2, #e2e2e2);
    border-radius: 16px;
    background-color: var(--wp--preset--color--base, #fff);
  }
  .custom-btn {
    background-color: var(
      --wp--preset--color--contrast,
      #111
    );
    border-color: var(--wp--preset--color--contrast, #111);
    border-radius: 40px;
    padding: 10px 24px;
    transition: all 0.3s ease;
  }
  .custom-btn:hover,
  .custom-btn:focus {
    background-color: #333;
    border-color: #333;
  }
  .custom-input {
    border-radius: 8px;
  }
  .custom-input:focus {
    border-color: var(--wp--preset--color--contrast, #111);
    box-shadow: 0 0 0 0.25rem rgba(17, 17, 17, 0.1);
  }
</style>

<main class="custom-order-section bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow-sm custom-order-card">
          <div class="card-body p-4 p-md-5">
            <h3 class="card-title text-center mb-4 fw-bold">
              Pesan Produk Audio Kami
            </h3>

            <div id="alertMessage" class="alert d-none" role="alert"></div>

            <form id="orderForm">
              <div class="mb-3">
                <label class="form-label fw-medium">Nama Lengkap</label>
                <input
                  type="text"
                  class="form-control custom-input"
                  name="nama_pemesan"
                  required
                />
              </div>
              <div class="mb-3">
                <label class="form-label fw-medium">Nomor WhatsApp</label>
                <input
                  type="text"
                  class="form-control custom-input"
                  name="nomor_wa"
                  required
                />
              </div>
              <div class="mb-3">
                <label class="form-label fw-medium">Email</label>
                <input
                  type="email"
                  class="form-control custom-input"
                  name="email"
                  required
                />
              </div>
              <div class="mb-3">
                <label class="form-label fw-medium">Nama Produk</label>
                <input
                  type="text"
                  class="form-control custom-input"
                  name="nama_produk"
                />
              </div>
              <div class="mb-3">
                <label class="form-label fw-medium">Jumlah</label>
                <input
                  type="number"
                  class="form-control custom-input"
                  name="jumlah"
                  min="1"
                  value="1"
                  required
                />
              </div>
              <button
                type="submit"
                class="btn btn-primary w-100 custom-btn mt-3"
                id="btnSubmit"
              >
                Pesan Sekarang
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<script>
  document.getElementById("orderForm").addEventListener("submit", function (e) {
    e.preventDefault();

    let btnSubmit = document.getElementById("btnSubmit");
    let alertDiv = document.getElementById("alertMessage");

    btnSubmit.disabled = true;
    btnSubmit.innerHTML = "Memproses...";

    let formData = {
      nama_pemesan: document.querySelector('input[name="nama_pemesan"]').value,
      nomor_wa: document.querySelector('input[name="nomor_wa"]').value,
      email: document.querySelector('input[name="email"]').value,
      nama_produk: document.querySelector('input[name="nama_produk"]').value,
      jumlah: document.querySelector('input[name="jumlah"]').value,
    };

    fetch("http://localhost:8000/api/orders", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        Accept: "application/json",
      },
      body: JSON.stringify(formData),
    })
      .then((response) => response.json())
      .then((data) => {
        alertDiv.classList.remove("d-none", "alert-danger");
        alertDiv.classList.add("alert-success");
        alertDiv.innerHTML = "Pemesanan berhasil dikirim!";
        document.getElementById("orderForm").reset();
      })
      .catch((error) => {
        alertDiv.classList.remove("d-none", "alert-success");
        alertDiv.classList.add("alert-danger");
        alertDiv.innerHTML = "Terjadi kesalahan pada server.";
      })
      .finally(() => {
        btnSubmit.disabled = false;
        btnSubmit.innerHTML = "Pesan Sekarang";
      });
  });
</script>

<?php // 2. Memanggil Footer bawaan WordPress get_footer(); ?>
