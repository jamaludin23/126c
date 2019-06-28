<?php class Hello2 extends CI_Controller {  
public function index( ) {   
//memuat model dengan nama Hello2_model  
 $this->load->model('Hello_model'); 
 
  //menangkap objek dari kelas Hello2_model yang telah dimuat ke variabel $model   
  $model = $this->Hello_model; 
 
  echo "<html>             <head><title>Controller dan Model</title></head>             <body>";   
  //memanggil properti $str milik objek $model  
   echo "<h2>". $model->str ."</h2>";  
    echo "</body>"; 
    echo "</html>"; 
} 
} 
