<template>
  <div class='whole'>
    <div class="buttons">
      <el-button :icon="commentButton" circle size="large" class="aButton"/>
      <el-button :icon="starButton" circle size="large" class="aButton" @click='changeIcon()'/>
      <el-button :icon="shareButton" circle  size="large" class="aButton"/>
    </div>
    <el-card class="container" shadow="never">
      <v-md-preview :text ='mdContent' class="reader">
      </v-md-preview>
    </el-card>
  </div>


</template>

<script>

import {Star,ChatDotRound ,Share,StarFilled} from "@element-plus/icons-vue";

export default {

  name: "articleReader",
  data(){
    return {
      starButton: Star,
      mdContent: '',
      commentButton : ChatDotRound,
      shareButton : Share,
    };
  },
  methods:{
    changeIcon(){
      alert(Star);
      alert(this.starButton ===Star);
      alert(this.starButton === StarFilled);
    }
  }
};
</script>

<style scoped>
.reader{
  width: 50em;
}
.container{
  width: 52em;
  margin-left: 10em;
  margin-right: 1em;
}
.whole{
  display: flex;
}

.buttons{
  display: flex;
  flex-direction: column;
}
.aButton{

  margin-right: 3em;
  margin-left: 3em;
}

</style>