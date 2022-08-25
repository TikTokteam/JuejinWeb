<template>
  <el-header class="head">
    <head-part></head-part>
  </el-header>
  <div class="page">
    <el-main class="main">
      <atricle-list />
    </el-main>
    <el-aside>
      <recent-event></recent-event>
    </el-aside>
  </div>
</template>

<script>
import RecentEvent from "@/components/eventPart/recentEvent";
import headPart from "@/components/head/headPart";
import AtricleList from "./components/reader/atricleList.vue";

export default {
  name: "App",
  components: {
    headPart,
    RecentEvent,
    AtricleList,
  },
};
</script>

<style>
.head {
  position: fixed;
  top: 0;
}
.page {
  display: flex;
  flex-direction: row;
}
.main {
  margin-top: 4em;
  flex-direction: row;
}
</style>
