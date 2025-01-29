@extends('sticky')

@section('content')

<section class="site-banner jarallax min-height300 padding-large" style="background: url(asset-images/2148210382.jpg) no-repeat; background-position: top;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="page-title">Ajukan Sewa</h2>
          <div class="breadcrumbs">
            <span class="item">
              <a href="index.html">Home /</a>
            </span>
            <span class="item">Ajukan Sewa</span>
          </div>
        </div>
      </div>
    </div>
  </section>

<section class="post-comment bg-light-grey" style = "display: flex; align-items: center; justify-content: center;">
    <div class="col-md-6">
        <h3 class="primary">Ajukan Sewa</h3>
        <form>
            <div class="row">
                <div class="col-md-12">
                <label for="exampleRecipientInput">Untuk siapa kebutuhan anda menyewa laptop?</label>
                <select class="u-full-width" id="exampleRecipientInput">
                    <option value="" disabled selected>-- Pilih --</option>
                    <option value="pribadi">Pribadi</option>
                    <option value="perusahaan">Perusahaan</option>
                </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>Email</label>
                    <input class="u-full-width" type="email" placeholder="contoh : example@mail.com" id="exampleEmailInput">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>Nama</label>
                    <input class="u-full-width" type="text" placeholder="contoh : John Doe" id="exampleEmailInput">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>Nomor HP</label>
                    <input class="u-full-width" type="number" placeholder="contoh : 08XXXXXXXXX" id="exampleEmailInput">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>Nama Perusahaan</label>
                    <input class="u-full-width" type="text" placeholder="contoh : PT. XXX" id="exampleEmailInput">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>Alamat</label>
                    <input class="u-full-width" type="text" placeholder="contoh : JL. XXX" id="exampleEmailInput">
                </div>
            </div>
          <input class="btn btn-medium btn-primary" type="submit" value="Submit">
        </form>
      </div>
  </section>

@endsection