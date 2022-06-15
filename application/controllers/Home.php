<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    // index view web
    public function index()
    {
        $this->load->library('session');
        $this->session->set_userdata('language','english');
        $this->load->helper('url_helper');
        $this->load->helper('form');
    }

    public function checklanguage() 
    {
        $val=$this->session->userdata('language');
        $this->session->set_userdata('page','home'); 
        $this->session->set_userdata("clicked","studio");
        if (!$val)
            $this->language_HR();
    }

    public function dashboard()
    {
        $this->checklanguage();

        $this->load->model('projects_model', 'projects');
        $this->session->set_userdata("where","`projects`.`slideshowimage`=1");
        $projects=$this->projects->allprojectsfromType('slideshowimage');

        $images=[];
        $titles=[];
        $etitles=[];
        $ids=[];

        for ($i=0;$i<count($projects);$i++) {
            $path = 'assets/projects/'.$projects[$i]['id'].'/';
            $testimages=[];
            $testtitles=[];
            $testetitles=[];
            foreach (glob($path."*.*") as $file) {
                // echo $file;
                array_push($testimages, $file);
                array_push($testtitles, $projects[$i]['name']);
                array_push($testetitles, $projects[$i]['ename']);
            }
            $imgorder=$projects[$i]['imgorder'];
            $imgorder=explode(",", $imgorder);
            $imgorder = array_filter($imgorder, function($v){ 
                return !is_null($v) && $v !== ''; 
            });
            for ($j=0;$j<count($imgorder);$j++) {
                $c = ($imgorder[$j]-1);
                array_push($images ,$testimages[$c]);
                array_push($titles ,$testtitles[$c]);
                array_push($etitles ,$testetitles[$c]);
                array_push($ids, $projects[$i]["id"]);
            }
        }

        $files['files']=$images;
        $files['titles']=$titles;
        $files['etitles']=$etitles;
        $files['ids']=$ids;

        $data['title'] = 'Protoarch';
        $data['data'] = $projects;
        $data['language']['english']=$this->lang->load('proj','english',true);
        $data['language']['croatian']=$this->lang->load('proj','croatian',true);

        $this->load->view('templates/home_header', $data);
        $this->load->view('home/head');
        $this->load->view('custom/sidebar', $data);
        $this->load->view('home/index');
        $this->load->view('custom/intropage', $files);
        $this->load->view('home/foot');
        $this->load->view('templates/home_footer', $data);
    }

    public function contact()
    {
        $this->checklanguage();

        $this->load->model('projects_model', 'projects');
        $this->session->set_userdata("where","`projects`.`slideshowimage`=1");
        $projects=$this->projects->allprojectsfromType('slideshowimage');

        $images=[];
        $titles=[];
        $etitles=[];
        $ids=[];

        for ($i=0;$i<count($projects);$i++) {
            $path = 'assets/projects/'.$projects[$i]['id'].'/';
            $testimages=[];
            $testtitles=[];
            $testetitles=[];
            foreach (glob($path."*.*") as $file) {
                // echo $file;
                array_push($testimages, $file);
                array_push($testtitles, $projects[$i]['name']);
                array_push($testetitles, $projects[$i]['ename']);
            }
            $imgorder=$projects[$i]['imgorder'];
            $imgorder=explode(",", $imgorder);
            $imgorder = array_filter($imgorder, function($v){ 
                return !is_null($v) && $v !== ''; 
            });
            for ($j=0;$j<count($imgorder);$j++) {
                $c = ($imgorder[$j]-1);
                array_push($images ,$testimages[$c]);
                array_push($titles ,$testtitles[$c]);
                array_push($etitles ,$testetitles[$c]);
                array_push($ids, $projects[$i]["id"]);
            }
        }

        $files['files']=$images;
        $files['titles']=$titles;
        $files['etitles']=$etitles;
        $files['ids']=$ids;

        $data['title'] = 'Protoarch';
        $data['data'] = $projects;
        $data['language']['english']=$this->lang->load('proj','english',true);
        $data['language']['croatian']=$this->lang->load('proj','croatian',true);

        $this->load->view('templates/home_header', $data);
        $this->load->view('home/head');
        $this->load->view('custom/sidebar', $data);
        $this->load->view('contact/index');
        $this->load->view('custom/intropage', $files);
        $this->load->view('contact/foot');
        $this->load->view('templates/contact_footer', $data);
    }

    public function adminlogin()
    {
        $data['title'] = 'Protoarch';
        $data['language']['english']=$this->lang->load('proj','english',true);
        $data['language']['croatian']=$this->lang->load('proj','croatian',true);

        $this->load->view('templates/extra_header');
        $this->load->view('home/login', $data);
        $this->load->view('templates/extra_footer');
    }

    public function clicksignin() {
        // echo "123";
        $email = $this->input->post('email');
        $pass = $this->input->post('pass');
        if (!$email||!$pass) {
            $array_msg = array('message'=>'You must fill Email and password!','type'=>'loginerror','email'=>$email);
            $this->session->set_flashdata('msg',$array_msg);
            redirect(base_url('signin'));
            return;
        }

        $this->load->model('Home_model', 'home');
        $result = $this->home->signin($email, $pass);
        if ($result['msg']!='success') {
            $array_msg = array('message'=>'Sorry Retype Password!','type'=>'loginerror','email'=>$email);
            $this->session->set_flashdata('msg',$array_msg);
            redirect(base_url('signin'));
            return;
        }
        redirect(base_url('manage'));
    }

    public function manage() {
        $this->checklanguage();
        $data['title'] = 'Protoarch';
        $data['language']['english']=$this->lang->load('proj','english',true);
        $data['language']['croatian']=$this->lang->load('proj','croatian',true);

        $this->load->model('Projects_model', 'projects');
        $this->session->set_userdata("where","");
        $this->session->set_userdata("clicked","projects");
        $projects['projects'] = $this->projects->allprojects();

        $this->load->view('home/page_header');
        $this->load->view('home/navbar');
        $this->load->view('home/sidebar',$data);
        $this->load->view('home/page_main_head');
        $this->load->view('manage/index' ,$projects);
        $this->load->view('home/page_main_foot');
        $this->load->view('home/page_footer');
    }

    public function managestudio() {
        $this->checklanguage();
        $data['title'] = 'Protoarch';
        $data['language']['english']=$this->lang->load('proj','english',true);
        $data['language']['croatian']=$this->lang->load('proj','croatian',true);

        $this->load->model('Projects_model', 'projects');
        $this->session->set_userdata("where","");
        $this->session->set_userdata("clicked","studio");
        $projects['projects'] = $this->projects->allstudio();

        $this->load->view('home/page_header');
        $this->load->view('home/navbar');
        $this->load->view('home/sidebar',$data);
        $this->load->view('home/page_main_head');
        $this->load->view('manage/studio' ,$projects);
        $this->load->view('home/page_main_foot');
        $this->load->view('home/page_footer');
    }

    public function adminregister()
    {
        $data['title'] = 'Protoarch';
        $data['language']['english']=$this->lang->load('proj','english',true);
        $data['language']['croatian']=$this->lang->load('proj','croatian',true);

        $this->load->view('templates/extra_header');
        $this->load->view('home/register', $data);
        $this->load->view('templates/extra_footer');
    }

    public function clickregister()
    {
        $name=$this->input->post('fullname');
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        $confirm=$this->input->post('confirmpass');
        $agreeTerms=$this->input->post('agreeTerms');

        if ($password!=$confirm||$password==''||$password==NULL||strlen($password)<6) {
            $array_msg = array('message'=>'Retype Password!','type'=>'signuperror','fullname'=>$name,'email'=>$email,'password'=>$password,'confirmpass'=>$confirm);
            $this->session->set_flashdata('msg',$array_msg);
            $this->adminregister();
            return;
        }

        if ($agreeTerms!="agree") {
            $array_msg = array('message'=>'Check terms!','type'=>'signuperror','fullname'=>$name,'email'=>$email,'password'=>$password,'confirmpass'=>$confirm);
            $this->session->set_flashdata('msg',$array_msg);
            $this->adminregister();
            return;
        }

        $this->load->model('Home_model', 'home');
        $res=$this->home->confirmemail($email);
        if ($res['msg']!="success") {
            $array_msg = array('message'=>'Retype Email!','type'=>'signuperror','fullname'=>$name,'email'=>$email,'password'=>$password,'confirmpass'=>$confirm);
            $this->session->set_flashdata('msg',$array_msg);
            $this->adminregister();
            return;
        }
        $res=$this->home->signup($name, $email, $password);
        if ($res=="success") {
            $array_msg = array('message'=>'Success Register','type'=>'signupsuccess','email'=>$email);
            $this->session->set_flashdata('msg',$array_msg);
            redirect(base_url('home/adminlogin'));
            return;
        }
        return;
        echo "clickrecover:".$name.$email.$password;
    }

    public function adminforgot()
    {
        $data['title'] = 'Protoarch';
        $data['language']['english']=$this->lang->load('proj','english',true);
        $data['language']['croatian']=$this->lang->load('proj','croatian',true);

        $this->load->view('templates/extra_header');
        $this->load->view('home/forgot-password', $data);
        $this->load->view('templates/extra_footer');
    }

    public function clickforgot()
    {
        echo "clickforgot";
    }

    public function adminrecover()
    {
        $data['title'] = 'Protoarch';
        $data['language']['english']=$this->lang->load('proj','english',true);
        $data['language']['croatian']=$this->lang->load('proj','croatian',true);

        $this->load->view('templates/extra_header');
        $this->load->view('home/recover-password', $data);
        $this->load->view('templates/extra_footer');
    }

    public function clickrecover()
    {
        echo "clickrecover";
    }

    public function clickdelete()
    {
        $id = $this->input->post('id');
        
        $this->load->model('Home_model', 'home');
        $res = $this->home->deleteitem($id);
        echo $res;
        return;
    }

    public function clickedit($id)
    {
        if (!$id) // works with request
            return;

        $this->editpage($id);
    }

    public function createpage()
    {
        $this->checklanguage();

        $data['title'] = 'Protoarch';
        $data['language']['english']=$this->lang->load('proj','english',true);
        $data['language']['croatian']=$this->lang->load('proj','croatian',true);

        $this->session->set_userdata("clicked","projects");

        $this->load->view('home/page_header');
        $this->load->view('home/navbar');
        $this->load->view('home/sidebar',$data);
        $this->load->view('home/page_main_head');
        $this->load->view('manage/createpage');
        $this->load->view('home/page_main_foot');
        $this->load->view('home/page_footer');
    }

    public function editpage($id)
    {
        $this->checklanguage();
        $this->load->model('projects_model', 'projects');
        $projects = $this->projects->projectsfromcategory($id);

        $path = 'assets/projects/'.$projects[0]['id'].'/';

        $testimages=[];
        foreach (glob($path."*.*") as $file) {
            array_push($testimages,$file);
        }

        $files=[];
        $imgorder=$projects[0]['imgorder'];
        $imgorder=explode(",", $imgorder);
        $imgorder = array_filter($imgorder, function($v){ 
            return !is_null($v) && $v !== ''; 
        });
        for ($i=0;$i<count($imgorder);$i++) {
            $c = ($imgorder[$i]-1);
            array_push($files ,$testimages[$c]);
        }

        $data['title'] = 'Protoarch';
        $data['projects'] = $projects[0];
        $data['imgorder'] = $imgorder;
        $data['files'] = $files;
        $data['language']['english']=$this->lang->load('proj','english',true);
        $data['language']['croatian']=$this->lang->load('proj','croatian',true);

        $this->session->set_userdata("clicked","projects");

        $this->load->view('home/page_header');
        $this->load->view('home/navbar');
        $this->load->view('home/sidebar',$data);
        $this->load->view('home/page_main_head');
        $this->load->view('manage/editpage', $data);
        $this->load->view('home/page_main_foot');
        $this->load->view('home/page_footer');
    }

    public function multipleImageStore()
    {
        if (!isset($_GET['id'])) // works with request
            return;

        // echo "123:".$this->lang->line('proj.proj_sel');

        $id = $_GET['id'];
        // echo $countfiles;

        $count = count($_FILES['files']['name']);
        if ($count>0) {
            $path="assets/projects/".$id;
            $this->load->helper("file"); // load the helper
            delete_files($path, true); // delete all files/folders

            if (!is_dir($path)) {
                mkdir($path, 0777, TRUE);
            }
        }
        for($i=0;$i<$count;$i++){
            if(!empty($_FILES['files']['name'][$i])){

                $_FILES['file']['name'] = $_FILES['files']['name'][$i];
                $_FILES['file']['type'] = $_FILES['files']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES['files']['error'][$i];
                $_FILES['file']['size'] = $_FILES['files']['size'][$i];

                $config['image_library'] = 'gd2';
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['max_size'] = "2048000"; // Can be set to particular file size , here it is 2 MB(2048 Kb)
                $new_name = ($i+1).".jpg";
                $config['file_name'] = $new_name;

                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                // $arr = array('msg' => 'something went wrong', 'success' => false);

                if($this->upload->do_upload('file')){
                    $uploadData = $this->upload->data();
                    $this->resize_image($uploadData['full_path']);
                    // $filename = $uploadData['file_name'];
                    // $arr = array('msg' => 'Image has been uploaded successfully', 'success' => true);
                }
                else {
                    echo $this->upload->display_errors();
                }
            }
        }
        // echo json_encode($arr);
    }

    public function singleImageStore()
    {
        if (!isset($_GET['id'])) // works with request
            return;

        // echo "123:".$this->lang->line('proj.proj_sel');

        $id = $_GET['id'];
        // echo $countfiles;
        $path="assets/studio/";
        if(file_exists($path.$id.".jpg")) {
            unlink($path.$id.".jpg");
        }
        if(!empty($_FILES['files']['name'][0])){

            $_FILES['file']['name'] = $_FILES['files']['name'][0];
            $_FILES['file']['type'] = $_FILES['files']['type'][0];
            $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][0];
            $_FILES['file']['error'] = $_FILES['files']['error'][0];
            $_FILES['file']['size'] = $_FILES['files']['size'][0];

            $config['image_library'] = 'gd2';
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = "2048000"; // Can be set to particular file size , here it is 2 MB(2048 Kb)
            $new_name = $id.".jpg";
            $config['file_name'] = $new_name;

            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            // $arr = array('msg' => 'something went wrong', 'success' => false);

            if($this->upload->do_upload('file')){
                $uploadData = $this->upload->data();
                $this->resize_image($uploadData['full_path']);
                // $filename = $uploadData['file_name'];
                // $arr = array('msg' => 'Image has been uploaded successfully', 'success' => true);
            }
            else {
                echo $this->upload->display_errors();
            }
        }
        // echo json_encode($arr);
    }
    function resize_image($file_path) {
        // Set your config up
        $config['image_library']    = "gd2";      
        $config['source_image']     = $file_path;      
        $config['create_thumb']     = TRUE;      
        $config['maintain_ratio']   = TRUE;     
        $config['new_image'] = $file_path; 
        $config['width'] = "1280";
        $config['height'] = "720";
        $config['thumb_marker']=FALSE;
        $this->load->library('image_lib');

        $this->image_lib->initialize($config);
        // Do your manipulation

        if(!$this->image_lib->resize())
        {
           $this->image_lib->display_errors();  
        } 
        $this->image_lib->clear(); 
    }

    public function saveclick() {
        $name = $this->input->post('name');
        $ename = $this->input->post('ename');
        $category = $this->input->post('category');
        $featured = $this->input->post('featured');
        $product = $this->input->post('product');
        $slideshowimage = $this->input->post('slideshowimage');
        $finest = $this->input->post('finest');
        $location = $this->input->post('location');
        $elocation = $this->input->post('elocation');
        $investor = $this->input->post('investor');
        $author = $this->input->post('author');
        $collaborator = $this->input->post('collaborator');
        $year = $this->input->post('year');
        $square = $this->input->post('square');
        $status = $this->input->post('status');
        $text = $this->input->post('text');
        $etext = $this->input->post('etext');
        $gname = $this->input->post('gname');
        $gtype = $this->input->post('gtype');
        $imageorder = $this->input->post('imageorder');
        $vimeo = $this->input->post('vimeo');

        $this->load->model('Home_model', 'home');

        if (!isset($_GET['id'])) // works with request
        {
            $projects_id = $this->home->createItem($name, $ename, $category, $featured, $product, $slideshowimage, $finest, $location, $elocation, $investor, $author, $collaborator, $year, $square, $status, $text, $etext, $gname, $gtype, $imageorder, $vimeo);
            echo $projects_id;
            return $projects_id;
        }

        // echo "123:".$this->lang->line('proj.proj_sel');

        $id = $_GET['id'];

        // echo $id.$name.$category.$featured.$product.$slideshowimage.$location.$investor.$author.$collaborator.$year.$square.$text.$gname.$gtype;

        $result = $this->home->saveItem($id, $name, $ename, $category, $featured, $product, $slideshowimage, $finest, $location, $elocation, $investor, $author, $collaborator, $year, $square, $status, $text, $etext, $gname, $gtype, $imageorder, $vimeo);
        echo $result;
    }

    public function clickmdelete()
    {
        $id = $this->input->post('id');
        
        $this->load->model('Home_model', 'home');
        $res = $this->home->mdeleteitem($id);
        echo $res;
        return;
    }

    public function clickmedit($id)
    {
        if (!$id) // works with request
            return;

        $this->meditpage($id);
    }

    public function mcreatepage()
    {
        $this->checklanguage();

        $data['title'] = 'Protoarch';
        $data['language']['english']=$this->lang->load('proj','english',true);
        $data['language']['croatian']=$this->lang->load('proj','croatian',true);

        $this->session->set_userdata("clicked","studio");

        $this->load->view('home/page_header');
        $this->load->view('home/navbar');
        $this->load->view('home/sidebar',$data);
        $this->load->view('home/page_main_head');
        $this->load->view('manage/mcreatepage');
        $this->load->view('home/page_main_foot');
        $this->load->view('home/page_footer');
    }

    public function meditpage($id)
    {
        $this->checklanguage();
        $this->load->model('projects_model', 'projects');
        $projects = $this->projects->studiofromid($id);

        $data['title'] = 'Protoarch';
        $data['projects'] = $projects[0];
        $data['language']['english']=$this->lang->load('proj','english',true);
        $data['language']['croatian']=$this->lang->load('proj','croatian',true);

        $this->session->set_userdata("clicked","studio");

        $this->load->view('home/page_header');
        $this->load->view('home/navbar');
        $this->load->view('home/sidebar',$data);
        $this->load->view('home/page_main_head');
        $this->load->view('manage/meditpage', $data);
        $this->load->view('home/page_main_foot');
        $this->load->view('home/page_footer');
    }

    public function msaveclick() {
        $title = $this->input->post('title');
        $etitle = $this->input->post('etitle');
        $year = $this->input->post('year');
        $description = $this->input->post('description');
        $edescription = $this->input->post('edescription');

        $this->load->model('Home_model', 'home');

        if (!isset($_GET['id'])) // works with request
        {
            $projects_id = $this->home->mcreateItem($title, $etitle, $year, $description, $edescription);
            echo $projects_id;
            return $projects_id;
        }

        // echo "123:".$this->lang->line('proj.proj_sel');

        $id = $_GET['id'];

        // echo $id.$name.$category.$featured.$product.$slideshowimage.$location.$investor.$author.$collaborator.$year.$square.$text.$gname.$gtype;

        $result = $this->home->msaveItem($id, $title, $etitle, $year, $description, $edescription);
        echo $result;
    }

    public function language_HR()
    {
        $this->session->set_userdata('language','croatian');
        // echo $this->session->userdata('language');
    }

    public function language_EN()
    {
        $this->session->set_userdata('language','english');
        // echo $this->session->userdata('language');
    }
}