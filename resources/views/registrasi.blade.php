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

    <section id="form-section" class="hero-section">
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
        <div class="container">
            <h2 class="">Registrasi</h2>
            <h4 class="mb-4">Lengkapi data dirimu dengan benar</h4>
            <form class="">
                <div class="mb-3">
                    <input type="text" class="form-control" id="fullName" placeholder="Nama Lengkap" required>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" id="email" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <input type="tel" class="form-control" id="phone" placeholder="Nomor Telepon" required>
                </div>
                <div class="mb-3">
                    <textarea class="form-control" id="reason" rows="3" placeholder="Alasan mengikuti program 'Explore Thailand by DetikTravel'" required ></textarea>
                </div>
                <div class="mb-3">
                    <input class="form-control form-control-file" type="file" id="profilePicture" accept=".jpg, .png" required>
                </div>
                <div class="mb-3">
                    <input type="url" class="form-control" id="instagram" placeholder="Link Instagram">
                </div>
                <button type="submit" class="btn btn-primary">Daftar</button>
            </form>
        </div>
    </section>



</body>

</html>
