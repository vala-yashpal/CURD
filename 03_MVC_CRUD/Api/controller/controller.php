<?php
    session_start();
    require_once("model/model.php");

    class controller extends model{
        public $base_url = "";
        public function __construct(){
            ob_start();
            parent::__construct();

            $reqURIdata = explode("/",$_SERVER['REQUEST_URI']);  // array cut
            $this->base_url = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME']."/".$reqURIdata[1]."/".$reqURIdata[2]."/".$reqURIdata[3]."/assets/";

            if(isset($_SERVER["PATH_INFO"])){
                switch ($_SERVER["PATH_INFO"]){

                    case '/insert':
                        $data = json_decode(file_get_contents('php://input') );
                        $array = (array) $data;
                        
                        $ragister_user = $this->insert("register",$array);
                        echo json_encode($ragister_user);
                    break;

                    default:
                        echo "<h2>welcome to our api success</h2>";
                    break;
                }
            }else{
                header("location:home");
            }
            ob_flush(); 
        }
    }  

    $controller = new controller;
?>

