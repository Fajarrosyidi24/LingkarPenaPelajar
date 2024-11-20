@extends('layouts.guest')

@section('title')
    <title>Tentang Kami - Lingkar Pena Pelajar</title>
@endsection

@section('content')
<div class="container">
    <!-- About Section -->
    <div class="row align-items-center my-5">
        <div class="col-lg-6">
            <h1 class="font-weight-bold">Tentang Lingkar Pena Pelajar</h1>
            <p class="lead">
                Lingkar Pena Pelajar adalah platform literasi yang dikelola oleh PAC IPNU IPPNU Kecamatan Glenmore. Kami hadir untuk memberikan ruang bagi para pelajar untuk berbagi karya tulis, artikel, dan berbagai inspirasi kreatif lainnya.
            </p>
            <p>
                Kami berkomitmen untuk mengembangkan budaya literasi di kalangan pelajar Indonesia. Dengan berbagai fitur yang kami sediakan, kami berharap dapat mendorong setiap pelajar untuk menulis, berkolaborasi, dan berbagi inspirasi.
            </p>
        </div>
        <div class="col-lg-6">
            <img class="img-fluid rounded" src="https://dummyimage.com/700x400/dee2e6/6c757d.jpg" alt="Tentang Lingkar Pena Pelajar">
        </div>
    </div>

    <!-- Visi dan Misi Section -->
    <section class="my-5">
        <div class="text-center mb-4">
            <h2 class="font-weight-bold">Visi dan Misi</h2>
            <p class="text-muted">Berikut adalah visi dan misi yang menjadi dasar setiap langkah kami:</p>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <h4 class="font-weight-bold">Visi</h4>
                <p>
                    Mewujudkan pelajar yang kreatif, inovatif, dan berdaya melalui literasi.
                </p>
            </div>
            <div class="col-lg-6 mb-4">
                <h4 class="font-weight-bold">Misi</h4>
                <ul>
                    <li>Memberikan ruang bagi pelajar untuk berkarya dan berinovasi.</li>
                    <li>Mendorong pembelajaran dan pengembangan diri melalui tulisan.</li>
                    <li>Menumbuhkan semangat berbagi pengetahuan dan pengalaman di kalangan pelajar.</li>
                </ul>
            </div>
        </div>
    </section>
</div>
@endsection
