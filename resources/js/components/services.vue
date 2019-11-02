<template>
    <div class="p-50">
        <el-row :gutter="10">
            <el-col :xs="24" :sm="1" :md="1" :lg="3" :xl="3"><div class="grid-content bg-purple"></div></el-col>
            <el-col :xs="24" :sm="10" :md="6" :lg="6" :xl="6">
                <el-image 
                    :src="home"
                    >
                </el-image>
            </el-col>
            <el-col :xs="24" :sm="10" :md="6" :lg="6" :xl="6">
                <el-image 
                    :src="laundry"
                    >
                </el-image>
            </el-col>
            <el-col :xs="24" :sm="10" :md="8" :lg="6" :xl="6" clear>
                <el-image 
                    class="hotel-max-h"
                    :src="hotel"
                    >
                </el-image>
            </el-col>
        </el-row>
        <el-row :gutter="10" >
            <el-col :xs="24" :sm="1" :md="1" :lg="3" :xl="3"><div class="grid-content bg-purple"></div></el-col>
            <el-col :xs="24" :sm="10" :md="12" :lg="12" :xl="12" class="mt-210">
                <el-image
                    :src="restaurant"
                    >
                </el-image>
            </el-col>
        </el-row>
    </div>
    
</template>

<style>
  .grid-content {
    min-height: 1px;
  }
  
  @media (min-width: 910px){ 
    .mt-210{
        margin-top: -210px;
    }
    .hotel-max-h{
        max-height:  408px;
    }
    .p-50{
        padding: 50px 0;
    }
   }
</style>

<script>
export default {
    data() {
       return {
           home: 'images/icon/home.png',
           laundry: 'images/icon/laundry.png',
           restaurant: 'images/icon/restaurant.png',
           hotel: 'images/icon/hotel.png',
       }
    }
}
</script>