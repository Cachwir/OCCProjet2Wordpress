<?php
	$banner = backupGuardGetBanner(SG_ENV_WORDPRESS);
?>

<div id="sg-banner" >
	<div id="sg-left-column">
		<ul>
			<li class="hvr-bounce-in">
				<a target="_blank" href="https://backup-guard.com/products/backup-wordpress/doc">
					<img class="sg-img-class" src="<?php echo SG_PUBLIC_URL; ?>img/user-manual.png"> User manual
				</a>
			</li>
			<li class="hvr-bounce-in">
				<a target="_blank" href="https://backup-guard.com/wordpress/wp-login.php">
					<img class="sg-img-class" src="<?php echo SG_PUBLIC_URL; ?>img/full-demo.png"> Full demo</a>
				</li>
			<li class="hvr-bounce-in">
				<a target="_blank" href="https://backup-guard.com/products/backup-wordpress/faq">
					<img class="sg-img-class" src="<?php echo SG_PUBLIC_URL;?>img/FAQ.png"> F.A.Q.</a>
				</li>
			<li class="hvr-bounce-in">
				<a target="_blank" href="https://backup-guard.com/products/backup-wordpress/support">
					<img class="sg-img-class" src="<?php echo SG_PUBLIC_URL; ?>img/contact-us.png"> Contact us
				</a>
			</li>
		</ul>
	</div>

	<div id="sg-center-column">
		<?php if (empty($banner)): ?>
			<p>
				You're running the Free version of the plugin.<br>
				If you're interested in website migration, backup to cloud, scheduled backups, mail notifications, then don't wait to buy BackupGuard Pro <b>NOW!</b>
			</p>
			<p>
				<a id="sg-buy-now" target="_blank" href="https://backup-guard.com/products/backup-wordpress#pricing">
					<img class="sg-img-class" src="<?php echo SG_PUBLIC_URL; ?>img/cart.png">
					&nbsp;<span id="sg-buy-now-text">$9.95* | BUY NOW</span>
				</a><br>
				<span id="sg-banner-clarification">*Silver package | Lifetime license</span>
			</p>
		<?php else: ?>
		<?php echo $banner; ?>
		<?php endif; ?>
	</div>

	<div id="sg-right-column">
		<ul>
			<li>
				<a id="sg-logo" target="_blank" href="<?php echo SG_BACKUP_SITE_URL; ?>"></a>
			</li>
			<li></li>
			<li id="sg-social-buttons">
				<a class="sg-banner-social-button" id="sg-facebook" target="_blank" href="https://www.facebook.com/backupguard"></a>
				<a class="sg-banner-social-button" id="sg-twitter" target="_blank" href="https://twitter.com/backupguard"></a>
				<a class="sg-banner-social-button" id="sg-google-plus" target="_blank" href="https://plus.google.com/118362709330885027766"></a>
				<a class="sg-banner-social-button" id="sg-youtube" target="_blank" href="https://www.youtube.com/channel/UCZhNYAcWl0VKHevWeakOvwQ"></a>
			</li>
			<br>
			<li id="sg-rate-us">
				<div id="sg-banner-test">
					<label class="sg-banner-rate-us-in">Rate us</label>
					<a class="sg-banner-rate-us-in" target="_blank" href="<?php echo SG_REVIEW_URL; ?>">
						<div id="rateYo"></div>
					<a>
				</div>
			</li>
		</ul>
	</div>
</div>