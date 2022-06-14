<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

    public function getSubMenu()
    {
        $query =    "SELECT *
                    FROM `projects`";

        return $this->db->query($query)->result_array();
    }
    
    public function allprojects()
    {
        $query =    "SELECT `projects`.*, `projects_gallery`.`id` as `gid`, `projects_gallery`.`name` as `gname`, `projects_gallery`.`type` as `gtype`, `projects_gallery`.`count` as `gcount`
                    FROM `projects` JOIN `projects_gallery` ON `projects`.`id`=`projects_gallery`.`project_id`";

        return $this->db->query($query)->result_array();
    }

    public function signin($email,  $pass) {
        $query = "SELECT *
                FROM `user`
                WHERE `email`='$email' and `password`='$pass'";

        $res = $this->db->query($query)->result_array();
        $data;

        if (count($res)==0) {
            $data['msg']="failed";
        }
        else {
            $data['data']=$res[0];
            $data['msg']="success";
        }
        return $data;
    }

    public function confirmemail($email) {
        $query = "SELECT *
                FROM `user`
                WHERE `email`='$email'";

        $res = $this->db->query($query)->result_array();
        $msg;

        if (count($res)==0) {
            $msg['msg']="success";
        }
        else {
            $msg['msg']="failed";
        }
        return $msg;
    }

    public function signup($name, $email, $pass) {
        $data = array(
            'fullname'=>$name,
            'email'=>$email,
            'password'=>$pass
        );

        $this->db->insert('user',$data);
        $projects_id = $this->db->insert_id();

        return ($projects_id>0)?"success":"failed";
    }

    public function forgot($email) {

    }

    public function recover($email) {

    }

    public function saveItem($id,$name,$ename,$category,$featured,$product,$slideshowimage,$finest,$location,$elocation,$investor,$author,$collaborator,$year,$square,$status,$text,$etext,$gname,$gtype,$imageorder,$vimeo) {
        $data = array(
            'category'=>$category,
            'featured'=>($featured=='true')?1:0,
            'product'=>($product=='true')?1:0,
            'slideshowimage'=>($slideshowimage=='true')?1:0,
            'finest'=>($finest=='true')?1:0,
            'name'=>$name,
            'ename'=>$ename,
            'location'=>$location,
            'elocation'=>$elocation,
            'investor'=>$investor,
            'author'=>$author,
            'collaborators'=>$collaborator,
            'year'=>$year,
            'square'=>$square,
            'status'=>($status=='true')?1:0,
            'text'=>$text,
            'etext'=>$etext,
            'imgorder'=>$imageorder,
            'videourl'=>$vimeo
        );

        $this->db->where('id', $id);
        $res=$this->db->update('projects', $data);

        $data = array(
            'name'=>$gname,
            'type'=>$gtype
        );

        $this->db->where('project_id', $id);
        $this->db->update('projects_gallery', $data);

        // if (count($res)==0) {
        //     $data['msg']="failed";
        // }
        // else {
        //     $data['data']=$res[0];
        //     $data['msg']="success";
        // }
        return $res;
    }

    public function createItem($name,$ename,$category,$featured,$product,$slideshowimage,$finest,$location,$elocation,$investor,$author,$collaborator,$year,$square,$status,$text,$etext,$gname,$gtype,$imageorder,$vimeo) {
        $data = array(
            'category'=>$category,
            'featured'=>($featured=='true')?1:0,
            'product'=>($product=='true')?1:0,
            'slideshowimage'=>($slideshowimage=='true')?1:0,
            'finest'=>($finest=='true')?1:0,
            'name'=>$name,
            'ename'=>$ename,
            'location'=>$location,
            'elocation'=>$elocation,
            'investor'=>$investor,
            'author'=>$author,
            'collaborators'=>$collaborator,
            'year'=>$year,
            'square'=>$square,
            'status'=>($status=='true')?1:0,
            'text'=>$text,
            'etext'=>$etext,
            'imgorder'=>$imageorder,
            'videourl'=>$vimeo
        );

        $this->db->insert('projects',$data);
        $projects_id = $this->db->insert_id();

        $data = array(
            'project_id'=>$projects_id,
            'name'=>$gname,
            'type'=>$gtype
        );

        $this->db->insert('projects_gallery', $data);
        $gallery_id = $this->db->insert_id();
        return $projects_id;

        // if (count($res)==0) {
        //     $data['msg']="failed";
        // }
        // else {
        //     $data['data']=$res[0];
        //     $data['msg']="success";
        // }
    }

    public function deleteitem($id) {
        $this->db->where('id', $id);  
        $res=$this->db->delete('projects');
        $this->db->where('project_id', $id);  
        $this->db->delete('projects_gallery');
        return $res;
    }

    public function msaveItem($id, $title, $etitle, $year, $description, $edescription) {
        $data = array(
            'title'=>$title,
            'etitle'=>$etitle,
            'year'=>$year,
            'description'=>$description,
            'edescription'=>$edescription
        );

        $this->db->where('id', $id);
        $res=$this->db->update('studio_timeline', $data);
        
        return $res;
    }

    public function mcreateItem($title, $etitle, $year, $description, $edescription) {
        $data = array(
            'title'=>$title,
            'etitle'=>$etitle,
            'year'=>$year,
            'description'=>$description,
            'edescription'=>$edescription
        );

        $this->db->insert('studio_timeline',$data);
        $projects_id = $this->db->insert_id();

        return $projects_id;
    }

    public function mdeleteitem($id) {
        $this->db->where('id', $id);  
        $res=$this->db->delete('studio_timeline');
        return $res;
    }
}