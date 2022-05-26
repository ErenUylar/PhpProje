<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view("library/head"); ?>
    <title>Dashboard-Listele</title>
</head>
<body>
<div class="container-scroller">
    <?php $this->load->view("library/leftbar"); ?>
    <div class="container-fluid page-body-wrapper">
        <?php $this->load->view("library/topbar"); ?>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title">Personel Listele</h1>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Karakter</th>
                                        <th>İSİM</th>
                                        <th>SOYİSİM</th>
                                        <th>E-POSTA</th>
                                        <th>CİNSİYET</th>
                                        <th>Doğum Tarihi</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($veri as $item) { ?>
                                        <tr>
                                            <td class="text-center" style="width: 100px">
                                                <img class="img-xs rounded-circle"
                                                     src="<?php echo base_url($item->karakter); ?>" alt="">
                                            </td>
                                            <td><?php echo $item->adi ?></td>
                                            <td><?php echo $item->soyadi ?></td>
                                            <td><a href="mailto:"><?php echo $item->eposta ?></a></td>
                                            <td><?php echo $item->cinsiyet ?></td>
                                            <td><?php echo $item->dogum_tarihi ?></td>
                                            <td class="text-center">
                                                <a href="<?php echo base_url("main/guncelle/$item->id"); ?>"
                                                   class="btn btn-success mr-1">Güncelle</a>
                                                <a href="<?php echo base_url("main/sil/$item->id"); ?>"
                                                   class="btn btn-danger">Sil</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $this->load->view("library/footer"); ?>
        </div>
    </div>
</div>
<?php $this->load->view("library/script"); ?>
</body>
</html>