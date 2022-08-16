<template>
<div class="box">
  <div class="top flex_center">
    <div class="home flex_center">
      <div class="top_left flex_center">
        <div class="img">
          <img src="https://lf3-cdn-tos.bytescm.com/obj/static/xitu_juejin_web/e08da34488b114bd4c665ba2fa520a31.svg">
        </div>
        <el-menu :default-active="activeIndex" class="el-menu-demo" mode="horizontal" @select="handleSelect">
          <el-menu-item index="1">首页</el-menu-item>
          <el-menu-item index="2">沸点</el-menu-item>
          <el-menu-item index="3">课程</el-menu-item>
          <el-menu-item index="4">直播</el-menu-item>
          <el-menu-item index="5">活动</el-menu-item>
          <el-menu-item index="6">商城</el-menu-item>
          <el-menu-item index="7">APP</el-menu-item>
          <el-menu-item index="8">插件</el-menu-item>
        </el-menu>
      </div>
      <div class="top_right">
        <ul class="flex_center">
          <li class="flex_center">
            <el-input v-model="input" placeholder="请输入内容" class="search"></el-input>
            <el-button icon="el-icon-search"></el-button>
          </li>
          <li><el-button type="primary" plain>创作者中心</el-button><li>
          <li class="flex_center">
            <div class="img">
              <img src="https://lf3-cdn-tos.bytescm.com/obj/static/xitu_juejin_web/24127194d5b158d7eaf8f09a256c5d01.svg" >
            </div>
            <div class="hy">会员</div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="top2">
   <div class="tab2">
dfd
   </div>
  </div>
</div>
</template>
<script>
export default {
  name: "Top",
  data() {
    return {
      activeIndex: '1'
    };
  },
  methods: {
    handleSelect(key, keyPath) {
      console.log(key, keyPath);
    }
  }
}
</script>

<style scoped>
*{
  list-style: none;
}
.box{
  width: 100%;
  margin: 0 auto;
}
.top2{
  width: 100%;
}
.tab2{
  width: 60rem;
  margin: 0 auto;
}
.top_left{
  flex: 4;
}
.top_right{
  flex: 3;
}
.home{
  width:80rem;
}
.top{
  justify-content: center;
  border-bottom:solid 1px #e6e6e6;
}
.flex_center{
  align-items: center;
  display: flex;
}
.top_right ul li{
  margin-right: 1rem;
}

.img img{
  height: 22px;
}
.el-menu{
  border-bottom: none;
}

</style>
