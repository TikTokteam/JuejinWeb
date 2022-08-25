import { createApp } from "vue";
import App from "./App.vue";
import ElementUI from "element-plus";
import "element-plus/theme-chalk/index.css";
import "@kangc/v-md-editor/lib/style/preview.css";
import githubTheme from "@kangc/v-md-editor/lib/theme/github";
import "@kangc/v-md-editor/lib/theme/style/github.css";
import hljs from "highlight.js";
import preview from "@kangc/v-md-editor/lib/preview";

preview.use(githubTheme, {
  Hljs: hljs,
});

createApp(App).use(ElementUI).use(preview).mount("#app");
