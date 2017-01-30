<?php namespace hotel\Http\Controllers;

class PruebaController extends Controller{

	public function index(){
		return "Hola de nuevo";
	}

	public function nombre($name){
		return "Hola " . $name;
	}
}