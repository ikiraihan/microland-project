@extends('sticky')

@section('content')

<section class="site-banner jarallax min-height300 padding-large" style="background: url(asset-images/2148210382.jpg) no-repeat; background-position: top;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="page-title">Tentang Kami</h2>
          <div class="breadcrumbs">
            <span class="item">
              <a href="/">Home /</a>
            </span>
            <span class="item">Tentang Kami</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="post-comment bg-light-grey" style="display: flex; align-items: center; justify-content: center; padding: 20px 0;">
    <div class="col-md-6" style="color: black;">
      {{-- <h3 class="primary">Tentang Kami</h3> --}}
      <p>
        Microland adalah penyedia solusi sewa perangkat IT terpercaya yang berkomitmen untuk memenuhi kebutuhan teknologi Anda dengan cara yang fleksibel, efisien, dan berkualitas. Dengan pengalaman bertahun-tahun, kami telah menjadi mitra andalan bagi perusahaan, instansi pemerintah, dan individu di berbagai sektor. Layanan kami didukung oleh tim profesional yang siap membantu, memastikan perangkat dalam kondisi prima, dan menghadirkan solusi IT yang andal serta hemat biaya.
      </p>
      <p>
        Untuk informasi lebih lanjut, silakan hubungi kami di:  
        <br><strong>Alamat:</strong> <a href="https://maps.app.goo.gl/BjxBNHZkZqPCroU17" style="text-decoration: none;">Jl. Ngagel Mulyo XIV No.21, Ngagelrejo, Kec. Wonokromo, Surabaya, Jawa Timur 60245</a>  
        <br><strong>Telepon:</strong> <a href="https://wa.me/6287789894922" style="text-decoration: none;">087789894922</a>  
      </p>
      <p>
        Atau, anda dapat melakukan pemesanan melalui Menu             
        <a href="/ajukan-sewa" style="text-decoration: none;">Ajukan Sewa</a>  
      </p>
    </div>
  </section>
  
@endsection