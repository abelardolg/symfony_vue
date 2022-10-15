import { createApp } from "vue";
import './styles/app.css';
import router from "./router/router";
import App from "./App";
createApp(App).use(router).mount("#app");
