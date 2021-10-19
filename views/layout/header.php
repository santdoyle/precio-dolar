<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <?php while($row = $data->fetch_object()) : ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title><?=$row->titulo?></title>
    <link rel="icon" href="<?=base_url?>assets/image/dolarhoy.png">
    <meta name="description" content="<?=$row->descripcion?>">
    <link rel="canonical" href="<?=base_url?><?=$row->canonical?>">
    <meta name="robots" content="index, follow">
    
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?=$row->titulo?>" />
    <meta property="og:description" content="<?=$row->descripcion?>" />
    <meta property="og:image" content="<?=base_url?>assets/images/dolarhoy.png" />
    <meta property="og:url" content="permalink" />
    
    <!-- Bootstrap core CSS -->
    <link href="<?=base_url?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />

    <!-- Custom styles for this template -->
    <link href="<?=base_url?>assets/css/style.css" rel="stylesheet">
    <link href="<?=base_url?>assets/css/cards.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=base_url?>assets/css/datatables.min.css"/>
    <?php endwhile; ?>
  </head>

  <body>