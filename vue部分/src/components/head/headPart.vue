<template>
  <div class="box">
    <div class="top flex_center">
      <div class="home flex_center">
        <div class="top_left flex_center">
          <div class="img">
            <a href=""><img src="../../assets/logo.svg" alt="Logo"></a>
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
              <el-input v-model="inputVal" type="input" placeholder="探索稀土掘金" class="search" clearable></el-input>
                <el-button  type="primary" :icon="searchIcon"  class="search"/>
            </li>
            <li><el-button type="primary" plain>创作者中心</el-button></li>
            <li class="flex_center">
              <div class="img">
                <img src="../../assets/vip.svg" alt="VIP">
              </div>
              <div class="vip">会员</div>
            </li>
            <li>
              <div class="avatar">
                <el-avatar :icon="userFill"/>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>

<script>

import {UserFilled,Search} from '@element-plus/icons-vue'
import {ref} from "vue";

const input = ref('')

export default {
  name: "headPart",
  data() {
    return {
      activeIndex: '1',
      userFill: UserFilled,
      searchIcon :Search,
      inputVal : input,
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
  position: fixed;
  background-color: white;
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
  margin-top: 0;

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
el-menu{
  border-bottom: none;
}
el-input{
  border: 3em;
  margin: 2em;
}
.vip{
  color: rgb(81,87,103);
  font-size: 10px;
  margin-left: 1em;
  margin-right: 0.5em;
}
.search{
  /*background-color: rgb(242,243,245);*/
}
.box{
  border: none;
}
.el-menu--horizontal{
  border-bottom: none;
}

</style>