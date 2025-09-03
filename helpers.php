<?php

// Base path function 
function basePath($path = '')
{
   return __DIR__ . '/' . $path;
}

// loading views
function loadView($name)
{
   $viewPath = basePath("views/{$name}.view.php");

   if (file_exists($viewPath)) {
      require $viewPath;
   } else {
      echo "View '{$name} not found!'";
   }
}

// loading partials
function loadPartials($name)
{
   $partialPath = basePath("views/partials/{$name}.php");

   if (file_exists($partialPath)) {
      require $partialPath;
   } else {
      echo "Partial '{$name} is not found!'";
   }
}
