<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
// $this->title = 'About';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
	<!-- <h1><?//= Html::encode($this->title) ?></h1> -->

	<!-- <p>This is the About page. You may modify the following file to customize its content:</p> -->

	<!-- <code><?//= __FILE__ ?></code> -->




	<div id="wrap">
		

		<div class="center_content">
			<div class="left_content">
				<div class="title">
					<span class="title_icon">
					<?= Html::img(Yii::getAlias('@web').'/img/bullet1.gif') ?>
					<!-- <img src="images/bullet1.gif" alt="" /> -->
					</span>About us
				</div>

				<div class="feat_prod_box_details">
					<p class="details">
						<?= Html::img(Yii::getAlias('@web').'/img/about.gif', ['class' => 'right', 'alt' => '']) ?>
						<!-- <img src="images/about.gif" alt="" class="right"/> -->

						Խանութը բացվել է 2015թ նոյեմբերի 1 -ին: Մեր նպատակն է մեր քաղաքացիներին հասանելի դարձնել մատչելի և թարմ մրգեր: Տեղեկացնել մրգերի գները և հնարավորություն տալ օնլայն գնումներ կատարել:
						<br />
					</p>
				</div>
				<div class="clear"></div>
			</div>

			<!--end of left content-->	
			<div class="right_content">
				<div class="languages_box">
					<span class="red">Languages:</span>
					<a href="#">
						<?= Html::img(Yii::getAlias('@web').'/img/gb.gif', ['border' => 0, 'alt' => '']) ?>
						<!-- <img src="images/gb.gif" alt="" border="0" /> -->
					</a>

					<a href="#">
						<!-- <img src="images/fr.gif" alt="" border="0" /> -->
						<?= Html::img(Yii::getAlias('@web').'/img/fr.gif', ['border' => 0, 'alt' => '']) ?>
					</a>

					<a href="#">
						<!-- <img src="images/de.gif" alt="" border="0" /> -->
						<?= Html::img(Yii::getAlias('@web').'/img/de.gif', ['border' => 0, 'alt' => '']) ?>
					</a>
				</div>

				<div class="currency">
					<span class="red">Currency:</span>
					<a href="#">GBP</a>
					<a href="#">EUR</a>
					<a href="#"> <strong>USD</strong>
					</a>
				</div>

				<div class="cart">
					<div class="title">
						<span class="title_icon">
							<!-- <img src="images/cart.gif" alt="" /> -->
							<?= Html::img(Yii::getAlias('@web').'/img/cart.gif', ['alt' => '']) ?>
						</span>
						My cart
					</div>

					<div class="home_cart_content">
						3 x items |
						<span class="red">TOTAL: 100$</span>
					</div>
					<a href="#" class="view_cart">view cart</a>
				</div>
				
				<div class="title">
					<span class="title_icon">
						<!-- <img src="images/bullet3.gif" alt="" /> -->
							<?= Html::img(Yii::getAlias('@web').'/img/bullet3.gif', ['alt' => '']) ?>
					</span>
					About Our Shop
				</div>

				<div class="about">
					<p>
						<!-- <img src="images/about.gif" alt="" class="right" /> -->
						<?= Html::img(Yii::getAlias('@web').'/img/about.gif', ['class' => 'right', 'alt' => '']) ?>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
					</p>
				</div>

				<div class="right_box">
					<div class="title">
						<span class="title_icon">
							<!-- <img src="images/bullet4.gif" alt="" /> -->
							<?= Html::img(Yii::getAlias('@web').'/img/bullet4.gif', ['alt' => '']) ?>
						</span>
						Promotions
					</div>

					<div class="new_prod_box">
						<a href="#">product name</a>
						<div class="new_prod_bg">
							<span class="new_icon">
								<!-- <img src="images/promo_icon.gif" alt="" /> -->
								<?= Html::img(Yii::getAlias('@web').'/img/promo_icon.gif', ['alt' => '']) ?>
							</span>

							<a href="#">
								<!-- <img src="images/thumb1.gif" alt="" class="thumb" border="0" /> -->
								<?= Html::img(Yii::getAlias('@web').'/img/thumb1.gif', [
									'alt'	=> '', 
									'class'	=> 'thumb',
									'border'=> 0
								]) ?>
							</a>
						</div>
					</div>

					<div class="new_prod_box">
						<a href="#">product name</a>
						<div class="new_prod_bg">
							<span class="new_icon">
								<!-- <img src="images/promo_icon.gif" alt="" /> -->
								<?= Html::img(Yii::getAlias('@web').'/img/promo_icon.gif', ['alt' => '']) ?>
							</span>

							<a href="#">
								<!-- <img src="images/thumb2.gif" alt="" class="thumb" border="0" /> -->
								<?= Html::img(Yii::getAlias('@web').'/img/thumb2.gif', ['alt' => '', 'class' => 'thumb', 'border' => 0]) ?>
							</a>
						</div>
					</div>

					<div class="new_prod_box">
						<a href="#">product name</a>
						<div class="new_prod_bg">
							<span class="new_icon">
								<!-- <img src="images/promo_icon.gif" alt="" /> -->
								<?= Html::img(Yii::getAlias('@web').'/img/promo_icon.gif', ['alt' => '']) ?>
							</span>
								
							<a href="#">
								<!-- <img src="images/thumb3.gif" alt="" class="thumb" border="0" /> -->
								<?= Html::img(Yii::getAlias('@web').'/img/thumb3.gif', ['alt' => '', 'class' => 'thumb', 'border'=>0]) ?>
							</a>
						</div>
					</div>
				</div>

				<div class="right_box">
					<div class="title">
						<span class="title_icon">
							<!-- <img src="images/bullet5.gif" alt="" /> -->
							<?= Html::img(Yii::getAlias('@web').'/img/bullet5.gif', ['alt' => '']) ?>
						</span>
						Categories
					</div>

					<ul class="list">
						<li>
							<a href="#">accesories</a>
						</li>
						<li>
							<a href="#">flower gifts</a>
						</li>
						<li>
							<a href="#">specials</a>
						</li>
						<li>
							<a href="#">hollidays gifts</a>
						</li>
						<li>
							<a href="#">accesories</a>
						</li>
						<li>
							<a href="#">flower gifts</a>
						</li>
						<li>
							<a href="#">specials</a>
						</li>
						<li>
							<a href="#">hollidays gifts</a>
						</li>
						<li>
							<a href="#">accesories</a>
						</li>
						<li>
							<a href="#">flower gifts</a>
						</li>
						<li>
							<a href="#">specials</a>
						</li>
					</ul>

					<div class="title">
						<span class="title_icon">
							<!-- <img src="images/bullet6.gif" alt="" /> -->
							<?= Html::img(Yii::getAlias('@web').'/img/bullet6.gif', ['alt' => '']) ?>
						</span>
						Partners
					</div>

					<ul class="list">
						<li>
							<a href="#">accesories</a>
						</li>
						<li>
							<a href="#">flower gifts</a>
						</li>
						<li>
							<a href="#">specials</a>
						</li>
						<li>
							<a href="#">hollidays gifts</a>
						</li>
						<li>
							<a href="#">accesories</a>
						</li>
						<li>
							<a href="#">flower gifts</a>
						</li>
						<li>
							<a href="#">specials</a>
						</li>
						<li>
							<a href="#">hollidays gifts</a>
						</li>
						<li>
							<a href="#">accesories</a>
						</li>
					</ul>
				</div>
			</div>
			<!--end of right content-->	
			<div class="clear"></div>
		</div>
		<!--end of center content-->
	</div>
</div>
