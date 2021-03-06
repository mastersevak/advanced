<?php
use backend\assets\DashboardAsset;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

// https://almsaeedstudio.com/themes/AdminLTE/index2.html

DashboardAsset::register($this);
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
<body class="skin-blue sidebar-mini">
	<?php $this->beginBody() ?>
	<div class="wrapper">
		<?
		// header
		$this->beginContent( \Yii::$app->basePath.'\views\layouts\theme\AdminLTE\header.php');
		$this->endContent();
		// site bare
		$this->beginContent( \Yii::$app->basePath.'\views\layouts\theme\AdminLTE\sideBare.php');
		$this->endContent();
		?>

		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					Dashboard <small>Control panel</small>
				</h1>

				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
					<li class="active">Dashboard</li>
				</ol>
			</section>

			<!-- Main content -->
			<section class="content">
				<?= $content ?>
			</section>
		</div>
	</div>

	<!-- <footer class="footer">
		<div class="container">
		<p class="pull-left">&copy; My Company <?= date('Y-m') ?></p>
		<p class="pull-right"><?= Yii::powered() ?></p>
		</div>
	</footer> -->

	<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
