<template>
  <el-card class="container" shadow="never">
    <v-md-preview :text ='mdContent' class="reader">
    </v-md-preview>
  </el-card>

</template>

<script>
import axios from "axios";
export default {
  name: "articleReader",
  data(){
    return {
      mdContent: ''
    };
  },
  created(){
    axios.get('http://localhost:8080/jue/jue.php')
        .then(res=>{
          this.mdContent = res.data.slice(55)
          console.log(res.data)
        })
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

</style>