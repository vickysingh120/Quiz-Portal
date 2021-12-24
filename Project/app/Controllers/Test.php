<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\IncomingRequest;

class Test extends BaseController
{
    public function index()
	{
		// $db=\Config\Database::connect();
		// $query=$db->query('Select * from tb_ques');
		// $result=$query->getResult();
		// echo "<pre>";
		// print_r($result);
		echo "<h1>This is the test page</h1>";
	}
	public function test($exam_id,$test_url)
	{
		// echo "<h1> Exam id:".$exam_id."</h1>";
		// echo "<h1> Test url:".$test_url."</h1>";
		$data = [
			'page_title' => 'Test Page | Coding Sphere'
		];
		$db = \Config\Database::connect();
		$result = $db->query("Select test_table from tb_exam where exam_id=$exam_id")->getResult();
		if(empty($result))
		{
			echo "Empty array";
		}
		else
		{
			$test_table=$result[0]->test_table;
			
			$result = $db->query("Select test_id,ques_table from $test_table where test_url='$test_url'")->getResult();
			if(empty($result))
			{
				echo "Empty array";
			}
			else
			{
				$test_id=$result[0]->test_id;
				$ques_table=$result[0]->ques_table;
				$data['q_table']=$ques_table;				
				$result = $db->query("Select * from $ques_table where test_id=$test_id")->getResult();
				$data['result']=$result;
			}
		}
		
		// echo "<pre>";
		// print_r($data);

		echo view('test_pages/test_page',$data);
	}



	public function exam($exam_url)
	{
		$db = \Config\Database::connect();
		$data = [];

		$result=$db->query("Select exam_id,exam_name,test_table,exam_seo_des,exam_seo_key from tb_exam where exam_url='$exam_url'")->getResult();
		if(!empty($result))
		{
			$test_table=$result[0]->test_table;
			$data['page_title']=$result[0]->exam_name;
			$data['page_des']=$result[0]->exam_seo_des;
			$data['page_key']=$result[0]->exam_seo_key;
			$data['exam_id']=$result[0]->exam_id;
			$result=$db->query("Select * from $test_table")->getResult();
			// echo "<pre>";
			// print_r($result);
			// echo "</pre>";
			$data['all_tests']=$result;

		}
		else
		{
			echo "No such Exam";
		}
		echo view('test_pages/exam_page',$data);
	}
    // public function _remap($method)



	public function check_ques()
	{
	   $db = \Config\Database::connect();
	   $ques_id = $this->request->getPost('ques_id');
	   $ques_op = $this->request->getPost('ques_op');
	   $ques_table = $this->request->getPost('ques_table');
	//    print_r($_POST);

		
		$query = "Select ques_op1,ques_op2,ques_op3,ques_op4,ques_ans from $ques_table where ques_id=$ques_id";

		$result = $db->query($query)->getResult();
		
		$row = $result[0];
		$data = '';
		if ($row->$ques_op == $row->ques_ans)
			$data .= 'true';
		else
			$data .= 'false';


		if ($data == 'false') {
			if ($row->ques_op1 == $row->ques_ans)
				$data .= ',' . 'ques_op1';
			else if ($row->ques_op2 == $row->ques_ans)
				$data .= ',' . 'ques_op2';
			else if ($row->ques_op3 == $row->ques_ans)
				$data .= ',' . 'ques_op3';
			else
				$data .= ',' . 'ques_op4';
		}

		print_r($data);
	}




}



?>