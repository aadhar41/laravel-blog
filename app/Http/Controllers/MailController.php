<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {

   public function basic_email()
   {
      $data = array('name'=>"Aadhar gaur");
   
      Mail::send(['text'=>'mail'], $data, function($message) {
         $message->to('aadhargaur@planetwebsolution.com', 'Aadhar gaur')->subject
            ('Laravel Basic Testing Mail');
         $message->from('aadhargaur@gmail.com','Aadhar gaur');
      });
      echo "Basic Email Sent. Check your inbox.";
   }



   public function html_email(){
      $data = array('name'=>"Aadhar gaur");
      Mail::send('mail', $data, function($message) {
         $message->to('aadhargaur@planetwebsolution.com', 'Aadhar gaur')->subject
            ('Laravel HTML Testing Mail');
         $message->from('aadhargaur@gmail.com','Aadhar gaur');
      });
      echo "HTML Email Sent. Check your inbox.";
   }
   


   public function attachment_email(){

      $data = array('name'=>"Aadhar gaur");
      Mail::send('mail', $data, function($message) {
         $message->to('aadhargaur@planetwebsolution.com', 'Tutorials Point')->subject
            ('Laravel Testing Mail with Attachment');

         $message->attach('http://dothejob.in/al-ceramic/wp-content/uploads/2017/11/logo.png');
         $message->attach(public_path() . '/uploads/Brochure.docx');
         $message->attach(public_path() . '/uploads/Status_report.pptx');
         $message->attach(public_path() . '/uploads/Gantt_chart.xlsx');
         $message->attach(public_path() . '/uploads/Newsletter.docx');
         $message->from('aadhargaur@gmail.com','Aadhar gaur');
      });
      echo "Email Sent with attachment. Check your inbox.";
   }
}