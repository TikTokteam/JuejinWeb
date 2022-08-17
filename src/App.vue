<template>
<div class="head">
  <head-part></head-part>
</div>
  <div class="read">
    <article-list></article-list>
  </div>
  <div class="events">
    <recent-event></recent-event>
  </div>
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
