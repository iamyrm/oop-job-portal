<?php

namespace App\controllers;

class ErrorController
{
   //404 error
   public static function notFound($msg = "Resource not found")
   {
      http_response_code(404);
      loadView('error', [
         'status' => '404',
         'message' => $msg,
      ]);
   }

   // 403 unauthorized error
   public static function unauthorized($msg = "You are not authorized to view this resource")
   {
      http_response_code(403);
      loadView('error', [
         'status' => '403',
         'message' => $msg,
      ]);
   }
}
