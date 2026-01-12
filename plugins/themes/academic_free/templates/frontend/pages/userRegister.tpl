{**
* templates/frontend/pages/userRegister.tpl
*
* Copyright (c) 2014-2017 Simon Fraser University Library
* Copyright (c) 2003-2017 John Willinsky
* Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
*
* User registration form.
*}
{include file="frontend/components/headerHead.tpl"}


{**
* templates/frontend/pages/userRegister.tpl
* User registration form.
*}
{include file="frontend/components/headerHead.tpl"}

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
				Register
			</h2>

			{include file="frontend/components/breadcrumbs.tpl" currentTitleKey="user.register"}

			<form class="pkp_form register" id="register" method="post" action="{url op="register"}">

				{csrf}

				{if $source}
					<input type="hidden" name="source" value="{$source|escape}" />
				{/if}

				{include file="common/formErrors.tpl"}

				{include file="frontend/components/registrationForm.tpl"}

				{* Journal-specific registration *}
				{if $currentContext}

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
									{if $privacyConsent}checked{/if}>
								{capture assign="privacyUrl"}{url router=$smarty.const.ROUTE_PAGE page="about" op="privacy"}{/capture}
								{translate key="user.register.form.privacyConsent" privacyUrl=$privacyUrl}
							</label>
						</div>

						<div>
							<label>
								<input type="checkbox" name="emailConsent" value="1"
									style="accent-color:#289753ff;"
									{if $emailConsent}checked{/if}>
								{translate key="user.register.form.emailConsent"}
							</label>
						</div>
					</fieldset>

				{/if}

				{include file="frontend/components/registrationFormContexts.tpl"}

				{if $reCaptchaHtml}
					<fieldset style="
						border:1px solid #ddd;
						border-radius:8px;
						padding:1.2rem;
						margin-bottom:1.5rem;
					">
						{$reCaptchaHtml}
					</fieldset>
				{/if}

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
						{translate key="user.register"}
					</button>

					{capture assign="rolesProfileUrl"}{url page="user" op="profile" path="roles"}{/capture}

					<a href="{url page="login" source=$rolesProfileUrl}"
						style="
							border:2px solid #289753ff;
							color:#289753ff;
							padding:0.6rem 1.8rem;
							border-radius:6px;
							font-weight:600;
							text-decoration:none;
						">
						{translate key="user.login"}
					</a>

				</div>

			</form>

		</div>
	</div>
</div>



