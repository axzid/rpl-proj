@include('components.navbar')

<style>
  body {
    margin: 0;
    padding: 0;
    background-color: black;
  }

  .slider-container {
    position: relative;
    width: 100%;
    margin: 0 auto;
    overflow: hidden;
  }

  .slider-image {
    width: 100%;
    height: 90vh;
    object-fit: cover;
    display: block;
    filter: brightness(80%);
  }

  .slider-text {
    position: absolute;
    bottom: 80px;
    left: 50px;
    color: white;
    font-size: 68px;
    font-family: Amethysta;
  }

  .slider-text2 {
    position: absolute;
    bottom: 150px;
    left: 50px;
    color: #6DC2FF;
    font-size: 18px;
    font-weight: bold;
    font-family: 'Source Sans 3', sans-serif;
  }

  .slider-arrow {
    position: absolute;
    border-radius: 20px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 24px;
    color: white;
    text-decoration: none;
    margin: 0px 30px;
    padding: 12px;
    background-color: rgba(0, 0, 0, 0.5);
    transition: opacity 0.3s ease;
    /* Transisi saat opacity berubah */
    opacity: 0;
    /* Opacity awal */
  }

  .slider-arrow:hover {
    opacity: 1;
    /* Opacity saat dihover */
  }

  .left {
    left: 10px;
  }

  .right {
    right: 10px;
  }

  .container1 {
    padding-top: 70px;
    display: flex;
    flex-direction: column;
    gap: 50px;
    color: white;
  }

  .container1 .container-top {
    display: flex;
    gap: 50px;
  }

  .text {
    width: 40%;
  }

  .text h1 {
    font-size: 48px;
    font-family: 'Amethysta', sans-serif;
  }

  .text h4,
  .container1 h4 {
    color: #e58409;
    font-size: 18px;
    font-weight: bold;
    font-family: 'Source Sans 3', sans-serif;
  }

  .text p,
  .container-bottom div p {
    font-size: 18px;
    font-family: 'Source Sans 3', sans-serif;
  }

  .image {
    width: 60%;
    height: 400px;
    overflow: hidden;
  }

  .image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .container-bottom {
    display: flex;
    justify-content: space-between;
    gap: 30px;
  }

  .container-bottom div {
    width: 30%;
  }

  .container-bottom div img {
    width: 100%;
    height: 200px;
    object-fit: cover;
  }

  .container-bottom div h4 {
    color: #6dc2ff;
    font-size: 18px;
    font-weight: bold;
    font-family: 'Source Sans 3', sans-serif;
  }

  .container-bottom div p {
    color: white;
    font-size: 24px;
    font-weight: bold;
    font-family: Amethysta;
  }

</style>
<header class="slider-container">
  <?php
        // Daftar gambar yang akan ditampilkan di slider
        $images = array(
            "images/Kupatan.png", 
            "images/barongan.jpg", 
            "images/Singit.png"
        );
        $texts = array(
            "Kupatan",
            "Barongsai",
            "Singit"
        );
            $texts2 = array(
            "Upacara Adat",
            "Upacara Adat",
            "Makanan Khas"
        );
        //rand number between 0 and 2
        $random = rand(0, 2);

        echo '<img src="' . $images[$random] . '" class="slider-image" />';
        echo '<div class="slider-text">' . $texts[$random] . '</div>';
        echo '<div class="slider-text2">' . $texts2[$random] . '</div>';

    ?>

</header>

<div class="container1 container-md">
  <div class="container-top">
    <div class="text">
      <h4>Tarian Adat</h4>
      <h1><a style="text-decoration:none; color:white;" href="{{ route('budaya.show', $firstBudaya->id) }}">{{$firstBudaya->name}}</a></h1>
      <p>{{ Illuminate\Support\Str::limit($firstBudaya->description,200) }}</p>
      <a class="btn btn-danger" href="{{ route('budaya.show', $firstBudaya->id) }}">Read More</a>
    </div>
    <div class="image">
      <img src="{{$firstBudaya->image}}" alt="">
    </div>
  </div>
  <h4>Artikel Lainnya</h4>
  <div class="container-bottom">
    @foreach($latestBudayas as $budaya)
    <div>
      <img src="{{$budaya->image}}" alt="">
      <h4 style="margin-top:10px;">{{$budaya->category->name}}</h4>
      <p><a style="text-decoration:none; color:white;" href="{{ route('budaya.show', $budaya->id) }}">{{$budaya->name}}</a></p>
    </div>
    @endforeach
  </div>
</div>


<div class="section-bottom container-fluid" style="padding: 50px 0;">
    <section>

        <div class="card">
            <img src="https://cdn.discordapp.com/attachments/903535789852471312/1192547779030040720/masjid_kudus_2.png?ex=65a979aa&is=659704aa&hm=094a6f60aa0983d11590503dd32747001b4de895146fe5721fae29eaf74cdff8&" alt="">
            <div class="desc">
                <h4>Daerah</h4>
                <h1>KUDUS KOTA KRETEK</h1>
                <p>Bukan tanpa sebab Kudus mendapat sebutan “kota kretek”. Berikut alasan kenapa kudus disebut kota kretek</p>
                <a href="">Selengkapnya</a>
            </div>
        </div>

        <div class="card" id="reverse">
            <img src="https://cdn.discordapp.com/attachments/903535789852471312/1192547588298252409/Tugu-Bandeng-Pati-1_3.png?ex=65a9797d&is=6597047d&hm=09f3db0d096dc9f9b0251990a91fbc343df4b8fda0c116b5791631f20c2c5240&" alt="">
            <div class="desc">
                <h4>Daerah</h4>
                <h1>PATI BUMI MINA TANI</h1>
                <p>Sebutan kota Pati bagi masyarakat luas. Arti dari Pati Bumi Mina Tani</p>
                <a href="">Selengkapnya</a>
            </div>
        </div>
        <div class="card">
            <img src="https://cdn.discordapp.com/attachments/903535789852471312/1192547588008841296/tari_aceh_5.png?ex=65a9797d&is=6597047d&hm=923fd1481e3fed41ed2dca0a01954739d68bf8b00d2d5f30d61658ab903998e5&" alt="">
            <div class="desc">
                <h4>Daerah</h4>
                <h1>JEPARA KOTA UKIR</h1>
                <p>Tak hanya kota ukir, Jepara menyimpan banyak sekali industri kreatif yang besar. Berikut beberapa julukan kota Jepara</p>
                <a href="">Selengkapnya</a>
            </div>
        </div>

    </section>
</div>


{{-- <div class="container-fluid contain-kota">
  <div class="pati">
    <img src="pati.jpg" alt="Produk 1">
    <div class="text">
      <h3>Pati</h3>
      <h1>PATI BUMI MINA TANI</h1>
      <p>PATI BUMI MINA TANI, sebutan kota Pati bagi masyarakat luas. Arti dari PATI BUMI MINA TANI</p>
      <h2 onclick="redirectToPage('halaman2')">Selengkapnya</h2>
    </div>
  </div>
</div> --}}


@include('components.footer')
