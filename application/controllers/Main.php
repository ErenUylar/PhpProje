<?php

class Main extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("main_model");
        if (!$this->session->userdata('oturum')){
            redirect(base_url());
        }else{
            if ($this->session->userdata('yetki_id')!=1){
                redirect(base_url("user/"));
            }
        }
    }

    public function index()
    {
        $this->load->view("dashboard");
    }

    public function kaydet()
    {
        $this->load->view("layouts/viewKayıt");
    }

    public function newsave(){
        if ($this->input->method() == "post"){

            $this->form_validation->set_rules("kytName", "İsim", "required|trim");
            $this->form_validation->set_rules("kytSname", "Soyisim", "required|trim");
            $this->form_validation->set_rules("kytDogumT", "Doğum Tarihi", "required|trim");
            $this->form_validation->set_rules("kytPosta", "E-Posta", "required|trim|valid_email|is_unique[kullanici.eposta]");
            $this->form_validation->set_rules("kytSifre", "Şifre", "required|trim");
            $this->form_validation->set_rules("kytSifreT", "Şifre Tekrarı", "required|trim|matches[kytSifre]");

            if ($this->form_validation->run() == false){
                $this->load->view("layouts/viewKayıt", validation_errors());
            }else{

                $karakter = $this->input->post("kytKarakter");
                switch ($karakter){
                    case 0:
                        $karakter = "assets/images/faces/face1.jpg";
                        break;
                    case 1:
                        $karakter = "assets/images/faces/face2.jpg";
                        break;
                    case 2:
                        $karakter = "assets/images/faces/face3.jpg";
                        break;
                    case 3:
                        $karakter = "assets/images/faces/face4.jpg";
                        break;
                    case 4:
                        $karakter = "assets/images/faces/face5.jpg";
                        break;
                    case 5:
                        $karakter = "assets/images/faces/face6.jpg";
                        break;
                    case 6:
                        $karakter = "assets/images/faces/face7.jpg";
                        break;
                    case 7:
                        $karakter = "assets/images/faces/face8.jpg";
                        break;
                    case 8:
                        $karakter = "assets/images/faces/face9.jpg";
                        break;
                    case 9:
                        $karakter = "assets/images/faces/face10.jpg";
                        break;
                    case 10:
                        $karakter = "assets/images/faces/face11.jpg";
                        break;
                    case 11:
                        $karakter = "assets/images/faces/face12.jpg";
                        break;
                    case 12:
                        $karakter = "assets/images/faces/face13.jpg";
                        break;
                    case 13:
                        $karakter = "assets/images/faces/face14.jpg";
                        break;
                    case 14:
                        $karakter = "assets/images/faces/face15.jpg";
                        break;
                    case 15:
                        $karakter = "assets/images/faces/face16.jpg";
                        break;
                    case 16:
                        $karakter = "assets/images/faces/face17.jpg";
                        break;
                    case 17:
                        $karakter = "assets/images/faces/face18.jpg";
                        break;
                    case 18:
                        $karakter = "assets/images/faces/face19.jpg";
                        break;
                    case 19:
                        $karakter = "assets/images/faces/face20.jpg";
                        break;
                }
                $insert = $this->main_model->insert(
                    array(
                        'yetki_id'=>"2",
                        'adi'=>$this->input->post("kytName"),
                        'soyadi'=>$this->input->post("kytSname"),
                        'cinsiyet'=>$this->input->post("kytCinsiyet")==0? "ERKEK":"KADIN",
                        'eposta'=>$this->input->post("kytPosta"),
                        'sifre'=>sha1(md5(strip_tags($this->input->post("kytSifre")))),
                        'dogum_tarihi'=>$this->input->post("kytDogumT"),
                        'karakter'=>$karakter,
                        'durum'=>"aktif"
                    )
                );
                if ($insert){
                    redirect(base_url("main/listele/"));
                }
            }
        }
    }

    public function listele()
    {
        $items = $this->main_model->get_all();
        $gelenveri=array(
          "veri"=>$items
        );
        $this->load->view("layouts/viewListele",$gelenveri);
    }

    public function guncelle($id)
    {
        $items = $this->main_model->updategetir($id);
        $gelenveri=array(
            "veri"=>$items
        );
        $this->load->view("layouts/viewGüncelle",$gelenveri);
    }

    public function kaydet2($id)
    {
        if ($this->input->method() == "post"){
            $krktr = $this->input->post("gKarakter");
            $gpass = $this->input->post("gSifre");
            switch ($krktr){
                case 0:
                    $krktr = "assets/images/faces/face1.jpg";
                    break;
                case 1:
                    $krktr = "assets/images/faces/face2.jpg";
                    break;
                case 2:
                    $krktr = "assets/images/faces/face3.jpg";
                    break;
                case 3:
                    $krktr = "assets/images/faces/face4.jpg";
                    break;
                case 4:
                    $krktr = "assets/images/faces/face5.jpg";
                    break;
                case 5:
                    $krktr = "assets/images/faces/face6.jpg";
                    break;
                case 6:
                    $krktr = "assets/images/faces/face7.jpg";
                    break;
                case 7:
                    $krktr = "assets/images/faces/face8.jpg";
                    break;
                case 8:
                    $krktr = "assets/images/faces/face9.jpg";
                    break;
                case 9:
                    $krktr = "assets/images/faces/face10.jpg";
                    break;
                case 10:
                    $krktr = "assets/images/faces/face11.jpg";
                    break;
                case 11:
                    $krktr = "assets/images/faces/face12.jpg";
                    break;
                case 12:
                    $krktr = "assets/images/faces/face13.jpg";
                    break;
                case 13:
                    $krktr = "assets/images/faces/face14.jpg";
                    break;
                case 14:
                    $krktr = "assets/images/faces/face15.jpg";
                    break;
                case 15:
                    $krktr = "assets/images/faces/face16.jpg";
                    break;
                case 16:
                    $krktr = "assets/images/faces/face17.jpg";
                    break;
                case 17:
                    $krktr = "assets/images/faces/face18.jpg";
                    break;
                case 18:
                    $krktr = "assets/images/faces/face19.jpg";
                    break;
                case 19:
                    $krktr = "assets/images/faces/face20.jpg";
                    break;
            }
            $id=$this->uri->segment(3);

            if (isset($gpass)&&!empty($gpass)){
                $update = $this->main_model->update($id,
                    $degerler = array(
                        'adi'=>$this->input->post('gName'),
                        'soyadi'=>$this->input->post('gSname'),
                        'cinsiyet'=>$this->input->post("gCinsiyet")==0? "ERKEK":"KADIN",
                        'eposta'=>$this->input->post('gPosta'),
                        'sifre'=>sha1(md5(strip_tags($gpass))),
                        'dogum_tarihi'=>$this->input->post('gDogumT'),
                        'karakter'=>$krktr,
                    )
                );

            }else{
                $update = $this->main_model->update($id,
                    $degerler = array(
                        'adi'=>$this->input->post('gName'),
                        'soyadi'=>$this->input->post('gSname'),
                        'cinsiyet'=>$this->input->post("gCinsiyet")==0? "ERKEK":"KADIN",
                        'eposta'=>$this->input->post('gPosta'),
                        'dogum_tarihi'=>$this->input->post('gDogumT'),
                        'karakter'=>$krktr,
                    )
                );
            }
        }
    }

    public function sil($id)
    {
        $durum = "silindi";
        $this->main_model->delete($id,array(
            "durum"=>$durum
        ));redirect(base_url("main/listele/"));
    }

    public function myinformation(){
        $this->load->view("layouts/viewBilgilerim");
    }

    public  function myupdate($id){
        if ($this->input->method() == "post"){
            $krktr = $this->input->post("myKarakter");
            $gpass = $this->input->post("mySifre");
            switch ($krktr){
                case 0:
                    $krktr = "assets/images/faces/face1.jpg";
                    break;
                case 1:
                    $krktr = "assets/images/faces/face2.jpg";
                    break;
                case 2:
                    $krktr = "assets/images/faces/face3.jpg";
                    break;
                case 3:
                    $krktr = "assets/images/faces/face4.jpg";
                    break;
                case 4:
                    $krktr = "assets/images/faces/face5.jpg";
                    break;
                case 5:
                    $krktr = "assets/images/faces/face6.jpg";
                    break;
                case 6:
                    $krktr = "assets/images/faces/face7.jpg";
                    break;
                case 7:
                    $krktr = "assets/images/faces/face8.jpg";
                    break;
                case 8:
                    $krktr = "assets/images/faces/face9.jpg";
                    break;
                case 9:
                    $krktr = "assets/images/faces/face10.jpg";
                    break;
                case 10:
                    $krktr = "assets/images/faces/face11.jpg";
                    break;
                case 11:
                    $krktr = "assets/images/faces/face12.jpg";
                    break;
                case 12:
                    $krktr = "assets/images/faces/face13.jpg";
                    break;
                case 13:
                    $krktr = "assets/images/faces/face14.jpg";
                    break;
                case 14:
                    $krktr = "assets/images/faces/face15.jpg";
                    break;
                case 15:
                    $krktr = "assets/images/faces/face16.jpg";
                    break;
                case 16:
                    $krktr = "assets/images/faces/face17.jpg";
                    break;
                case 17:
                    $krktr = "assets/images/faces/face18.jpg";
                    break;
                case 18:
                    $krktr = "assets/images/faces/face19.jpg";
                    break;
                case 19:
                    $krktr = "assets/images/faces/face20.jpg";
                    break;
            }
            $id=$this->uri->segment(3);

            $this->form_validation->set_rules("myPosta", "E-Posta", "required|trim|valid_email|is_unique[kullanici.eposta]");

            if ($this->form_validation->run() == false){
                $this->load->view("layouts/viewBilgilerim", validation_errors());
            }
            else{
                if (isset($gpass)&&!empty($gpass)){
                    $update = $this->main_model->myupdate1($id,
                        $degerler = array(
                            'adi'=>$this->input->post('myName'),
                            'soyadi'=>$this->input->post('mySname'),
                            'cinsiyet'=>$this->input->post("myCinsiyet")==0? "ERKEK":"KADIN",
                            'eposta'=>$this->input->post('myPosta'),
                            'sifre'=>sha1(md5(strip_tags($gpass))),
                            'dogum_tarihi'=>$this->input->post('myDogumT'),
                            'karakter'=>$krktr,
                        )
                    );
                }else{
                    $update = $this->main_model->myupdate1($id,
                        $degerler = array(
                            'adi'=>$this->input->post('myName'),
                            'soyadi'=>$this->input->post('mySname'),
                            'cinsiyet'=>$this->input->post("myCinsiyet")==0? "ERKEK":"KADIN",
                            'eposta'=>$this->input->post('myPosta'),
                            'dogum_tarihi'=>$this->input->post('myDogumT'),
                            'karakter'=>$krktr,
                        )
                    );
                }
            }
        }
    }
}