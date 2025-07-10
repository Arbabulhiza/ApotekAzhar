@extends('layouts.app')
@section('title', 'Beranda')

@section('content')

<section id="home" class="pt-3">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 pt-3">
        <h1 class="display-4 fw-bold mb-3">Apotek Zahar</h1>
        <h3 class="mb-3">
          Apotek Sehat hadir memberikan layanan farmasi terbaik dengan obat-obatan lengkap, harga terjangkau, dan pelayanan ramah. Kami juga menyediakan layanan antar obat, tebus resep dokter, serta konsultasi langsung dengan apoteker profesional.
        </h3>
        <a href="#" class="btn btn-warna mt-2">
          <span class="text-wrna">Learn More..</span>
        </a>
      </div>
      <div class="col-md-6 text-center">
        <img src="{{ asset('images/zarr.jpg') }}" alt="Gambar Home" class="img-fluid" style="max-height: 400px;">
      </div>
    </div>
  </div>
</section>

<section id="produk" class="py-5 bg-light">
  <div class="container">
    <h1 class="text-center mb-5">Daftar Produk</h1>
    <div class="row g-4">
      @php
        $produks = [
          ['nama' => 'Paracetamol', 'deskripsi' => 'Obat pereda nyeri dan demam', 'gambar' => '1.jpg'],
          ['nama' => 'Ketoconazole', 'deskripsi' => 'Salep antijamur kulit', 'gambar' => '2.jpg'],
          ['nama' => 'Antasida', 'deskripsi' => 'Obat untuk mengurangi gejala sakit maag', 'gambar' => '3.jpg'],
          ['nama' => 'Cetirizine 10 mg', 'deskripsi' => 'Obat untuk mengatasi alergi dan gatal', 'gambar' => '4.jpg'],
          ['nama' => 'Aminophyllinne', 'deskripsi' => 'Obat untuk mengatasi sesak nafas', 'gambar' => '5.jpg'],
          ['nama' => 'Allopurinol 300 mg', 'deskripsi' => 'Obat untuk mengatasi asam urat', 'gambar' => '6.jpg'],
          ['nama' => 'Vollaren', 'deskripsi' => 'Obat untuk meringankan sakit sendi', 'gambar' => '7.jpg'],
          ['nama' => 'Clopidogrel 75 mg', 'deskripsi' => 'Obat untuk mencegah pembekuan darah', 'gambar' => '8.jpg'],
          ['nama' => 'Digoxin 0,25 mg', 'deskripsi' => 'Obat untuk mengatasi gagal jantung', 'gambar' => '9.jpg'],
        ];
      @endphp

      @foreach ($produks as $produk)
        <div class="col-md-4 col-sm-6">
          <div class="card h-100 shadow-sm">
             <img src="{{ asset('images/' . $produk['gambar']) }}" class="card-img-top" alt="{{ $produk['nama'] }}" style="height: 220px; object-fit: cover;">
            <div class="card-body">
              <h5 class="card-title fw-bold">{{ $produk['nama'] }}</h5>
              <p class="card-text text-muted">{{ $produk['deskripsi'] }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>


<section id="layanan" class="py-5 bg-light">
  <div class="container">
    <h1 class="text-center mb-5">Layanan Apotek</h1>
    <div class="row text-center">
      <div class="col-md-4 mb-4">
        <div class="layanan-card p-0 border rounded shadow-sm h-100 bg-white overflow-hidden">
          <div class="foto-layanan">
          <img src="{{ asset('images/tebus.jpg') }}" alt="Tebus Resep" class="foto-layanan">
          </div>
          <h4 class="fw-bold mt-3 mb-3">Tebus Resep</h4>
          <p>Kami menerima resep dokter dan menyiapkan obat secara cepat dan tepat dengan konsultasi langsung dari apoteker kami.</p>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="layanan-card p-0 border rounded shadow-sm h-100 bg-white overflow-hidden">
          <img src="{{ asset('images/obat.jpg') }}" alt="Antar Obat" class="foto-layanan">
          <h4 class="fw-bold mt-3 mb-3">Antar Obat</h4>
          <p>Apotek Zahar menyediakan layanan antar obat ke rumah untuk kenyamanan Anda, cukup hubungi kami via WhatsApp atau telepon.</p>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="layanan-card p-0 border rounded shadow-sm h-100 bg-white overflow-hidden">
          <img src="{{ asset('images/apotek.jpg') }}" alt="Konsultasi Apoteker" class="foto-layanan">
          <h4 class="fw-bold mt-3 mb-3">Konsultasi Apoteker</h4>
          <p>Dapatkan penjelasan tentang penggunaan obat, efek samping, dan interaksi obat secara gratis dari apoteker profesional kami.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<section id="lokasi" class="py-5 bg-light">
  <div class="container">
    <h1 class="text-center mb-4">Lokasi Apotek</h1>
    <div class="row align-items-center gx-4 gy-4">

      <!-- Kolom Kiri: Info -->
      <div class="col-md-6">
        <h5 class="fw-bold mb-2">Alamat Lengkap:</h5>
        <p class="mb-2">Apotek Zahar<br>Jl. Kesehatan No. 123<br>Kota Apotek, Indonesia 12345</p>

        <h5 class="fw-bold mb-2">Telepon:</h5>
        <p class="mb-2">0895-1472-7047</p>

        <h5 class="fw-bold mb-2">Email:</h5>
        <p class="mb-2">info@apotekzahar.com</p>

        <h5 class="fw-bold mb-2">Jam Operasional:</h5>
        <p class="mb-0">Senin - Sabtu: 08.00 - 21.00<br>Minggu & Libur: 09.00 - 17.00</p>
      </div>

      <!-- Kolom Kanan: Peta -->
      <div class="col-md-6">
        <div class="rounded shadow overflow-hidden" style="height: 320px;">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d796.4664684032268!2d108.46173109468852!3d-6.770504707334961!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f1f698feaec99%3A0x909eee85e942ce8a!2sKampoeng%20IT%20(%20JAGAT%20)!5e0!3m2!1sid!2sid!4v1752132906183!5m2!1sid!2sid"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>

    </div>
  </div>
</section>





@endsection
