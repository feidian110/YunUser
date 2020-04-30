<?php
use common\helpers\Url;
$this->title = "快店订单";
?>
<style>
    .li-title{
        background-color: white;
        height: 36px;
        border-bottom:1px solid #e4e4e4;
    }
    .li-title a {
        font-size: 10px;
        padding-left: 8px;
        float: left;
        line-height: 36px;
    }
</style>

<div class="hui-wrap">
    <div style="padding:0px 0px;">
        <div class="hui-tab">
            <div class="hui-tab-title">
                <div>全部订单</div>
                <div>待发货</div>
                <div>待收货</div>
                <div>待付款</div>
                <div>待评价</div>
            </div>
            <div class="hui-tab-body">
                <div class="hui-tab-body-items" style="background-color: #f9f9f9">
                    <div class="hui-tab-item" >
                        <div class="hui-media-list" style="padding:10px;background-color: #f9f9f9">
                            <ul>
                                <div class="li-title">
                                    <a>订单编号：</a>
                                    <div class="li-status" style="float: right">
                                        <a>已取消：</a><a class="hui-icons hui-icons-remove" style="font-size: 16px"></a>
                                    </div>
                                </div>
                                <li>
                                    <a href="<?=Url::to(['detail']);?>">
                                        <div class="hui-media-list-img"><img src="../../../img/medialist/2.jpg"></div>
                                        <div class="hui-media-content">
                                            <h1>标题内容....</h1>
                                            <p style="padding-top: 15px">数量：0，&nbsp;&nbsp;&nbsp;&nbsp;总价：0元</p>
                                        </div>
                                    </a>
                                </li>
                                <div class="li-title">
                                    <a>订单编号：</a>
                                    <div class="li-status" style="float: right">
                                        <a>已取消：</a><a class="hui-icons hui-icons-remove" style="font-size: 16px"></a>
                                    </div>
                                </div>
                                <li>
                                    <a href="<?=Url::to(['detail']);?>">
                                        <div class="hui-media-list-img"><img src="../../../img/medialist/2.jpg"></div>
                                        <div class="hui-media-content">
                                            <h1>标题内容....</h1>
                                            <p style="padding-top: 15px">数量：0，&nbsp;&nbsp;&nbsp;&nbsp;总价：0元</p>
                                        </div>
                                    </a>
                                </li>
                                <div class="li-title">
                                    <a>订单编号：</a>
                                    <div class="li-status" style="float: right">
                                        <a>已取消：</a><a class="hui-icons hui-icons-remove" style="font-size: 16px"></a>
                                    </div>
                                </div>
                                <li>
                                    <a href="<?=Url::to(['detail']);?>">
                                        <div class="hui-media-list-img"><img src="../../../img/medialist/2.jpg"></div>
                                        <div class="hui-media-content">
                                            <h1>标题内容....</h1>
                                            <p style="padding-top: 15px">数量：0，&nbsp;&nbsp;&nbsp;&nbsp;总价：0元</p>
                                        </div>
                                    </a>
                                </li>
                                <div class="li-title">
                                    <a>订单编号：</a>
                                    <div class="li-status" style="float: right">
                                        <a>已取消：</a><a class="hui-icons hui-icons-remove" style="font-size: 16px"></a>
                                    </div>
                                </div>
                                <li>
                                    <a href="<?=Url::to(['detail']);?>">
                                        <div class="hui-media-list-img"><img src="../../../img/medialist/2.jpg"></div>
                                        <div class="hui-media-content">
                                            <h1>标题内容....</h1>
                                            <p style="padding-top: 15px">数量：0，&nbsp;&nbsp;&nbsp;&nbsp;总价：0元</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="hui-tab-item">
                        <div class="hui-media-list" style="padding:10px;background-color: #f9f9f9">
                            <ul>
                                <li>
                                    <a href="javascript:hui.toast('hi...');">
                                        <div class="hui-media-list-img"><img src="../../../img/medialist/1.jpg"></div>
                                        <div class="hui-media-content">
                                            <h1>标题内容....</h1>
                                            <p>power by hcoder.net</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:hui.toast('hi...');">
                                        <div class="hui-media-list-img"><img src="../../../img/medialist/2.jpg"></div>
                                        <div class="hui-media-content">
                                            <h1>标题内容....</h1>
                                            <p>power by hcoder.net</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:hui.toast('hi...');">
                                        <div class="hui-media-list-img"><img src="../../../img/medialist/3.jpg"></div>
                                        <div class="hui-media-content">
                                            <h1>标题内容....</h1>
                                            <p>笑对人生，能穿透迷雾；笑对人生，能坚持到底；笑对人生，能化解危机；笑对人生，能照亮黑暗。</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="hui-tab-item">
                        <div class="hui-media-list" style="padding:10px;background-color: #f9f9f9">
                            <ul>
                                <li>
                                    <a href="javascript:hui.toast('hi...');">
                                        <div class="hui-media-list-img"><img src="../../../img/medialist/1.jpg"></div>
                                        <div class="hui-media-content">
                                            <h1>标题内容....</h1>
                                            <p>power by hcoder.net</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:hui.toast('hi...');">
                                        <div class="hui-media-list-img"><img src="../../../img/medialist/2.jpg"></div>
                                        <div class="hui-media-content">
                                            <h1>标题内容....</h1>
                                            <p>power by hcoder.net</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:hui.toast('hi...');">
                                        <div class="hui-media-list-img"><img src="../../../img/medialist/3.jpg"></div>
                                        <div class="hui-media-content">
                                            <h1>标题内容....</h1>
                                            <p>笑对人生，能穿透迷雾；笑对人生，能坚持到底；笑对人生，能化解危机；笑对人生，能照亮黑暗。</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="hui-tab-item">
                        <div class="hui-media-list" style="padding:10px;background-color: #f9f9f9">
                            <ul>
                                <li>
                                    <a href="javascript:hui.toast('hi...');">
                                        <div class="hui-media-list-img"><img src="../../../img/medialist/1.jpg"></div>
                                        <div class="hui-media-content">
                                            <h1>标题内容....</h1>
                                            <p>power by hcoder.net</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:hui.toast('hi...');">
                                        <div class="hui-media-list-img"><img src="../../../img/medialist/2.jpg"></div>
                                        <div class="hui-media-content">
                                            <h1>标题内容....</h1>
                                            <p>power by hcoder.net</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:hui.toast('hi...');">
                                        <div class="hui-media-list-img"><img src="../../../img/medialist/3.jpg"></div>
                                        <div class="hui-media-content">
                                            <h1>标题内容....</h1>
                                            <p>笑对人生，能穿透迷雾；笑对人生，能坚持到底；笑对人生，能化解危机；笑对人生，能照亮黑暗。</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="hui-tab-item">
                        <div class="hui-media-list" style="padding:10px;background-color: #f9f9f9">
                            <ul>
                                <li>
                                    <a href="javascript:hui.toast('hi...');">
                                        <div class="hui-media-list-img"><img src="../../../img/medialist/1.jpg"></div>
                                        <div class="hui-media-content">
                                            <h1>标题内容....</h1>
                                            <p>power by hcoder.net</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:hui.toast('hi...');">
                                        <div class="hui-media-list-img"><img src="../../../img/medialist/2.jpg"></div>
                                        <div class="hui-media-content">
                                            <h1>标题内容....</h1>
                                            <p>power by hcoder.net</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:hui.toast('hi...');">
                                        <div class="hui-media-list-img"><img src="../../../img/medialist/3.jpg"></div>
                                        <div class="hui-media-content">
                                            <h1>标题内容....</h1>
                                            <p>笑对人生，能穿透迷雾；笑对人生，能坚持到底；笑对人生，能化解危机；笑对人生，能照亮黑暗。</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$js = <<<JS
    hui.tab('.hui-tab');
JS;
$this->registerJs($js);
?>
