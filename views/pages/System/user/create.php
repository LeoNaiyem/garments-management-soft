<?php
if(isset($_POST["create"])){
	$errors=[];

	if(count($errors)==0){
		$user=new User();
		$user->name=$_POST["name"];
		$user->role_id=$_POST["role_id"];
		$user->password=password_hash($_POST["password"],PASSWORD_BCRYPT);
		$user->email=$_POST["email"];
		$user->full_name=$_POST["full_name"];
		$user->created_at=$now;
		$user->photo=upload($_FILES["photo"],"img",$user->name);
		//$user->verify_code=$_POST["txtVerifyCode"];
		//$user->inactive=isset($_POST["chkInactive"])?1:0;
		$user->mobile=$_POST["mobile"];
		$user->updated_at=$now;	

		$user->save();
	}else{
		 print_r($errors);
	}
}
?>



<?php

echo Page::title(["title"=>"Create User"]);
echo Page::body_open();
echo Page::context_open(["manage-button"=>"Manage User","route"=>"users"]);

echo Form::open(["route"=>"create-user"]);
	$html="";	
	echo Form::text(["label"=>"User Name","name"=>"name","type"=>"text","placeholder"=>"Enter Name"]);	
	echo Form::select(["label"=>"Role","name"=>"role_id","table"=>"roles"]);	
	echo Form::text(["label"=>"Password","name"=>"password","type"=>"password","placeholder"=>"Enter Password"]);
	echo Form::text(["label"=>"Email","name"=>"email","type"=>"text","placeholder"=>"Enter Email"]);	
	echo Form::text(["label"=>"Full Name","name"=>"full_name","type"=>"text","placeholder"=>"Enter Full Name"]);
	echo Form::text(["label"=>"Photo","name"=>"photo","type"=>"file"]);
	echo Form::text(["label"=>"Mobile","name"=>"mobile","type"=>"text","placeholder"=>"Mobile"]);
	echo Form::button(["name"=>"create","value"=>"Save","type"=>"submit"]);
	
	echo Form::close();
	echo $html;

	echo Page::context_close();
   echo Page::body_close();
?>
