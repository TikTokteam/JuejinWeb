<!--这是整个页面的头部链接-->
<template>
  <!--第一级头部-->
  <div class="leftSide">
    <div>这里是首页图片</div>
    <div>首页</div>
    <div>沸点</div>
    <div>课程</div>
    <div>直播</div>
    <div>活动</div>
    <div>商城</div>
    <div>APP</div>
    <div>插件</div>
    <div>搜索框</div>
    <div>创作者中心</div>
  </div>
</template>

<script>
export default {
  name: 'leftSide',
  components:{

  }
}
</script>

<style scoped>
.leftSide div{
  flex-direction: row;
  margin: 1em;
  display: inline-block;
}
.leftSide{
  flex-direction: row;
}


</style>