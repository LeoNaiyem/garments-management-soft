<?php
class CustomerApi{
	public function __construct(){
	}
	function index(){
		echo json_encode(["customers"=>Customer::all()]);
	}
	function pagination($data){
		$page=$data->page;
		$perpage=$data->perpage;
		echo json_encode(["customers"=>Customer::pagination($page,$perpage),"total_records"=>Customer::count()]);
	}
	function search($data){
		echo json_encode(["customers"=>Customer::filter($data->name)]);
	}
	function find($data){
		echo json_encode(["customer"=>Customer::find($data->id)]);
	}
	function delete($data){
		Customer::delete($data->id);
		echo json_encode(["success" => "yes"]);
	}
	function save($data,$file=[]){
		$customer=new Customer();
		$customer->name=$data->name;
		$customer->mobile=$data->mobile;
		$customer->email=$data->email;
		$customer->address=$data->address;
		$customer->photo=upload($file["photo"], "../img",$data->name);

		$customer->save();
		echo json_encode(["success" => "yes"]);
	}
	function update($data,$file=[]){
		$customer=new Customer();
		$customer->id=$data->id;
		$customer->name=$data->name;
		$customer->mobile=$data->mobile;
		$customer->email=$data->email;
		$customer->updated_at=$now;
		$customer->address=$data->address;
		if(isset($file["photo"]["name"])){
			$customer->photo=upload($file->photo, "../img",$data->name);
		}else{
			$customer->photo=Customer::find($data->id)->photo;
		}

		$customer->update();
		echo json_encode(["success" => "yes"]);
	}
}
?>
