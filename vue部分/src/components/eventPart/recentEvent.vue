<template>
<ul>
  <li>
    <img src="../../assets/event1.webp" alt="event1"/>
  </li>
  <li>
    <img src="../../assets/event2.webp" alt="event2"/>
  </li>
</ul>
</template>

<script>
export default {
  name: "recentEvent"
}
</script>

<style scoped>
*{
  list-style: none;
  left: 0;
}
ul{
  margin-top: 6em;
}

img{
  height: 18em;
  width: 18em;
}
</style>