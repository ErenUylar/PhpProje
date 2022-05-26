<?php

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        if (!$this->session->userdata('oturum')){
            redirect(base_url());
        }else{
            if ($this->session->userdata('yetki_id')!=2){
                redirect(base_url("main/"));
            }
        }
    }

    public function index()
    {
        $this->load->view("userDashboard/user");
    }
    public function information()
    {
        $this->load->view("userDashboard/layouts/information");
    }

    public  function infoupdate($id){
        if ($this->input->method() == "post"){
            $krktr = $this->input->post("guncelleKarakter");
            $gpass = $this->input->post("guncelleSifre");
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

            $this->form_validation->set_rules("guncellePosta", "E-Posta", "required|trim|valid_email|is_unique[kullanici.eposta]");

            if ($this->form_validation->run() == false){
                $this->load->view("userDashboard/layouts/information", validation_errors());
            }
            else{
                if (isset($gpass)&&!empty($gpass)){
                    $update = $this->user_model->update($id,
                        $degerler = array(
                            'adi'=>$this->input->post('guncelleName'),
                            'soyadi'=>$this->input->post('guncelleSname'),
                            'cinsiyet'=>$this->input->post("guncelleCinsiyet")==0? "ERKEK":"KADIN",
                            'eposta'=>$this->input->post('guncellePosta'),
                            'sifre'=>sha1(md5(strip_tags($gpass))),
                            'dogum_tarihi'=>$this->input->post('guncelleDogumT'),
                            'karakter'=>$krktr,
                        )
                    );
                }else{
                    $update = $this->user_model->update($id,
                        $degerler = array(
                            'adi'=>$this->input->post('guncelleName'),
                            'soyadi'=>$this->input->post('guncelleSname'),
                            'cinsiyet'=>$this->input->post("guncelleCinsiyet")==0? "ERKEK":"KADIN",
                            'eposta'=>$this->input->post('guncellePosta'),
                            'dogum_tarihi'=>$this->input->post('guncelleDogumT'),
                            'karakter'=>$krktr,
                        )
                    );
                }
            }
        }
    }
}