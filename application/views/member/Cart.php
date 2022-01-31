<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="cart-page">
            <div class="container-fluid">
                <div class="col-lg-11">
                    <div class="cart-page-inner">
                        <div class="table-responsive">
                            <h4>Daftar Keranjang Belanja</h4>

                            <table class="table table-bordered table-striped table-hover">
                                <thead class="thead-dark" style="text-align: center;">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Produk</th>
                                        <th>Jumlah Barang</th>
                                        <th>Harga</th>

                                    </tr>
                                </thead>
                                <tbody class="align-middle" style="text-align: center;">
                                    <?php
                                    $no = 1;
                                    foreach ($this->cart->contents() as $items) : ?>

                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $items['name'] ?></td>
                                            <td><?php echo $items['qty'] ?></td>
                                            <td><?php echo "Rp. " . number_format($items['price'], 0, ".", "."); ?></td>
                                        </tr>

                                    <?php endforeach; ?>

                                    <tr>
                                        <td colspan="3">Total Pembelian</td>
                                        <td> <?= "Rp. " . number_format($this->cart->total(), 0, ".", "."); ?></td>
                                    </tr>
                                </tbody>
                            </table>

                            <center><a class="btn btn-primary" type="button" href="<?= site_url('Checkout') ?>">CheckOut</a></center>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>