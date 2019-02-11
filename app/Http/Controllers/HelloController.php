<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
	public function index()
	{
		$msgs = [
			'hello',
			'こんにちは',
			'你好'
		];
			return view('hello.index', ['msgs' => $msgs]);
	}
    //
}
