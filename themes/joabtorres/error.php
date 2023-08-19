<?php $this->layout("_theme", ["head" => $head]) ?>
<article id="container-error">
    <div class="container-menu">
        <header class="menu-primary">
            <div class="logo">
                <a href="#"><span class="text-blue-light"> &lt;</span>Joab Torres<span class="text-blue-light">/&gt;</span></a>
            </div>
            <nav>
                <div class="icon-menu"><i class="fa-solid fa-bars"></i></div>
                <ul>
                    <li><a href="/#container-home">Inicial</a></li>
                    <li><a href="/#container-about">Sobre</a></li>
                    <li><a href="/#container-projects">Projetos</a></li>
                    <li><a href="/#container-contacts">Contato</a></li>
                </ul>
            </nav>
        </header>
    </div>
    <section>
        <img src="<?= theme("assets/images/page-error.png") ?>" alt="<?= "{$error->code} | {$error->title}" ?>" title="<?= "{$error->code} | {$error->title}" ?>" />
        <h1><?= $error->title; ?></h1>
        <p><?= $error->message; ?></p>
        <?php if ($error->link) : ?>
            <a class="button" href="<?= $error->link; ?>" title="<?= $error->linkTitle; ?>" ><i class="fa-solid fa-rotate-left"></i> <?= $error->linkTitle; ?></a>
        <?php endif ?>
    </section>
</article>