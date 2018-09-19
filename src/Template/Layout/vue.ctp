<!DOCTYPE html>
<html lang="pt-br">
  <head>
        <?=$this->Html->charset() ?>
        <base href="/" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div id="app" style="display: none">
        <?php echo $this->element('menu'); ?>
        <div class="container-fluid">          
          <router-view>
            <?=$this->fetch('content')?>
          </router-view>          
        </div>
    </div> 
    <script src="/dist/build.js"></script>
  </body>
</html>