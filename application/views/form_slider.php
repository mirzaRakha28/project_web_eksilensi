<div class="page-content-wrapper">
            <div class="container-fluid"><a class="btn btn-link" role="button" id="menu-toggle" href="#menu-toggle"><i class="fa fa-bars"></i></a>
                <div class="row" style="height: 66px;">
                    <div class="col-md-12">
                        <div>
                            <h1 style="margin-bottom: 68px;font-family: Montserrat, sans-serif;margin-left: 37px;"><strong>Slider</strong></h1>
                        </div>
                    </div>
                </div>
            </div>
            <form style="margin-right: 0px;margin-left: 46px;" enctype= "multipart/form-data" action="<?= base_url().'admin/form_slider/add_product'?>" method="post">
            <label>Title</label>
            <input class="form-control" type="text" name="title"style="width: 363px;"required>
            <label>Sub-Title</label>
            <input class="form-control" type="text" name="subtitle" tyle="width: 363px;" inputmode="numeric">
            <label>Link&nbsp;</label>
            <input class="form-control"type="text" name="link"style="width: 363px;" inputmode="numeric">
            <label style="margin-right: 37px;margin-top: 19px;">Gambar&nbsp;</label>
            <input type="file" name="gambar"><button class="btn btn-primary btn-lg float-right d-xl-flex justify-content-xl-center align-items-xl-center"   type="submit" style="margin-right: 138px;">Submit</button>
        </form>
        </div>