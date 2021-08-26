<section class="header-content">
    <div class="wrap w90 center">    
        <h1><?php echo $arr['titulo']; ?></h1>
    </div><!--wrap-->
</section><!--header-contato-->


<section class="contato item-flex">
    <div class="wrap w90 center">
        <div class="title text-center">
            <h2>Entre em contato</h2>
        </div><!--title-->
        <form class="text-center" method="post">
            <input type="text" name="nome" placeholder="Nome Completo..." />
            <textarea name="mensagem" placeholder="Sua mensagem..."></textarea>
            <input class="btn circle-button" type="submit" name="acao" value="Enviar" />
        </form>
    </div><!--wrap-->
</section><!--contato-->