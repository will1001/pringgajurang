<template>
 <div>
        <div class="container" style="padding-top: 40px;">
            <div class="row">
                <div class="col-md-4">
                    <div class="kotak1bidangpemerintahan">
                        <ul>
                        <li><a class="bidangpemerintahan_link" href="#" :active_el_indexcomp="active_el_indexcomp" @click="testing(5);currentViewlembagaidex='LKMD'" :class="{ active : active_el_indexcomp == 5 }">LKMD</a></li>
                        <li><a class="bidangpemerintahan_link" href="#" :active_el_indexcomp="active_el_indexcomp" @click="testing(6);currentViewlembagaidex='BPD'" :class="{ active : active_el_indexcomp == 6 }">BPD</a></li>
                        <li><a class="bidangpemerintahan_link" href="#" :active_el_indexcomp="active_el_indexcomp" @click="testing(7);currentViewlembagaidex='PKK'" :class="{ active : active_el_indexcomp == 7 }">PKK</a></li>
                        <li><a class="bidangpemerintahan_link" href="#" :active_el_indexcomp="active_el_indexcomp" @click="testing(8);currentViewlembagaidex='Karang_Taruna'" :class="{ active : active_el_indexcomp == 8 }">Karang Taruna</a></li>
                        <li><a class="bidangpemerintahan_link" href="#" :active_el_indexcomp="active_el_indexcomp" @click="testing(9);currentViewlembagaidex='GAPOKTAN'" :class="{ active : active_el_indexcomp == 9 }">GAPOKTAN</a></li>
                        <li><a class="bidangpemerintahan_link" href="#" :active_el_indexcomp="active_el_indexcomp" @click="testing(10);currentViewlembagaidex='POKDARWIS'" :class="{ active : active_el_indexcomp == 10 }">POKDARWIS</a></li>
                    </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="kotak2bidangpemerintahan">
                      <component  :is="currentViewlembagaidex" class="wow fadeIn"  keep-alive></component>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Pemerintahan from './BidangPemerintahanComponent/Pemerintahan.vue';
import Kesejahteraan from './BidangPemerintahanComponent/Kesejahteraan.vue';
import Pelayanan from './BidangPemerintahanComponent/Pelayanan.vue';
import Tata_Usaha_dan_Umum from './BidangPemerintahanComponent/Tata_Usaha_dan_Umum.vue';
import Keuangan from './BidangPemerintahanComponent/Keuangan.vue';
import Perencanaan from './BidangPemerintahanComponent/Perencanaan.vue';
import Kewilayahan from './BidangPemerintahanComponent/Kewilayahan.vue';
import Pembangunan from './BidangPemerintahanComponent/Pembangunan.vue';
    export default {
        mounted() {
        console.log("oke pemerintahan");
            
        },
        components : { 
          Pemerintahan,
          Kesejahteraan,
          Pelayanan,
          Tata_Usaha_dan_Umum,
          Keuangan,
          Perencanaan,
          Kewilayahan,
          Pembangunan,
        },
        data() {
            return {
             active_elcomp: 1,
             currentViewBidangPemerintahan : "Pemerintahan",
            }
        },
        methods:{
          testing(el){
              this.active_elcomp = el;
              console.log(this.active_elcomp);
          },
      }
    } 
</script>

