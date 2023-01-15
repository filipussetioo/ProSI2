<!--main area-->
<main id="main" class="main-site">

    <div class="container">
        <div class="row">

            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
                <div class="wrap-product-detail">
                    <div class="detail-media">
                        <div class="product-gallery" style="padding-top: 10%">
                            <img src="{{asset('../assets/images/pakets')}}/{{$pakets->gambar_paket}}" alt="product thumbnail" style="width: 70%; height:70%"/>
                        </div>
                    </div>
                    <div class="detail-info">
                        <h2 class="product-name">{{$pakets->nama_paket}}</h2>
                        <div class="short-desc">
                            {!! $pakets->deskripsi !!}
                        </div>
                        <div class="wrap-social">
                            <a class="link-social"><img src="assets/images/social-list.png" alt=""></a>
                        </div>
                        <div class="wrap-price"><span class="product-price">Rp. {{$pakets->harga}}</span></div>
                        <div class="stock-info in-stock">
                            <p class="availability">Date Available: <b>{{$pakets->date_start}}</b><b> until </b><b>{{$pakets->date_end}}</b></p>
                        </div>
                        <div class="quantity">
                            <span>Quantity:</span>
                            <div class="quantity-input">
                                <input type="text" name="product-quatity" value="1" data-max="120" pattern="[0-9]*" >
                                <a class="btn btn-reduce" href="#"></a>
                                <a class="btn btn-increase" href="#"></a>
                            </div>
                        </div>
                        <div class="wrap-butons">
                            <a class="btn add-to-cart" wire:click.prevent="store({{$pakets->id}},'{{$pakets->nama_paket}}','{{$pakets->harga}}')">Add to Cart</a>
                        </div>
                    </div>
                    <div class="advance-info">
                        <div class="tab-contents">
                            <div class="tab-content-item active" id="description">
                                <p>Lorem ipsum dolor sit amet, an munere tibique consequat mel, congue albucius no qui, a t everti meliore erroribus sea. ro cum. Sea ne accusata voluptatibus. Ne cum falli dolor voluptua, duo ei sonet choro facilisis, labores officiis torquatos cum ei.</p>
                                <p>Cum altera mandamus in, mea verear disputationi et. Vel regione discere ut, legere expetenda ut eos. In nam nibh invenire similique. Atqui mollis ea his, ius graecis accommodare te. No eam tota nostrum eque. Est cu nibh clita. Sed an nominavi, et stituto, duo id rebum lucilius. Te eam iisque deseruisse, ipsum euismod his at. Eu putent habemus voluptua sit, sit cu rationibus scripserit, modus taria . </p>
                                <p>experian soleat maluisset per. Has eu idque similique, et blandit scriptorem tatibus mea. Vis quaeque ocurreret ea.cu bus  scripserit, modus voluptaria ex per.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end main products area-->

        </div><!--end row-->

    </div><!--end container-->

</main>
<!--main area-->