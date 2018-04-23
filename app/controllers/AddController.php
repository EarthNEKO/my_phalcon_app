<?php
use Phalcon\Mvc\View;
class AddController extends ControllerBase{
 
 public function indexAction(){
  if($this->request->isPost()){
    $temp=new Event();
  $temp->event_name=trim($this->request->getPost('name'));
  $temp->event_date=trim($this->request->getPost('day'));
  $temp->event_detail=trim($this->request->getPost('detail'));
  $temp->event_picture=trim($this->request->getPost('file'));
  $temp->save();
  $this->response->redirect('event');
  }
  
  }

}
