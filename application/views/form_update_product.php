<div class="page-content-wrapper">
            <div class="container-fluid"><a class="btn btn-link" role="button" id="menu-toggle" href="#menu-toggle"><i class="fa fa-bars"></i></a>
                <div class="row" style="height: 66px;">
                    <div class="col-md-12">
                        <div>
                            <h1 style="margin-bottom: 68px;font-family: Montserrat, sans-serif;margin-left: 37px;"><strong>Edit Produk</strong></h1>
                        </div>
                    </div>
                </div>
            </div>
            <form action="<?= base_url('admin/product/update')?>" method="post" style="margin-right: 0px;margin-left: 46px;"  enctype="multipart/form-data">
            <label>Nama Produk</label>
            <input placeholder="nama barang" name="nama_produk" class="form-control" type="text" style="width: 363px;" value="<?= $produk->nama_produk?>" required>
            <label>Harga</label>
            <input placeholder="100.000,00"name="harga" class="form-control"  type="number" style="width: 363px;" inputmode="numeric" value="<?= $produk->harga?>" required>
            <label>Satuan </label>
            <input placeholder="Meter Persegi atau Unit" name="satuan" class="form-control"  type="text" style="width: 363px;" inputmode="numeric" value="<?= $produk->satuan?>" required>
            <label>Deskripsi</label>
            <textarea  placeholder="Penjelasan terhadap barang" name="deskripsi" class="form-control" style="width: 800px;height: 144px;"  required><?= $produk->deskripsi?></textarea>
            <div class="form-row">
                <div class="col">
                    <label>Minimal kuantitas</label>
                    <input value="<?= $produk->minimum_quantity?>" placeholder="jumlah minimum pembelian" name="minimum_quantity" class="form-control" type="number" min="1" oninput="validity.valid||(value='');" style="width: 252px;" required>
                </div>
                <div class="col">
                    <label>Kategori</label>

                   <div class="row">
                       <div class="col-sm-auto">
                       <select class=" form-control dropdown" name="kategori" id="kategori" required >
                            <option class="form-control dropdown-item" value="1" >Outdoor</option>
                            <option class="form-control dropdown-item" value="2" >Indoor</option>
                            <option class="form-control dropdown-item" value="3" >Ecosolvent<option>
                            <option class="form-control dropdown-item"  value="4" >Docuprint</option>
                        </select>
                       </div>
                   </div>

                    <!-- <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="width: 163px;background-color: rgba(255,255,255,0);color: rgb(0,0,0);">Outdoor</button>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" value="1" role="presentation" href="#">Outdoor</a>
                            <a class="dropdown-item" value="2" role="presentation" href="#">Indorr</a>
                            <a class="dropdown-item" value="3" role="presentation" href="#">Ecosolvent</a>
                            <a class="dropdown-item" value="4" role="presentation" href="#">Docuprint</a>
                        </div>
                    </div> -->
                </div>
            </div>
                <div class="form-row">
                    <div class="col">
                        <label>Keterangan tambahan</label>
                        <input value="<?= $produk->ket?>" placeholder="keterangan tambahan terkait barang" name="keterangan" class="form-control" type="text" style="width: 252px;">
                        <label>Foto</label>
                    </div>
                    <div class="col"><label>Sub Kategori</label>
                        <div class="row">
                            <div class="col-sm-auto">
                            <select class=" form-control dropdown" name="subkategori" id="subkategori" required >
                                    <option class="form-control dropdown-item" value="1" >Tanpa Media</option>
                                    <option class="form-control dropdown-item" value="2" >Dengan Media</option>
                                    <option class="form-control dropdown-item" value="3"> Paket Produk</option>
                                    <option class="form-control dropdown-item"  value="4"> Kertas A3+</option>
                                    <option class="form-control dropdown-item"  value="5"> Kartu Nama</option>
                                </select>
                            </div>
                        </div>

                        <!-- <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="width: 163px;background-color: rgba(255,255,255,0);color: rgb(0,0,0);">Tanpa Media</button>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" value="1" role="presentation" href="#">Tanpa Media</a>
                                <a class="dropdown-item" value="2" role="presentation" href="#">Dengan Media</a>
                                <a class="dropdown-item" value="3" role="presentation" href="#">Paket Produc</a>
                                <a class="dropdown-item" value="4" role="presentation" href="#">Kertas A3+</a>
                                <a class="dropdown-item" value="5" role="presentation" href="#">Kartu Nama</a>
                            </div>
                        </div> -->
                    </div>
                </div>
                <input type="hidden" name="gambarLama" value="<?=$produk->gambar?>">
                <input type="hidden" name="id" value="<?=$produk->id?>">
                <input class="btn btn-light" name="gambar" type="file" value="<?= $_SERVER['DOCUMENT_ROOT'].`/ekselensi/`.$produk->gambar?>">
                <button class="btn btn-primary btn-lg float-right d-xl-flex justify-content-xl-center align-items-xl-center" type="submit" style="margin-right: 138px;">Submit</button>
            </form>
        </div>