<template>
  <div class="small" v-model="datakirim">
    <button @click="saveImage('canvasChart')">Download Grafik data</button>
    <select id="filter" @change="chartfunction($event.target.value)">
        <option selected="true" disabled="disabled">Data Grafik</option>
        <option value="Data Pendidikan" >Data Pendidikan</option>
        <option value="Data Pekerjaan" >Data Pekerjaan</option>
        <option value="Data Agama" >Data Agama</option>
        <option value="Data Jenis Kelamin" >Data Jenis Kelamin</option>
        <option value="Data Golongan Darah" >Data Golongan Darah</option>
        <!-- <option value="Data Kelompok Umur" >Data Kelompok Umur</option> -->
    </select>
    <jenis-chart v-if="loaded" :chart-data="datacollection" ref="canvasChart"></jenis-chart>
  </div>
</template>

<script>

  import JenisChart from './BarChart.js'

  export default {
    components: {
      JenisChart
    },
    data () {
      return {
        datacollection: null,
        pendidikans:1,
        jenis_kelamins:1,
        dataAPI:[],
        datakirim:[],
        loaded: false,
      }
    },
   async  mounted () {
    },
    methods: {
      chartfunction(even){
       this.loaded = false
      try {

        if(even=="Data Pendidikan"){

              this.$http.get("datastatistik/pendidikan/")
            .then(response => {

              let datachartapi ={
              labels: [],
              datasets: []
             }; 

              response.data.tabel_pendidikans.forEach(function(data, index) {
                datachartapi.datasets[index] = 
                {
                  label: data.pendidikan,
                  backgroundColor: '#'+(function lol(m,s,c){return s[m.floor(m.random() * s.length)] +
                                    (c && lol(m,s,c-1));})(Math,'0123456789ABCDEF',4),
                  data: [response.data.data_pendidikans_totals[index]]
                };
              });

              datachartapi.datasets.shift();

              this.datacollection=datachartapi;
              
           });

        }if(even=="Data Pekerjaan"){

              this.$http.get("datastatistik/jenis_pekerjaan/")
            .then(response => {

              let datachartapi ={
              labels: [],
              datasets: []
             }; 

              response.data.tabel_jenis_pekerjaans.forEach(function(data, index) {
                datachartapi.datasets[index] = 
                {
                  label: data.jenis_pekerjaan,
                  backgroundColor: '#'+(function lol(m,s,c){return s[m.floor(m.random() * s.length)] +
                                    (c && lol(m,s,c-1));})(Math,'0123456789ABCDEF',4),
                  data: [response.data.tabel_jenis_pekerjaans_totals[index]]
                };
              });

              datachartapi.datasets.shift();

              this.datacollection=datachartapi;
              
           });

        }if(even=="Data Agama"){

              this.$http.get("datastatistik/agama/")
            .then(response => {

              let datachartapi ={
              labels: [],
              datasets: []
             }; 

              response.data.tabel_agamas.forEach(function(data, index) {
                datachartapi.datasets[index] = 
                {
                  label: data.agama,
                  backgroundColor: '#'+(function lol(m,s,c){return s[m.floor(m.random() * s.length)] +
                                    (c && lol(m,s,c-1));})(Math,'0123456789ABCDEF',4),
                  data: [response.data.tabel_agamas_totals[index]]
                };
              });

              datachartapi.datasets.shift();

              this.datacollection=datachartapi;
              
           });

        }if(even=="Data Jenis Kelamin"){

              this.$http.get("datastatistik/jenis_kelamin/")
            .then(response => {


              let datachartapi ={
              labels: [],
              datasets: []
             }; 

              response.data.tabel_jenis_kelamins.forEach(function(data, index) {
                datachartapi.datasets[index] = 
                {
                  label: data.jenis_kelamin,
                  backgroundColor: '#'+(function lol(m,s,c){return s[m.floor(m.random() * s.length)] +
                                    (c && lol(m,s,c-1));})(Math,'0123456789ABCDEF',4),
                  data: [response.data.tabel_jenis_kelamins_totals[index]]
                };
              });

              datachartapi.datasets.shift();

              this.datacollection=datachartapi;
              
           });

        }if(even=="Data Golongan Darah"){

              this.$http.get("datastatistik/golongan_darah/")
            .then(response => {

              let datachartapi ={
              labels: [],
              datasets: []
             }; 

              response.data.tabel_golongan_darahs.forEach(function(data, index) {
                datachartapi.datasets[index] = 
                {
                  label: data.golongan_darah,
                  backgroundColor: '#'+(function lol(m,s,c){return s[m.floor(m.random() * s.length)] +
                                    (c && lol(m,s,c-1));})(Math,'0123456789ABCDEF',4),
                  data: [response.data.tabel_golongan_darahs_totals[index]]
                };
              });

              datachartapi.datasets.shift();

              this.datacollection=datachartapi;
              
           });

        }if(even=="Data Kelompok Umur"){

           //    this.$http.get("datastatistik/agama/")
           //  .then(response => {

           //    let datachartapi ={
           //    labels: [],
           //    datasets: []
           //   }; 

           //    response.data.tabel_agamas.forEach(function(data, index) {
           //      datachartapi.datasets[index] = 
           //      {
           //        label: data.agama,
           //        backgroundColor: '#'+(function lol(m,s,c){return s[m.floor(m.random() * s.length)] +
           //                          (c && lol(m,s,c-1));})(Math,'0123456789ABCDEF',4),
           //        data: [response.data.tabel_agamas_totals[index]]
           //      };
           //    });

           //    datachartapi.datasets.shift();

           //    this.datacollection=datachartapi;
              
           // });

        }
        

        this.loaded = true
      } catch (e) {
        console.error(e)
      }


      },
       fetchdata_pendidikans(){
            this.$http.get("datastatistik/pendidikan/"+this.pendidikans+"/"+this.jenis_kelamins).then(response => {this.tabel_pendidikans = response.data.data_chart});
        },
        saveImage(ref) {

        const component = this.$refs[ref] 

        const canvas = component.$refs.canvas       
        
        canvas.toBlob(function(blob) {
              var a = document.createElement("a");
              a.download = "grafikchart.png";
              a.href = URL.createObjectURL(blob);
              a.click();
        },'grafikchart.png');


        }
    }
  }
</script>

<style>
  .small {
    max-width: 100%;
    margin:  150px auto;
    background-color: white;
  }
</style>