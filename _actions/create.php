<?php

include("../vendor/autoload.php");
use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\HTTP;

$data=[
    'name'=>$_POST['name']??'unknown',
    'email'=>$_POST['email']??'unknown',
    'phone'=>$_POST['phone']??'unknown',
    'address'=>$_POST['address']??'unknown',
    'password'=>md5($_POST['password']),
    'role_id'=>1,
];
$table=new UsersTable(new MySQL());
if($table){
    $table->insert($data);
    HTTP::redirect("/index.php","registered=true");
}else{
    HTTP::redirect("/register.php","error=true");
}