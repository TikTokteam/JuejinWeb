<template>
  <el-header>
    <head-part></head-part>
  </el-header>

  <el-main>
    <article-list></article-list>
  </el-main>

  <el-aside>
    <recent-event></recent-event>
  </el-aside>


  <div>
  </div>
</template>

<script>

import articleList from "@/components/reader/atricleList";
import RecentEvent from "@/components/eventPart/recentEvent";
import headPart from "@/components/head/headPart";


export default {
  name: 'App',
  components: {
    headPart,
    RecentEvent,
    articleList,
  }
}
</script>

<style>
head-part{
  position: fixed;
}
</style>
