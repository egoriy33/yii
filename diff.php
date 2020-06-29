diff --git a/views/layouts/main.php b/views/layouts/main.php
index b18b2c6..e8513a4 100644
--- a/views/layouts/main.php
+++ b/views/layouts/main.php
@@ -60,14 +60,14 @@ AppAsset::register($this);
             'class' => 'navbar-inverse navbar-fixed-top',
         ],
     ]);
-    //new code @@@@@@@@@@@@@@@@@@@@@
+    //it's a test @@@@@@@@@@@@@@@@@@@@@
 	echo components\ActiveMenu::widget([
 	//echo Nav::widget([
         'options' => ['class' => 'navbar-nav navbar-right'],
         'items' => [
-            //['label' => 'Home', 'url' => ['/site/index']],
-            //['label' => 'About', 'url' => ['/site/about']],
-            //['label' => 'Contact', 'url' => ['/site/contact']],
+            ['label' => 'Home', 'url' => ['/site/index']],
+            ['label' => 'About', 'url' => ['/site/about']],
+            ['label' => 'Contact', 'url' => ['/site/contact']],
             Yii::$app->user->isGuest ? (
                 ['label' => 'Login', 'url' => ['/site/login']]
             ) : (
