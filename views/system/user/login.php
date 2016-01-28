<div class="uk-article uk-width-medium-1-1 uk-width-large-2-4 uk-container-center">
    <form class="uk-form uk-form-stacked" action="<?= $view->url('@user/authenticate') ?>" method="post">

        <h1 class="uk-h2 uk-margin-large-bottom uk-text-center"><?= __('Sign in to your account') ?></h1>

        <div class="uk-form-row">
            <input class="uk-width-1-1" type="text" name="credentials[username]" value="<?= $last_username ?>" placeholder="<?= __('Username') ?>" required autofocus>
        </div>

        <div class="uk-form-row">
            <input class="uk-width-1-1" type="password" name="credentials[password]" value="" placeholder="<?= __('Password') ?>" required>
        </div>

        <p class="uk-form-row uk-margin-small-bottom">
            <button class="uk-button uk-button-primary uk-button-large uk-width-1-1" type="submit"><?= __('Sign in') ?></button>
        </p>

        <ul class="uk-list uk-text-small uk-flex uk-flex-space-between uk-margin-bottom-remove">
            <li>
                <label><input type="checkbox" name="remember_me"> <?= __('Remember Me') ?></label>
            </li>
            <li class="uk-text-right">
                <a class="uk-link" href="<?= $view->url('@user/resetpassword') ?>"><?= __('Request Password') ?></a>
            </li>
        </ul>

        <?php if ($app->module('system/user')->config('registration') != 'admin') : ?>
        <p class="uk-margin-bottom-remove uk-margin-top uk-text-center"><?= __('No account yet?') ?> <a href="<?= $view->url('@user/registration') ?>"><?= __('Sign up now') ?></a></p>
        <?php endif ?>

        <input type="hidden" name="redirect" value="<?= $redirect ?>">
        <?php $view->token()->get() ?>

    </form>
</div>