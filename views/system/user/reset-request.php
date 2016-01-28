<form class="uk-form uk-form-stacked uk-text-center uk-article uk-width-medium-2-3 uk-width-large-1-2 uk-container-center" action="<?= $view->url('@user/resetpassword/request') ?>" method="post">

    <h1 class="uk-h2"><?= __('Forgot Password') ?></h1>

    <p><?= __('Please enter your email address. You will receive a link to create a new password via email.') ?></p>

    <div class="uk-form-row">
        <input class="uk-width-1-1" type="text" name="email" value="" placeholder="<?= __('Email') ?>" required autofocus>
    </div>

    <p class="uk-form-row">
        <button class="uk-button uk-button-primary uk-button-large uk-width-1-1" type="submit"><?= __('Request password') ?></button>
    </p>

    <?php $view->token()->get() ?>

</form>