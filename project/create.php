<?php include 'headAndFoot\header.php'; ?>
<style type='text/css'>
                *{
                    box-sizing: border-box;
                    padding: 0px;
                    margin: 0px;
                }
                body{
                    background:url(img/b1.jpg) ;
                
                }
                h2{
                    text-align:center;
                    font-size:50px;
                }

                button{
                background:#2691d9;
               width:70px;
               height:30px;
                }  
        </style>
     <form action="" method="POST" enctype="multipart/form-data" id="uploadForm">
        <h2>Upload photo</h2>
        <label>
            Your Image File
            <input type="file" name="picture" accept="image/*" id="img1" required>
        </label>
        <button type="submit" name="submit">Upload</button>
    </form>
    <?php
        require 'function.php';
        /* getupload($_FILES); */
        if ( $_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_FILES['picture']) && empty($_FILES['picture']) ){
                header("Location: not_found.php");
            } 
       if ( $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit']) && isset($_FILES['picture']) && $_FILES['picture']['error'] === UPLOAD_ERR_OK ) {
            $picture = $_FILES['picture'];
            createPicture($picture);
            header("Location: dashboard.php");
        }
    ?>
    <script>
        window.onload = function()
                        {
                            var form = document.getElementById('uploadForm');
                            var imageInput = document.getElementById('img1');
                            
                            form.onsubmit = function() 
                            {
                                            //regular expression to validate image file
                                            var isValid = /\.(jpe?g|png|gif|webp|tiff|tif|psd|raw|arw|cr2|nrw|k25|bmp|dib|heif|heic|svg|svgz)$/i.test(imageInput.value);
                                            if (!isValid) {
                                            alert('Only image files allowed!');
                                            }
                                            return isValid;
                            };
                        };
    </script>
<?php include 'headAndFoot\footer.php'; ?>