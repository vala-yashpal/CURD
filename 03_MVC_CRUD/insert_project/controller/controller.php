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

            // print_r($this->base_url);
            // exit;
            
            if(!isset($_SERVER["PATH_INFO"]))
            {
                $_SERVER["PATH_INFO"]='/admindashboard';
            }
            if(isset($_SERVER["PATH_INFO"])){
                switch ($_SERVER["PATH_INFO"]){

                    case '/admindashboard':

                        $Allusers = $this->select('register');

                        include_once("views/adminheader.php");
                        include_once("views/admindashbord.php");
                        include_once("views/adminfooter.php");
                    break;

                    case '/allluser':
                        include_once("views/adminheader.php");
                        include_once("views/alluserlist.php");
                        include_once("views/adminfooter.php");
                    break;

                    // case '/editbyid':
                    //     include_once("views/adminheader.php");
                    //     include_once("views/edit_user.php");
                    //     include_once("views/adminfooter.php");
                    // break;
                    

                    default:
                        include_once("views/adminheader.php");
                        include_once("views/admindashbord.php");
                        include_once("views/adminfooter.php");
                    break;
                }
            }else{
                header("location:admindashboard");
            }
            ob_flush(); 
        }
    }  

    $controller = new controller;
?>

