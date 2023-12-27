{{-- navbar --}}
{{-- header --}}
<div class="container-fluid bg-success bg-gradient p-4">
    <div data-aos="zoom-in" class="col-md-12">
        <div class="header text-center text-bold">
            <img class="img-fluid mb-2" width="60px" src="{{ asset('img/logokab.png') }}">
            <h4 class="text-white font-weight-bold">BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA</h4>
            <h5 class="text-white font-weight-bold">KABUPATEN SELUMA</h5>
        </div>
    </div>
</div>
{{-- end header --}}
{{-- menu --}}
{{-- <a class="navbar-brand" href="#">Navbar</a> --}}
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-lg sticky-top ">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center text-success" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link text-success" href="/">Beranda <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-success" href="#" id="navbarDropdownMenuLink"
                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Profil
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Visi Misi</a>
                    <a class="dropdown-item" href="#">Sejarah</a>
                    <a class="dropdown-item" href="#">Tupoksi</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-success" href="#" id="navbarDropdownMenuLink"
                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Layanan
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Pensiun</a>
                    <a class="dropdown-item" href="#">Taspen</a>
                    <a class="dropdown-item" href="#">Cuti</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link text-success" href="#">Produk Hukum</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-success" href="#">Seleksi JPT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-success" href="#">Galeri</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-success" href="#">Kontak</a>
            </li>
        </ul>
    </div>
</nav>
