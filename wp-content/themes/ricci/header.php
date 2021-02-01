<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Rosario:wght@400;700&display=swap" rel="stylesheet">
  <title><?php bloginfo('name'); ?> | <?php the_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php 
$img_url = get_stylesheet_directory_uri() . '/img/';
$cart_count = WC()->cart->get_cart_contents_count();
?>

<div class="barra">
  <p>Frete Gratis | Troca Fácil | Até 12x</p>
</div>

<header class="header">
  <div class="container">
    <a href="/ricci/"><img src="<?php echo $img_url; ?>logo_ricci.svg" alt="Ricci"></a>
    <div class="header-aside">
      <form class="form-busca" action="<?php bloginfo('url'); ?>/loja/" method="get">
        <input class="campo-busca" type="text" name="s" id="s" placeholder="O que você procura?" value="<?php the_search_query(); ?>">
        <input type="text" name="post_type" value="product" class="hidden">
        <button id="searchbutton"><img src="<?php echo $img_url; ?>icon_search.svg" alt="Ícone de Busca"></button>
      </form>
      <nav class="conta">
        <a href="/ricci/minha-conta" class="minha-conta">Minha Conta</a>
        <a href="/ricci/carrinho" class="carrinho"><img src="<?php echo $img_url; ?>icon_cart.svg" alt="Ícone de Carrinho">
          <?php if($cart_count) { ?>
            <span class="carrinho-count"><?php echo $cart_count; ?></span>
          <?php } ?>
        </a>
      </nav>
    </div>
  </div>

  <?php wp_nav_menu([
  'menu' => 'categorias',
  'container' => 'nav',
  'container_class' => 'menu-categorias',
  ]) ?>
  
</header>