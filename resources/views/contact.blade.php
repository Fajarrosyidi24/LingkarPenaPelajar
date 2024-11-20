@extends('layouts.guest')

@section('title')
    <title>Kontak - Lingkar Pena Pelajar</title>
@endsection

@section('content')
<div class="container">
    <!-- Contact Section -->
    <div class="row align-items-center my-5">
        <div class="col-lg-6">
            <h1 class="font-weight-bold">Kontak Kami</h1>
            <p class="lead">
                Kami senang mendengar dari Anda! Jika Anda memiliki pertanyaan, saran, atau ingin bergabung dengan kami, jangan ragu untuk menghubungi kami melalui formulir di bawah ini atau melalui media sosial.
            </p>
            <p>
                Kami akan berusaha merespon secepatnya. Terima kasih atas perhatian Anda.
            </p>
        </div>
        <div class="col-lg-6">
            <img class="img-fluid rounded" src="https://dummyimage.com/700x400/dee2e6/6c757d.jpg" alt="Kontak Lingkar Pena Pelajar">
        </div>
    </div>

    <!-- Contact Form Section -->
    <section class="my-5">
        <div class="text-center mb-4">
            <h2 class="font-weight-bold">Formulir Kontak</h2>
            <p class="text-muted">Silakan isi formulir di bawah ini untuk menghubungi kami.</p>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <form action="#" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-success btn-lg">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Contact Info Section -->
    <section class="my-5">
        <div class="text-center mb-4">
            <h2 class="font-weight-bold">Hubungi Kami Melalui</h2>
            <p class="text-muted">Selain melalui formulir, Anda juga bisa menghubungi kami lewat media sosial atau email.</p>
        </div>
        <div class="row text-center">
            <div class="col-lg-4 mb-4">
                <h4 class="font-weight-bold">Email</h4>
                <p><a href="mailto:info@lingkarpena.com" class="text-success">info@lingkarpena.com</a></p>
            </div>
            <div class="col-lg-4 mb-4">
                <h4 class="font-weight-bold">Media Sosial</h4>
                <a href="#" class="text-success"><i class="bi bi-instagram"></i> Instagram</a>
            </div>
            <div class="col-lg-4 mb-4">
                <h4 class="font-weight-bold">Alamat</h4>
                <p>Jl. Raya Glenmore No. 123, Kecamatan Glenmore, Banyuwangi, Indonesia</p>
            </div>
        </div>
    </section>
</div>
@endsection
