<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\widgets\Menu;

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
			/*echo*/ Menu::widget([
				'items' => [
					// Important: you need to specify url as 'controller/action',
					// not just as 'controller' even if default action is used.
					['label' => 'Home', 'url' => ['site/index']],
					// 'Products' menu item will be selected as long as the route is 'product/index'
					['label' => 'Products', 'url' => ['product/index'], 'items' => [
						['label' => 'New Arrivals', 'url' => ['product/index', 'tag' => 'new']],
						['label' => 'Most Popular', 'url' => ['product/index', 'tag' => 'popular']],
					]],
					['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
				],
			]);


			NavBar::begin([
				'brandLabel' => 'My Company',
				'brandUrl' => Yii::$app->homeUrl,
				'options' => [
					'class' => 'navbar-inverse navbar-fixed-top',
				],
			]);
			$menuItems = [
				['label' => 'Gii',			'url' => ['/gii']],
				['label' => 'Home',			'url' => ['/site/index']],
				['label' => 'Company',		'url' => ['/companies/index']],
				['label' => 'PO',			'url' => ['/po/index']],
				['label' => 'Brances',		'url' => ['/branches/index']],
				['label' => 'Departments',	'url' => ['/departments/index']],
				['label' => 'Customers',	'url' => ['/customers/index']],
				['label' => 'Locations',	'url' => ['/locations/index']],
			];
			if (Yii::$app->user->isGuest) {
				$menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
			}
			else {
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

		<div class="container">
		<?= Breadcrumbs::widget([
			'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
		]) ?>
		<?= $content ?>
		</div>
	</div>

	<footer class="footer">
		<div class="container">
		<p class="pull-left">&copy; My Company <?= date('Y-m') ?></p>
		<p class="pull-right"><?= Yii::powered() ?></p>
		</div>
	</footer>

	<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
