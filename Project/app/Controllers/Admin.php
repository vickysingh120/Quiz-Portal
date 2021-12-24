<?php
namespace App\Controllers;
use CodeIgniter\HTTP\IncomingRequest;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
			'page_title' => 'Admin Page | Coding Sphere'
		];
		
        echo view('admin_pages/main_page',$data);  
    }
    public function login()
    {
        $session=session();
        // print_r($_POST);
        $user_email=$this->request->getPost('user_email');
        $password=$this->request->getPost('user_password');
        if($user_email=="admin@gmail.com" && $password=="1234")
        {
            $session->set('user','admin');
            echo "success";
        }
        else{
            echo "error";
        }
    }
    public function add_exam()
    {

        $data = [
			'page_title' => 'Add Exam-Admin | Coding Sphere'
		];
		$session=session();
        if($session->has('user'))
        {
            echo view('admin_pages/add_exam',$data);
        }
        else{
            $url=base_url(); 
           echo "<div style='margin:15px; font-size:1.5rem'> Login to access the page........ 
                 <br> <a href='$url'>  Click here </a> to go to Home Page  
           </div>";
        }
        
    }
// for adding exam 
    public function add_exam_b()
    {
        $db = \Config\Database::connect();
        // $request=service('request');
        $exam_name=$this->request->getPost('exam_name');
        $exam_order=$this->request->getPost('exam_order');
        $test_table=$this->request->getPost('test_table');
        $ques_table=$this->request->getPost('ques_table');
        $exam_seo_key=$this->request->getPost('exam_seo_key');
        $exam_seo_des=$this->request->getPost('exam_seo_des');
        $exam_url=$this->request->getPost('exam_url');
        
        $file= $this->request->getFile('exam_pic');
        if($file->isValid() && !$file->hasMoved())
        {
            $num=mt_rand(9999,99999);
            $imageName=$file->getName();
            $imageName=$num.$imageName;
            $file->move('assets/img/exam/',$imageName);
            $query="Insert into tb_exam (exam_name,exam_order,test_table,ques_table,exam_url,exam_seo_des,exam_seo_key,exam_pic) values('$exam_name',$exam_order,'$test_table','$ques_table','$exam_url','$exam_seo_des','$exam_seo_key','$imageName')";
        }
        else{
            $query="Insert into tb_exam (exam_name,exam_order,test_table,ques_table,exam_url,exam_seo_des,exam_seo_key) values('$exam_name',$exam_order,'$test_table','$ques_table','$exam_url','$exam_seo_des','$exam_seo_key')";
        }
        $result=$db->query($query);
        print_r($result);
    }

    public function add_test()
    {
        $db = \Config\Database::connect();
        $data = [
			'page_title' => 'Add Exam-Admin | Coding Sphere'
		];
		$sql="Select exam_id,exam_name from tb_exam";
        $result=$db->query($sql)->getResult();
        $data['exam_details']=$result;
       echo view('admin_pages/add_test',$data);
    }

    public function add_test_b()
    {
        $db = \Config\Database::connect();

        $exam_id=$this->request->getPost('exam_id');
        // getting test dbname for exam
           $result=$db->query("Select test_table from tb_exam where exam_id=$exam_id")->getResult(); 

        $test_table=$result[0]->test_table;
        $test_name=$this->request->getPost('test_name');
        $ques_table=$this->request->getPost('ques_table');
        $test_cat=$this->request->getPost('test_cat');
        $test_order=$this->request->getPost('test_order'); 
        $test_url=$this->request->getPost('test_url'); 
        $test_seo_des=$this->request->getPost('test_seo_des'); 
        $test_seo_key=$this->request->getPost('test_seo_key'); 

        $query="";

        $file= $this->request->getFile('test_img');
        if($file->isValid() && !$file->hasMoved())
        {
            $num=mt_rand(9999,99999);
            $imageName=$file->getName();
            $imageName="test".$num.$imageName;
            $file->move('assets/img/test/',$imageName);
            $query="Insert into $test_table (exam_id,ques_table,test_name,test_cat,test_order,test_url,test_seo_des,test_seo_key,test_img) values($exam_id,'$ques_table','$test_name','$test_cat',$test_order,'$test_url','$test_seo_des','$test_seo_key','$imageName')";
        }
        else{
            $query="Insert into $test_table (exam_id,ques_table,test_name,test_cat,test_order,test_url,test_seo_des,test_seo_key) values($exam_id,'$ques_table','$test_name','$test_cat',$test_order,'$test_url','$test_seo_des','$test_seo_key')";
        }
        $result=$db->query($query);
        echo $result;
       
    }

    public function add_ques()
    {
        $db = \Config\Database::connect();
        $data = [
			'page_title' => 'Add Ques-Admin | Coding Sphere'
		];
		$sql="Select exam_id,exam_name from tb_exam";
        $result=$db->query($sql)->getResult();
        $data['exam_details']=$result;
       echo view('admin_pages/add_ques',$data);
    }

    public function fetch_tests()
    {
        $db = \Config\Database::connect();

        $exam_id=$this->request->getPost('exam_id');
        $result=$db->query("Select test_table from tb_exam where exam_id=$exam_id")->getResult();

        $test_table=$result[0]->test_table;
        $result=$db->query("Select test_id, test_name,ques_table from $test_table")->getResult();
        $tmp="<option value=''>Select Test</option>";
        foreach($result as $row)
        {
            $tmp .="<option value='".$row->test_id."'>".$row->test_name."</option>";
        }
       echo $tmp."my_seperator12".$result[0]->ques_table;
        
    }
    public function add_ques_b()
    {
        $db = \Config\Database::connect();

        $exam_id=$this->request->getPost('exam_id');
        $test_id=$this->request->getPost('test_id');
        $ques_table=$this->request->getPost('ques_table');
        $ques_text=$this->request->getPost('ques_text');
        $ques_op1=$this->request->getPost('ques_op1');
        $ques_op2=$this->request->getPost('ques_op2');
        $ques_op3=$this->request->getPost('ques_op3');
        $ques_op4=$this->request->getPost('ques_op4');
        $ques_ans=$this->request->getPost('ques_ans');
        $ques_tag=$this->request->getPost('ques_tag');
                        
        $query="";

        $file= $this->request->getFile('ques_img');
    
        if($file->isValid() && !$file->hasMoved())
        {
            $num=mt_rand(9999,99999);
            $imageName=$file->getName();
            $imageName="ques".$num.$imageName;
            $file->move('assets/img/ques/',$imageName);
            $query="Insert into $ques_table (exam_id,test_id,ques_text,ques_op1,ques_op2,ques_op3,ques_op4,ques_ans,ques_tag,ques_img) values($exam_id,$test_id,'$ques_text','$ques_op1','$ques_op2','$ques_op3','$ques_op4','$ques_ans','$ques_tag','$imageName')";
        }
        else{
            $query="Insert into $ques_table (exam_id,test_id,ques_text,ques_op1,ques_op2,ques_op3,ques_op4,ques_ans,ques_tag) values($exam_id,$test_id,'$ques_text','$ques_op1','$ques_op2','$ques_op3','$ques_op4','$ques_ans','$ques_tag')";
        }
        $result=$db->query($query);
        echo $result;
        
    }
}


