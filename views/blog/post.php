<?php $view->script('post', 'blog:app/bundle/post.js', 'vue') ?>

<article class="uk-article">

    <?php if ($image = $post->get('image.src')): ?>
    <img src="<?= $image ?>" alt="<?= $post->get('image.alt') ?>">
    <?php endif ?>

    <div class="tm-container-small uk-margin-large-top">

        <?php

            // Todo
            $params['blog_alignment'] = true;

        ?>

        <h1 class="uk-article-title <?= ($params['blog_alignment']) ? 'uk-text-center' : '' ?>"><?= $post->title ?></h1>

        <p class="uk-article-meta <?= ($params['blog_alignment']) ? 'uk-text-center' : '' ?>">
            <?= __('Written by %name% on %date%', ['%name%' => $post->user->name, '%date%' => '<time datetime="'.$post->date->format(\DateTime::ISO8601).'" v-cloak>{{ "'.$post->date->format(\DateTime::ISO8601).'" | date "longDate" }}</time>' ]) ?>
        </p>

        <div class="uk-margin"><?= $post->content ?></div>

        <?= $view->render('blog/comments.php') ?>

    </div>

</article>
