<template>
  <div id="app">
    <div class="nav-eigen">
      <router-link :to="{ name: 'Visueel' }">
        <svg xmlns="http://www.w3.org/2000/svg" :width="navbar_icon_size" :height="navbar_icon_size" fill="currentColor" class="bi bi-compass" viewBox="0 0 16 16">
          <path d="M8 16.016a7.5 7.5 0 0 0 1.962-14.74A1 1 0 0 0 9 0H7a1 1 0 0 0-.962 1.276A7.5 7.5 0 0 0 8 16.016zm6.5-7.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
          <path d="m6.94 7.44 4.95-2.83-2.83 4.95-4.949 2.83 2.828-4.95z"/>
        </svg>
      </router-link>
      <router-link :to="{ name: 'Werkorders' }">
        <svg xmlns="http://www.w3.org/2000/svg" :width="navbar_icon_size" :height="navbar_icon_size" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
          <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
          <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
        </svg>
      </router-link>
      <router-link :to="{ name: 'Agenda' }">
        <svg xmlns="http://www.w3.org/2000/svg" :width="navbar_icon_size" :height="navbar_icon_size" fill="currentColor" class="bi bi-calendar-date" viewBox="0 0 16 16">
          <path d="M6.445 11.688V6.354h-.633A12.6 12.6 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23z"/>
          <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
        </svg>
      </router-link>
      <router-link :to="{ name: 'Dashboard' }">
        <svg xmlns="http://www.w3.org/2000/svg" :width="navbar_icon_size" :height="navbar_icon_size" fill="currentColor" class="bi bi-activity" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M6 2a.5.5 0 0 1 .47.33L10 12.036l1.53-4.208A.5.5 0 0 1 12 7.5h3.5a.5.5 0 0 1 0 1h-3.15l-1.88 5.17a.5.5 0 0 1-.94 0L6 3.964 4.47 8.171A.5.5 0 0 1 4 8.5H.5a.5.5 0 0 1 0-1h3.15l1.88-5.17A.5.5 0 0 1 6 2Z"/>
        </svg>
      </router-link>
    </div>
    <div class="routerview">
      <router-view/>
    </div>

  </div>
</template>

<script>
export default {
  data(){
    return {
      navbar_icon_size: '25',
    }
  },
}
</script>

<style>
#app {
  font-family: 'Rubik', sans-serif;
  background-color: #F5F6F8;
  color: #2C3E50;
  max-height:100vh;
  height:100vh;
  width:100vw;
  margin:0;
  min-height: 100vh;
  min-width: 100vw;
  font-size:0.9rem;
  max-width: 100vw!important;

}

.nav-eigen {
  width:100%;
  text-align:center;
  justify-content: center;
  padding: 10px 0;
}
a {
  padding: 20px 40px;
  color: #2C3E50!important;
  margin: 0 5px;
  font-weight:bold;
  display: inline-block;
  text-decoration: none;
  border-bottom: 4px solid #F5F6F8;
}
a.router-link-exact-active {
  background-color: #EDEDED;
  border-bottom: 4px solid #fcba03;
}
a:hover {
  color: #2C3E50;
  background-color: #EDEDED;
}

.routerview {
  width:90vw;
  margin: 20px auto;
  background-color:white;
  border-radius: 5px;
  box-shadow: 0 0 10px #d6d6d6;
  height:80vh;
  display: block;
  padding:20px;
  overflow: hidden;
}
</style>
