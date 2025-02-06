@extends('sticky')

@section('content')
<style>
  select.u-full-width {
      max-height: 100px; /* Atur tinggi maksimum */
      overflow-y: auto; /* Tambahkan scrollbar jika opsi terlalu banyak */
      display: block; 
  }
  .select2-container .select2-dropdown {
        max-height: 150px; /* Maksimum tinggi dropdown */
        overflow-y: auto;  /* Scroll jika terlalu panjang */
    }
</style>

<section class="site-banner jarallax min-height300 padding-large" style="background: url(asset-images/2148210382.jpg) no-repeat; background-position: top;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="page-title">Ajukan Sewa</h2>
          <div class="breadcrumbs">
            <span class="item">
              <a href="/">Home /</a>
            </span>
            <span class="item">Ajukan Sewa</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="post-comment bg-light-grey" style="display: flex; align-items: center; justify-content: center;">
    <div class="col-md-6">
        <h3 class="primary">Ajukan Sewa</h3>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Menampilkan pesan error -->
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <form action="{{ route('ajukan_sewa.store') }}" method="POST">
            @csrf <!-- Untuk menambahkan token CSRF -->            
            <div class="row">
              <div class="col-md-12">
                  <label for="device_slug">Pilihan Device</label>
                  <select class="u-full-width searchable-select" id="device_slug" name="device_slug" onchange="validateQuantity(); updatePrice();" required>
                      <option value="" disabled selected>-- Pilih --</option>
                      @foreach ($devices as $device)
                          <option value="{{ $device->slug }}" 
                              data-units-available="{{ $device->units_available }}"
                              data-daily-rate="{{ $device->daily_rate }}" 
                              data-monthly-rate="{{ $device->monthly_rate }}" 
                              data-yearly-rate="{{ $device->yearly_rate }}" 
                                  @if($selectedDevice && $selectedDevice->id == $device->id) selected @endif>
                              {{ $device->full_name_specification }}
                          </option>
                      @endforeach
                  </select>
              </div>
            </div>
            {{-- <div class="row">
              <div class="col-md-12">
                <label>Jumlah Barang</label>
                <input class="u-full-width" type="number" placeholder="Contoh : 50" id="quantity" name="quantity" min="1" onchange="updatePrice()">
              </div>
            </div> --}}
            <div class="row">
              <div class="col-md-12">
                  <label>Jumlah Barang</label>
                  <input 
                      class="u-full-width" 
                      type="number" 
                      placeholder="Contoh : 50" 
                      id="quantity" 
                      name="quantity" 
                      min="1" 
                      oninput="validateQuantity(); updatePrice();"
                      required>
                  
                  <!-- Pesan error dengan style untuk warna merah dan jarak yang lebih baik -->
                  <small id="quantity-error" class="text-danger" style="display:none; margin-top: 0px;"></small>              
              </div>
          </div>          
            <div class="row">
              <div class="col-md-12">
                <label for="rental_type">Jangka Waktu Sewa</label>
                <select class="u-full-width searchable-select" id="rental_type" name="rental_type" onchange="updatePrice()" required>
                  <option value="" disabled selected>-- Pilih --</option>
                  <option value="daily">Harian</option>
                  <option value="monthly">Bulanan</option>
                  <option value="yearly">Tahunan</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label for="total_price">Total Harga</label>
                <div id="price_label" style="font-style: italic;"></div>
                <div id="price_display" style="margin-bottom: 10px; font-weight: bold; color: #2c3e50;">-</div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="start_date">Mulai Sewa</label>
                <input class="u-full-width date-input" type="date" placeholder="date" id="start_date" name="start_date">
              </div>
              <div class="col-md-6">
                <label for="end_date">Berakhir Sewa</label>
                <input class="u-full-width date-input" type="date" placeholder="date" id="end_date" name="end_date">
              </div>
            </div>  
            <div class="row">
              <div class="col-md-12">
                  <label>Nama Perusahaan</label>
                  <input class="u-full-width" type="text" placeholder="Contoh : PT. XXX" id="company_name" name="company_name" required>
              </div>
            </div> 
            <div class="row">
                <div class="col-md-12">
                    <label>Alamat</label>
                    <input class="u-full-width" type="text" placeholder="Contoh : JL. XXX" id="company_address" name="company_address" required>
                </div>
            </div>              
            <div class="row">
                <div class="col-md-12">
                    <label>Nama Pemesan</label>
                    <input class="u-full-width" type="text" placeholder="Contoh : John Doe" id="person_name" name="person_name" required>
                </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                  <label>Nomor HP/WA Pemesan</label>
                  <input class="u-full-width" type="number" placeholder="Contoh : 08XXXXXXXXX" id="phone_number" name="phone_number" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                  <label>Email</label>
                  <input class="u-full-width" type="email" placeholder="Contoh : example@mail.com" id="email" name="email" required>
              </div>
            </div>
            <input class="btn btn-medium btn-primary" type="submit" value="Submit">
        </form>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        updateQuantityOptions(); // Jalankan saat halaman selesai dimuat
    });

    $(document).ready(function() {
        // Inisialisasi Select2
        $('.searchable-select').select2({
            placeholder: "-- Pilih --", // Placeholder
            allowClear: true,         // Tombol hapus
            width: '100%'             // Lebar dropdown
        });
    });

    function validateQuantity() {
        // Ambil nilai quantity yang dimasukkan
        var quantity = document.getElementById("quantity").value;

        // Ambil nilai units_available dari data device yang terpilih
        var unitsAvailable = document.getElementById("device_slug").selectedOptions[0].getAttribute('data-units-available');

        // Ambil elemen error message
        var errorElement = document.getElementById("quantity-error");

        // Cek apakah quantity lebih besar dari units_available
        if (parseInt(quantity) > parseInt(unitsAvailable)) {
            // Tampilkan pesan error dengan stok yang tersedia
            errorElement.style.display = 'block';
            errorElement.innerHTML = `Jumlah yang dimasukkan melebihi stok yang tersedia. Stok saat ini: ${unitsAvailable}.`;
        } else {
            // Sembunyikan pesan error jika valid
            errorElement.style.display = 'none';
        }
    }

    function updatePrice() {
    var quantity = document.getElementById("quantity").value;
    var rentalType = document.getElementById("rental_type").value;
    var priceElement = document.getElementById("price_display");
    var labelElement = document.getElementById("price_label");

    // Cek apakah quantity dan rental type sudah dipilih
    if (quantity && rentalType) {
        // Ambil harga berdasarkan rentalType
        var pricePerUnit;
        var unitsAvailable = document.getElementById("device_slug").selectedOptions[0].getAttribute('data-units-available');

        if (parseInt(quantity) > parseInt(unitsAvailable)) {
            document.getElementById("quantity-error").style.display = 'block';
        } else {
            document.getElementById("quantity-error").style.display = 'none';
        }

        // Tentukan harga berdasarkan jenis rental
        if (rentalType === "daily") {
            pricePerUnit = parseInt(document.getElementById("device_slug").selectedOptions[0].getAttribute('data-daily-rate'));
            labelElement.innerHTML = "Harga per Hari"; // Menampilkan label "Harga per Hari"
        } else if (rentalType === "monthly") {
            pricePerUnit = parseInt(document.getElementById("device_slug").selectedOptions[0].getAttribute('data-monthly-rate'));
            labelElement.innerHTML = "Harga per Bulan"; // Menampilkan label "Harga per Bulan"
        } else if (rentalType === "yearly") {
            pricePerUnit = parseInt(document.getElementById("device_slug").selectedOptions[0].getAttribute('data-yearly-rate'));
            labelElement.innerHTML = "Harga per Tahun"; // Menampilkan label "Harga per Tahun"
        }

        // Hitung total harga
        if (pricePerUnit) {
            var totalPrice = pricePerUnit * quantity;
            priceElement.innerHTML = "Rp. " + totalPrice.toLocaleString();
        }
    } else {
        priceElement.innerHTML = "-";
        labelElement.innerHTML = "";
    }
}


  // Helper untuk memformat angka menjadi format Indonesia
  function formatNumber(number) {
    return new Intl.NumberFormat("id-ID", {
      minimumFractionDigits: 0,
    }).format(number);
  }
</script>

@endsection