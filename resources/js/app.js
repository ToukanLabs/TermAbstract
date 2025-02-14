import './bootstrap';
import { createApp, ref } from 'vue';
import TermSearch from '@/components/TermSearch.vue';

const app = createApp({
    setup() {
      return {
        count: ref(0)
      }
    }
  });

app.component('TermSearch', TermSearch);

window.addEventListener('load', function() {
    app.mount('#app')
});