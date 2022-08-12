<!--整个页面头部左侧的连接-->
<template>
  <div class="leftSide">
    <a href=" " id="pic"><img src="../../assets/logo.svg" alt="Logo"/></a>
    <div>首页</div>
    <div>沸点</div>
    <div>课程</div>
    <div>直播</div>
    <div>活动</div>
    <div>商城</div>
    <div>APP</div>
    <div>插件</div>
    <search-bar></search-bar>
    <creative-button></creative-button>
    <user-part></user-part>
  </div>
</template>

<script>
import SearchBar from "@/components/head/searchBar";
import CreativeButton from "@/components/head/creativeButton";
import UserPart from "@/components/head/userPart";
export default {
  name: 'headPart',
  components:{
    UserPart,
    CreativeButton,
    SearchBar

  }
}
</script>

<style scoped>
.leftSide div{
  flex-direction: row;
  margin: 0.75em 1em 1em 1em;
  display: inline-block;
}
.leftSide{
  flex-direction: row;
}

#pic{
  margin: 1.5em;
}

*{
  color: rgb(113,119,124);
  font-size: 1em;
}


</style>