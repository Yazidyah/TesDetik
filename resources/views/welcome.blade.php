<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css" >  
    <title>DetikTravel</title>
    <style>
    
    </style>
</head>

<body>
    <section id="/">
        <div class="hero-section" id="heroSection">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="detiktravel.png" alt="Logo">
                    </a>
                    <ul class="navbar-nav ms-auto gap-4">
                        <li class="nav-item text-black">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#tentang-program">Tentang Program</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#berita">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/Registrasi">Registrasi</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="hero-text d-flex flex-row">
                <div>
                    <h1>Explore Thailand</h1>
                    <p>by detiktravel</p>
                    <a href="/#tentang-program" class="btn btn-warning">Tentang Program</a>
                </div>
                <div class="mt-5">
                    <div class="card-group">
                        <div class="card">
                            <img src="travel1.jpeg" class="card-img-top shadow-lg" alt="Foto" onclick="changeBackground('travel1.jpeg')">
                        </div>
                        <div class="card">
                            <img src="travel2.jpeg" class="card-img-top shadow-lg" alt="Foto" onclick="changeBackground('travel2.jpeg')">
                        </div>
                        <div class="card">
                            <img src="travel3.jpeg" class="card-img-top shadow-lg" alt="Foto" onclick="changeBackground('travel3.jpeg')">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="tentang-program" class="tentang-program h-52 py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="rounded-circle overflow-hidden position-relative" style="width: 300px; height: 300px;">
                        <img src="travel1.jpeg" alt="Program Image" class="img-fluid position-absolute top-50 start-50 translate-middle" style="object-fit: cover; width: 100%; height: 100%;">
                    </div>
                </div>
                <div class="col-md-6 text-white">
                    <h2 class="fw-bold">Tentang Program</h2>
                    <p>Bergabunglah dalam "Explore Thailand bersama Detiktravel"! Kompetisi ini terbuka bagi pembaca Detiktravel yang ingin menikmati perjalanan ke Thailand. Kunjungi destinasi menakjubkan seperti pantai Phi Phi Island dan destinasi lain di Phuket, Thailand. Jadi bagian dari penjelajahan kami dan menangkan hadiah jalan-jalan yang tak terlupakan!</p>
                    <a href="#" class="btn btn-warning text-dark fw-bold">DAFTAR SEKARANG</a>
                    <h4 class="mt-4">Mekanisme</h4>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <span class="badge bg-light text-dark">1 - 31 Mei 2023</span>
                            <span class="ms-2">Isi Formulir</span>
                            <p class="ms-5">Lengkapi formulir pendaftaran dengan data sebenarnya.</p>
                        </li>
                        <li class="mb-3">
                            <span class="badge bg-light text-dark">1 - 7 Juni 2023</span>
                            <span class="ms-2">Penjurian</span>
                            <p class="ms-5">Ikuti rangkaian penjurian online/offline.</p>
                        </li>
                        <li>
                            <span class="badge bg-light text-dark">8 Juni 2023</span>
                            <span class="ms-2">Pengumuman Pemenang</span>
                            <p class="ms-5">Pengumuman pemenang dan persiapan keberangkatan.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

 <!-- Section Berita -->
<section id="berita" class="py-5" style="background-color: #f0f0f0;">
    <div class="container">
        <!-- Header Berita -->
        <div class="d-flex flex-row align-items-center mb-4">
            <img src="detiktravel.png" alt="Logo" style="width: 280px;">
            <h1 class="ms-3 text-warning">Update</h1>
        </div>

        <!-- Main Card with Image and Text -->
        <div class="row">
            <div class="col-md-8">
                <div class="card main-card position-relative overflow-hidden text-white" style="cursor: pointer;">
                    <img src="travel1.jpeg" class="card-img-top main-img" alt="Main Image">
                    <div class="image-gradient"></div>
                    <div class="card-body bg-transparent position-absolute bottom-0 w-100 text-center">
                        <h5 class="card-title mb-0 main-title">Keindahan Pulau di Negara Thailand</h5>
                        <p class="card-text">Keindahan Pulau di Negara Thailand membuat siapapun ingin pergi ke sana.</p>
                    </div>
                </div>
            </div>

            <!-- Grid of Thumbnails -->
            <div class="col-md-4 d-flex flex-column gap-3">
                <div class="card thumbnail-card d-flex flex-row align-items-center" style="cursor: pointer;">
                    <img src="travel2.jpeg" class="card-img-top thumbnail-img main-img" alt="Thumbnail Image 1">
                    <div class="ms-2 ">
                        <h5 class="card-title mb-0 main-title">Keindahan Pulau di Negara Thailand</h5>
                        <p class="text-muted text-sm" style="font-size: 0.8rem;">3 Jam yang lalu</p>
                    </div>
                </div>
                <div class="card thumbnail-card d-flex flex-row align-items-center" style="cursor: pointer;">
                    <img src="travel3.jpeg" class="card-img-top thumbnail-img main-img" alt="Thumbnail Image 2">
                    <div class="ms-2">
                        <h5 class="card-title mb-0 main-title">Keindahan Pulau di Negara Thailand</h5>
                        <p class="text-muted text-sm" style="font-size: 0.8rem;">3 Jam yang lalu</p>
                    </div>
                </div>
                <div class="card thumbnail-card d-flex flex-row align-items-center" style="cursor: pointer;">
                    <img src="travel1.jpeg" class="card-img-top thumbnail-img main-img" alt="Thumbnail Image 3">
                    <div class="ms-2">
                        <h5 class="card-title mb-0 main-title">Keindahan Pulau di Negara Thailand</h5>
                        <p class="text-muted text-sm" style="font-size: 0.8rem;">3 Jam yang lalu</p>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <a href="#" class="btn btn-outline-primary btn-lg news-button card">Lihat Berita Lainnya</a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Menghapus transform dan background pada hover thumbnail */

</style>


<!-- Custom CSS -->
    <script>
        function changeBackground(imageUrl) {
            document.getElementById("heroSection").style.backgroundImage = "url(" + imageUrl + ")";
        }
    </script>
</body>

</html>
