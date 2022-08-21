<template>
<ul>
  <li>
    <el-card class="sign" shadow="never">
      <el-icon>
      </el-icon>
    </el-card>
  </li>
  <li>
      <img src="../../assets/evwnt3.webp" alt="event3"/>
  </li>
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
  name: "recentEvent",
  data(){
    return{

    }
  }
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
  height: 15em;
  width: 15em;
}
.sign{
  width: 15em;

}
</style>