<?php
/* @var $this yii\web\View */

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
AppAsset::addCss($this, "@web" . "/plugin/piccycle/css/style.css");

$this->registerJs(
        'var $ = layui.jquery;'
);

AppAsset::addScript($this, "@web" . "/plugin/piccycle/js/main.js");
?>

<?php //Html::cssFile('@web/static/css/toastr.css') ?> 
<style>
    .iziToast-wrapper-topLeft {
        top:120px !important;        
        left:18%;
    }

</style>
<div style="height: 100%">
    <section class="cd-hero" style="position: absolute;top: 0;bottom:40px;right: 0;left: 0">
        <ul class="cd-hero-slider" style="height: 100%;">

            <li class="selected">
                <div class="cd-half-width" style="padding-top: 180px">
                    <h2 style="font-size: 48px;color: #db940f;margin-bottom: 20px">欢迎来到外汇领域!</h2>
                    <br>

                    <?php
                    $form = ActiveForm::begin([
                                'id' => 'login-form',
                                'options' => ["class" => "form-horizontal", "style" => "padding: 0 30%"]
                            ]);
                    ?>

                    <?= $form->field($model, 'email')->textInput(['autofocus' => true, "placeholder" => "邮箱"])->label(false) ?>                            
                    <?= $form->field($model, 'password')->passwordInput(["placeholder" => "密码"])->label(false) ?>

                    <?= Html::submitButton('登录', ['class' => 'cd-btn', 'style' => 'border: medium none;width:100px;margin-right:30px;padding:12px']) ?>
                    <a href="http://www.htmleaf.com/jQuery/Slideshow-Scroller/201504221718.html" style="padding:12px;width:100px" class="cd-btn secondary">忘记密码</a>
                    <?php ActiveForm::end(); ?>
                    <!--                    
                                        <form class="form-horizontal" style="padding: 0 30%">
                                            <input type="email" class="form-control" id="inputEmail3" placeholder="手机号">
                                            
                                            <input type="password" class="form-control" id="inputPassword3" placeholder="密码">
                                            <br>
                                            <a href="#0" class="cd-btn">登录</a>
                                            <a href="http://www.htmleaf.com/jQuery/Slideshow-Scroller/201504221718.html" class="cd-btn secondary">忘记密码</a>
                    
                                        </form>-->



                </div> <!-- .cd-half-width -->

                <div class="cd-half-width cd-img-container">
                    <img src="<?= Yii::$app->urlManager->baseUrl ?>/plugin/piccycle/assets/money.jpg" alt="tech 1">
                </div> <!-- .cd-half-width.cd-img-container -->
            </li>

            <li>
                <div class="cd-half-width cd-img-container">
                    <img src="<?= Yii::$app->urlManager->baseUrl ?>/plugin/piccycle/assets/tech-2.jpg"  alt="tech 2">
                </div> <!-- .cd-half-width.cd-img-container -->

                <div class="cd-half-width" style="padding-top: 150px">
                    <h2 style="font-size: 48px;color: #db940f;margin-bottom: 20px">欢迎加入我们!</h2>
                    <br>
                    <?php  $reform = ActiveForm::begin([
                                'id' => 'regeister-form',
                                'action' => ['official/regeister'],
                        'enableAjaxValidation' => true,
                        'validationUrl' => Url::toRoute(['validate-regeister-form']),

                                'options' => ["class" => "form-horizontal", "style" => "padding: 0 30%"]
                            ]);
                    ?>

                    <?= $reform->field($rmodel, 'email')->textInput(['autofocus' => true, "placeholder" => "邮箱"])->label(false) ?>                            
                    <?= $reform->field($rmodel, 'password')->passwordInput(["placeholder" => "密码"])->label(false) ?>
                    <?= $reform->field($rmodel, 'repassword')->passwordInput(["placeholder" => "请再次输入密码"])->label(false) ?>

                    <?= Html::submitButton('注册', ['class' => 'cd-btn', 'style' => 'border: medium none;width:100px;margin-right:30px;padding:12px']) ?>
                    <a href="http://www.htmleaf.com/jQuery/Slideshow-Scroller/201504221718.html" style="padding:12px;width:100px" class="cd-btn secondary">手机注册</a>
                    <?php ActiveForm::end(); ?>
                </div> <!-- .cd-half-width -->
            </li>


        </ul> <!-- .cd-hero-slider -->

        <div class="cd-slider-nav">
            <nav>
                <span class="cd-marker item-1"></span>

                <ul>
                    <li class="selected"><a href="#0">登录</a></li>
                    <li><a href="#0">注册</a></li>
                </ul>
            </nav> 
        </div> <!-- .cd-slider-nav -->

    </section> <!-- .cd-hero -->

    <div style="height: 35px;position: absolute;bottom: 0px;background-color: #2F4056;width: 100%;">
        <div style="height: 35px;
             padding: 5px;">

            <p style="
               font-size: 14px;
               text-align: center;
               color: rgb(219, 148, 15);
               font-weight: bold;
               letter-spacing: 1px;
               ">我们致力于外汇行业的未来与发展</p>
        </div>
    </div>

</div>

<script  type='text/javascript'>


//
// CONFIG IZIToast
//

    iziToast.settings({
        timeout: 5000,
        // position: 'center',
        // imageWidth: 50,
        pauseOnHover: true,
        // resetOnHover: true,
        close: true,
        progressBar: true,
        // layout: 1,
        // balloon: true,
        // target: '.target',
        // icon: 'material-icons',
        // iconText: 'face',
        // animateInside: false,
        // transitionIn: 'flipInX',
        // transitionOut: 'flipOutX',
    });

    function errorToast(info) {
        iziToast.error({
            title: '错误：',
            message: info,
            position: 'topLeft',
            transitionIn: 'fadeInDown'
        });
    }
</script>


<?php
if (Yii::$app->session->hasFlash('loginerror')) {
    $errorInfo = Yii::$app->session->getFlash('loginerror', $delete = true);
//    Yii::$app->session->removeFlash('error');
    echo "<script type='text/javascript'>errorToast('$errorInfo');</script>";
}
?>