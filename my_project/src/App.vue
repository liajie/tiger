<template>
  <div id="app">
  	<iheader></iheader>
  	<div class="main-container" id="main-container">
  	<div class="main-container" id="main-container">
  	<imeun></imeun>	
    	<router-view></router-view>
    </div>
    </div>
  </div>
</template>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script>
import Iheader from './components/layout/top'
import Imeun from './components/layout/meun'

export default {
  name: 'app',
  components: 
  {
  	Iheader,Imeun
  }
}
</script>

<style>

</style>
