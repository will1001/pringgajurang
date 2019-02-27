<template>
  <section id="profildesaadmin" class="section-padding">
      <div class="container">
        <div class="text-center">
           <h2>SOTK</h2>
         </div>
        <div class="row">
          <div class="col-md-12">
            <div style="overflow: auto;max-height: 400px;position: relative;  ">
                <table id="tabeldatakadus">
                <thead>
                  <col width="1000px">
                  <col width="1000px">
                  <col width="1000px">
                  <col width="1000px">
                  <tr>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Foto</th>
                    <th>edit</th> 
                    <th>hapus</th> 
                  </tr>
                </thead>
                 <tbody>
                    <tr v-for="SOTK in SOTKs">
                      <td>{{ SOTK['Nama'] }}</td>
                      <td>{{ SOTK['Jabatan'] }}</td>
                      <td><a :href="SOTK['urlgambar']">Lihat</a></td>
                      <td><a :href="'formeditSOTK/' +  SOTK['id']">edit</a></td>
                      <td><a :href="'deleteSOTK/' +  SOTK['id']">hapus</a></td>
                    </tr>
                </tbody>
              </table>
          </div>
                <a :href="'formaddSOTK'" class="tomboladd">Tambah Data</a>                      
                
          </div>
        </div>
      </div>
    </section>
</template>

<script>
    export default {
        mounted() {
        console.log("oke");
            
        },
        data(){
            return{
                SOTKs:[],
            }
        },
        created(){
            this.fetchSOTKs();
        },
        methods:{
            fetchSOTKs(){
                this.$http.get("dataSOTK").then(response => {this.SOTKs = response.data.SOTKs});
            },
        }
    }
</script>
