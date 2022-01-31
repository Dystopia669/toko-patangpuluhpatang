<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="cart-page">
            <div class="container-fluid">
                <div class="row">
                    <h3 class="mb-0 text-center">CheckOut</h3>
                    <form action="post" method="input">
                        <div class="col">
                            <div class="cart-page-inner">


                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nama-barang" class="form-control-label">Nama Anda</label>
                                        <input class="form-control" type="text" name="nama" id="nama_user" placeholder="Yundhar Nugroho" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama-barang" class="form-control-label">Alamat</label>
                                        <input class="form-control" type="text" name="alamat" id="alamat_user" placeholder="Gunung Kidul" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama-barang" class="form-control-label">No Hp</label>
                                        <input class="form-control" type="text" name="nohp" id="nohp_user" placeholder="081111111111" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama-barang" class="form-control-label">Email</label>
                                        <input class="form-control" type="email" name="email" id="email_user" placeholder="yundharnugroho@gmail.com" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama-barang" class="form-control-label">Total Belanja</label>
                                        <input class="form-control" type="email" name="email" id="email_user" value="<?= "Rp. " . number_format($this->cart->total(), 0, ".", "."); ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama-barang" class="form-control-label">Metode Pembayaran : </label>
                                        <select id="cars" name="cars" class="form-control">
                                            <option value="volvo">OVO</option>
                                            <option value="saab">BANK MANDIRI</option>
                                            <option value="fiat">BANK BRI</option>
                                            <option value="audi">DANA</option>
                                            <option value="audi">SHOPEE PAY</option>
                                        </select>
                                    </div>
                                    <div class="form-group" style="padding-top: 80px;">
                                        <center><a href="" type="submit" class="btn btn-primary">BAYAR</a></center>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>