<?php include 'headAndFoot\header.php'; ?>
        <style type='text/css'>
                
                body{
                    background-image:url(img/b1.jpg) ;
                    margin:0;
                    padding:0;
                    box-sizing:border-box;
                }
                   
             section {
                float:left;
                width: 25%;
            padding:8px
             }

             .image-container {
                width:400px;
                text-align: center;
                flex-wrap:wrap;
                content:"";
                clear:both;
                display:table;
             }
             
             
             .image-container img {
                width: 100%;
                height:300px;
             }
                 
              h3{
                text-align:center;
                font-size:50px
              }

              button{
                background:#2691d9;
               border-radius:20px;
               border-width:2px;
                height:35px;
                width:100px;
               
              }
              .button-container{
                text-align: center;
                
              }
              

        </style>
        <?php
            require 'function.php';
            $pictures = getPictures();
            if (isset($pictures) && !empty($pictures)){
        ?>    
                <h3>Pictures</h3>
                <div class="button-container">
                <button>
                    <a href="create.php">Add picture</a>
                </button>
            </div>
                <?php
                    foreach ($pictures as $picture){
                ?>
                            
                            <section>
                               <div class="image-container">
                                <?php if (isset($picture['picture'])){ ?>
                                  <figure>
                                    <img src="<?php echo "images/${picture['picture']}"; ?>" alt="<?php echo "Your picture"; ?>">
                                    <?php } ?>
                                    <form method="POST" action="delete.php">
                                        <input type="hidden" name="id" value="<?php echo $picture['id']; ?>">
                                        <button>Delete</button>
                                    </form>
                                </figure>
                                </div>
                            </section>
                                    
        <?php
                    }
            } else {
                header('Location: create.php');
            }
        ?>
<?php include 'headAndFoot\footer.php' ; ?>             