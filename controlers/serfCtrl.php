<?php
/**
* Серфинг, создание и просмотр объектов
*/
include_once(ROOT. '/models/Serf.php');
class serfCtrl
{
  public function indexAct()
  {
    include_once(ROOT. '/vews/serfing.php');
          return true;
  }
  public function viewAct($params)
  {
    $serf = new Serf();
    $data = $serf->getSerf($params)[0];
    $data['count']=db::dbSelect("SELECT COUNT(event) AS count FROM going WHERE event=".$data['id'])[0]['count'];
    //var_dump($data);die;
    include_once(ROOT. '/vews/view.php');
    return true;
  }
  public function createAct()
  {
               if (!empty($_POST) && isset($_POST['crtObj'])) {
                 if (empty($_POST['headler']) || empty($_POST['theme']) ||
	                 empty($_POST['about']) || empty($_POST['date_start']) ||
	                 empty($_POST['date_end'])|| empty($_POST['time_start']) ||
	                 empty($_POST['time_end'])) {
                    $error = "nowr";
                   include_once(ROOT. '/vews/create.php');
                   return true;
                 }
                 else
                 {
                    $create = Serf::createSerf($_POST);
                     include_once(ROOT. '/vews/serfing.php');
                     return true;
                 }
               }
    include_once(ROOT. '/vews/create.php');
                return true;
  }


}