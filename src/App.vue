<template>
<div class="head">
  <head-part></head-part>
</div>
  <div class="read">
    <reader-part></reader-part>
  </div>
  <div class="events">
    <recent-event></recent-event>
  </div>
</template>

<script>

import ReaderPart from "@/components/reader/readerPart";
import RecentEvent from "@/components/eventPart/recentEvent";
import headPart from "@/components/head/headPart";

export default {
  name: 'App',
  components: {
    headPart,
    RecentEvent,
    ReaderPart,
  }
}
</script>

<style>
head-part{
  position: fixed;
}
</style>
