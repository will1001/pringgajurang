<template>
 <div>
        <div class="container" style="padding-top: 40px;">
            <div class="row">
                <div class="col-md-4">
                    <div class="kotak1bidangpemerintahan">
                        <ul>
                        <li><a class="bidangpemerintahan_link" :href="'#'">LKMD</a></li>
                        <li><a class="bidangpemerintahan_link" :href="'#'">BPD</a></li>
                        <li><a class="bidangpemerintahan_link" :href="'#'">PKK</a></li>
                        <li><a class="bidangpemerintahan_link" :href="'#'">Karang Taruna</a></li>
                        <li><a class="bidangpemerintahan_link" :href="'#'">GAPOKTAN</a></li>
                        <li><a class="bidangpemerintahan_link" :href="'#'">POKDARWIS</a></li>
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
import Pemerintahan from './LembagaIndex/LKMD.vue';
import Kesejahteraan from './LembagaIndex/BPD.vue';
import Pelayanan from './LembagaIndex/PKK.vue';
import Tata_Usaha_dan_Umum from './LembagaIndex/Karang_Taruna.vue';
import Keuangan from './LembagaIndex/GAPOKTAN.vue';
import Perencanaan from './LembagaIndex/POKDARWIS.vue';
    export default {
        mounted() {
        console.log("oke pemerintahan");
            
        },
        components : { 
          LKMD,
          BPD,
          PKK,
          Karang_Taruna,
          GAPOKTAN,
          POKDARWIS,
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

