<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;
use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?= Html::csrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>
</head>
<body>
	<?php $this->beginBody() ?>
	<div class="wrap">
		<?php
			NavBar::begin([
				'brandLabel' => 'My Company',
				'brandUrl' => Yii::$app->homeUrl,
				'options' => [
					'class' => 'navbar-inverse navbar-fixed-top',
				],
			]);
			$menuItems = [
				['label' => 'Home', 'url' => ['/site/index']],
				['label' => 'About us', 'url' => ['/site/about']],
				['label' => 'Contact', 'url' => ['/site/contact']],
			];
			if (Yii::$app->user->isGuest) {
				$menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
				$menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
			} else {
				$menuItems[] = [
					'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
					'url' => ['/site/logout'],
					'linkOptions' => ['data-method' => 'post']
				];
			}
			echo Nav::widget([
				'options' => ['class' => 'navbar-nav navbar-right'],
				'items' => $menuItems,
			]);
			NavBar::end();
		?>

		<div id="wrap">
			<header>
				<div class="header">
					<div class="logo">
						<?= Html::img(Yii::getAlias('@web').'/img/logo.gif', ['border' => 0]) ?>
						<!-- <a href="#"><img src="images/logo.gif" alt="" border="0" /></a> -->
					</div>

					<div id="menu">
						<ul>
							<li>
								<a href="category.html">flowers</a>
							</li>
							<li>
								<a href="specials.html">specials gifts</a>
							</li>
							<li>
								<a href="myaccount.html">my accout</a>
							</li>
							<li>
								<a href="register.html">register</a>
							</li>
							<li>
								<a href="details.html">prices</a>
							</li>
							<li>
								<a href="contact.html">contact</a>
							</li>
						</ul>
					</div>
				</div>
			</header>
		</div>

		<div class="container">
			<?= Breadcrumbs::widget([
				'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
			]) ?>
			<?= Alert::widget() ?>
			<?= $content ?>
		</div>
	</div>

	<footer class="footer">

		<!-- <div class="footer"> -->
			<div class="left_footer">
				<!-- <img src="images/footer_logo.gif" alt="" /> -->
				<?= Html::img(Yii::getAlias('@web').'/img/footer_logo.gif', ['alt' => '']) ?>

				<br />  
				<a href="http://csscreme.com">
					<!-- <img src="images/csscreme.gif" alt="" border="0" />  -->
					<?= Html::img(Yii::getAlias('@web').'/img/csscreme.gif', ['alt' => '', 'border' => 0]) ?>
				</a>
			</div>
			<div class="right_footer">
				<a href="<?=Url::to(['/site/index'])?>">home</a>
				<a href="<?=Url::to(['/site/about'])?>">About us</a>
				<a href="#">services</a>
				<a href="#">privacy policy</a>
				<a href="#">contact us</a>
			</div>
		<!-- </div> -->
		<!-- <div class="container">
			<p class="pull-left">&copy; My Company <?//= date('Y') ?></p>
			<p class="pull-right"><?//= Yii::powered() ?></p>
		</div> -->
	</footer>

	<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
