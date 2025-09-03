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

// escaping function
function e($arg)
{
   return htmlspecialchars($arg);
}

// Inspect values function
function inspect($value)
{
   echo "<pre>";
   var_dump($value);
   echo "</pre>";
}

// Inspect and die
function inspectAndDie($value)
{
   echo "<pre>";
   die(var_dump($value));
   echo "</pre>";
}
