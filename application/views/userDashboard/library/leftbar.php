<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="#"><img src="<?php echo base_url("assets/images/eren.png"); ?>"
                                                          alt="logo"/></a>
        <a class="sidebar-brand brand-logo-mini" href="#"><img
                    src="<?php echo base_url("assets/images/eren-mini.png"); ?>" alt="logo"/></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle "
                             src="<?php echo base_url($this->session->userdata('karakter')); ?>" alt="">
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal"><?php echo $this->session->userdata('adi') . " " . $this->session->userdata('soyadi') ?></h5>
                        <span>Personel</span>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Menü</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="<?php echo base_url("user/"); ?>">
              <span class="menu-icon">
                <i class="mdi mdi-home"></i>
              </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-settings"></i>
              </span>
                <span class="menu-title">Ayarlar</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url("user/information/"); ?>"><span
                                    class="menu-icon">
                        <i class="mdi mdi-account-circle"></i></span>Bilgilerim</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</nav>



