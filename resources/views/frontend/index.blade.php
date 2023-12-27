@extends('frontend.template')
@section('content')
    {{-- slider --}}
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('img/slider/slider1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('img/slider/slider2.jpg') }}" alt="Second slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    {{-- slider --}}

    {{-- <div class="container-fluid bg-secondary">
    <div class="row">
        <div class="col-10"><h1>test</h1></div>
        <div class="col-2"><h1>test</h1></div>
    </div>
</div> --}}


    <div class="container py-4">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="container p-0 mr-3">
                        <h6 class=" rounded text-white bg-success p-2 ">BERITA KABUPATEN</h6>
                    </div>
                    @foreach ($paginationPosts as $item)
                        <div data-aos="fade-up" class="card shadow-lg m-1" style="width: 17rem;">
                            <span class="notify-badge"><i class="fas fa-bookmark"></i></span>
                            <img src="{{ asset('/storage/posts/' . $item->image) }}" class="rounded img-thumbnail">
                            <div class="card-body">
                                <h4 class="card-title font-weight-bold">{{ Str::limit($item->title, 30) }}</h4>
                                {{-- <span class="badge badge-primary">{{ $category_name }}</span> --}}

                                <p class="card-text">{{ Str::limit($item->content, 100) }}</p>
                                <a href="{{ route('frontend.show', ['id' => $item->id]) }}" class="btn">Lihat
                                    Detail</a>

                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $paginationPosts->links() }}
            </div>
            <div class="col-md-3">
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
                    @foreach ($posts as $recentPost)
                        {{-- <li></li> --}}
                        <a href="{{ url('/berita/{id}') }}">
                            <p>{{ $recentPost->title }}</p>
                        </a>

                        <!-- Tambahkan informasi lain jika diperlukan -->
                    @endforeach
                </div>

            </div>
        </div>
    </div>
    <script>
        AOS.init();
    </script>
@endsection
