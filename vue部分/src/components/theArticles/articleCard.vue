<template>
  <div>
    <el-card class="theCard">
      <div class="tag">{{ writer }}|{{ timer }}|{{ tagger }}</div>
      <!-- <template #header>
        <div class="card-header">
          <div class="title">{{ theTitle }}</div>
        </div>
      </template> -->
      <div class="card-footer">
        <div>
          <div class="title">{{ theTitle }}</div>
          <div class="content">{{ firstLine }}</div>
          <!-- 三个交互图标 -->
          <div class="interaction"></div>
        </div>
        <div class="articleCover">
          <img src="../../assets/星野日向.jpg" alt="" />
        </div>
      </div>
    </el-card>
  </div>
</template>

<script>
// 文章卡片
export default {
  //   props: ["articleTitle", "articleFirstLine"],
  name: "articleCard",
  data() {
    return {
      //   theTitle: this.articleTitle,
      theTitle: "星野日向",
      //   firstLine: this.articleFirstLine,
      firstLine:
        "星野日向是由椋木七津创作的漫画《天使降临到了我身边!》及其衍生作品的登场角色。",
      writer: "writer",
      timer: "timer",
      tagger: "tagger",
    };
  },
};
</script>

<style scoped>
el-card {
  width: 10em;
  position: center;
  margin: 2em;
}
.theCard {
  width: 52em;
  margin-left: 10em;
  margin-right: 3em;
  margin-bottom: 0.1em;
}
/* .card-header {
  margin: 0.01em;
} */
.tag {
  margin: 0.6em;
  color: rgb(134, 144, 156);
}
.card-footer {
  display: flex;
  position: relative;
  flex: 1;
}
.title {
  font-size: larger;
  font-weight: bold;
  margin: 0.6em;
}
.content {
  display: flex;
  overflow: hidden;
  margin: 0.6em;
  /* width: 32em; */
  /* white-space: nowrap; */
  /* text-overflow: ellipsis; */
  /* height: 2em; */
  color: rgb(134, 144, 156);
}
.interaction {
  display: flex;
  /* bottom: 0; */
  /* height: 1em; */
}
.interactionItem {
  justify-content: start;
  /* bottom: 0; */
  /* height: 1em; */
}
.articleCover {
  display: flex;
  justify-content: end;
  height: 9em;
  width: 12em;
}
</style>
