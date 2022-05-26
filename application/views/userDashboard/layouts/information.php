<?php
$id = $this->session->userdata('id');
$krktr1 = $this->session->userdata('karakter');
$cnsyt1 = $this->session->userdata('cinsiyet');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view("library/head"); ?>
    <title>Personel-Bilgilerim</title>
    <script type="text/javascript">
        window.alert('ŞİFRENİZİ DEĞİŞTİRMEK İSTEMİYORSANIZ BOŞ BIRAKINIZ!');
    </script>
</head>
<body>
<div class="container-scroller">
    <?php $this->load->view("userDashBoard/library/leftbar"); ?>
    <div class="container-fluid page-body-wrapper">
        <?php $this->load->view("userDashBoard/library/topbar"); ?>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title">Bilgilerimi Güncelle</h1>
                            <form class="forms-sample" action="<?= base_url() ?>user/infoupdate/<?= $id ?>"
                                  method="post">
                                <div class="form-group">
                                    <label for="guncelleName">İSİM</label>
                                    <input type="text" class="form-control" id="guncelleName" name="guncelleName"
                                           placeholder="İsim" value="<?php echo $this->session->userdata('adi'); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="guncelleSname">SOYİSİM</label>
                                    <input type="text" class="form-control" id="guncelleSname" name="guncelleSname"
                                           placeholder="Soyisim"
                                           value="<?php echo $this->session->userdata('soyadi'); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="guncelleDogumT">DOĞUM TARİHİ</label>
                                    <input type="date" class="form-control" id="guncelleDogumT" name="guncelleDogumT"
                                           value="<?php echo $this->session->userdata('dogum_tarihi'); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="guncellePosta">E-POSTA</label>
                                    <input type="email" class="form-control" id="guncellePosta" name="guncellePosta"
                                           placeholder="E-Posta"
                                           value="<?php echo $this->session->userdata('eposta'); ?>">
                                    <?php echo form_error('guncellePosta'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="guncelleSifre">ŞİFRE</label>
                                    <input type="password" class="form-control" id="guncelleSifre" name="guncelleSifre"
                                           placeholder="Şifre">
                                </div>
                                <div class="form-group">
                                    <label for="guncelleCinsiyet">CİNSİYET</label>
                                    <select class="form-control" id="guncelleCinsiyet" name="guncelleCinsiyet">
                                        <option value="0" <?php echo ($cnsyt1 == "ERKEK") ? 'selected' : '' ?>>ERKEK
                                        </option>
                                        <option value="1" <?php echo ($cnsyt1 == "KADIN") ? 'selected' : '' ?>>KADIN
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="guncelleKarakter">KARAKTER</label>
                                    <select class="form-control" id="guncelleKarakter" name="guncelleKarakter">
                                        <option value="0" <?php echo ($krktr1 == "assets/images/faces/face1.jpg") ? 'selected' : '' ?>>
                                            Karakter-1
                                        </option>
                                        <option value="1" <?php echo ($krktr1 == "assets/images/faces/face2.jpg") ? 'selected' : '' ?>>
                                            Karakter-2
                                        </option>
                                        <option value="2" <?php echo ($krktr1 == "assets/images/faces/face3.jpg") ? 'selected' : '' ?>>
                                            Karakter-3
                                        </option>
                                        <option value="3" <?php echo ($krktr1 == "assets/images/faces/face4.jpg") ? 'selected' : '' ?>>
                                            Karakter-4
                                        </option>
                                        <option value="4" <?php echo ($krktr1 == "assets/images/faces/face5.jpg") ? 'selected' : '' ?>>
                                            Karakter-5
                                        </option>
                                        <option value="5" <?php echo ($krktr1 == "assets/images/faces/face6.jpg") ? 'selected' : '' ?>>
                                            Karakter-6
                                        </option>
                                        <option value="6" <?php echo ($krktr1 == "assets/images/faces/face7.jpg") ? 'selected' : '' ?>>
                                            Karakter-7
                                        </option>
                                        <option value="7" <?php echo ($krktr1 == "assets/images/faces/face8.jpg") ? 'selected' : '' ?>>
                                            Karakter-8
                                        </option>
                                        <option value="8" <?php echo ($krktr1 == "assets/images/faces/face9.jpg") ? 'selected' : '' ?>>
                                            Karakter-9
                                        </option>
                                        <option value="9" <?php echo ($krktr1 == "assets/images/faces/face10.jpg") ? 'selected' : '' ?>>
                                            Karakter-10
                                        </option>
                                        <option value="10" <?php echo ($krktr1 == "assets/images/faces/face11.jpg") ? 'selected' : '' ?>>
                                            Karakter-11
                                        </option>
                                        <option value="11" <?php echo ($krktr1 == "assets/images/faces/face12.jpg") ? 'selected' : '' ?>>
                                            Karakter-12
                                        </option>
                                        <option value="12" <?php echo ($krktr1 == "assets/images/faces/face13.jpg") ? 'selected' : '' ?>>
                                            Karakter-13
                                        </option>
                                        <option value="13" <?php echo ($krktr1 == "assets/images/faces/face14.jpg") ? 'selected' : '' ?>>
                                            Karakter-14
                                        </option>
                                        <option value="14" <?php echo ($krktr1 == "assets/images/faces/face15.jpg") ? 'selected' : '' ?>>
                                            Karakter-15
                                        </option>
                                        <option value="15" <?php echo ($krktr1 == "assets/images/faces/face16.jpg") ? 'selected' : '' ?>>
                                            Karakter-16
                                        </option>
                                        <option value="16" <?php echo ($krktr1 == "assets/images/faces/face17.jpg") ? 'selected' : '' ?>>
                                            Karakter-17
                                        </option>
                                        <option value="17" <?php echo ($krktr1 == "assets/images/faces/face18.jpg") ? 'selected' : '' ?>>
                                            Karakter-18
                                        </option>
                                        <option value="18" <?php echo ($krktr1 == "assets/images/faces/face19.jpg") ? 'selected' : '' ?>>
                                            Karakter-19
                                        </option>
                                        <option value="19" <?php echo ($krktr1 == "assets/images/faces/face20.jpg") ? 'selected' : '' ?>>
                                            Karakter-20
                                        </option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Bilgilerimi Güncelle</button>
                            </form>
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