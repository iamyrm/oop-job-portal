<?php
class Router
{
   protected $routes = [];

   public function registerRoute($method, $uri, $controller)
   {
      $this->routes[] = [
         'method' => $method,
         'uri' => $uri,
         'controller' => $controller
      ];
   }

   // Adding pos route
   public function get($uri, $controller)
   {
      $this->registerRoute('GET', $uri, $controller);
   }

   // Adding put route
   public function put($uri, $controller)
   {
      $this->registerRoute('PUT', $uri, $controller);
   }

   // Adding post route
   public function post($uri, $controller)
   {
      $this->registerRoute('POST', $uri, $controller);
   }

   // Adding delete route
   public function delete($uri, $controller)
   {
      $this->registerRoute('DELETE', $uri, $controller);
   }

   // responce fn
   public function error($httpCode = 404)
   {
      http_response_code($httpCode);
      loadView("error/{$httpCode}");
      exit;
   }

   // Route the requests
   public function route($uri, $method)
   {
      foreach ($this->routes as $route) {
         if ($route['uri'] === $uri && $route['method'] === $method) {
            require basePath($route['controller']);
            return;
         }
      }
      // Calling the error method
      $this->error();
   }
}
