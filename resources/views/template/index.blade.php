@extends('layout.main')
@section('content')
    
        <body id="page-top">
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To SMK Teratai putih Global 2</div>
                <div class="masthead-heading text-uppercase">Joyfull Learning</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Visi dan Misi</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Tentang Sekolah</h2>
                    <h3 class="section-subheading text-muted">SMK Teratai Putih Global 2</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa-solid fa-person-walking fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Visi</h4>
                        <p class="text-muted">Menjadi Yayasan pendidikan Berkualitas Terbaik  dan Berwawasan Global</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Misi</h4>
                        <p class="text-muted">1.Menyelenggarakan Yayasan pendidikan Berkualitas,unggul,terpercaya dan profesional
                                              2.Mewujudkan SDM yang kompeten,sarana prasarana memadai,sistem mutakhir dan fokus pada keberhasilan siswa.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa-solid fa-m fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">MOTO</h4>
                        <p class="text-muted">Berakhlak mulia dan inovatif</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">jurusan</h2>
                    <h3 class="section-subheading text-muted">SMK Teratai Putih Global 2 Bekasi</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assetss/img/portfolio/RPL-760x490-1.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">RPL</div>
                                <div class="portfolio-caption-subheading text-muted">Rekayasa Perangkat Lunak</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assetss/img/portfolio/Peluang-Kerja-Jurusan-DKV.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">DKV/Multimedia</div>
                                <div class="portfolio-caption-subheading text-muted">Graphic Design</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assetss/img/portfolio/AP.png" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">OTKP</div>
                                <div class="portfolio-caption-subheading text-muted"> Otomatisasi dan Tata Kelola Perkantoran</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assetss/img/portfolio/AK.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">AKL</div>
                                <div class="portfolio-caption-subheading text-muted">Akuntansi</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assetss/img/portfolio/BD.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">BDP</div>
                                <div class="portfolio-caption-subheading text-muted">Bisnis daring pemasaran</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assetss/img/portfolio/PM.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">PKM</div>
                                <div class="portfolio-caption-subheading text-muted">Perbankan dan Keuangan Mikro</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Sejarah</h2>
                    <h3 class="section-subheading text-muted">SMK teratai Putih Global 2 Bekasi</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assetss/img/about/gh.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>SMK</h4>
                                <h4 class="subheading">Teratai Putih Global 2 Bekasi</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">SMK Teratai Putih Global 2 Bekasi merupakan salah satu Sekolah Menengah Kejuruan SMK yang didirikan oleh Yayasan Teratai Global Bekasi. Seperti SMK pada umumnya di Indonesia masa pendidikan sekolah di SMK Teratai Putih Global 2 Bekasi ditempuh dalam waktu tiga tahun pelajaran, mulai dari Kelas X sampai Kelas XII.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assetss/img/about/huu.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Kurikulum</h4>
                                <h4 class="subheading">Awal</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Kurikulum yang diterapkan disini yaitu kurikulum 2013 dengan alokasi waktu selama 10 - 12 jam pelajaran yang berlangsung dari hari Senin-Jumat. Sebelum memulai jam pelajaran, biasanya siswa-siswi mengadakan tadarus Al-Quran yang dipimpin oleh Bapak/Ibu guru yang bertugas.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assetss/img/about/ty.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Sejarah</h4>
                                <h4 class="subheading">SMK Teratai Putih Global 2 Bekasi</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Pada tahun 1997, dibuka kembali SMK (SMEA) Teratai Putih 2 dengan program keahlian Akuntansi, Sekretaris, dan Penjualan, dan pertambahan jurusan yaitu Rekayasa Perangkat Lunak, Multimedia, dan Pebankan, yang beralamat di Jl. Rajawali V No.29 Perumnas I Kota Bekasi. Dengan semakin pesatnya perkembangan yaysan, dan menjawab keinginan masyarakat terhadap pendidikan yang berkualitas, pada tahun 2002 Yayasan Teratai Putih Global kembali membuka sekolah di kampus Ciketing yang terdiri dari SD Islam, SMP, SMA, SMK (SMEA) TPG 3 dan SMK (STM) TPG 4. Karena semakin berkembangnya sekolah, sekolah yang ada di kampus Ciketing dengan bertambah terus animo masyarakat untuk masuk Teratai Outih, maka mulai tahun 2004, kembali dibuka lahan beru yang diperuntukan sekolah, sekolah yang berbasis islam dan umu, yaitu di cimuning dengan menempati lahan 6,5 Ha, sementara gedung di kampus ciketing diperuntukan untuk sekolah kejuruan (SMK Plus). Dan Alhamdulillah sampai sekarang ada 9 unit sekolah dan 1 unit Islamic Center yang bernaung di bawah YYTPG, dengan 87 GT yg diantaranya alumni TP, 165, GTT, dan 97 karyawan.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assetss/img/about/PASKIBRA-1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>ekstrakurikuler</h4>
                                <h4 class="subheading">Di SMK TPG2</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">SMK Teratai Putih Global 2 Bekasi memiliki banyak kegiatan ekstrakurikuler, diantaranya;

Basket ( Baster )
Volly
English Club
Futsal ( Ekel Squad )
Jurnalistik
Karate
Kesenian
Marawis
Palang Merah Remaja
Paskibra
Pencak Silat
Pramuka ( Jensurasa )
Tahsin & Tahfidz Al-Qur'an
Tari
Rohis ( IRTA )</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image text-darkb f">
                            <h4>
                                JAYA
                                <br />
                                JAYA
                                <br />
                                JAYA
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Siswa Siswi</h2>
                    <h3 class="section-subheading text-muted">SMK Teratai Putih Global 2 Bekasi</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assetss/img/team/bram.jpg" alt="..." />
                            <h4>Kelas 10</h4>
                            <p class="text-muted">Hari Guru</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assetss/img/team/buuu.jpg" alt="..." />
                            <h4>Kelas 11</h4>
                            <p class="text-muted">Hari guru 2022</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assetss/img/team/12.jpg" alt="..." />
                            <h4>Kelas 12</h4>
                            <p class="text-muted">Petugas Upacara</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">“Kita memang bertambah dewasa, tapi anak kecil dalam diri kita tidak pernah siap kehilangan orang tua,”</p></div>
                </div>
            </div>
        </section>
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assetss/img/logos/microsoft.svg" alt="..." aria-label="Microsoft Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assetss/img/logos/google.svg" alt="..." aria-label="Google Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assetss/img/logos/facebook.svg" alt="..." aria-label="Facebook Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assetss/img/logos/ibm.svg" alt="..." aria-label="IBM Logo" /></a>
                    </div>
                </div>
            </div>
        </div>
       
       
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assetss/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">RPL</h2>
                                    <p class="item-intro text-muted">Rekayasa perangkat lunak</p>
                                    <img class="img-fluid d-block mx-auto" src="assetss/img/portfolio/RPL-760x490-1.jpg" alt="..." />
                                    <p>Program Keahlian Rekayasa Perangkat Lunak (RPL) adalah salah satu kompetensi keahlian dalam bidang Teknologi Komputer dan Informatika yang secara khusus mempelajari tentang pemrograman komputer.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Keahlian:</strong>
                                            HTML,CSS,PHP
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assetss/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">DKV/Multimedia</h2>
                                    <p class="item-intro text-muted">Graphic Design</p>
                                    <img class="img-fluid d-block mx-auto" src="assetss/img/portfolio/Peluang-Kerja-Jurusan-DKV.jpg" alt="..." />
                                    <p>Desain Komunikasi Visual merupakan salah satu program keahlian di bidang teknologi dan informasi. Program keahlian DKV telah terakreditasi dengan nilai A. Proli DKV ini akan melatih peserta didik untuk medapatkan keterampilan dan keahlian dalam bidang komunikasi visual sesuai dengan perkembangan zaman. Program keahlian DKV ini memadukan seni design traditional (kertas dan gambar) dengan tenologi digital. Di dalam proli DKV ini akan di bekali kemampuan design, ilustrasi, fotografi, animasi, media interaksi hingga pembuatan film/video. Program ini sangat cocok dengan zaman saat ini dimana industri kreatif sangat menjanjikan dijadikan lapangan pekerjaan.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Keahlian:</strong>
                                            design, ilustrasi, fotografi, animasi, media interaksi hingga pembuatan film/video.
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assetss/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">OTKP</h2>
                                    <p class="item-intro text-muted">Otomatisasi dan Tata Kelola Perkantoran</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/AP.png" alt="..." />
                                    <p>Administrasi Perkantoran adalah salah satu jurusan yang ada di SMK Negeri 3 Balikpapan. Apa definisi dan tujuan jurusan yang disingkat AP itu? Administrasi Perkantoran adalah kompetensi keahlian dibawah program studi keahlian administrasi yang melakukan prosedur Administrasi Korespondensi Bahasan Indonesia, korespondensi Bahasa Inggris, Komunikasi Telpon/faximile, Transaksi Keuangan, Sistem Pengarsiran, dll.

Tujuan Kompetensi keahlian Administrasi Perkantoran adalah Menghasilkan lulusan di bidang AP yang bertaqwa, mandiri. Menghasilkan penelitian yang berkualitas dan bermanfaat bagi pengembangan masyarakat dan Ipteks di bidang AP. Menghasilkan kegiatan pengabdian kepada masyarakat sebagai wujud tanggung jawab sosial di bidang AP.</p>
                                    <ul class="list-inline">
                                        
                                        <li>
                                            <strong>Category:</strong>
                                            pengetahuan, keterampilan dan sikap dalam menyelesaikan pekerjaan-pekerjaan kantor.
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assetss/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">AKL</h2>
                                    <p class="item-intro text-muted">Akuntansi</p>
                                    <img class="img-fluid d-block mx-auto" src="assetss/img/portfolio/AK.jpg" alt="..." />
                                    <p>Akuntansi Keuangan Lembaga (AKL) merupakan sebuah jurusan yang mempelajari metode pencatatan, penggolongan, dan penyusunan laporan baik secara manual maupun secara komputerisasi serta perhitungan perpajakan. Bahkan terus dilakukan perkembangan terkait pemahaman akuntansi pemerintahan di Indonesia. </p>
                                    <ul class="list-inline">
                                       
                                        <li>
                                            <strong>Keahlian:</strong>
                                            Praktik Akuntansi Perusahaan Jasa, Dagang, dan Manufaktur,Akuntansi Keuangan.
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assetss/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">BDP</h2>
                                    <p class="item-intro text-muted">Bisnis Daring Pemasaran</p>
                                    <img class="img-fluid d-block mx-auto" src="assetss/img/portfolio/BD.jpg" alt="..." />
                                    <p>Bisnis Daring dan Pemasaran adalah sebuah kompetensi keahlian (jurusan) yang mempelajari dasar - dasar kemampuan dan keilmuan menjadi seorang marketing baik marketing secara konvensional maupun melalui media daring (online/internet). Di Kompetensi Keahlian Bisnis Daring dan Pemasaran siswa akan mempelajari strategi pasar, kewirausahaan dan membaca peluang di dunia bisnis.</p>
                                    <ul class="list-inline">
                                       
                                        <li>
                                            <strong>Keahlian:</strong>
                                            mempelajari strategi pasar, kewirausahaan dan membaca peluang di dunia bisnis.  
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assetss/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">PKM</h2>
                                    <p class="item-intro text-muted">Perbankan dan Keuangan Mikro</p>
                                    <img class="img-fluid d-block mx-auto" src="assetss/img/portfolio/PM.jpg" alt="..." />
                                    <p>Kompetensi Keahlian Perbankan dan Keuangan Mikro (PKM) merupakan salah satu jurusan yang termasuk Program Keahlian Akuntansi dan Keuangan yang ditempuh selama 3 tahun masa belajar. Sebagai rumpun Bidang Keahlian Bisnis Manajeman, untuk mempersiapkan peserta didik secara profesional dalam tugas-tugas dan pekerjaan di lingkup perbankan dan keuangan.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Keahlian:</strong>
                                            Perbankan Dasar,Administrasi Pajak,Akuntansi Perbankan dan Keuangan Mikro
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
@endsection
</body>
</html>