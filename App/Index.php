<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/24 024
 * Time: 12:08
 */

namespace App;


class Index
{

    public function index(){
        var_dump($_SERVER);
        echo 'Hello design pattern!';
    }

    public function client() {
    	return 'client';
    }

    public function server()
    {
    	//TODO
    	$server = new PHPRPC_Server();
    	$server->add(
    		'hello world'
    	);
    	$server->start();
    	return 'server';
    }

}