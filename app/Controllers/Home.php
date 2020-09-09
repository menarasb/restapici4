<?php

namespace App\Controllers;

class Home extends BaseController
{
	protected $client;
	public function __construct()
	{
		
	}
	public function index()
	{
		return view('pegawai/dashboard');	
	}
	//--------------------------------------------------------------------

}
