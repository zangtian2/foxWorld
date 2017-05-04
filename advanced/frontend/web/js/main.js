var layer = layui.layer;
function dataEcon(url){
console.log(url);
  layer.open({
  type: 2,
  title: 'iframe父子操作',
  skin: 'layui-layer-lan',
  maxmin: true,
  shade: 0.7,
  shadeClose: true, //点击遮罩关闭层
  area : ['1150px' , '650px'],
  content: url,
  });

}