@extends('layouts')

@section('title', 'Produk Tidak Ditemukan — Abati Store')

@section('content')
<style>
    .error-page {
        min-height: 65vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 48px 20px;
        text-align: center;
        background: #fff;
    }

    .error-content {
        max-width: 480px;
    }

    .error-code {
        font-size: clamp(76px, 15vw, 120px);
        line-height: 1;
        font-weight: 800;
        letter-spacing: -5px;
        color: #8b7355;
        margin-bottom: 20px;
    }

    .error-content h1 {
        font-size: 26px;
        color: #252525;
        margin-bottom: 12px;
    }

    .error-content p {
        color: #666;
        line-height: 1.7;
        margin-bottom: 28px;
    }

    .error-actions {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 12px;
    }

    .error-actions a {
        display: inline-block;
        padding: 12px 22px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 600;
    }

    .error-primary {
        background: #8b7355;
        color: #fff;
    }

    .error-secondary {
        border: 1px solid #ddd;
        color: #333;
    }
</style>

<main class="error-page">
    <div class="error-content">
        <div class="error-code">404</div>

        <h1>Produk Tidak Ditemukan</h1>

        <p>
            Maaf, produk yang kamu cari tidak ditemukan atau
            mungkin sudah tidak tersedia. Yuk, lihat koleksi
            lainnya di Abati Store.
        </p>

        <div class="error-actions">
            <a href="{{ route('katalog') }}" class="error-primary">
                Lihat Katalog
            </a>

            <a href="{{ url('/') }}" class="error-secondary">
                Kembali ke Beranda
            </a>
        </div>
    </div>
</main>
@endsection