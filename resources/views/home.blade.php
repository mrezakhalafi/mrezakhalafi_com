<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>M Reza Khalafi - Homepage</title>

    <link rel="stylesheet" type="text/css" href="{{ url('/vendor/bootstrap/css/bootstrap.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ url('/vendor/fontawesome/css/all.css') }}" >
    <link rel="icon" type="image/png" href="{{ url('images/favicon.png') }}"/>
</head>
<body>

    <div class="main-slider">
        <div class="header">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <a class="navbar-brand" href="#">Personal Website</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left:-20px">
                      <ul class="navbar-nav mr-auto slider-dark" >
                        <li><a href=""><i class="fa fa-home"></i>&emsp;Homepage</a></li>
                        <li class="ability"><a href="" class="disabled"><i class="fa fa-rocket"></i>&emsp;Kemampuan</a></li>
                        <li class="portfolio"><a href="" class="disabled"><i class="fa fa-briefcase"></i>&emsp;Portofolio</a></li>
                        <li class="jobs"><a href="" class="disabled"><i class="fa fa-school"></i>&emsp;Pendidikan</a></li>
                        <li class="testimonials"><a href="" class="disabled"><i class="fa fa-star"></i>&emsp;Testimoni</a></li>
                        {{-- <li class="article"><a href="" class="disabled"><i class="fa fa-newspaper"></i>&emsp;Artikel</a></li> --}}
                        <li class="contact"><a href="" class="disabled"><i class="fa fa-address-book"></i>&emsp;Kontak</a></li>
                        <li class="plus"><a href="https://drive.google.com/file/d/1XKO0BOk2oAMPWKLSOdwHuZJImWnARGyn/view?usp=sharing"><i class="fas fa-print"></i></a>
                        </li>
                        <li class="plus"><a href="https://play.google.com/store/apps/details?id=com.hovercout.sahabatlaundry"><i class="fab fa-google-play"></i></a>
                        </li>
                        
                        
                    </ul>
                </div>
              </nav>
            </div>
        </div>

        <div class="container align-items-center">
            <div class="center-slider">
                <div class="title-main">
                    Muhammad Reza Khalafi
                </div>
                <div class="title-desc">
                    <span class="ability-color">Website And Android </span>Developer
                </div>
                <div class="slider-button">
                    <a href="https://api.whatsapp.com/send?phone=6281293291580"><button class="btn btn-orange"><i class="fab fa-whatsapp"></i>&emsp;CHAT</button></a>
                    <a href="mailto:mrezakhalafi@gmail.com"><button class="btn btn-white" href="www.gmail.com"><i class="fas fa-envelope-open-text"></i></i>&emsp;EMAIL</button></a>
                </div>
            </div>
        </div>
        <div class="hidden"></div>
    </div>

    <section id="about-me" class="section">
        <div class="container">
            <div class="row">
                <div class="about-me-box bg-dark">
                    <div class="row">
                        <div class="col-md-1">
                            <ul class="about-me-left"><span>
                                <div class="btn btn-about-active btn-homes"><i class="fa fa-user"></i></div>
                                <div class="btn btn-about btn-skills"><i class="fa fa-code"></i></div>
                                <div class="btn btn-about btn-questions"><i class="fa fa-question"></i></div>
                                <div class="btn btn-about btn-minats"><i class="fa fa-graduation-cap"></i></div>
                            </ul>
                        </div>
                        <div class="col-md-11 switch-about">
                            <div class="about-me-right">
                                <div class="row">
                                <p class="about-me-title">TENTANG SAYA</p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="{{ url('images/personal.jpg') }}" class="about-me-ava">
                                    </div>
                                    <div class="col-md-8">
                                        <p>Perkenalkan saya Muhammad Reza Khalafi, freshgraduate S-1 jurusan informatika tahun 2020 di KALBIS Institute, saya berumur 23 tahun dan saya tinggal di Jl. Cipinang Elok 1, Jatinegara, Jakarta Timur. Saya memiliki ketertarikan dalam pemrograman berbasis website dan android. Pada saat magang saya membuat website dengan framework codeigniter, bootstrap dan databasenya menggunakan MySQL. Pada saat skripsi saya membuat aplikasi android menggunakan android studio dengan fitur google maps dan google firebase. Selain itu saya juga mempunyai hobi yaitu membuat animasi, editing foto dan video sejak kecil, selain di bidang pemrograman aplikasi saya juga mampu mengoperasikan beberapa software lain seperti adobe photoshop, illustrator, premiere, dan microsoft office. Saya juga sempat menjalani freelance di @kodinginaja yaitu jasa pembuatan aplikasi website, android dan desain UI/UX. Saat ini saya sedang bekerja di PT. EasySoft Indonesia yang berlokasi di daerah tebet sebagai IT Programmer.</p>
                                        <span class="name"><p>- Muhammad Reza Khalafi</p></span>
                                        <div class="row">
                                            <a href="http://www.facebook.com/mrezakhalafi"><i class="fab fa-facebook-square fa-2x social-icons"></a></i>
                                            <a href="http://www.twitter.com/mrezakhalafi"><i class="fab fa-twitter fa-2x social-icons"></a></i>
                                            <a href="http://www.instagram.com/mrezakhalafi"><i class="fab fa-instagram fa-2x social-icons"></a></i>
                                            <a href="http://www.linkedin.com/in/m-reza-khalafi-45984a106/"><i class="fab fa-linkedin-in fa-2x social-icons"></a></i>
                                             <a href="https://github.com/kodinginaj"><i class="fab fa-github fa-2x social-icons"></a></i>
                                            <a href="https://www.youtube.com/channel/UCWg0Os7vzQYnwQo47eMDJSA"><i class="fab fa-youtube fa-2x social-icons"></a></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-11 switch-skills">
                        <div class="about-me-right">
                            <div class="row">
                            <p class="about-me-title">SKILL SAYA</p>
                        </div>
                        <div class="contact">
                            <div class="row">
                                <div class="col-6">
                                    <div class="skill">
                                        <b>Codeigniter 3 & 4</b>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                                        </div>
                                    </div>
                                    <div class="skill">
                                        <b>Laravel 5.6</b>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                                        </div>
                                    </div>
                                    <div class="skill">
                                        <b>Bootstrap 4 & 5</b>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90%" aria-valuemin="0" aria-valuemax="100">90%</div>
                                        </div>
                                    </div>
                                    <div class="skill">
                                        <b>Adobe Collection Apps</b>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="skill">
                                        <b>Android Studio</b>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                        </div>
                                    </div>
                                    <div class="skill">
                                        <b>MySQL</b>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                                        </div>
                                    </div>
                                    <div class="skill">
                                        <b>Javascript & JQuery</b>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                                        </div>
                                    </div>
                                    <div class="skill">
                                        <b>Microsoft Office Apps</b>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-11 switch-questions">
                    <div class="about-me-right">
                        <div class="row">
                        <p class="about-me-title">PERTANYAAN</p>
                        </div>
                        <div class="row">
                            <div class="content">
                                <b><p>1. Apakah saya bersedia untuk mempelajari bahasa pemrograman baru mengikuti kebutuhan perusahaan?</p></b>
                                <p>Ya, saya siap untuk mempelajari bahasa pemrograman baru sesuai kebutuhan perusahaan.</p>
                                <b><p>2. Apakah saya bersedia untuk ditempatkan diluar kota jakarta?</p></b>
                                <p>Untuk saat ini belum, masih untuk daerah jakarta.</p>
                                <b><p>3. Apa saja jenis jadwal kerja yang dapat saya terima?</p></b>
                                <p>Saya menerima pekerjaan dengan jam kerja fulltime, paruh waktu, magang dan kontrak.</p>
                                <b><p>4. Apa saja kelemahan yang saya miliki?</p></b>
                                <p>Saya suka kehilangan konsentrasi jika terlalu lama menatap layar atau sedang mengalami kendala program error.</p>
                            </div>
                      </div>
                </div>
            </div>
            <div class="col-md-11 switch-minats">
                <div class="about-me-right">
                    <div class="row">
                    <p class="about-me-title">MINAT SAYA</p>
                </div>
                <div class="row">
                    <div class="content" style="width:100%">
                        <b><p>Saya mempunyai minat pekerjaan di salahsatu bidang berikut :</p></b>
                        <ol>
                            <div class="row">
                                <div class="col-6">
                                    <li>Website Developer</li><br><br>
                                    <li>Android Developer</li><br><br>
                                    <li>UI/UX Designer</li><br><br>
                                    <li>IT Consultant</li><br><br>
                                    <li>IT Staff</li><br><br>
                                    <li>System Analyst</li>
                                </div>
                                <div class="col-6">
                                    <li>Quality Assurance</li><br><br>
                                    <li>Photo Editor</li><br><br>
                                    <li>Video Editor</li><br><br>
                                    <li>Music Editor</li><br><br>
                                    <li>Illustrator</li><br><br>
                                    <li>Flash Game Developer</li>
                                </div>
                            </div>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
                    
                </div>
            </div>
        </div>
    </section>

    <section id="ability" class="section-ability">
        <div class="container">
            <div class="ability-title">
                <h4 class="section-title">KEMAMPUAN<hr></h4>
                <p>Berikut saya lampirkan beberapa kemampuan saya yang saya dapatkan dari materi perkuliahan dan pengalaman di tempat saya magang di sebuah perusahaan.</p>
            </div>
            <div class="row">
                <div class="ability-box-active col">
                    <i class="fab fa-chrome fa-3x"></i>
                    <h5>Pemrograman Website</h5>
                    <p>Saya dapat membuat sebuah Website menggunakan Framework Codeigniter 3 dan Laravel 5.7.</p>
                </div>
                <div class="ability-box col">
                    <i class="fab fa-android fa-3x"></i>
                    <h5>Pemrograman Android</h5>
                    <p>Saya dapat membuat sebuah aplikasi android menggunakan bahasa Java dan XML.</p>
                </div>
                <div class="ability-box col">
                    <i class="fa fa-pen-alt fa-3x"></i>
                    <h5>UI/UX Design</h5>
                    <p>Saya dapat membuat desain website yang menarik menggunakan Bootstrap.</p>
                </div>
                <div class="ability-box col">
                    <i class="fa fa-code fa-3x"></i>
                    <h5>Skill Lain</h5>
                    <p>Saya juga bisa skill lain seperti C#, AS. Software seperti Photoshop, Illustrator, dan Premiere.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="section-portfolio">
        <div class="container">
            <div class="ability-title">
                <h4 class="section-title">Portofolio Saya<hr></h4>
                <p>Berikut adalah beberapa portofolio yang sudah saya kerjakan, seperti website untuk PT.SEP disaat saya magang, website tersebut dibuat untuk mengelola data petani, lahan, poktan juga mengelola waktu kunjungan ke lahan tertentu secara rutin. Lalu skripsi saya yang berbasis android untuk melakukan pemesanan pada laundry terdekat. Terdapat juga beberapa project freelance saya bersama teman kuliah di satu komunitas @kodinginaja selama menunggu waktu wisuda dan tugas selama perkuliahan.</p>
            </div>
            <div class="row list-portfolio">
                <div class="btn btn-sub-portfolio-active btn-alls col">
                    <i class="fas fa-border-all"></i>&emsp;Utama
                </div>
                <div class="btn btn-sub-portfolio btn-magangs col">
                    <i class="fas fa-building"></i>&emsp;Magang
                </div>
                <div class="btn btn-sub-portfolio btn-skripsis col">
                    <i class="fas fa-laptop-house"></i>&emsp;Skripsi
                </div>
                <div class="btn btn-sub-portfolio btn-startups col">
                    <i class="fas fa-play-circle"></i>&emsp;Project
                </div>
                <div class="btn btn-sub-portfolio btn-tugass col">
                    <i class="fas fa-book"></i>&emsp;Tugas
                </div>
            </div>
        </div>
        <div class="portfolio-row switch-all">
            <div class="portfolio-show">
                <img src="{{ url('/images/portfolio/website/Slide1.JPG') }}" class="portfolio-box" data-toggle="modal" data-target="#PortofolioW1">
            </div>
            <div class="portfolio-show">
                <img src="{{ url('/images/portfolio/website/Slide8.JPG') }}" class="portfolio-box" data-toggle="modal" data-target="#PortofolioW8">
            </div>
            <div class="portfolio-show">
                <img src="{{ url('/images/portfolio/website/Slide2.JPG') }}" class="portfolio-box" data-toggle="modal" data-target="#PortofolioW2">
            </div>
        </div>
        <div class="portfolio-row switch-all">
            <div class="portfolio-show">
                <img src="{{ url('/images/portfolio/website/Slide12.jpg') }}" class="portfolio-box" data-toggle="modal" data-target="#PortofolioW12">
            </div>
            <div class="portfolio-show">
                <img src="{{ url('/images/portfolio/website/Slide9-2.jpg') }}" class="portfolio-box" data-toggle="modal" data-target="#PortofolioW9-2">
            </div>
            <div class="portfolio-show">
                <img src="{{ url('/images/portfolio/website/Slide3.JPG') }}" class="portfolio-box" data-toggle="modal" data-target="#PortofolioW3">
            </div>
        </div>
        <div class="portfolio-row switch-magangs">
            <div class="portfolio-show"></div>
            <div class="portfolio-show">
                <img src="{{ url('/images/portfolio/website/Slide1.JPG') }}" class="portfolio-box" data-toggle="modal" data-target="#PortofolioW1">
            </div>
            <div class="portfolio-show"></div>
        </div>
        <div class="portfolio-row switch-skripsis">
            <div class="portfolio-show"></div>
            <div class="portfolio-show-mobile">
                <img src="{{ url('/images/portfolio/mobile/Slide1.JPG') }}" class="portfolio-box" data-toggle="modal" data-target="#PortofolioM1">
            </div>
            <div class="portfolio-show"></div>
        </div>
        <div class="portfolio-row switch-startups">
            <div class="portfolio-show">
                <img src="{{ url('/images/portfolio/website/Slide2.JPG') }}" class="portfolio-box" data-toggle="modal" data-target="#PortofolioW2">
            </div>
            <div class="portfolio-show">
                <img src="{{ url('/images/portfolio/website/Slide11.jpg') }}" class="portfolio-box" data-toggle="modal" data-target="#PortofolioW11">
            </div>
            <div class="portfolio-show">
                <img src="{{ url('/images/portfolio/website/Slide9-2.jpg') }}" class="portfolio-box" data-toggle="modal" data-target="#PortofolioW9-2">
            </div>
        </div>
        <div class="portfolio-row switch-startups">
            <div class="portfolio-show">
                <img src="{{ url('/images/portfolio/website/Slide3.JPG') }}" class="portfolio-box" data-toggle="modal" data-target="#PortofolioW3">
                <img src="{{ url('/images/portfolio/mobile/Slide4.JPG') }}" class="portfolio-box" data-toggle="modal" data-target="#PortofolioM4">
            </div>
            <div class="portfolio-show">
                <img src="{{ url('/images/portfolio/website/Slide6.JPG') }}" class="portfolio-box" data-toggle="modal" data-target="#PortofolioW6">
                <img src="{{ url('/images/portfolio/mobile/Slide7.jpg') }}" class="portfolio-box" data-toggle="modal" data-target="#PortofolioM7">
            </div>
            <div class="portfolio-show">
                <img src="{{ url('/images/portfolio/mobile/Slide3.JPG') }}" class="portfolio-box" data-toggle="modal" data-target="#PortofolioM3">
                <img src="{{ url('/images/portfolio/website/Slide12.jpg') }}" class="portfolio-box" data-toggle="modal" data-target="#PortofolioW12">
            </div>
        </div>
        <div class="portfolio-row switch-tugass">
            <div class="portfolio-show">
                <img src="{{ url('/images/portfolio/website/Slide8.JPG') }}" class="portfolio-box" data-toggle="modal" data-target="#PortofolioW8">
                <img src="{{ url('/images/portfolio/website/Slide5.JPG') }}" class="portfolio-box" data-toggle="modal" data-target="#PortofolioW5">
                <img src="{{ url('/images/portfolio/website/Slide10.JPG') }}" class="portfolio-box" data-toggle="modal" data-target="#PortofolioW10">
            </div>
            <div class="portfolio-show">
                <img src="{{ url('/images/portfolio/mobile/Slide5.JPG') }}" class="portfolio-box" data-toggle="modal" data-target="#PortofolioM5">
            </div>
            <div class="portfolio-show">
                <img src="{{ url('/images/portfolio/mobile/Slide6.JPG') }}" class="portfolio-box" data-toggle="modal" data-target="#PortofolioM6">
            </div>
        </div>
        <a href="https://www.linkedin.com/in/m-reza-khalafi-45984a106/detail/featured-list/urn:li:fsd_profile:ACoAABrSSgUBjDtZnWzae0L3OFM8XFNz5sg48xs/"><button class="btn btn-portfolio">Portofolio Lainnya</button></a>
    </section>

    <section id="countdown" class="section-countdown">
        <div class="container">
            <div class="row">
                <div class="col single-count">
                    <div class="count-icon">
                        <i class="fa fa-tasks fa-3x"></i>
                        <div class="count-number">8+</div>
                        <div class="count-desc">Skill Informatika</div>
                    </div>
                </div>
                <div class="col single-count">
                    <div class="count-icon">
                        <i class="fas fa-project-diagram fa-3x"></i>
                        <div class="count-number">20+</div>
                        <div class="count-desc">Project Kerjasama</div>
                    </div>
                </div>
                <div class="col single-count">
                    <div class="count-icon">
                        <i class="fas fa-clock fa-3x"></i>
                        <div class="count-number">8-10</div>
                        <div class="count-desc">Optimalisasi Jam Kerja</div>
                    </div>
                </div>
                <div class="col single-count">
                    <div class="count-icon">
                        <i class="far fa-calendar-alt fa-3x"></i>
                        <div class="count-number">3</div>
                        <div class="count-desc">Tahun Pengalaman</div>
                    </div>
                </div>
            </div>
    </section>

    <section id="jobs" class="section-jobs">
        <div class="container">
            <div class="ability-title">
                <h4 class="section-title">Pekerjaan & Pendidikan<hr></h4>
                <p>Berikut saya lampirkan riwayat pendidikan saya dari sekolah hingga lulus kuliah.</p>
            </div>
            <div class="row">
                <div class="col jobs-left">
                    <div class="single-jobs">
                        <div class="jobs-date">
                            Aug<br>2021
                        </div>
                        <div class="jobs-title">
                            IT Programmer PT. EasySoft Indonesia<hr>
                        </div>
                        <div class="jobs-desc">
                            Saat ini saya sedang menjadi IT Programmer di PT. EasySoft Indonesia yang berlokasi di daerah Tebet. Saya mengerjakan beberapa macam project Website dan Android secara internal.
                        </div>
                    </div>
                    <div class="single-jobs-3">
                        <div class="jobs-date">
                            Jul<br>2020
                        </div>
                        <div class="jobs-title">
                            S1 Kalbis Institute<hr>
                        </div>
                        <div class="jobs-desc">
                             Saya sarjana lulusan S1 jurusan Informatika dari KALBIS Institute yang berletak di Jl.Pulomas Selatan Kav.22 Jakarta Timur 13210 dan mendapatkan IPK 3+.
                        </div>
                    </div>
                    <div class="single-jobs-3">
                        <div class="jobs-date">
                            Jun<br>2016
                        </div>
                        <div class="jobs-title">
                            SMA Muhammadiyah 11<hr>
                        </div>
                        <div class="jobs-desc">
                            Saya lulus SMA pada tahun 2016 dengan nilai yang cukup baik, SMA saya yang berlokasi di Jl. Balai Pustaka Barat No.2 Rawamangun saya mengambil penjurusan IPA.
                        </div>
                    </div>
                </div>
                <div class="col jobs-right">
                    <div class="single-jobs-2">
                        <div class="jobs-date">
                            Mar<br>2021
                        </div>
                    <div class="jobs-title">
                        Freelancer Kodinginaja<hr>
                    </div>
                    <div class="jobs-desc">
                       Saya sempat menjalani Freelance di Kodinginaja, yaitu tempat yang menyediakan jasa pembuatan aplikasi untuk Project/Tugas berbasis Android, Website dan Desain UI/UX.
                    </div>
                </div>
                <div class="single-jobs-4">
                    <div class="jobs-date">
                        Jul<br>2019
                    </div>
                    <div class="jobs-title">
                        Web Developer PT. Kirana Megatara<hr>
                    </div>
                    <div class="jobs-desc">
                        Saya mengambil magang di PT.Kirana Megatara yang berletak di gedung the East lantai 21 sebagai Web Developer untuk pembuatan website PT.SEP (Sumber Energi Pangan) yang berada di bawah kerjasama naungan antar Triputra Group.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="action" class="section-action">
        <div class="action-box">
            <div class="action-title">Saya Siap Untuk Mengerjakan Project Baru</div>
            <div class="action-desc">Setelah magang, skripsi dan mendapatkan gelar sarjana S1 S.Kom, juga freelance yang membuat cukup banyak project website dan android, saya siap untuk mengerjakan sebuah project baru berbasis website dan android yang jauh lebih menantang untuk menambah pengalaman saya.</div>
            <a href="mailto:mrezakhalafi@gmail.com"><div class="btn btn-secondary"><i class="fa fa-envelope"></i>&emsp;Hubungi Saya</div></a>
        </div>
    </section>

    <section id="order" class="order-section">
        <div class="container">
            <div class="ability-title">
                <h4 class="section-title">Pemesanan Aplikasi<hr></h4>
                <p>Berikut adalah paket jasa pembuatan aplikasi yang saya tawarkan.</p>
            </div>
            <div class="row">
                <div class="order-box">
                    <div class="order-head">
                        <div class="order-title">Website Statis</div>
                        Paket <span class="order-price">Silver</span> (Web)
                    </div>
                    <div class="order-icon">
                        <i class="fa fa-gift fa-3x order-icon-inside"></i>
                    </div>
                    <div class="order-body">
                        <p>HTML & CSS</p>
                        <p>Javascript & JQuery</p>
                        <p>Bootstrap</p>
                        <p>Hosting & Domain</p>
                        <p>Revision 2x</p>
                        <p>3-5 Pages</p>
                        <a href="https://api.whatsapp.com/send?phone=6281293291580"><div class="btn btn-dark btn-order">Hubungi Saya</div></a>
                    </div>
                </div>
                <div class="order-box">
                    <div class="order-head-active">
                        <div class="order-title">Website Statis</div>
                        Paket <span class="order-price">Gold</span> (Web)
                    </div>
                    <div class="order-icon">
                        <i class="fa fa-gift fa-3x order-icon-inside"></i>
                    </div>
                    <div class="order-body">
                        <p>PHP (Laravel/Codeigniter)</p>
                        <p>Sweetalert, Select 2 & Datatables</p>
                        <p>Bootstrap</p>
                        <p>Hosting & Domain</p>
                        <p>Revision 3x</p>
                        <p>5-10 Pages</p>
                        <a href="https://api.whatsapp.com/send?phone=6281293291580"><div class="btn btn-order-active">Hubungi Saya</div></a>
                    </div>
                </div>
                <div class="order-box">
                    <div class="order-head">
                        <div class="order-title">Aplikasi Android</div>
                        Paket <span class="order-price">Platinum</span> (Android)
                    </div>
                    <div class="order-icon">
                        <i class="fa fa-gift fa-3x order-icon-inside"></i>
                    </div>
                    <div class="order-body">
                        <p>Java & XML</p>
                        <p>PHP (Laravel/Codeigniter)</p>
                        <p>Google Maps & Google Firebase</p>
                        <p>Hosting & Domain</p>
                        <p>Revision 3x</p>
                        <p>5-15 Pages</p>
                        <a href="https://api.whatsapp.com/send?phone=6281293291580"><div class="btn btn-dark btn-order">Hubungi Saya</div></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials" class="section-testimonials">
        <div class="container">
            <div class="ability-title">
                <h4 class="section-title-2">Testimoni Pelanggan<hr></h4>
                <div class="testimonials-desc">Selain membuat vlog saya juga mempunyai usaha jual beli motor, dan usaha saya semakin berkembang setelah saya dibuatkan website oleh orang ini, tampilan dan fiturnya sungguh memukau, terlebih lagi orang ini mempunyai motto yang sangat bagus yaitu "Tidak pernah meragukan pelanggan meskipun permintaannya aneh-aneh.</div>
                <div class="testimonals-people">
                    <img src="{{ url('images/leonardo.jpg') }}" class="testimonials-image">
                    <div class="testimonials-star">
                        <i class="fas fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h5>Leonardo Halasantua</h5>
                    <p>Motovlogger</p>
                </div>
            </div>
        </div>
    </section>

    {{-- <section id="article" class="article-section">
        <div class="container">
            <div class="ability-title">
                <h4 class="section-title">Artikel Saya<hr></h4>
                <p>Berikut adalah beberapa artikel yang saya tulis berdasarkan sudut pandang saya sendiri.</p>
                <div class="row">
                    <div class="article-box">
                        <div class="article-head">
                            <img src="{{ url('images/article/blog1.jpg') }}" class="article-image btn_error">
                        </div>
                        <div class="article-body">
                            <div class="article-title btn_error">
                                Cara Jago di COD Mobile
                            </div>
                            <div class="article-desc">
                                Garena telah merilis game terbarunya yaitu Call Of Duty : Mobile yang saat ini telah meraih peringkat 1 game terpopuler di Play Store.
                                <p class="article-more btn_error">Selengkapnya >></p>
                            </div>
                        </div>
                    </div>
                    <div class="article-box">
                        <div class="article-head">
                            <img src="{{ url('images/article/blog2.jpg') }}" class="article-image btn_error">
                        </div>
                        <div class="article-body">
                            <div class="article-title btn_error">
                                IOS 13 Telah Hadir
                            </div>
                            <div class="article-desc">
                                Apple telah mengumumkan bahwa IPhone akan mendapatkan IOS terbaru yang menghadirkan beberapa fitur terbaru dan juga lebih interaktif.
                                <p class="article-more btn_error">Selengkapnya >></p>
                            </div>
                        </div>
                    </div>
                    <div class="article-box">
                        <div class="article-head">
                            <img src="{{ url('images/article/blog3.jpg') }}" class="article-image btn_error">
                        </div>
                        <div class="article-body">
                            <div class="article-title btn_error">
                                Rating Film Joker
                            </div>
                            <div class="article-desc">
                                Film Joker yang dibintangi oleh Jaquin Phoenix sangat mendapat apresiasi dari masyarakat atas aktingnya yang terlihat real sebagai Joker.
                                <p class="article-more btn_error">Selengkapnya >></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section id="action" class="section-action">
        <div class="action-box">
            <div class="action-title">Saya Siap Untuk Mengerjakan Project Baru</div>
            <div class="action-desc">Setelah magang, skripsi dan mendapatkan gelar sarjana S1 S.Kom, juga mendirikan startup yang telah membuat cukup banyak project website dan android, saya siap untuk mengerjakan sebuah project baru berbasis website atau android yang jauh lebih menantang untuk menambah pengalaman saya.</div>
            <a href="mailto:mrezakhalafi@gmail.com"><div class="btn btn-secondary"><i class="fa fa-envelope"></i>&emsp;Hubungi Saya</div></a>
        </div>
    </section> --}}

    <section id="contact" class="section">
        <div class="container">
            <div class="ability-title">
                <h4 class="section-title">Kontak Saya<hr></h4>
                <p>Bagi yang ingin menghubungi saya bisa melalui beberapa kontak di bawah ini.</p>
            </div>
            <div class="row">
                <div class="col contact-box">
                    <form action="{{ url('/contact') }}" method="post">
                        @csrf
                        <div class="row">
                            <input type="text" name="name" class="form-control col contact-form" placeholder="Nama Anda" required>
                            <input type="text" name="email" class="form-control col contact-form" placeholder="Email Anda" required>
                        </div>
                        <textarea class="form-control" name="pesan" rows="7" placeholder="Tulis Pesan Anda" required></textarea>
                        <button class="btn btn-orange contact-button p-2" type="submit">Kirim</button>
                    </form>
                </div>
                <div class="col contact-box">
                    <div class="row">
                        <div class="col-2 contact-icon">
                            <i class="fa fa-phone fa-2x"></i>
                        </div>
                        <div class="col-10">
                            <h5>Ponsel</h5>
                            <p>+62 812<span>93291580</span></p>
                            <p>+62 878<span>83735365</span></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 contact-icon">
                            <i class="fa fa-envelope fa-2x"></i>
                        </div>
                        <div class="col-10">
                            <h5>Email</h5>
                            <p>mrezakhalafi@yahoo.com</p>
                            <p>mrezakhalafi@gmail.com</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 contact-icon">
                            <i class="fa fa-map fa-2x"></i>
                        </div>
                        <div class="col-10">
                            <h5>Alamat</h5>
                            <p>Jl.Cipinang Elok 1 Blok.C No.13 RT.002/RW.010</p>
                            <p>Cipinang Muara, Jatinegara, Jakarta Timur, Indonesia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="client" class="section-client">
        <div class="row">
            <div class="col client-box">
                <img src="{{url ('images/kalbis.png') }}" class="client-image">
            </div>
            <div class="col client-box">
                <img src="{{url ('images/kirana.png') }}" class="client-image-2">
            </div>
            <div class="col client-box">
                <img src="{{url ('images/kodinginaja.png') }}" class="client-image-3">
            </div>
        </div>
    </section>

    <section id="newsletter" class="section-subscription">
        <div class="container">
            <div class="ability-title">
                <form action="{{ url('/subscription') }}" method="post">
                    @csrf
                    <h4 class="section-title">KRITIK <span class="orange">DAN</span> Saran</h4>
                    <p>Mempunyai kritik dan saran terhadap personal website ini? Ada bisa mengirimkannya melalui form di bawah ini.</p>
                    <div class="row">
                        <div class="col-10">
                            <input type="text" class="form-control" name="email" placeholder="Masukan Kalimat" required>
                        </div>
                        <div class="col-2">
                            <button class="btn btn-subscription" type="submit"><i class="fa fa-rocket"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section id="footer">
       
            <div class="row bg-grey">
                <div class="footer-left col text-center">
                    © Copyright 2023 | Inspiration by Meheraj | Coded by Muhammad Reza Khalafi.
                </div>
                <div class="footer-right col text-center">
                    <a href="http://www.facebook.com/mrezakhalafi"><i class="fab fa-facebook-square social-icons"></i></a>
                    <a href="http://www.twitter.com/mrezakhalafi"><i class="fab fa-twitter social-icons"></i></a>
                    <a href="http://www.instagram.com/mrezakhalafi"><i class="fab fa-instagram social-icons"></i></a>
                    <a href="http://www.linkedin.com/in/m-reza-khalafi-45984a106/"><i class="fab fa-linkedin-in social-icons"></i></a>
                    <a href="https://github.com/kodinginaj"><i class="fab fa-github social-icons"></i></a>
                    <a href="https://www.youtube.com/channel/UCWg0Os7vzQYnwQo47eMDJSA"><i class="fab fa-youtube social-icons"></i></a>
                </div>
            </div>

    </section>

    <a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>
    
    <!-- Modal -->
    <div class="modal fade" id="PortofolioW1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Portofolio M Reza Khalafi dan Kodinginaja</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="{{ url('/images/portfolio/website/Slide1.JPG') }}" class="portofolio-modal">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    
    <div class="modal fade" id="PortofolioW8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Portofolio M Reza Khalafi dan Kodinginaja</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="{{ url('/images/portfolio/website/Slide8.JPG') }}" class="portofolio-modal">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    
    <div class="modal fade" id="PortofolioW2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Portofolio M Reza Khalafi dan Kodinginaja</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="{{ url('/images/portfolio/website/Slide2.JPG') }}" class="portofolio-modal">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    
    <div class="modal fade" id="PortofolioW12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Portofolio M Reza Khalafi dan Kodinginaja</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="{{ url('/images/portfolio/website/Slide12.jpg') }}" class="portofolio-modal">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    
    <div class="modal fade" id="PortofolioW9-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Portofolio M Reza Khalafi dan Kodinginaja</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="{{ url('/images/portfolio/website/Slide9-2.jpg') }}" class="portofolio-modal">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    
    <div class="modal fade" id="PortofolioW3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Portofolio M Reza Khalafi dan Kodinginaja</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="{{ url('/images/portfolio/website/Slide3.JPG') }}" class="portofolio-modal">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    
    <div class="modal fade" id="PortofolioM1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Portofolio M Reza Khalafi dan Kodinginaja</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="{{ url('/images/portfolio/mobile/Slide1.JPG') }}" class="portofolio-modal">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    
    <div class="modal fade" id="PortofolioW11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Portofolio M Reza Khalafi dan Kodinginaja</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="{{ url('/images/portfolio/website/Slide11.jpg') }}" class="portofolio-modal">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    
    <div class="modal fade" id="PortofolioM4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Portofolio M Reza Khalafi dan Kodinginaja</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="{{ url('/images/portfolio/mobile/Slide4.JPG') }}" class="portofolio-modal">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    
    <div class="modal fade" id="PortofolioW6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Portofolio M Reza Khalafi dan Kodinginaja</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="{{ url('/images/portfolio/website/Slide6.JPG') }}" class="portofolio-modal">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    
    <div class="modal fade" id="PortofolioM7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Portofolio M Reza Khalafi dan Kodinginaja</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="{{ url('/images/portfolio/mobile/Slide7.jpg') }}" class="portofolio-modal">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    
    <div class="modal fade" id="PortofolioM3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Portofolio M Reza Khalafi dan Kodinginaja</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="{{ url('/images/portfolio/mobile/Slide3.JPG') }}" class="portofolio-modal">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    
    <div class="modal fade" id="PortofolioW5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Portofolio M Reza Khalafi dan Kodinginaja</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="{{ url('/images/portfolio/website/Slide5.JPG') }}" class="portofolio-modal">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    
    <div class="modal fade" id="PortofolioW10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Portofolio M Reza Khalafi dan Kodinginaja</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="{{ url('/images/portfolio/website/Slide10.JPG') }}" class="portofolio-modal">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    
    <div class="modal fade" id="PortofolioM5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Portofolio M Reza Khalafi dan Kodinginaja</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="{{ url('/images/portfolio/mobile/Slide5.JPG') }}" class="portofolio-modal">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    
    <div class="modal fade" id="PortofolioM6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Portofolio M Reza Khalafi dan Kodinginaja</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="{{ url('/images/portfolio/mobile/Slide6.JPG') }}" class="portofolio-modal">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    
</body>
</html>

<script src="{{ url('/js/jquery.js') }}"></script>
<script src="{{ url('/js/script.js') }}"></script>
<script src="{{ url('/js/bootstrap.js') }}"></script>
<script src="{{ url('/vendor/fontawesome/js/all.js') }}"></script>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>