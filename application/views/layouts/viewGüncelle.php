<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view("library/head"); ?>
    <title>Dashboard-Güncelle</title>
    <script type="text/javascript">
        window.alert('ŞİFRENİZİ DEĞİŞTİRMEK İSTEMİYORSANIZ BOŞ BIRAKINIZ!');
    </script>
</head>
<body>
<div class="container-scroller">
    <?php $this->load->view("library/leftbar"); ?>
    <div class="container-fluid page-body-wrapper">
        <?php $this->load->view("library/topbar"); ?>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title">Personel Güncelle</h1>
                            <?php foreach ($veri as $item) { ?>
                                <?php
                                $id = $item->id;
                                $krktr1 = $item->karakter;
                                $cnsyt1 = $item->cinsiyet;
                                ?>
                                <form class="forms-sample"
                                      action="<?= base_url() ?>main/kaydet2/<?= $id ?>" method="post">
                                    <div class="form-group">
                                        <label for="gName">İSİM</label>
                                        <input type="text" class="form-control" id="gName" name="gName"
                                               placeholder="İsim" value="<?php echo $item->adi ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="gSname">SOYİSİM</label>
                                        <input type="text" class="form-control" id="gSname" name="gSname"
                                               placeholder="Soyisim" value="<?php echo $item->soyadi ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="gDogumT">DOĞUM TARİHİ</label>
                                        <input type="date" class="form-control" id="gDogumT" name="gDogumT"
                                               value="<?php echo $item->dogum_tarihi ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="gPosta">E-POSTA</label>
                                        <input type="email" class="form-control" id="gPosta" name="gPosta"
                                               placeholder="E-Posta" value="<?php echo $item->eposta ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="gSifre">ŞİFRE</label>
                                        <input type="password" class="form-control" id="gSifre" name="gSifre"
                                               placeholder="Şifre">
                                    </div>
                                    <div class="form-group">
                                        <label for="gCinsiyet">CİNSİYET</label>
                                        <select class="form-control" id="gCinsiyet" name="gCinsiyet">
                                            <option value="0" <?php echo ($cnsyt1 == "ERKEK") ? 'selected' : ''?>>ERKEK</option>
                                            <option value="1" <?php echo ($cnsyt1 == "KADIN") ? 'selected' : ''?>>KADIN</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="gKarakter">KARAKTER</label>
                                        <select class="form-control" id="gKarakter" name="gKarakter">
                                            <option value="0" <?php echo ($krktr1 == "assets/images/faces/face1.jpg") ? 'selected' : ''?>>Karakter-1</option>
                                            <option value="1" <?php echo ($krktr1 == "assets/images/faces/face2.jpg") ? 'selected' : ''?>>Karakter-2</option>
                                            <option value="2" <?php echo ($krktr1 == "assets/images/faces/face3.jpg") ? 'selected' : ''?>>Karakter-3</option>
                                            <option value="3" <?php echo ($krktr1 == "assets/images/faces/face4.jpg") ? 'selected' : ''?>>Karakter-4</option>
                                            <option value="4" <?php echo ($krktr1 == "assets/images/faces/face5.jpg") ? 'selected' : ''?>>Karakter-5</option>
                                            <option value="5" <?php echo ($krktr1 == "assets/images/faces/face6.jpg") ? 'selected' : ''?>>Karakter-6</option>
                                            <option value="6" <?php echo ($krktr1 == "assets/images/faces/face7.jpg") ? 'selected' : ''?>>Karakter-7</option>
                                            <option value="7" <?php echo ($krktr1 == "assets/images/faces/face8.jpg") ? 'selected' : ''?>>Karakter-8</option>
                                            <option value="8" <?php echo ($krktr1 == "assets/images/faces/face9.jpg") ? 'selected' : ''?>>Karakter-9</option>
                                            <option value="9" <?php echo ($krktr1 == "assets/images/faces/face10.jpg") ? 'selected' : ''?>>Karakter-10</option>
                                            <option value="10" <?php echo ($krktr1 == "assets/images/faces/face11.jpg") ? 'selected' : ''?>>Karakter-11</option>
                                            <option value="11" <?php echo ($krktr1 == "assets/images/faces/face12.jpg") ? 'selected' : ''?>>Karakter-12</option>
                                            <option value="12" <?php echo ($krktr1 == "assets/images/faces/face13.jpg") ? 'selected' : ''?>>Karakter-13</option>
                                            <option value="13" <?php echo ($krktr1 == "assets/images/faces/face14.jpg") ? 'selected' : ''?>>Karakter-14</option>
                                            <option value="14" <?php echo ($krktr1 == "assets/images/faces/face15.jpg") ? 'selected' : ''?>>Karakter-15</option>
                                            <option value="15" <?php echo ($krktr1 == "assets/images/faces/face16.jpg") ? 'selected' : ''?>>Karakter-16</option>
                                            <option value="16" <?php echo ($krktr1 == "assets/images/faces/face17.jpg") ? 'selected' : ''?>>Karakter-17</option>
                                            <option value="17" <?php echo ($krktr1 == "assets/images/faces/face18.jpg") ? 'selected' : ''?>>Karakter-18</option>
                                            <option value="18" <?php echo ($krktr1 == "assets/images/faces/face19.jpg") ? 'selected' : ''?>>Karakter-19</option>
                                            <option value="19" <?php echo ($krktr1 == "assets/images/faces/face20.jpg") ? 'selected' : ''?>>Karakter-20</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Güncelle</button>
                                </form>
                            <?php } ?>
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