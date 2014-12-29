<?php
	class Person {
		private $name;
		private $sex;
		private $age;

		//构造方法
		function __construct($name="",$sex="男",$age=20){
			$this->name=$name;
			$this->sex=$sex;
			$this->age=$age;
		}

		//析构方法
		function __destruct(){
			//echo "goodbye $this->name<br>";
		}

		function say(){
			echo "这个人在说话<br>";
			echo "my name is $this->name<br>";
			echo "my sex is $this->sex<br>";
			echo "my age is $this->age<br>";
		}

		function run(){
			echo "这个人在跑步,{$this->run_left()},{$this->run_wright()}<br>";
			echo "$this->run_left()";
			echo "$this->run_wright()";
		}

		private function run_left(){
			return "迈左腿";
		}

		private function run_wright(){
			return "迈右腿";
		}

	}

	/**
	* 
	*/
	class Student extends Person 
	{
		
	}

	//初始化对象
	$person1=new Person();
//	$person2=new Student();
//	$person2->say();
$person1->run();
?>