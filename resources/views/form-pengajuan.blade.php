@extends('sticky')

@section('content')

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
                  <select class="u-full-width" id="device_slug" name="device_slug">
                      <option value="" disabled selected>-- Pilih --</option>
                      @foreach ($devices as $device)
                          <option value="{{ $device->slug }}" 
                                  @if($selectedDevice && $selectedDevice->id == $device->id) selected @endif>
                              {{ $device->full_name_specification }}
                          </option>
                      @endforeach
                  </select>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                  <label>Jumlah Barang</label>
                  <input class="u-full-width" type="number" placeholder="Contoh : 50" id="quantity" name="quantity">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                  <label for="rental_type">Jangka Waktu Sewa</label>
                  <select class="u-full-width" id="rental_type" name="rental_type">
                      <option value="" disabled selected>-- Pilih --</option>
                      <option value="daily">Harian</option>
                      <option value="monthly">Bulanan</option>
                      <option value="yearly">Tahunan</option>
                  </select>
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
                  <input class="u-full-width" type="text" placeholder="Contoh : PT. XXX" id="company_name" name="company_name">
              </div>
            </div> 
            <div class="row">
                <div class="col-md-12">
                    <label>Alamat</label>
                    <input class="u-full-width" type="text" placeholder="Contoh : JL. XXX" id="company_address" name="company_address">
                </div>
            </div>              
            <div class="row">
                <div class="col-md-12">
                    <label>Nama Pemesan</label>
                    <input class="u-full-width" type="text" placeholder="Contoh : John Doe" id="person_name" name="person_name">
                </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                  <label>Nomor HP/WA Pemesan</label>
                  <input class="u-full-width" type="number" placeholder="Contoh : 08XXXXXXXXX" id="phone_number" name="phone_number">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                  <label>Email</label>
                  <input class="u-full-width" type="email" placeholder="Contoh : example@mail.com" id="email" name="email">
              </div>
            </div>
            <input class="btn btn-medium btn-primary" type="submit" value="Submit">
        </form>
    </div>
</section>


@endsection