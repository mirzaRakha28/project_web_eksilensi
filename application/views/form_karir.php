<div class="page-content-wrapper">
            <div class="container-fluid"><a class="btn btn-link" role="button" id="menu-toggle" href="#menu-toggle"><i class="fa fa-bars"></i></a>
                <div class="row" style="height: 66px;">
                    <div class="col-md-12">
                        <div>
                            <h1 style="margin-bottom: 68px;font-family: Montserrat, sans-serif;margin-left: 37px;"><strong>Karir</strong></h1>
                        </div>
                    </div>
                </div>
            </div>
            <form style="margin-right: 0px;margin-left: 46px;"action="<?= base_url().'admin/form_karir/add_product'?>" method="post">
                <label>Judul Pekerjaan</label>
                <input class="form-control" type="text" style="width: 363px;" name="job">
                <label>Gaji</label>
                <input class="form-control" type="text" style="width: 363px;" inputmode="numeric"name="gaji">
                <label>Jenis Pekerjaan</label>
                <input class="form-control" type="text" style="width: 363px;" inputmode="numeric" name="jenis">
                <button class="btn btn-primary btn-lg float-right d-xl-flex justify-content-xl-center align-items-xl-center" type="submit" style="margin-right: 138px;">Submit</button>
            </form>
        </div>