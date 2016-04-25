<?php namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http;
use App\Cars;
use Illuminate\Http\Request;

class CarController extends Controller {
	public function show($id=null){ //reciping a method
		$car = Cars::find($id);
		if($id == null){
			$car= "empty";
			echo url('mierda');
			return $car;
		}
		return view('cars.show',array('car'=>$car));
	}
	public function show2(){
		$car = array('name'=>'geo metro', 'year'=>'1995');
		return view('cars.show2',$car);
	}
	public function show3($page= null){  //reciping a optional method
		$newArray = array(
			array("name"=>"Juan Pablo", "age"=> "33", "langs"=> ['php', 'html', 'js' ]),
			array("name"=>"Jose Pablo", "age"=> "32", "langs"=> ['c#', 'mysql', 'js' ]),
			array("name"=>"Jose Pablo", "age"=> "32", "langs"=> ['js' ]),
			array("name"=>"Josue Pablo", "age"=> "32", "langs"=> ['cobol']),
			array("name"=>"Joseph Pablo", "age"=> "32", "langs"=> []),
			array("name"=>"Julio Pablo", "age"=> "31", "langs"=> ['sql server','sql server', 'node', 'angular' ]),
		);	

		return view('cars.show3', array("info1"=>$newArray,"tittle"=>"Devellopers"));
	}
	public function listcar(){
		$listCar = Cars::all();
/* 		echo "<pre>";
		print_r($listCar);
		echo"</pre>"; */ 
		return view('cars.show4', array("info"=>$listCar,"tittle"=>"Vehicles"));
	}
	
	public function insert(){
		$car = new Cars();
		$car->make = "Chevrolet";
        $car->model = "joy";
        $car->produced_on = "1997-03-06";
		$car->save();
        echo "it work";
	}
    public function insert2(){
        $arrayCar = [
            "make"=>"Kia",
            "model"=>"pop",
            "produced_on"=>"1997-03-06"
        ];
        Cars::create($arrayCar);
        echo "it Work to";
    }

}

