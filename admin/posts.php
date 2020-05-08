<?php include "includes/admin_header.php" ?>
<body>

    <div id="wrapper">
       
       
       
        <?php if($connection) echo "connected";?>
       
       
       

        <!-- Navigation -->
        <?php include "includes/admin_navigation.php" ?>
       
       
       

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="page-header">
                HELLO
                <small>Author</small>
                </h1>
<?php
if(isset($_GET['source'])){
    
    
    $source = $_GET['source'];
    
    
    
    
    
    
    
    
}else{
    
    
   $source = ''; 
    
}

switch($source){
        
        case 'add_posts';
        include "includes/add_posts.php";
        break;
         case '3';
        echo"NICE";
        break;
         case 'edit_post';
        include "includes/editpost.php";
        break;
        
    default:
        
        
       include"includes/view_all_posts.php"; 
        
        
        
        
        
        
        break;

  
        
}



?>

                
            </div>
                <div class="row">
                    <div class="col-lg-12">
                       
                       
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
       
       
         
         
           
           
              <!-- /#page-wrapper -->

   <?php include "includes/admin_footer.php" ?>
