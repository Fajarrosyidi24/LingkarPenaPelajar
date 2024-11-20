@extends('layouts.guest')

@section('title')
    <title>Home - Lingkar Pena Pelajar</title>
@endsection

@section('content')
<div class="container">
    <!-- Hero Section -->
    <div class="row align-items-center my-5">
        <div class="col-lg-6">
            <h1 class="font-weight-bold">Selamat Datang di Lingkar Pena Pelajar</h1>
            <p class="lead">
                Lingkar Pena Pelajar adalah platform yang dikelola oleh PAC IPNU IPPNU Kecamatan Glenmore. 
                Tempat berbagi karya tulis dan artikel inspiratif dari para anggota.
            </p>
            <a class="btn btn-success btn-lg" href="{{ url('/blog') }}">Jelajahi Blog</a>
            <a class="btn btn-outline-success btn-lg" href="{{ url('/about') }}">Tentang Kami</a>
        </div>
        <div class="col-lg-6">
            <img class="img-fluid rounded" src="https://dummyimage.com/700x400/dee2e6/6c757d.jpg" alt="Lingkar Pena Pelajar">
        </div>
    </div>

    <!-- Features Section -->
    <section class="my-5">
        <div class="text-center mb-4">
            <h2 class="font-weight-bold">Kenapa Lingkar Pena Pelajar?</h2>
            <p class="text-muted">Kami menyediakan ruang untuk menyalurkan ide, bakat, dan karya tulis pelajar.</p>
        </div>
        <div class="row text-center">
            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <i class="bi bi-journal-richtext h1 text-success"></i>
                        <h4 class="card-title">Artikel Inspiratif</h4>
                        <p class="card-text">Beragam artikel menarik yang ditulis oleh para anggota komunitas.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <i class="bi bi-pencil-square h1 text-success"></i>
                        <h4 class="card-title">Eksplorasi Kreativitas</h4>
                        <p class="card-text">Tempat berbagi karya tulis, puisi, cerita pendek, dan lainnya.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <i class="bi bi-people h1 text-success"></i>
                        <h4 class="card-title">Komunitas Aktif</h4>
                        <p class="card-text">Lingkungan yang mendukung para pelajar untuk terus berkembang.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Articles Section -->
    <section class="my-5">
        <div class="text-center mb-4">
            <h2 class="font-weight-bold">Artikel Terbaru</h2>
            <p class="text-muted">Simak tulisan terbaru dari anggota Lingkar Pena Pelajar.</p>
        </div>
        <div class="row">
            @php
                $dummyArticles = [
                    [
                        'title' => 'Pentingnya Literasi Bagi Pelajar',
                        'date' => '20 November 2024',
                        'excerpt' => 'Meningkatkan kemampuan literasi di kalangan pelajar sangat penting untuk menciptakan generasi yang kritis dan kreatif.',
                        'image' => 'https://dummyimage.com/600x400/adb5bd/6c757d',
                        'link' => '#'
                    ],
                    [
                        'title' => 'Tips Menulis Artikel yang Menarik',
                        'date' => '18 November 2024',
                        'excerpt' => 'Panduan praktis untuk membuat artikel yang memikat pembaca dan mudah dipahami.',
                        'image' => 'https://dummyimage.com/600x400/adb5bd/6c757d',
                        'link' => '#'
                    ],
                    [
                        'title' => 'Puisi: Rindu Dalam Diam',
                        'date' => '15 November 2024',
                        'excerpt' => 'Sebuah puisi pendek yang menggambarkan rindu yang tertahan dalam kebisuan.',
                        'image' => 'https://dummyimage.com/600x400/adb5bd/6c757d',
                        'link' => '#'
                    ],
                ];
            @endphp

            @foreach ($dummyArticles as $article)
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <a href="{{ $article['link'] }}">
                            <img class="card-img-top" src="{{ $article['image'] }}" alt="{{ $article['title'] }}">
                        </a>
                        <div class="card-body">
                            <div class="small text-muted">{{ $article['date'] }}</div>
                            <h4 class="card-title">{{ $article['title'] }}</h4>
                            <p class="card-text">{{ $article['excerpt'] }}</p>
                            <a class="btn btn-success" href="{{ $article['link'] }}">Baca Selengkapnya →</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</div>
@endsection
