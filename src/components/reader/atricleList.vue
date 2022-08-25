<template>
  <div>
    <article-card />
  </div>
</template>

<script>
// reader中的文章列表

import articleCard from "@/components/theArticles/articleCard";

export default {
  components: { articleCard },
  name: "articleList",
  data() {
    return {};
  },
  methods: {},
};
</script>

<style scoped></style>
