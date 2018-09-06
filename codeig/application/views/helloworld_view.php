<html>
    <head>
        <title><?=$page_title?></title>
    </head>
    <body>
        <?php foreach($result as $row):?>
        <h3><?=$row->title?></h3>
        <p><?=$row->text?></p>
        <br />
        <?php endforeach;?>
    </body>
</html>
<!-- <html>
 <head>
        <title><?=$page_title?></title>
    </head>
<?php if(is_array($result)): ?>
<?php foreach($result as $row):?>  
<h3><? echo $row->title; ?></h3>  
<p><? echo $row->text; ?></p>  
<?php endforeach;?>  
<?php endif; ?>
</head>
</html> -->