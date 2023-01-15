<section class="h-100 h-custom" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card">
          <div class="card-body p-4">

            <div class="row">

              <div class="col-lg-7">
                <h5 class="mb-3"><a href="\" class="text-body"><i
                      class="fas fa-long-arrow-alt-left me-2"></i>Back</a></h5>
                <hr>

                <div class="d-flex justify-content-between align-items-center mb-4">
                  <div>
                    <p class="mb-1">Keranjang</p>
                    <p class="mb-0">{{Cart::count()}} items</p>
                  </div>
                </div>
                @if(Cart::count() > 0)
                <div class="card mb-3">
                  @foreach(Cart::content() as $item)
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="d-flex flex-row align-items-center">
                        <div>
                          <img
                            src="{{asset('../assets/images/pakets')}}/{{$item->model->gambar_paket}}"
                            class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                        </div>
                        <div class="ms-3">
                          <h5>{{$item->model->nama_paket}}</h5>
                          <p class="small mb-0">{{$item->model->date_start}}</p>
                        </div>
                      </div>
                      <div class="d-flex flex-row align-items-center">
                        <div style="width: 150px;">
                          <!-- <h5 class="fw-normal mb-0">2</h5> -->
                        </div>
                        <div style="width: 150px;">
                          <h5 class="mb-0">Rp{{$item->model->harga}}</h5>
                        </div>
                        <a href="#" wire:click.prevent="destroy('{{$item->rowId}}')" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
                @else
                  <p>No Items In Cart</p>
                @endif
              </div>

              <div class="col-lg-5">

                <div class="card bg-primary text-white rounded-3">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                      <h5 class="mb-0">Detil Pembayaran</h5>
                        <div class="img-fluid rounded-3" style="width: 45px;" alt="Avatar"></div>
                    </div>

                    <hr class="my-4">

                    <div class="d-flex justify-content-between">
                      <p class="mb-2">Harga</p>
                      <p class="mb-2">Rp{{Cart::subtotal()}}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                      <p class="mb-2">Pengiriman</p>
                      <p class="mb-2">Pengiriman Gratis</p>
                    </div>

                    <div class="d-flex justify-content-between mb-4">
                      <p class="mb-2">Total</p>
                      <p class="mb-2">Rp{{Cart::subtotal()}}</p>
                    </div>

                    <button type="button" class="btn btn-info btn-block btn-lg">
                      <div class="d-flex justify-content-between">
                        <span>Checkout <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                      </div>
                    </button>

                  </div>
                </div>

              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>