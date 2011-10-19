<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php echo $title_for_layout; ?></title>
    <?php echo $this->Html->css('estilo') ?>
</head>

<body> 
    
<div id="container">
    <?php echo $this->element('menu'); ?>
     <br />
    <section id="content">
        <article><?php echo $content_for_layout;  ?></article>
    </section>
    <br />
    <?php echo $this->element('menu'); ?>
    <br />
    <?php echo $this->element('footer', array(
                'copyryght' => 'Desenvolvedor Vanderli',
                'social' => true,
                'cache' => '+3 hours'
    )); ?>
    
</body>
</html>