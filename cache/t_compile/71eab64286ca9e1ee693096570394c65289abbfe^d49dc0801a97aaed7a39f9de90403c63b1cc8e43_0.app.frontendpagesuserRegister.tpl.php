<?php
/* Smarty version 4.3.1, created on 2026-01-12 01:10:14
  from 'app:frontendpagesuserRegister.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_69643be69a9fa1_72816607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd49dc0801a97aaed7a39f9de90403c63b1cc8e43' => 
    array (
      0 => 'app:frontendpagesuserRegister.tpl',
      1 => 1768176612,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/headerHead.tpl' => 2,
    'app:frontend/components/breadcrumbs.tpl' => 1,
    'app:common/formErrors.tpl' => 1,
    'app:frontend/components/registrationForm.tpl' => 1,
    'app:frontend/components/registrationFormContexts.tpl' => 1,
  ),
),false)) {
function content_69643be69a9fa1_72816607 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:frontend/components/headerHead.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/headerHead.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<div id="main-content" class="page page_register"
	style="
		background:#f4f7f6;
		padding:3rem 1rem;
	">

	<!-- CENTER CONTAINER -->
	<div style="
		max-width:650px;
		margin:0 auto;
	">

		<!-- BOX -->
		<div style="
			background:#ffffff;
			border-radius:12px;
			padding:2.5rem 3rem;
			box-shadow:0 10px 30px rgba(0,0,0,0.08);
		">

			<h2 style="
				text-align:center;
				color:#289753ff;
				font-weight:600;
				margin-bottom:1.5rem;
			">
				Sign up
			</h2>

			<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('currentTitleKey'=>"user.register"), 0, false);
?>

			<form class="pkp_form register" id="register" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"register"),$_smarty_tpl ) );?>
">

				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>


				<?php if ($_smarty_tpl->tpl_vars['source']->value) {?>
					<input type="hidden" name="source" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['source']->value ));?>
" />
				<?php }?>

				<?php $_smarty_tpl->_subTemplateRender("app:common/formErrors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

				<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/registrationForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

								<?php if ($_smarty_tpl->tpl_vars['currentContext']->value) {?>

					<fieldset style="
						border:1px solid #ddd;
						border-radius:8px;
						padding:1.2rem;
						margin-bottom:1.5rem;
					">

						<div style="margin-bottom:0.8rem;">
							<label>
								<input type="checkbox" name="privacyConsent" value="1"
									style="accent-color:#289753ff;"
									<?php if ($_smarty_tpl->tpl_vars['privacyConsent']->value) {?>checked<?php }?>>
								<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "privacyUrl", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null),'page'=>"about",'op'=>"privacy"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.register.form.privacyConsent",'privacyUrl'=>$_smarty_tpl->tpl_vars['privacyUrl']->value),$_smarty_tpl ) );?>

							</label>
						</div>

						<div>
							<label>
								<input type="checkbox" name="emailConsent" value="1"
									style="accent-color:#289753ff;"
									<?php if ($_smarty_tpl->tpl_vars['emailConsent']->value) {?>checked<?php }?>>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.register.form.emailConsent"),$_smarty_tpl ) );?>

							</label>
						</div>
					</fieldset>

				<?php }?>

				<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/registrationFormContexts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

				<?php if ($_smarty_tpl->tpl_vars['reCaptchaHtml']->value) {?>
					<fieldset style="
						border:1px solid #ddd;
						border-radius:8px;
						padding:1.2rem;
						margin-bottom:1.5rem;
					">
						<?php echo $_smarty_tpl->tpl_vars['reCaptchaHtml']->value;?>

					</fieldset>
				<?php }?>

				<!-- BUTTONS -->
				<div style="
					display:flex;
					justify-content:center;
					gap:1rem;
					margin-top:2rem;
					flex-wrap:wrap;
				">

					<button type="submit"
						style="
							background:#289753ff;
							color:#ffffff;
							border:none;
							padding:0.6rem 1.8rem;
							border-radius:6px;
							font-weight:600;
							cursor:pointer;
						">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.register"),$_smarty_tpl ) );?>

					</button>

					<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "rolesProfileUrl", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"user",'op'=>"profile",'path'=>"roles"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

					<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"login",'source'=>$_smarty_tpl->tpl_vars['rolesProfileUrl']->value),$_smarty_tpl ) );?>
"
						style="
							border:2px solid #289753ff;
							color:#289753ff;
							padding:0.6rem 1.8rem;
							border-radius:6px;
							font-weight:600;
							text-decoration:none;
						">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.login"),$_smarty_tpl ) );?>

					</a>

				</div>

			</form>

		</div>
	</div>
</div>



<?php }
}
