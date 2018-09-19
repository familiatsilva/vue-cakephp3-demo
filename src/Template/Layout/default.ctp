<!DOCTYPE html>
<html>
    <head>
        <?=$this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

        <?=$this->fetch('css')?>
        <?=$this->fetch('script')?>
    </head>
    <body>
        <div id="app" style="display:none">
            <?php echo $this->element('menu'); ?>
            <div class="container-fluid">          
                <?=$this->fetch('content')?>
            </div>        
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script>
        $(document).ready(function(){
          $('#app').show();
        });            
        </script>        
    </body>
</html>