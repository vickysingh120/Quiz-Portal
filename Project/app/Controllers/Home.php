<?php

namespace App\Controllers;
use CodeIgniter\HTTP\IncomingRequest;

class Home extends BaseController
{
	public function index()
	{
		$db = \Config\Database::connect();

        $result=$db->query("Select exam_id,exam_name,test_table,exam_url from tb_exam where exam_status=1 order by exam_order")->getResult();
		$exams=array();$i=0;
		foreach($result as $exam)
		{
			$tmp['exam_id']=$exam->exam_id;
			$tmp['exam_name']=$exam->exam_name;
			$tmp['exam_url']=$exam->exam_url;
			$sql="Select test_id,test_name,test_img,test_url from $exam->test_table";
			$tests=$db->query($sql)->getResult();
			$tmp['tests']=$tests;
			$exams[$i++]=$tmp;
		}
		$data = [
			'page_title' => 'Home | Coding Sphere',
			'exams'=>$exams
		];

		return view('home', $data);
	}
	public function courses()
	{
		$data = [
			'page_title' => 'Courses | Coding Sphere'
		];
		return view('courses', $data);
	}
	public function quiz_page()
	{
		$test_id = 1;
		$db = \Config\Database::connect();
		$query = $db->query("Select * from tb_ques where test_id=$test_id");
		$result = $query->getResult();

		$data['result'] = $result;
		// echo "<pre>";
		// print_r($result);

		return view('quiz_page', $data);
	}
	public function check_ques()
	{
		
	   $request = service('request');
	   $ques_id = $request->getPost('ques_id');
	   $ques_op = $request->getPost('ques_op');

		$db = \Config\Database::connect();
		$query = "Select ques_op1,ques_op2,ques_op3,ques_op4,ques_ans from tb_ques where ques_id=$ques_id";

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
