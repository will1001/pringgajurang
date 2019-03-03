<template>
  <div class="small">
    <jenis-chart :chart-data="chartData" ref="canvasChart"></jenis-chart>
    <button @click="fillData()">Randomize</button>
    <button @click="downloadchart('canvasChart')">Save Image!</button>
    <img src="" alt="">
  </div>
</template>

<script>

  import JenisChart from './PieChart.js'

  export default {
    components: {
      JenisChart
    },
    data () {
      return {
        chartData: {
        labels: ["Green", "Red", "Blue"],
        datasets: [
          {
            label: "Data One",
            backgroundColor: ["#41B883", "#E46651", "#00D8FF"],
            data: [1, 10, 5]
          }
        ]
      }
      }
    },
    mounted () {
    },
    methods: {
    
    downloadchart(ref) {

      const component = this.$refs[ref] 

      const canvas = component.$refs.canvas       
      
      canvas.toBlob(function(blob) {
            var a = document.createElement("a");
            a.download = "grafikchart.png";
            a.href = URL.createObjectURL(blob);
            a.click();
      },'grafikchart.png');


      }
    },
    
  }
</script>

<style>
  .small {
    max-width: 600px;
    margin:  150px auto;
  }
</style>