<template>
<a>
  <el-card class="theCard">
    <template #header>
      <div class="card-header">
        <span class="title">文章标题</span>
      </div>
    </template>
      <div class="content"> 测试一下文章，一行就可以了</div>
  </el-card>
</a>
</template>

<script>
export default {
  name: "articleCard",
  data(){
    return{
    }
  }
}
</script>

<style scoped>
el-card{
  width: 10em;
  position: center;
  margin: 2em;
}
.content{
  overflow: hidden;
  margin: 0.6em;
  color: rgb(134,144,156);
}
.card-header{
  margin: 0.01em;

}
.title{
  font-weight: bold;
}
.theCard{
  width: 52em;
  margin-left: 10em;
  margin-right: 3em;
}
</style>