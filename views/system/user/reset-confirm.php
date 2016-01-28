<?php $view->script('uikit-form-password') ?>

<div class="uk-article uk-width-medium-1-1 uk-width-large-2-4 uk-container-center">
    <form class="uk-form uk-form-stacked" action="<?= $view->url('@user/resetpassword/confirm', ['user' => $username, 'key' => $activation]) ?>" method="post">

        <h1 class="uk-h2 uk-text-center"><?= __('Password Confirmation') ?></h1>

        <div class="uk-form-row js-password">
            <div class="uk-form-password uk-width-1-1">
                <input class="uk-width-1-1" type="password" name="password" value="" placeholder="<?= __('New Password') ?>">
                <a href="" class="uk-form-password-toggle" tabindex="-1" data-uk-form-password="{ lblShow: '<?= __('Show') ?>', lblHide: '<?= __('Hide') ?>' }"><?= __('Show') ?></a>
            </div>
        </div>

        <p class="uk-form-row">
            <button class="uk-button uk-button-primary uk-button-large uk-width-1-1" type="submit"><?= __('Confirm') ?></button>
        </p>

        <?php $view->token()->get() ?>

    </form>
</div>