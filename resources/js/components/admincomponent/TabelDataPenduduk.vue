<template>
	<section   class="section-padding">
    	<div class="container-fluid">
		        <div class="row">
		          <div class="col-md-12">
		            <h1>Tabel data Penduduk Desa Pringgajurang</h1>
		          </div>
		        </div>

		        <div class="row">
		        	

		        	<div class="col-xs-12 col-12 col-sm-6 col-md-6 search-posisi">  
			            <div class="search">
			            	<input type="text" v-model="searchQuery" id="search" name="search" placeholder=". . .">              
			            </div>
			            <select id="filter" @change="carikategori($event.target.value)" v-model="searchkategori">
			                 <option selected="true" disabled="disabled">Cari Berdasarkan</option>
			                  <option value="Nama">Nama</option>
			                  <option value="Nomor_KK">Nomor KK</option>
			                  <option value="NIK">NIK</option>
			                  <!-- <option value="Pendidikan">Pendidikan</option> -->
			                  <!-- <option value="Status_Perkawinan">status Perkawinan</option> -->
			                  <!-- <option value="Golongan_Darah">Golongan Darah</option> -->
			            </select>
		         	 </div>
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
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <col width="1000px">
							        <tr>
							                  <th rowspan="2">No</th>
							                  <th rowspan="2">Alamat</th>
							                  <th rowspan="2">RW</th>
							                  <th rowspan="2">RT</th>
							                  <th rowspan="2">Nama</th>
							                  <th rowspan="2">Nomor KK</th>
							                  <th rowspan="2">Nomor NIK</th>
							                  <th rowspan="2">Jenis Kelamin</th>
							                  <th rowspan="2">Tempat Lahir</th>
							                  <th rowspan="2">Tanggal Lahir</th>
							                  <th rowspan="2">Usia</th>
							                  <th rowspan="2">Agama</th>
							                  <th rowspan="2">Pendidikan</th>
							                  <th rowspan="2">Jenis Pekerjaan</th> 
							                  <th rowspan="2">Status Perkawinan</th> 
							                  <th rowspan="2">Status Hubungan Dalam Keluarga</th> 
							                  <th rowspan="2">Kewarganegaraan</th> 
							                  <th rowspan="2">Nama Ayah</th> 
							                  <th rowspan="2">Nama Ibu</th> 
							                  <th rowspan="2">Golongan Darah</th> 
							                  <th rowspan="2">Akta Lahir</th> 
							                  <th rowspan="2">Nomor Dokumen Paspor</th>
							                  <th rowspan="2">Tanggal Akhir Paspor</th>  
							                  <th rowspan="2">Nomor Dokumen KITAS</th>             
							                  <th rowspan="2">NIK Ayah</th> 
							                  <th rowspan="2">NIK Ibu</th> 
							                  <th rowspan="2">No Akta Perkawinan</th> 
							                  <th rowspan="2">Tanggal Perkawinan</th> 
							                  <th rowspan="2">No Akta Perceraian</th> 
							                  <th rowspan="2">Tanggal Perceraian</th> 
							                  <th rowspan="2">Cacat</th> 
							                  <th rowspan="2">Cara KB</th> 
							                  <th rowspan="2">Hamil</th> 
							                  <th rowspan="2">Status kependudukan</th> 
							                  <th rowspan="2">Keterangan</th>  
							                  <th rowspan="2">Tempat Mendapatkan Air Bersih</th>  
							                  <th rowspan="2">Status Gizi Balita</th>  
							                  <th rowspan="2">Kebiasaan Berobat Bila Sakit</th>   
							                  <!-- <th colspan="5">Pendapatan Perkapita</th>    -->
							                  <!-- <th colspan="5">Pendapatan Rill Keluarga</th>    -->
							                  <th rowspan="2">Jumlah Penghasilan Perbulan</th>   
							                  <th rowspan="2">Jumlah Pengeluaran Perbulan</th>   
							                  <th rowspan="2">Sumber Air Minum</th>   
							                  <th rowspan="2">Kualitas Air Minum</th>   
							                  <th rowspan="2">Kualitas Ibu Hamil</th>   
							                  <th rowspan="2">Kualitas Bayi</th>   
							                  <th rowspan="2">Tempat Persalinan</th>   
							                  <th rowspan="2">Portolongan Persalinan</th>   
							                  <th rowspan="2">Cakupan Imunisasi</th>   
							                  <th rowspan="2">Perilaku Hidup Bersih</th>   
							                  <th rowspan="2">Pola Makan</th>
							                  <th rowspan="2">Penyakit yang di derita</th>
							                  <th rowspan="2">Foto KTP</th>  
							                  <th rowspan="2">Foto KK</th>       
							                  <th rowspan="2">edit</th> 
							                  <th rowspan="2">hapus</th> 
							        </tr>
							      </thead>
							       <tbody v-model="iddusun,data_pendudukJSONfilterdusun,nomor,pagination">
							        <tr v-for="(data_penduduk,index) in filteredbox.slice(pagination,pagination+10)">
							          <td>{{ index+nomor }}</td>
							          <td>{{ data_penduduk['Alamat'] }}</td>
							          <td>{{ data_penduduk['RW'] }}</td>
							          <td>{{ data_penduduk['RT'] }}</td>
							          <td>{{ data_penduduk['Nama'] }}</td>
							          <td>{{ data_penduduk['Nomor_KK'] }}</td>
							          <td>{{ data_penduduk['NIK'] }}</td>
							          <td>{{ data_penduduk['jenis_kelamin'] }}</td>
							          <td>{{ data_penduduk['Tempat_Lahir'] }}</td>
							          <td>{{ data_penduduk['Tanggal_Lahir'] }}</td>
							          <td>{{ data_penduduk['Usia'] }}</td>
							          <td>{{ data_penduduk['agama'] }}</td>
							          <td>{{ data_penduduk['pendidikan'] }}</td>
							          <td>{{ data_penduduk['jenis_pekerjaan'] }}</td>
							          <td>{{ data_penduduk['status_perkawinan'] }}</td>
							          <td>{{ data_penduduk['status_hubungan_dalam_keluarga'] }}</td>
							          <td>{{ data_penduduk['kewarganegaraan'] }}</td>
							          <td>{{ data_penduduk['Nama_Ayah'] }}</td>
							          <td>{{ data_penduduk['Nama_Ibu'] }}</td>
							          <td>{{ data_penduduk['golongan_darah'] }}</td>
							          <td>{{ data_penduduk['Akta_Lahir'] }}</td>
							          <td>{{ data_penduduk['No_Paspor'] }}</td>
							          <td>{{ data_penduduk['Tanggal_akhir_Paspor'] }}</td>
							          <td>{{ data_penduduk['No_KITAS'] }}</td>
							          <td>{{ data_penduduk['NIK_Ayah'] }}</td>
							          <td>{{ data_penduduk['NIK_Ibu'] }}</td>
							          <td>{{ data_penduduk['No_Akta_Perkawinan'] }}</td>
							          <td>{{ data_penduduk['Tanggal_Perkawinan'] }}</td>
							          <td>{{ data_penduduk['No_Akta_Perceraian'] }}</td>
							          <td>{{ data_penduduk['Tanggal_Perceraian'] }}</td>
							          <td>{{ data_penduduk['Cacat'] }}</td>
							          <td>{{ data_penduduk['Cara_KB'] }}</td>
							          <td>{{ data_penduduk['Hamil'] }}</td>
							          <td>{{ data_penduduk['Status_kependudukan'] }}</td>
							          <td>{{ data_penduduk['Keterangan'] }}</td>
							          <td>{{ data_penduduk['tempat_mendapatkan_air_bersih'] }}</td>
							          <td>{{ data_penduduk['status_gizi_balita'] }}</td>
							          <td>{{ data_penduduk['kebiasaan_berobat_bila_sakit'] }}</td>
							          <td>{{ "" }}</td>
							          <td>{{ "" }}</td>
							          <td>{{ "" }}</td>
							          <td>{{ "" }}</td>
							          <td>{{""  }}</td>
							          <td>{{ "" }}</td>
							          <td>{{ "" }}</td>
							          <td>{{ "" }}</td>
							          <td>{{ "" }}</td>
							          <td>{{ "" }}</td>
							          <td>{{ "" }}</td>
							          <td>{{ ""}}</td>
							          <td>{{ "" }}</td>
							          <td>{{ "" }}</td>
							          <td><a :href="'formeditdatapendudukkades/'+data_penduduk['NIK']+'/'+data_penduduk['Id_Dusun']">edit</a></td>
                                      <td><a :href="'deletedatapendudukkades/'+data_penduduk['NIK']+'/'+data_penduduk['Id_Dusun']">hapus</a></td>
							        </tr>
							      </tbody>
							    </table>
					       </div>
					       <a href="#" @click="prevpage()" class="previous">&laquo; Previous</a>
				           <a href="#" @click="nextpage()" class="next">Next &raquo;</a>
				           <a href="formadddatapendudukkades" class="tomboladd">Tambah Data</a>
				       </div>
        		</div>




      

     	</div>
	</section>
</template>

<script>
    export default {
        mounted() {
        },
        data(){
        	return{
        		kodeareadusun:[],
        		data_pendudukJSON:[],
        		data_pendudukJSONfilterdusun:[],
        		iddusun:1,
        		nomor:1,
        		pagination:0,
        		searchQuery: '',
        		searchkategori:"Cari Berdasarkan" ,
        	}
        },
        created(){
        	this.fetchkodeareadusun();
        	this.fetchdata_penduduks();
        },
        computed : {
        	filteredbox:function(){
        		if(this.searchkategori=="Nama"){
        			return this.data_pendudukJSON.filter((data_penduduk) => {
        			return data_penduduk.Nama.toLowerCase().match(this.searchQuery)
        		   });

        		}
        		if(this.searchkategori=="Nomor_KK"){
        			return this.data_pendudukJSON.filter((data_penduduk) => {
        			return data_penduduk.Nomor_KK.toLowerCase().match(this.searchQuery)
        		   });

        		}
        		if(this.searchkategori=="NIK"){
        			return this.data_pendudukJSON.filter((data_penduduk) => {
        			return data_penduduk.NIK.toLowerCase().match(this.searchQuery)
        		   });

        		}
        		if(this.searchkategori=="Pendidikan"){
        			return this.data_pendudukJSON.filter((data_penduduk) => {
        			return data_penduduk.pendidikan.toLowerCase().match(this.searchQuery)
        		   });

        		}
        		if(this.searchkategori=="Status_Perkawinan"){
        			return this.data_pendudukJSON.filter((data_penduduk) => {
        			return data_penduduk.status_perkawinan.toLowerCase().match(this.searchQuery)
        		   });

        		}
        		if(this.searchkategori=="Golongan_Darah"){
        			return this.data_pendudukJSON.filter((data_penduduk) => {
        			return data_penduduk.golongan_darah.toLowerCase().match(this.searchQuery)
        		   });

        		}else{
        			return this.data_pendudukJSON;
        		}

        	}
        },
        methods:{
        	fetchkodeareadusun(){
        		this.$http.get("datadusun").then(response => {this.kodeareadusun = response.data.kode_area_dusuns});
        	},

        	fetchdata_penduduks(){
        		this.$http.get("datawarga").then(response => {this.data_pendudukJSON = response.data.data_penduduks});
        	},
        	showperdusun(even){
        		this.iddusun=even;
        		this.$http.get("datawarga/"+even).then(response => {this.data_pendudukJSONfilterdusun = response.data.data_pendudukdusuns});
        		
        	},carikategori(even){
        		this.searchkategori=even;
        	 	   this.pagination=0;
        	 	   this.nomor=1;
        	},
        	nextpage () {
        	 	this.pagination=this.pagination+10;
        	 	this.nomor=this.nomor+10;
             },
            prevpage () {
        		this.pagination=this.pagination-10;
        		this.nomor=this.nomor-10;
	        },
        }
    }
</script>
