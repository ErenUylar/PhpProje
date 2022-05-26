<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view("library/head"); ?>
    <title>Giriş Yap</title>
</head>
<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
            <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                <div class="card col-lg-4 mx-auto">
                    <div class="card-body px-5 py-5">
                        <h2 class="card-title text-left mb-3">Giriş Yap</h2><br>
                        <form action="<?php echo base_url("login/loginData/") ?>" method="post">
                            <div class="form-group">
                                <label for="grsPosta">E-Posta *</label>
                                <input type="text" class="form-control p_input" id="grsPosta" name="grsPosta"
                                       placeholder="E-Postanız" value=""><?php  echo  form_error ( 'grsPosta' );  ?>
                            </div>
                            <div class="form-group">
                                <label for="grsSifre">Şifre *</label>
                                <input type="password" class="form-control p_input" id="grsSifre" name="grsSifre"
                                       placeholder="Şifreniz"><?php  echo  form_error ( 'grsSifre' );  ?>
                            </div>
                            <br>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block enter-btn">Giriş Yap</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("library/script"); ?>
</body>
</html>
