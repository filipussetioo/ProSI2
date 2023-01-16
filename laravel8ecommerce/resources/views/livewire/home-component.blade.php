<div>
<main id="main">
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">NAMA CATERING</div>
                <div class="masthead-heading text-uppercase">Pilih catering dengan beragam paket</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#portfolio">Lihat Sekarang</a>
            </div>
        </header>
            <!-- Portfolio Grid-->
            <section class="page-section bg-light" id="portfolio">
                <div class="container">
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase">PAKET YANG TERSEDIA</h2>
                        <h3 class="section-subheading text-muted">Merupakan paket makanan berlangganan yang dapat berlangganan secara harian atau mingguan atau bulanan.</h3>
                    </div>
                    <div class="row">
                        @foreach($pakets as $paket)
                        <div class="col-lg-4 col-sm-6 mb-4">
                            <!-- Portfolio item 1-->
                            <div class="portfolio-item">
                                <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid" src="{{asset('../assets/images/pakets')}}/{{$paket->gambar_paket}}" alt="{{$paket->nama_paket}}" />
                                </a>
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">{{$paket->nama_paket}}</div>
                                    <div class="portfolio-caption-subheading">{!! $paket->deskripsi !!}</div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <!-- Portfolio Modals-->
            <!-- Portfolio item 1 modal popup-->
            <!--
            <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        Project details
                                        
                                        <h2 class="text-uppercase"></h2>
                                        <p></p>
                                         <ul class="list-inline">
                                            <li>
                                                <strong>Client:</strong>
                                                Threads
                                            </li>
                                            <li>
                                                <strong>Category:</strong>
                                                Illustration
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
            </div -->
            <!-- 
            <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">TIPE PELANGGAN</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="team-member bg-white px-2">
                        
                            <h4>Parveen Anand</h4>
                            <p class="text-muted">Lead Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
            <!-- Bootstrap core JS-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Core theme JS-->
            <script src="js/scripts.js"></script>
            <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
            <!-- * *                               SB Forms JS                               * *-->
            <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
            <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
            <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        </main>
    </div>