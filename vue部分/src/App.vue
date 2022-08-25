<template>
  <el-header class="head">
  <head-part></head-part>
  </el-header>
  <div class="page">
    <el-main class="main">
      <article-reader></article-reader>
    </el-main>
    <!--因为element的<el-aside>元素只能放在页面左边，所以我们这里就不用那个了-->
      <recent-event></recent-event>
  </div>

</template>

<script>


import RecentEvent from "@/components/eventPart/recentEvent";
import headPart from "@/components/head/headPart";
import ArticleReader from "@/components/theArticles/articleReader";


export default {
  name: 'App',
  components: {
    ArticleReader,
    headPart,
    RecentEvent,
  }
}
</script>

<style>
.head{
  position: fixed;
  top: 0;

}
.page{
  display: flex;
  flex-direction: row;
}
.main{
  margin-top: 4em;
}
</style>
