<html>
    <head>
        <title>Sample</title>
    </head>
    <body>

    <form method="post" action="<?php echo base_url('AdminController/upload_image')?>">
        <input type='file' name='userfile[]' multiple=""> <br/><br/>
        <input type='submit' value='Upload' name='upload' />
    </form>

    
      
    </body>
</html>