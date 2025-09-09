<?php
loadPartials('header');
loadPartials('navbar');
?>

<section>
   <div class="container mx-auto p-4 mt-4">
      <div class="text-center text-3xl mb-4 font-bold border border-gray-300 p-3"><?php echo _e($status); ?></div>
      <p class="text-center text-2xl mb-4">
         <?php echo _e($message); ?>
      </p>
      <a class="block text-center" href="/listings">Go back to Listings</a>
   </div>
</section>

<?php
loadPartials('footer');
?>