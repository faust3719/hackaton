<?php
/**
* Серфинг, создание и просмотр объектов
*/
include_once(ROOT. '/vews/Serf.php');
class serfCtrl
{
  public function indexAct()
  {
    include_once(ROOT. '/vews/serfing.php');
          return true;
  }
  public function viewAct($params)
  {
    
  }
  public function createAct()
  {
               if (!empty($_POST)) {
                 if (empty($_POST['headler']) || empty($_POST['theme']) || empty($_POST['about']) || empty($_POST['date_start']) || empty($_POST['date_end'])|| empty($_POST['time_start']) || empty($_POST['time_end'])) {
                    $error = "nowr";
                   include_once(ROOT. '/vews/create.php');
                   return true;  
                 }
                 else
                 {
                    
                 }
               }
    include_once(ROOT. '/vews/create.php');
                return true;  
  }


}