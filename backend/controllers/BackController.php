<?
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\helpers\VarDumper;

class BackController extends Controller {

	function dump($var, $exit = false, $highlight=true, $depth=10) {
		VarDumper::dump($var, $depth, $highlight);
		if($exit) Yii::$app->end();
	}
}
