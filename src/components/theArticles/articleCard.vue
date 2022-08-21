<template>
<a>
  <el-card class="theCard">
    <template #header>
      <div class="card-header">
        <span class="title">{{ theTitle }}</span>
      </div>
    </template>
      <div class="content"> {{ firstLine }}</div>
  </el-card>
</a>
</template>

<script>
export default {
  props:['articleTitle','articleFirstLine'],
  name: "articleCard",
  data(){
    return{
      theTitle : this.articleTitle,
      firstLine : this.articleFirstLine,
    };
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
  margin-bottom: 0.1em;
}
</style>