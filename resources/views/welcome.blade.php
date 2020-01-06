@extends('layouts.app')
@section('styles')
    <link href="{{ asset('css/landing-page.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="header" style="background-image: url({{asset('images/Foto-Akad-1.png')}});">
    <div class="text-box">
        <h2>Indonesia Property Syariah</h2>
        <p>Rahasia memiliki rumah tanpa melibatkan pihak Bank atau Lembaga Pembiayaan apapun itu bentuknya, tanpa was-was kejaran debt kolektor dan terhindar dari bunga RIBA yang ditantang PERANG oleh Allah Subhanahu Wa Ta'ala dan Rasul-Nya</p>
    </div>
    <a href="#section01" class="scroll-down-btn">
        <span>Scroll Down</span>
        <i class="fa fa-chevron-down"></i>
        <i class="fa fa-chevron-down"></i>
    </a>
</div>
<div id="section01" class="container-fluid py-5">
    <div class="row">
        <div class="col-lg-6 py-2">
            <div class="text-box">
                <div class="img-container">
                    <img src="{{asset('images/svg/future.svg')}}" alt="SVG">
                </div>
                <p>Sudah saatnya Sahabat bisa memiliki rumah dengan cara yang insyaAllah HALAL & BERKAH dengan lingkungan tetangga yang berkualitas.</p>
            </div>
        </div>
        <div class="col-lg-6 py-2">
            <div class="text-box">
                <div class="img-container">
                    <img src="{{asset('images/svg/hand-shake.svg')}}" alt="SVG">
                </div>
                <p>Kami hadir untuk memberikan solusi untuk Sahabat dapat memiliki rumah dengan cara yang insyaAllah Halal & Berkah tanpa harus berdosa RIBA</p>
            </div>
        </div>
    </div>
</div>
<div id="section02">
    <div class="row">
        <div class="col-md-12">
            <div class="text-box">
                <p>Sering kali kebanyakan pencari rumah saat ini membeli rumah melalui KPR BANK yang di dalamnya terdapat unsur RIBA misalnya seperti bunga dan denda keterlambatan pembayaran</p>
                <p>Padahal, MUI telah mengeluarkan fatwa bahwa hukum bunga (interest) baik pada Bank, Asuransi Pasar Modal, Pegadaian, Koperasi dan Lembaga Keuangan lainnya adalah HARAM (RIBA).</p>
                <p class="not-bold">"Keputusan Rapat Komisi Fatwa MUI, Tanggal 11 Dzulqa'idah 1424 / 03 Januari 2004; 28 Dzulqa'iqah 1424 / 17 Januari 2004 dan 05 Dzulqa'idah 1424 / 24 Januari 2004"</p>
            </div>
        </div>
    </div>
</div>
<div id="section03">
    <div class="row d-flex justify-content-center">
        <div class="col">
            <div class="text-box text-center">
                <h2 class="bold">Tahukan <span class="blue-title">Sahabat</span>?</h2>
                <div class="img-container">
                    <img src="{{asset('images/svg/svg-03.svg')}}" alt="SVG">
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="text-box mt-5">
                <p>Kelihatannya memang skema KPR Bank sangat membantu dan sangat menjadi solusi untuk memenuhi kebutuhan rumah untuk keluarga. Namun, kenyataannya tidak sedikit nasabah KPR Bank harus merelakan rumahnya karena ketidak sanggupan membayar cicilan dikemudian harinya. Bahkan banyak kisah nyata keluarga yang sering ditimpa musibah atau keluarga menjadi tidak harmonis setelah melakukan transaksi akad RIBA ini. Karena bisa jadi akad RIBA inilah salah satu faktor pengundang murka Allah Subhanahu Wa Ta'ala. Na'udzubillahi min dzalik.</p>
                <a href="https://api.whatsapp.com/send?phone={{$contact->phone}}&text=Assalamu'alaikum Wr Wb, Halo admin Indonesia Property Syariah." class="btn btn-success ipr-rounded-btn px-4"><span class="fa fa-phone mr-1"></span> Whatsapp</a>
            </div>
        </div>
    </div>
</div>
<div id="section04">
    <div class="row mb-5">
        <div class="col-md-12 text-center">
            <h2 class="bold">Pernah kah <span class="blue-title">Sahabat</span> mendengar hal-hal di berikut ini?</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <ul>
                <li>Sudah bertahun-tahun mencicil rumah namun saat hendak melunaskannya pokok hutang masih sangat besar?</li>
                <li>Rumah diberi tanda cat / pilox yang bertandakan "Sedang dalam pengawasan bank"</li>
                <li>Melunaskan cicilan lebih cepat malah dikenakan pinalty</li>
            </ul>
        </div>
        <div class="col-lg-6">
            <ul>
                <li>Saat hendak akad dikenakan biaya KPR yang besar dan wajib diasuransikan</li>
                <li>Rumah dilelang tanpa ada pengembalian uang muka & cicilan yang sudah berjalan</li>
                <li>Bahkan, sering tertimpa musibah atau keluarga jadi kurang harmonis setelah tinggal di rumah yang dibeli dengan cara RIBA</li>
            </ul>
        </div>
    </div>
</div>
<div id="section05">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="text-box mt-5 mb-4">
                <p>Jika Sahabat pernah mendengar atau mungkin mengalami langsung hal tersebut. Berarti Sahabat harus simak skema kepemilikan rumah dengan cara yang insyaAllah HALAL & BERKAH ini!</p>
                <a href="https://api.whatsapp.com/send?phone={{$contact->phone}}&text=Assalamu'alaikum Wr Wb, Halo admin Indonesia Property Syariah." class="btn btn-success ipr-rounded-btn px-4"><span class="fa fa-phone mr-1"></span> Whatsapp</a>
            </div>
        </div>
        <div class="col">
            <div class="text-box text-center">
                <h2 class="bold">Tunggu Apalagi <span class="blue-title">Sahabat</span>?</h2>
                <div class="img-container">
                    <img src="{{asset('images/svg/svg-05.svg')}}" alt="SVG">
                </div>
            </div>
        </div>
    </div>
</div>
<div id="section06" style="background-image: url({{asset('images/etienne-beauregard-riverin-B0aCvAVSX8E-unsplash.jpg')}});">
    <div class="white-wrapper">
        <div class="row py-4 mt-4">
            <div class="col-md-12 text-center">
                <h2 class="bold">Kenapa harus Property Syariah?</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6"> 
                <ul>
                    <li>Terhindar dari dosa RIBA, satu-satunya dosa yang diancam PERANG oleh Allah.</li>
                    <li>Nilai keberkahan yang saat ini sangat sulit didapatkan.</li>
                    <li>Langsung ke Developer tanpa Bank atau Lembaga Pembiayaan apapun.</li>
                    <li>Tanpa BI Checking dan tanpa biaya KPR yang nilainya cukup besar.</li>
                    <li>Tanpa ada Penalty saat hendak akan melunaskan cicilan cepat lebih cepat</li>
                </ul>
            </div>
            <div class="col-lg-6"> 
                <ul>
                    <li>Tanpa ada Sita saat terjadi gagal bayar.</li>
                    <li>Lingkungan yang berkualitas.</li>
                    <li>Membantu membangun peradaban yang menanamkan nilai-nilai islami.</li>
                    <li>Solusi untuk Sahabat yang bekerja dibidang informal.</li>
                    <li>Solusi untuk Sahabat yang memiliki kemampuan namun BI Checking jelek</li>
                    <li>Tanpa ada Denda keterlambatan saat terjadi keterlambatan pembayaran.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="footer pb-4" style="background-image: url({{asset('images/footer-bg.jpg')}});">
    <div class="text-box">
        <p>"Anda tidak berdosa jika tidak memiliki rumah / mobil mewah namun Anda berdosa jika memilikinya dengan cara RIBA"</p>
        <p>Sekarang giliran Sahabat untuk membuktikannya, jangan terlalu lama menunggu untuk beli, karena kunci sukses investasi property adalah</p>
        <p>"Jangan tunggu lalu beli tapi beli dan tunggu lah.."</p>
    </div>
</div>
@endsection
