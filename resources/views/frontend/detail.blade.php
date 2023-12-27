@extends('frontend.template')
@section('content')
    <div class="bg-image bg-opacity-20 p-5 text-center shadow-1-strong rounded mb-5 text-white rounded-0"
        style="background-image: url('https://images.unsplash.com/photo-1604339454409-701c5278c546?q=80&w=1854&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">

        <p>Section</p>
        <h1 class="mb-3 h2">Berita Daerah</h1>
    </div>
    <div class="container py-4">
        <div class="row">
            <div class="col-md 8">
                <div class="breadcrumb bg-white">
                    <a href="/">Beranda </a>/ <a href="#">Semua Berita </a>
                    /<a href="#">Berita Daerah </a>
                </div>

                @if ($post)
                    <h1 class="text-dark font-weight-bold">{{ $post->title }}</h1>
                    <div class="social-icons mb-3">
                        <!-- Facebook -->
                        <a class="btn btn-primary" style="background-color: #234ca1;" href="#" role="button"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary" style="background-color: #06a5d1;" href="#" role="button"><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-primary" style="background-color: #0082ca;" href="#" role="button"><i
                                class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-primary" style="background-color: #2fc467;" href="#" role="button"><i
                                class="fab fa-whatsapp"></i></a>
                    </div>
                    <img src="{{ asset('/storage/posts/' . $post->image) }}" class="rounded mb-3" style="width: 100%">
                    <div class="border border-primary border-1 mb-2"></div>
                    <p>{{ $post->content }}</p>
                @endif
            </div>
            <div class="col-md-4">
                <div class="container p-0 mr-3">
                    <h6 class=" rounded text-white bg-success p-2 ">INFORMASI PENTING</h6>
                </div>
                <a href="#"><img class="img-thumbnail m-1" src="{{ asset('img/sil.png') }}" alt=""></a>
                <a href="#"><img class="img-thumbnail m-1" src="{{ asset('img/sip.png') }}" alt=""></a>
                <div>&nbsp;</div>
                <div class="container p-0 mr-3">
                    <h6 class=" rounded text-white bg-success p-2 ">INFORMASI PENTING</h6>
                </div>
                <div data-aos="zoom-in">
                    <p class="p-2">ASN Kab. Bandung Wajib Lengkapi Data Pegawai pada aplikasi simpel</p>
                </div>

                <div>&nbsp;</div>
                <div class="container p-0 mr-3">
                    <h6 class=" rounded text-white bg-success p-2 ">Berita Terkini</h6>
                </div>
                <div data-aos="zoom-in">
                    {{-- @foreach ($posts as $recentPost)
                        <li>{{ $recentPost->title }}</li>
                        <!-- Tambahkan informasi lain jika diperlukan -->
                    @endforeach --}}
                </div>
            </div>
        </div>
    </div>
@endsection
