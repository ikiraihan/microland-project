@extends('sticky')

@section('content')

<section class="site-banner jarallax min-height300 padding-large" style="background: url(asset-images/2148210382.jpg) no-repeat; background-position: top;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="page-title">Katalog Perangkat</h2>
          <div class="breadcrumbs">
            <span class="item">
              <a href="/">Home /</a>
            </span>
            <span class="item">Katalog Perangkat</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <style>
    .tabs-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
  
    .tabs {
      display: flex;
      list-style: none;
      padding: 0;
      margin: 0;
    }
  
    .tabs li {
      margin-right: 1rem;
      cursor: pointer;
    }
  
    .tabs li.active {
      font-weight: bold;
    }
  
    .device-select {
      margin-left: auto;
      padding: 0.5rem;
      border-radius: 4px;
      border: 1px solid #8d8d8d;
      color: #002142;
    }
  </style>

  <section id="selling-products" class="product-store bg-light-grey padding-small">
    <div class="container">
      <div class="tabs-container">
        <ul class="tabs list-unstyled">
          <li data-tab-target="#all" class="active tab">All</li>
          <li data-tab-target="#lenovo" class="tab">Lenovo</li>
          <li data-tab-target="#dell" class="tab">Dell</li>
          <li data-tab-target="#hp" class="tab">HP</li>
        </ul>
        <select class="device-select" id="device_slug" name="device_slug" onchange="updatePrices()">
          <option value="daily" selected>Harian</option>
          <option value="monthly">Bulanan</option>
          <option value="yearly">Tahunan</option>
        </select>
      </div>

      <div class="tab-content">
          <div id="all" data-tab-content class="active">
            <div class="row d-flex flex-wrap">
              @foreach ($devices as $device)
              <div class="product-item col-lg-3 col-md-6 col-sm-6">
                <div class="image-holder">
                    {{-- <img src="images/selling-products1.jpg" alt="Books" class="product-image"> --}}
                    <img src="{{ asset(\App\Helpers\Functions::getFile($device->model)) }}" class="product-image">
                </div>
                <div class="cart-concern">
                  <div class="cart-button d-flex justify-content-between align-items-center">
                      <button type="button" class="btn-wrap cart-link d-flex align-items-center" 
                              onclick="window.location.href='/ajukan-sewa?key={{ $device->slug }}'">
                          Ajukan Sewa <i class="icon icon-arrow-io"></i>
                      </button>
                  </div>
                </div>                    
                <div class="product-detail">
                    <h3 class="product-title">
                        <a href="/ajukan-sewa?key={{ $device->slug }}">{{ $device->brand. ' ' .$device->model }}</a>
                    </h3>
                    <p class="product-processor">{{ $device->processor_type.' / '.$device->ram.' / '.$device->storage}}</p>
                    <div 
                      class="item-price text-primary" 
                      data-daily-rate="{{ $device->daily_rate }}" 
                      data-monthly-rate="{{ $device->monthly_rate }}" 
                      data-yearly-rate="{{ $device->yearly_rate }}">
                      Rp. {{ number_format($device->daily_rate, 0, ',', '.') }} / Hari
                  </div>                
                </div>
              </div>
              @endforeach
          </div>
        </div>      
        <div id="lenovo" data-tab-content>
          <div class="row d-flex flex-wrap">
            @foreach ($lenovoDevices as $device)
            <div class="product-item col-lg-3 col-md-6 col-sm-6">
              <div class="image-holder">
                  {{-- <img src="images/selling-products1.jpg" alt="Books" class="product-image"> --}}
                  <img src="{{ asset(\App\Helpers\Functions::getFile($device->model)) }}" class="product-image">
              </div>
              <div class="cart-concern">
                <div class="cart-button d-flex justify-content-between align-items-center">
                    <button type="button" class="btn-wrap cart-link d-flex align-items-center" 
                            onclick="window.location.href='/ajukan-sewa?key={{ $device->slug }}'">
                        Ajukan Sewa <i class="icon icon-arrow-io"></i>
                    </button>
                </div>
              </div>                    
              <div class="product-detail">
                  <h3 class="product-title">
                      <a href="/ajukan-sewa?key={{ $device->slug }}">{{ $device->brand. ' ' .$device->model }}</a>
                  </h3>
                  <p class="product-processor">{{ $device->processor_type.' / '.$device->ram.' / '.$device->storage}}</p>
                  <div 
                    class="item-price text-primary" 
                    data-daily-rate="{{ $device->daily_rate }}" 
                    data-monthly-rate="{{ $device->monthly_rate }}" 
                    data-yearly-rate="{{ $device->yearly_rate }}">
                    Rp. {{ number_format($device->daily_rate, 0, ',', '.') }} / Hari
                  </div>  
              </div>
          </div>
            @endforeach
          </div>
        </div>
        <div id="dell" data-tab-content>
          <div class="row d-flex flex-wrap">
            @foreach ($dellDevices as $device)
            <div class="product-item col-lg-3 col-md-6 col-sm-6">
              <div class="image-holder">
                  {{-- <img src="images/selling-products1.jpg" alt="Books" class="product-image"> --}}
                  <img src="{{ asset(\App\Helpers\Functions::getFile($device->model)) }}" class="product-image">
              </div>
              <div class="cart-concern">
                <div class="cart-button d-flex justify-content-between align-items-center">
                    <button type="button" class="btn-wrap cart-link d-flex align-items-center" 
                            onclick="window.location.href='/ajukan-sewa?key={{ $device->slug }}'">
                        Ajukan Sewa <i class="icon icon-arrow-io"></i>
                    </button>
                </div>
              </div>                    
              <div class="product-detail">
                  <h3 class="product-title">
                      <a href="/ajukan-sewa?key={{ $device->slug }}">{{ $device->brand. ' ' .$device->model }}</a>
                  </h3>
                  <p class="product-processor">{{ $device->processor_type.' / '.$device->ram.' / '.$device->storage}}</p>
                  <div 
                    class="item-price text-primary" 
                    data-daily-rate="{{ $device->daily_rate }}" 
                    data-monthly-rate="{{ $device->monthly_rate }}" 
                    data-yearly-rate="{{ $device->yearly_rate }}">
                    Rp. {{ number_format($device->daily_rate, 0, ',', '.') }} / Hari
                  </div>  
              </div>
          </div>
            @endforeach
          </div>
        </div>
        <div id="hp" data-tab-content>
          <div class="row d-flex flex-wrap">
            @foreach ($hpDevices as $device)
            <div class="product-item col-lg-3 col-md-6 col-sm-6">
              <div class="image-holder">
                  {{-- <img src="images/selling-products1.jpg" alt="Books" class="product-image"> --}}
                  <img src="{{ asset(\App\Helpers\Functions::getFile($device->model)) }}" class="product-image">
              </div>
              <div class="cart-concern">
                <div class="cart-button d-flex justify-content-between align-items-center">
                    <button type="button" class="btn-wrap cart-link d-flex align-items-center" 
                            onclick="window.location.href='/ajukan-sewa?key={{ $device->slug }}'">
                        Ajukan Sewa <i class="icon icon-arrow-io"></i>
                    </button>
                </div>
              </div>                    
              <div class="product-detail">
                  <h3 class="product-title">
                      <a href="/ajukan-sewa?key={{ $device->slug }}">{{ $device->brand. ' ' .$device->model }}</a>
                  </h3>
                  <p class="product-processor">{{ $device->processor_type.' / '.$device->ram.' / '.$device->storage}}</p>
                  <div 
                      class="item-price text-primary" 
                      data-daily-rate="{{ $device->daily_rate }}" 
                      data-monthly-rate="{{ $device->monthly_rate }}" 
                      data-yearly-rate="{{ $device->yearly_rate }}">
                      Rp. {{ number_format($device->daily_rate, 0, ',', '.') }} / Hari
                  </div>                
              </div>
          </div>
            @endforeach
          </div>
        </div>
        <div id="outer" data-tab-content>
          <div class="row d-flex flex-wrap">
            <div class="product-item col-lg-3 col-md-6 col-sm-6">
              <div class="image-holder">
                <img src="images/selling-products3.jpg" alt="Books" class="product-image">
              </div>
              <div class="cart-concern">
                  <div class="cart-button d-flex justify-content-between align-items-center">
                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">Ajukan Sewa <i class="icon icon-arrow-io"></i>
                    </button>
                  </div>
              </div>
              <div class="product-detail">
                <h3 class="product-title">
                  <a href="single-product.html">Silk White Shirt</a>
                </h3>
                <div class="item-price text-primary">$ 35.00</div>
              </div>
            </div>
            <div class="product-item col-lg-3 col-md-6 col-sm-6">
              <div class="image-holder">
                <img src="images/selling-products4.jpg" alt="Books" class="product-image">
              </div>
              <div class="cart-concern">
                  <div class="cart-button d-flex justify-content-between align-items-center">
                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">Ajukan Sewa <i class="icon icon-arrow-io"></i>
                    </button>
                  </div>
              </div>
              <div class="product-detail">
                <h3 class="product-title">
                  <a href="single-product.html">Grunge Hoodie</a>
                </h3>
                <div class="item-price text-primary">$ 30.00</div>
              </div>
            </div>
            <div class="product-item col-lg-3 col-md-6 col-sm-6">
              <div class="image-holder">
                <img src="images/selling-products6.jpg" alt="Books" class="product-image">
              </div>
              <div class="cart-concern">
                  <div class="cart-button d-flex justify-content-between align-items-center">
                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">Ajukan Sewa <i class="icon icon-arrow-io"></i>
                    </button>
                  </div>
              </div>
              <div class="product-detail">
                <h3 class="product-title">
                  <a href="single-product.html">Grey Check Coat</a>
                </h3>
                <div class="item-price text-primary">$ 30.00</div>
              </div>
            </div>
            <div class="product-item col-lg-3 col-md-6 col-sm-6">
              <div class="image-holder">
                <img src="images/selling-products7.jpg" alt="Books" class="product-image">
              </div>
              <div class="cart-concern">
                  <div class="cart-button d-flex justify-content-between align-items-center">
                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">Ajukan Sewa <i class="icon icon-arrow-io"></i>
                    </button>
                  </div>
              </div>
              <div class="product-detail">
                <h3 class="product-title">
                  <a href="single-product.html">Long Sleeve T-shirt</a>
                </h3>
                <div class="item-price text-primary">$ 40.00</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    function updatePrices() {
      // Ambil nilai dari dropdown
      const selectedRate = document.getElementById("device_slug").value;
  
      // Ambil semua elemen harga
      const priceElements = document.querySelectorAll(".item-price");
  
      // Loop melalui elemen harga dan perbarui sesuai pilihan
      priceElements.forEach((priceElement) => {
        const dailyRate = priceElement.getAttribute("data-daily-rate");
        const monthlyRate = priceElement.getAttribute("data-monthly-rate");
        const yearlyRate = priceElement.getAttribute("data-yearly-rate");
  
        let newRate;
        switch (selectedRate) {
          case "daily":
            newRate = dailyRate;
            priceElement.textContent = `Rp. ${formatNumber(newRate)} / Hari`;
            break;
          case "monthly":
            newRate = monthlyRate;
            priceElement.textContent = `Rp. ${formatNumber(newRate)} / Bulan`;
            break;
          case "yearly":
            newRate = yearlyRate;
            priceElement.textContent = `Rp. ${formatNumber(newRate)} / Tahun`;
            break;
        }
      });
    }
  
    // Helper untuk memformat angka
    function formatNumber(number) {
      return new Intl.NumberFormat("id-ID", {
        minimumFractionDigits: 0,
      }).format(number);
    }
  </script>
@endsection