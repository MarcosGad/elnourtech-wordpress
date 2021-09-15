<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit; 
}

class Smart_Reporter_Pricing {

	public static function sr_show_pricing() {
		?>
		<style type="text/css">
			body {
				background-color: white !important;
			}
			.update-nag,
			#wpfooter {
				display: none;
			}
			.wrap.about-wrap.sm {
				margin: 25px 70px 0 70px;
				max-width: 100%;
			}
			.sr_main_heading {
				background-color: #D2E8FE;
				color: #7F7F8E;
				text-align: center;
				font-weight: 500;
				margin: auto;
				padding-top: 1em;
				padding-bottom: 1em;
				max-width: 1375px;
			}
			.sr_button {
				color: #FFFFFF !important;
				padding: 15px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				font-weight: 500;
				margin: 2em 2px 1em 2px;
				cursor: pointer;
			}
			.sr_button.green {
				background: #4fad43;
				border-color: #4fad43;
			}
			.sr_button.green:hover {
				background: #00870c;
				border-color: #00870c;
			}
			.sr_row {
				padding: 1em !important;
				margin: 1em !important;
				clear: both;
				position: relative;
			}
			.center {
				text-align: center;
			}
			.sr_01 {
				padding: 0 18em;
			}
			.sr_02 {
				padding: 0 20em;
			}
			#sr-pt-pricing {
				text-align: center;
			}
		</style>

		<div class="wrap about-wrap sm">
			<div class="sr_row">
				<div class="sr_main_heading">
					<span style="color: #f42267; font-size: 1.41575em;"><?php echo __( 'SMART REPORTER PRO IS NOW MERGED INTO PUTLER', 'smart-reporter-for-wp-e-commerce' ); ?></span><br><br>
					<span style="color: #008cdd; font-size: 2.5em;"><?php echo __( 'Get Advanced WooCommerce Analytics & Reporting', 'smart-reporter-for-wp-e-commerce' ); ?></span><br><br>
					<span style="color: rgba(0, 0, 0, 0.75); font-size: 1.2em;"><?php echo __( 'Accurate metrics, real time reports and actionable insights that grow your WooCommerce store.', 'smart-reporter-for-wp-e-commerce' ); ?></span>
					<div class="center">
						<a href="https://www.putler.com/?utm_source=sr_in_app&utm_medium=wp&utm_campaign=sr_go_pro" target="_blank" class="sr_button green"><?php echo __( 'Explore Putler', 'smart-reporter-for-wp-e-commerce' ); ?></a>&nbsp;&nbsp;
						<a href="https://demo.putler.com/?utm_source=sr_in_app&utm_medium=wp&utm_campaign=sr_go_pro" target="_blank">View demo</a><br>
					</div>
				</div>
			</div>
			<div class="sr_row" id="sr-pt-pricing">
				<h2>
					<strong>
					<?php echo __( 'People call it priceless, yet affordable', 'smart-reporter-for-wp-e-commerce' ); ?>
					</strong>
				</h2>
				<p class="sr_01">
					<?php echo __( 'Putler <u>does the work of an employee</u> – taking care of reporting, analysis and spotting growth ideas.', 'smart-reporter-for-wp-e-commerce' ); ?>
					<br>
					<?php echo __( 'And we believe dollar to dollar – <strong>Putler is the best investment for the future of your businesses</strong>.', 'smart-reporter-for-wp-e-commerce' ); ?>
				</p>
				<hr class="clear">
				<p class="sr_02">
					<?php echo __( '<strong>Common features in every plan</strong>: 153+ metrics and reports, automatic consolidation & deduping, growth advice from experts, website & visitor analytics, team access, real time transaction data, sales, products and customer analytics, in-depth customer profiles, weekly email digests, goal tracking & forecasting and much more!', 'smart-reporter-for-wp-e-commerce' ); ?>
				</p>
				<a href="https://web.putler.com/?utm_source=sr_in_app&utm_medium=wp&utm_campaign=sr_go_pro#!/signup" target="_blank">
					<img src="<?php echo SR_PLUGIN_DIRNAME . '/pricing/' ?>putler-pricing.png" alt="pricing" />
				</a>
			</div>
		</div>
		<?php
	}
}

new Smart_Reporter_Pricing();
