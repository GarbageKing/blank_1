<?php include_once 'head.html'; 
session_start();?>

        <div>            
               <h1 id="link"> Your link: <?php echo $_SESSION['link']; ?>  </h1>           
        </div>

<?php include_once 'foot.html'; ?>