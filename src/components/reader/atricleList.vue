<template>
  <div class="contents__list" ref="scrollBar">
    <div class="list__header" ></div>
    <div class="list__content">
      <ul class="article__list" ref="list">
        <li v-for="article in showList" :key="article.articleId" class="list__item"></li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  name: "articleList",
  data() {
    return {
      articleInfoList: [],   //存放文章列表数据的数组
      itemHeight: 136,       //每一列的高度
      showNum: 10,           //视窗内显示几条数据
      start: 0,              //开始索引
      end: 10,               //结束索引
    };
  },
  created() {
    window.addEventListener("scroll", this.lasyLoading);
  },
  methods:{
    scrollListener(scrollTop){
      // 计算文章列表呈现在页面上开头和结尾的位置
      //计算总的数据需要的高度，构造滚动条高度
      this.$refs.scrollBar.style.height = this.itemHeight * this.articleInfoList.length + 'px';
      //开始的数组索引
      let first = Math.floor(scrollTop / this.itemHeight) - 1;
      this.start = first<0 ? 0 : first;

      //结束索引
      this.end = this.start + this.showNum;
      //计算上滚动区域的高度
      this.$refs.list.style.marginTop = this.start * this.itemHeight + 'px';
    },
    lasyLoading() {
      let scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
      /*
          这里是数据请求的代码
      */
      this.scrollListener(scrollTop);
    },
  },
  computed: {
    // 显示的数组，用计算属性计算
    // 在上面 li标签里循环的是 showList
    showList(){  return this.articleInfoList.slice(this.start, this.end);  }
  },
}
</script>

<style scoped>

</style>