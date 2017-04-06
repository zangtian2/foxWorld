<?php

use frontend\assets\AppAsset;

AppAsset::register($this);
?>

<div class="main layui-clear" style="margin-left: 270px;">
    <div class="wrap">
        <div class="detail" style="padding-top: 1px;">
            <div class="fly-panel detail-box" style="margin: 15px;
                 border: 1px solid rgb(192, 200, 212);
                 box-shadow: 0px 3px 5px rgb(170, 178, 189);
                 margin-top: 13px;">
                <div class="showback"  style="margin: 15px 5px;margin-top: 20px;padding-bottom: 30px;">
                    <div style="  max-width: 1000px;
                         margin-left: auto!important;
                         margin-right: auto!important;">
                        <div style="    padding: 9px 24px;
                             display: block;    position: relative;">
                            <h1 style="">量化分析师的Python日记【第8天 Q Quant兵器谱之函数插值】</h1></div>
                        <blockquote class="default">
                            <p>来源：<a href="https://uqer.io/community/share/551cfa1ff9f06c8f339044ff">https://uqer.io/community/share/551cfa1ff9f06c8f339044ff</a></p>

                            <p>在本篇中，我们将介绍Q宽客常用工具之一：函数插值。接着将函数插值应用于一个实际的金融建模场景中：波动率曲面构造。</p>

                            <p>通过本篇的学习您将学习到：</p>

                            <ol><li>如何在<code>scipy</code>中使用函数插值模块：<code>interpolate</code>；</li><li>波动率曲面构造的原理；</li><li>将<code>interpolate</code>运用于波动率曲面构造。</li></ol>
                        </blockquote>
                        <h2 id="1-code-scipy-code-">1. 如何使用<code>scipy</code>做函数插值</h2>
                        <p>函数插值，即在离散数据的基础上补插连续函数，估算出函数在其他点处的近似值的方法。在<code>scipy</code>中，所有的与函数插值相关的功能都在<code>scipy.interpolate</code>模块中</p>
                        <pre><code class="py language-py">from scipy import interpolate
dir(interpolate)[:5]

['Akima1DInterpolator',
 'BPoly',
 'BarycentricInterpolator',
 'BivariateSpline',
 'CloughTocher2DInterpolator']</code></pre>
                        <p>作为介绍性质的本篇，我们将只关注<code>interpolate.spline</code>的使用，即样条插值方法：</p>
                        <ul><li><code>xk</code>离散的自变量值，为序列</li><li><code>yk</code>对应<code>xk</code>的函数值，为与<code>xk</code>长度相同的序列</li><li><code>xnew</code>需要进行插值的自变量值序列</li><li><code>order</code>样条插值使用的函数基德阶数，为1时使用线性函数</li></ul>
                        <pre><code class="py language-py">print interpolate.spline.__doc__

Interpolate a curve at new points using a spline fit

Parameters
----------
xk, yk : array_like
    The x and y values that define the curve.
xnew : array_like
    The x values where spline should estimate the y values.
order : int
    Default is 3.
kind : string
    One of {'smoothest'}
conds : Don't know
    Don't know

Returns
-------
spline : ndarray
    An array of y values; the spline evaluated at the positions `xnew`.</code></pre>
                        <h3 id="1-1-code-np-sin-code-">1.1 三角函数（<code>np.sin</code>）插值</h3>
                        <p>一例胜千言！让我们这里用实际的一个示例，来说明如何在<code>scipy</code>中使用函数插值。这里的目标函数是三角函数：</p>
                        <h2 id="2-">2. 函数插值应用 —— 期权波动率曲面构造</h2>
                        <p>市场上期权价格一般以隐含波动率的形式报出，一般来讲在市场交易时间，交易员可以看到类似的波动率矩阵（Volatilitie Matrix):</p>
                        <pre><code class="py language-py">import pandas as pd
pd.options.display.float_format = '{:,&gt;.2f}'.format
dates = [Date(2015,3,25), Date(2015,4,25), Date(2015,6,25), Date(2015,9,25)]
strikes = [2.2, 2.3, 2.4, 2.5, 2.6]
blackVolMatrix = np.array([[ 0.32562851,  0.29746885,  0.29260648,  0.27679993],
                  [ 0.28841840,  0.29196629,  0.27385023,  0.26511898],
                  [ 0.27659511,  0.27350773,  0.25887604,  0.25283775],
                  [ 0.26969754,  0.25565971,  0.25803327,  0.25407669],
                  [ 0.27773032,  0.24823248,  0.27340796,  0.24814975]])
table = pd.DataFrame(blackVolMatrix * 100, index = strikes, columns = dates, )
table.index.name = u'行权价'
table.columns.name = u'到期时间'
print u'2015年3月3日10时波动率矩阵'
table

2015年3月3日10时波动率矩阵</code></pre>
                        <table>
                            <thead>
                                <tr>
                                    <th>到期时间</th>
                                    <th>March 25th, 2015</th>
                                    <th>April 25th, 2015</th>
                                    <th>June 25th, 2015</th>
                                    <th>September 25th, 2015</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>行权价</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>2.20</td>
                                    <td>32.56</td>
                                    <td>29.75</td>
                                    <td>29.26</td>
                                    <td>27.68</td>
                                </tr>

                                <tr>
                                    <td>2.30</td>
                                    <td>28.84</td>
                                    <td>29.20</td>
                                    <td>27.39</td>
                                    <td>26.51</td>
                                </tr>

                                <tr>
                                    <td>2.40</td>
                                    <td>27.66</td>
                                    <td>27.35</td>
                                    <td>25.89</td>
                                    <td>25.28</td>
                                </tr>

                                <tr>
                                    <td>2.50</td>
                                    <td>26.97</td>
                                    <td>25.57</td>
                                    <td>25.80</td>
                                    <td>25.41</td>
                                </tr>

                                <tr>
                                    <td>2.60</td>
                                    <td>27.77</td>
                                    <td>24.82</td>
                                    <td>27.34</td>
                                    <td>24.81</td>
                                </tr>

                            </tbody>
                        </table>

                        <div style="position: relative;
                             padding: 12px 0px;">
                            <div style="line-height: 1.5em;
                                 font-size: 1.14em;">
                                <span style="float: left;
                                      color: rgb(153, 153, 153);
                                      padding: 2px 0px;">上一篇：<a data-articleid="186117" href="/wizardforcel/python-quant-uqer/186117">量化分析师的Python日记【第7天：Q Quant 之初出江湖】</a></span>
                                <span style="float: right;
                                      color: rgb(153, 153, 153);
                                      padding: 2px 0px;">下一篇：<a data-articleid="186119" href="/wizardforcel/python-quant-uqer/186119">量化分析师的Python日记【第9天 Q Quant兵器谱之二叉树】</a></span>
                            </div>
                            <a class="view-backtop active"><i class="icon-arrow-up2"></i></a>
                        </div>
                    </div>
                </div>
            </div>


       
        <div class="fly-panel detail-box" style="margin: 15px;
                 border: 1px solid rgb(192, 200, 212);
                 box-shadow: 0px 3px 5px rgb(170, 178, 189);
                 margin-top: 13px;">
                <div class="showback"  style="margin: 15px 5px;margin-top: 20px;">
            <div style="  max-width: 1000px;
                 margin-left: auto!important;
                 margin-right: auto!important;">
                <div style="    padding: 9px 24px;
                     display: block;    position: relative;">
                    <div class="article-comment"><div id="articleComment" class="m-comment"><div class="comment-result"><strong class="title">相关评论(<b class="comment-total">0</b>)</strong><div class="comment-post"><form class="form" action="/comment/create" method="post"><label class="enter w-textarea textarea-full"><textarea class="textarea-input" name="content" placeholder="文明上网，理性发言" style="height: 72px;"></textarea><input type="hidden" name="doc_id" value="186118"></label><div class="util cf"><div class="left"><span class="comment-code"><b class="e-code icon-embed2" title="插入代码"></b></span></div><div class="right"><span class="form-tip w-fragment fragment-tip">Ctrl + Enter快速发布</span><label class="form-submit w-btn btn-success btn-m"><button class="btn-input" type="submit">发布</button></label></div></div><span class="form-loading">提交中...</span></form></div><div class="comment-list"><div class="comment-empty"><i class="image"></i><b class="text">暂无相关评论</b></div><div class="think-loading loading-ripple-empty"><span class="loading-inner"><i class="loading-image"></i><b class="loading-text">评论加载中</b></span></div></div><div class="comment-more"><span class="more-inner">加载剩余<b class="number">0</b>条评论</span></div></div></div></div>

                </div></div></div> </div>
    </div>
    </div>


</div>







