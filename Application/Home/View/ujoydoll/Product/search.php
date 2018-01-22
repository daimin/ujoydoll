<include file="Public:header"/>
<div id="main">
    <div class="blank25"></div>
    <div id="webpath">
        <div class="wrap">
            <img src="__PUBLIC__/site/{$Think.THEME_NAME}/images/home.png" onclick="window.location=&#39;/&#39;">
            <a href="<?php echo '/product/search.html' ?>">PRODUCTS</a>
        </div>
    </div>
    <div class="wrap">
        <div class="leftmenu">
            <div class="t">CATEGORIES</div>
            <?php foreach($categorys as $idx=>$category){ ?>
                <div class="row category_<?php echo $category['id'] ?> <?php echo $cur_category['id'] == $category['id'] ? ' on ' : " " ?>">
                    <div class="n1 "><a id="product-link-<?php echo $idx ?>" href="<?php echo '/product/'.$category['pagecode'].'.html#'.$idx ?>" title="<?php echo $category['name'] ?>"><?php echo $category['name'] ?></a></div>
                </div>
            <?php } ?>
            <div class="blank25"></div>
            <div style="overflow:hidden;">
                <script type="text/javascript" src="__PUBLIC__/site/{$Think.THEME_NAME}/js/jQuery.blockUI.js"></script>
                <script type="text/javascript" src="__PUBLIC__/site/{$Think.THEME_NAME}/js/jquery.SuperSlide.js"></script>
                <style type="text/css">
                    .slideBox_4 {
                        overflow: hidden;
                        position: relative;
                        text-align: center;
                    }

                    .slideBox_4 .prev, .slideBox_4 .next {
                        display: none;
                    }

                    .slideBox_4 .hd {
                        height: 15px;
                        overflow: hidden;
                        position: absolute;
                        bottom: 15px;
                        z-index: 1;
                    }

                    .slideBox_4 .hd ul {
                        overflow: hidden;
                        zoom: 1;
                        float: left;
                    }

                    .slideBox_4 .hd ul li {
                        float: left;
                        margin-left: 5px;
                        width: 10px;
                        height: 10px;
                        -webkit-border-radius: 5px;
                        -moz-border-radius: 5px;
                        border-radius: 5px;
                        background: #f1f1f1;
                        cursor: pointer;
                    }

                    .slideBox_4 .hd ul li:first-child {
                        margin-left: 0;
                    }

                    .slideBox_4 .hd ul li.on {
                        background: #f00;
                        color: #fff;
                    }

                    .slideBox_4 .bd {
                        position: relative;
                        height: 100%;
                        z-index: 0;
                    }

                    .slideBox_4 .bd ul li a {
                        display: block;
                        background-position: center top;
                        background-repeat: no-repeat;
                    }</style>
                <div id="slideBox_4" class="slideBox_4 slideBox">
                    <div class="hd" style="left: 127.5px;">
                        <ul>
                            <li class="on"></li>
                        </ul>
                    </div>
                    <div class="bd"><a href="javascript:;" class="prev"></a><a href="javascript:;" class="next"></a>
                        <ul>
                            <li><a href="javascript:;"><img src="__PUBLIC__/site/{$Think.THEME_NAME}/images/bdf2ddc9a3.jpg" alt=""></a></li>
                        </ul>
                    </div>
                </div>
                <script type="text/javascript">jQuery(document).ready(function () {
                        jQuery(".slideBox_4").slide({mainCell: ".bd ul", effect: "fade", autoPlay: true, interTime: 5000});
                    });</script>
            </div>
            <div class="blank25"></div>
            <script>
                $('.category_5,.category_,.category_5').addClass('on');
                $('.v_').show();
            </script>

        </div><!-- end of .leftmenu -->
        <div class="rightside fr">
            <div id="curpath">
                <div class="fl"><?php echo $cur_category['name'] ?></div>
                <div class="fr">There are <?php echo $total_count; ?> dolls</div>
            </div>
            <div class="banner">
                <?php if(!empty($cur_category['img'])){ ?>
                    <div><img src="<?php echo $cur_category['img'] ?>" alt=""></div>
                <?php } ?>
            </div>
            <div class="blank25"></div>
            <include file="Product:pagediv-search"/>
            <div class="blank25"></div>
            <div class="product_list">
                <?php foreach($products as $product) {?>
                    <div class="item fl i_mar mri">
                        <div class="inner">
                            <div class="pic delay"><a href="<?php echo $product['link_url'] ?>"
                                                      title="<?php echo $product['title'] ?>">
                                    <img src="<?php echo $product['main_img']['path'] ?>"><span></span></a>
                            </div>
                            <div class="blank9"></div>
                            <div class="name"><a href="<?php echo $product['link_url'] ?>"
                                                 title="<?php echo $product['title'] ?>"><?php echo $product['title'] ?></a></div>
                        </div>
                    </div>
                    <?php
                }
                ?>
                <div class="clear"></div>
            </div>
            <div class="blank20"></div>
            <div id="page">
                <include file="Product:pagediv-search"/>
                <div class="blank20"></div>
            </div>
        </div>
    </div>
</div>
<div class="blank25"></div>
<include file="Public:footer"/>