<?php
use common\helpers\ImageHelper;
use common\helpers\Url;

$this->title = "个人中心";
?>

<div class="hui-wrap">
    <div class="hui-list" style="background:#FFFFFF; margin-top:28px;">
        <a href="javascript:hui.toast('Hello Hcoder UI !');" style="height:auto; height:80px; padding-bottom:8px;">
            <div class="hui-list-icons" style="width:110px; height:80px;">
                <img src="<?= ImageHelper::defaultHeaderPortrait($model['head_portrait']);?>" style="width:66px; margin:0px; border-radius:50%;" />
            </div>
            <div class="hui-list-text" style="height:79px; line-height:79px;">
                <div class="hui-list-text-content">
                    <?= $model['realname'] ? $model['realname'] : $model['username'];?>
                </div>
                <div class="hui-list-info">
                    <span class="hui-icons hui-icons-right"></span>
                </div>
            </div>
        </a>
        <a href="javascript:(0);">
            <div class="hui-list-text">
                账户余额 : ￥0元 | 总消费 ：￥0 元
            </div>
        </a>
    </div>
    <div class="hui-list" style="background:#FFFFFF; margin-top:28px;">
        <ul>
            <li>
                <a href="<?= Url::to(['order/shop/index']);?>">
                    <div class="hui-list-icons">
                        <img src="/html5/resources/img/list/order.png" />
                    </div>
                    <div class="hui-list-text">
                        我的订单
                        <div class="hui-list-info">
                            <span class="hui-icons hui-icons-right"></span>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);">
                    <div class="hui-list-icons">
                        <img src="/html5/resources/img/list/sc.png" />
                    </div>
                    <div class="hui-list-text">
                        我的收藏
                        <div class="hui-list-info">
                            <span class="hui-icons hui-icons-right"></span>
                        </div>
                    </div>
                </a>
            </li>


            <li>
                <a href="javascript:void(0);">
                    <div class="hui-list-icons">
                        <img src="/html5/resources/img/list/lishi.png" />
                    </div>
                    <div class="hui-list-text">
                        历史足迹
                        <div class="hui-list-info">
                            <span class="hui-icons hui-icons-right"></span>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);">
                    <div class="hui-list-icons">
                        <img src="/html5/resources/img/list/ht.png" />
                    </div>
                    <div class="hui-list-text">
                        收货地址
                        <div class="hui-list-info">
                            <span class="hui-icons hui-icons-right"></span>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <div style="background:#FFFFFF; margin-top:28px;">
        <a class="hui-button hui-button-large" href="<?=Url::to(['logout']);?>" data-method="post"><span class="hui-icons hui-icons-logoff"></span>退出系统</a>
    </div>
</div>
