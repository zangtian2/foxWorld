<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use frontend\assets\AppAsset;

AppAsset::register($this);

AppAsset::addCss($this, "@web" . "/plugin/editor.md/css/editormd.min.css");
$this->registerJs(
        'var $ = layui.jquery;'
);
AppAsset::addScript($this, "@web" . "/plugin/editor.md/editormd.js");
AppAsset::addScript($this, "@web" . "/js/write.js");
?>

<style>
    .outShow {
        position: absolute;
        top: 0px;
        padding: 15px;
        width: 100%;
        /*height: 100%;*/
        bottom: 0px;
    }
    .editormd {
        width: 100% !important;
        height: 100% !important;
        margin-bottom: 0;
        border: 1px solid rgb(192, 200, 212);
        box-shadow: 0px 3px 5px rgb(170, 178, 189);
        
        /*border-top:1px solid #ddd*/
    }

</style>

<div class="outShow" >    

               
        <div id="test-editormd" >
                <textarea style="display:none;">[TOC]

#前言
>- 新手打算从零开始学习面书的ReactNative。
>- 原本打算学习Java进行Android开发，但看到ReactNative应用开发的颠覆性，以及本身做过少量前端开发，因此决定提前入坑。
>- 环境搭建此处略过，请至[官网](http://reactnative.cn/docs/0.28/getting-started.html)了解。
>- 在次说明，本人学习能力较弱，因此决定做官方文档的搬运工。

#常用组件
---
####Text 组件。用于显示文本。
    import React from 'react';          //导入react
    import  { AppRegistry,Text } from 'react-native';    //导入Text,在此导入组件
    
    const App = () => {
    return (       
         <Text>Hello World!</Text>
       );
    }
   
    AppRegistry.registerComponent('MyApp', () => App);  //注册应用之后才能正确渲染，且应用作为整体只注册一次

####Image 组件。用于显示图片。
    import React from 'react';          //导入react
    import  { AppRegistry,Image} from 'react-native';    //导入Image
    
    const App = () => {
    return (       
         <Image source={require('./img/check.png')} /> //<image> 相当于网站中 <img> 标签
       );
    }
    
    AppRegistry.registerComponent('MyApp', () => App);  //注册应用之后才能正确渲染，且应用作为整体只注册一次

####View 组件。基础容器。
    import React from 'react';          //导入react
    import  { AppRegistry,View,Image} from 'react-native';    //导入Image,View
    
    const App = () => {
    return (       
          <View style={{alignItems:'center'}}> //<View>相当于网站中的 <div>标签，因此对于其他组件应包装在View中来进行样式和布局的控制
           <Image source={require('./img/check.png')} /> //当前目录，<image> 相当于网站中 <img> 标签
          </View>
       );
    }
    
    AppRegistry.registerComponent('MyApp', () => App);  //注册应用之后才能正确渲染，且应用作为整体只注册一次
>对于样式布局的操作与Html非常类似。

####TextInput 组件。用于文本输入。
    import React from 'react';          //导入react
    import  { AppRegistry,View,TextInput} from 'react-native';    //导入TextInput,View
    
    const App = () => {
    return (       
          <View> 
            <TextInput placeholder="Hello" />  //文本中的提示信息，与Html5的<input>相同
          </View>
       );
    }
    
    AppRegistry.registerComponent('MyApp', () => App);  //注册应用之后才能正确渲染，且应用作为整体只注册一次

####ListView 组件。动态垂直滚动列表。
>必需属性：
>dataSource : 列表内容的数据来源。
>renderRow : 需要渲染的实际内容。
>必须函数：
>rowHasChanged

    import React from 'react';          //导入react
    import  { AppRegistry,View,Text,ListView} from 'react-native';    //导入Text,View,ListView
    
    class SimpleList extends React.Component {
      //初始化数据
      constructor(props) {  
      super(props);
      var ds = new ListView.DataSource({rowHasChanged: (r1, r2) => r1 !== r2}); // 比较两行数据是否是一个数据
      this.state = {
        dataSource: ds.cloneWithRows(['A','B','C','D','E'])
      };
      render() {
        return (       
          <View> 
              <ListView
                  dataSource={this.state.dataSource}
                  renderRow={(rowData) => <Text>{rowData}</Text>}
              />
          </View>
       );
    }
   
    AppRegistry.registerComponent('MyApp', () => App);  //注册应用之后才能正确渲染，且应用作为整体只注册一次

---
>#####语法是ES6的语法。本人没有接触过ES6。
</textarea>
    
        </div>

    </div>         


  








   