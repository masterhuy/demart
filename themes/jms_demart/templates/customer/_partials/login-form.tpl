{include file='_partials/form-errors.tpl' errors=$errors['']}

{* TODO StarterTheme: HOOKS!!! *}

<form id="login-form" action="{$action}" method="post">
    <section>
        {block name='form_fields'}
            {foreach from=$formFields item="field"}
                {block name='form_field'}
                    {form_field field=$field}
                {/block}
            {/foreach}
        {/block}
    </section>

    <footer class="form-footer clearfix">
        <input type="hidden" name="submitLogin" value="1">
        {block name='form_buttons'}
            <button class="btn btn-default" data-link-action="sign-in" type="submit" class="form-control-submit">
                {l s='Login' d='Shop.Theme.Actions'}
            </button>
        {/block}
        <div class="authentication-links row">
            <div class="forgot-password col">
                <a href="{$urls.pages.password}" rel="nofollow">
                    {l s='Forgot Your Password?' d='Shop.Theme.Customeraccount'}
                </a>
            </div>
            <div class="return-store col">
                <a class="return-to-store" href="{$urls.base_url}">{l s='Return to store' d='Shop.Theme.Global'}</a>
            </div>
        </div>
    </footer>
</form>
