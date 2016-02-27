<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tecsup Online | <?= $this->fetch('title') ?></title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('style.css') ?>

    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <?= $this->Html->script('bootstrap.min.js') ?>
    <?= $this->Html->script('scripts.js') ?>
    
    <!--http://www.logomakr.com/-->
    <!-- http://www.favicon.cc/ -->
    
    <script type="text/javascript">
        $(function(){
            
        });
    </script>
    
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
         
    <div class="container">
      <?= $this->Flash->render() ?>
      <?= $this->fetch('content') ?>
    </div><!-- /.container -->
    
</body>
</html>
