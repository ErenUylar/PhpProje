<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view("library/head"); ?>
    <title>Dashboard</title>
</head>
<body>
<div class="container-scroller">
    <?php $this->load->view("library/leftbar"); ?>
    <div class="container-fluid page-body-wrapper">
        <?php $this->load->view("library/topbar"); ?>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body" style="text-align: center"><br>
                                <img class="img-thumbnail rounded-circle "
                                     src="<?php echo base_url($this->session->userdata('karakter')); ?>" alt=""><br><br>
                                <p><h3 style="font-family: 'Cambria Math'"><strong><?php echo $this->session->userdata('adi')."  ".$this->session->userdata('soyadi') ?></strong> - ADMİN</h3></p><br>
                                <img src="<?php echo base_url("assets/images/hosgeldin.png"); ?>" alt=""/><br><br><br>
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