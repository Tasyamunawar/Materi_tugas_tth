@extends('Front.baseFront')

@section('title', 'Data Obat Edar Masyarakat !')

@section('content')
<!-- Hero Section -->
<section class="hero-section container">

    <div class="row">

        <div class="col-md-6 content-hero d-flex align-items-center">

            <div>
                <span>Informasi Seputar Materi</span>

                <h2 class="hero-title">Berbagai Macam <span>Jenis <br>
                        Pelajaran</span> Biologi</h2>

                <p class="desc">Website ini membantu untuk mengetahui <br>
                    berbagai informasi pembelajaran Biologi.</p>

            </div>

        </div>

        <div class="col-md-6 hero-image">
            <img class="img-fluid " src="{{ asset('materi/images/bio1.jpg') }}" alt="Banner" width="500" height="40">
        </div>

    </div>

</section>
<!-- End Hero Section -->



<!-- Klasifikasi -->
<section class="benefits container mt-5 py-5 mb-0">

    <div class="title-benefits text-center">
        <span>Berbagai Macam</span>
        <p class="sub-title">Informasi yang Beredar di Umum</p>
    </div>

    <div class="varian-benefits">
        <div class="row">

            <div class="col-md-4 varian">
                <img src="{{ asset('materi/images/bio1.jpg') }}" width="80" height="60"> <br>
                <span>Biologi</span>
                <p class="varian-content">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    <br>
                    Eum saepe accusantium natus? Itaque unde placeat veritatis dolores quisquam.
                </p>
            </div>

            <div class="col-md-4 varian">
                <img src="{{ asset('materi/images/bio2.jpg') }}" width="80" height="60"> <br>
                <span>Biologi</span>
                <p class="varian-content">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    <br>
                    Eum saepe accusantium natus? Itaque unde placeat veritatis dolores quisquam.
                </p>
            </div>

            <div class="col-md-4 varian">
                <img src="{{ asset('materi/images/bio3.jpg') }}" width="80" height="60"> <br>
                <span>Biologi</span>
                <p class="varian-content">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    <br>
                    Eum saepe accusantium natus? Itaque unde placeat veritatis dolores quisquam.
                </p>
            </div>

        </div>
    </div>

</section>
<!-- End Klasifikasi -->

<!-- footer -->
<section class="footer-section mb-5">
    <!-- <div class="container text-center header-footer">
        <span>Informasi</span>
        <h3>Pengetahuan Biologi umum</h3>
    </div> -->

    <div class="container-fluid mt-5 py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>About Us</h1>
                    <br>
                    <p>Website materi memberikan informasi terkait biologi yang ada di umum,
                        dalam website ini pembaca akan mendapatkan hal - hal terkait dengan biologi dalam pengelompokan secara garis besarnya.
                        materi ini menyediakan informasi terkait beberapa jenis biologi yang ada di umum.
                    </p>
                    <p><i class="bi bi-capsule"></i>  Biologi itu seru</p>
                    <p><i class="bi bi-capsule-pill"></i>  Biologi itu menyenangkan</p>
                    <!-- <p><i class="bi bi-prescription2"></i>  Obat Cair berbentuk Syrup</p> -->
                    <br>
                    <p><i class="bi bi-hospital-fill"></i> Tempat Menanyakan</p>

                </div>

                <div class="col-md-6">
                    <h1>Picture</h1>
                    <br>
                    <div class="row row-cols-2 row-cols-md-2 g-3">
                        <div class="col">
                            <img class="img-fluid " src="{{ asset('materi/images/bio1.jpg') }}" alt="Banner" width="500" height="40">
                        </div>
                        <div class="col">
                            <img src="{{ asset('materi/images/bio2.jpg') }}" class="img-fluid">
                        </div>
                        <div class="col">
                            <img src="{{ asset('materi/images/bio4.jpg') }}" class="img-fluid">
                        </div>
                        <div class="col">
                            <img src="{{ asset('materi/images/bio3.jpg') }}" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <p class="text-center copy">
        All Rights Reserved. Copyrigh by: 💉materi🩺2024.
    </p>
</section>
<!-- end footer -->

@endsection