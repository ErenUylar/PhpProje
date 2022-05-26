<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view("library/head"); ?>
    <title>Dashboard-Kayıt</title>
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
                            <h1 class="card-title">Personel Kayıt Et</h1>
                            <form class="forms-sample" action="<?php echo base_url("main/newsave/") ?>" method="post">
                                <div class="form-group">
                                    <label for="kytName">İSİM</label>
                                    <input type="text" class="form-control" id="kytName" name="kytName"
                                           placeholder="İsim"><?php  echo  form_error ( 'kytName' );  ?>
                                </div>
                                <div class="form-group">
                                    <label for="kytSname">SOYİSİM</label>
                                    <input type="text" class="form-control" id="kytSname" name="kytSname"
                                           placeholder="Soyisim"><?php  echo  form_error ( 'kytSname' );  ?>
                                </div>
                                <div class="form-group">
                                    <label for="kytDogumT">DOĞUM TARİHİ</label>
                                    <input type="date" class="form-control" id="kytDogumT" name="kytDogumT">
                                    <?php  echo  form_error ( 'kytDogumT' );  ?>
                                </div>
                                <div class="form-group">
                                    <label for="kytPosta">E-POSTA</label>
                                    <input type="email" class="form-control" id="kytPosta" name="kytPosta"
                                           placeholder="E-Posta"><?php  echo  form_error ( 'kytPosta' );  ?>
                                </div>
                                <div class="form-group">
                                    <label for="kytSifre">ŞİFRE</label>
                                    <input type="password" class="form-control" id="kytSifre" name="kytSifre"
                                           placeholder="Şifre"><?php  echo  form_error ( 'kytSifre' );  ?>
                                </div>
                                <div class="form-group">
                                    <label for="kytSifreT">ŞİFRE TEKRARI</label>
                                    <input type="password" class="form-control" id="kytSifreT" name="kytSifreT"
                                           placeholder="Şifre Tekrarı"><?php  echo  form_error ( 'kytSifreT' );  ?>
                                </div>
                                <div class="form-group">
                                    <label for="kytCinsiyet">CİNSİYET</label>
                                    <select class="form-control" id="kytCinsiyet" name="kytCinsiyet">
                                        <option value="0">ERKEK</option>
                                        <option value="1">KADIN</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="kytKarakter">KARAKTER</label>
                                    <select class="form-control" id="kytKarakter" name="kytKarakter">
                                        <option value="0">Karakter-1</option>
                                        <option value="1">Karakter-2</option>
                                        <option value="2">Karakter-3</option>
                                        <option value="3">Karakter-4</option>
                                        <option value="4">Karakter-5</option>
                                        <option value="5">Karakter-6</option>
                                        <option value="6">Karakter-7</option>
                                        <option value="7">Karakter-8</option>
                                        <option value="8">Karakter-9</option>
                                        <option value="9">Karakter-10</option>
                                        <option value="10">Karakter-11</option>
                                        <option value="11">Karakter-12</option>
                                        <option value="12">Karakter-13</option>
                                        <option value="13">Karakter-14</option>
                                        <option value="14">Karakter-15</option>
                                        <option value="15">Karakter-16</option>
                                        <option value="16">Karakter-17</option>
                                        <option value="17">Karakter-18</option>
                                        <option value="18">Karakter-19</option>
                                        <option value="19">Karakter-20</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">KAYIT ET</button>
                                <button class="btn btn-danger" type="reset">SIFIRLA</button>
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