<template>
    <div>
        <el-row :gutter="20" :style="{ backgroundImage: `url(${img})`, backgroundSize: `cover`  }">
            <el-col :xs="24">
              <el-row :gutter="20">
                  <el-col :xs="24" :sm="12" :md="4" :lg="13" ><div class="grid-content bg-purple"></div></el-col>
                <el-col :xs="24" :sm="12" :md="14" :lg="7" >
                  <div class="details p-20" style="margin: 10rem 0rem 22rem;">
                      <h2>Your <strong>Trusted Quality,</strong></h2>
                      <p>
                        Our products includes various  high quality cleaning chemicals and consumer goods supplies in leading supermarket and institution. 
                      </p>
                      <el-button round size="medium" style="padding: 0.7rem 4rem;" :plain="true" @click="open1">See more</el-button>
                  </div>
                </el-col>
              </el-row>
            </el-col>
        </el-row>
    </div>
</template>
<script>
export default {
    data() {
       return {
           img:  'images/banner-2.jpg',
       }
    },
    methods: {
      open1() {
        this.$message({
          showClose: true,
          message: 'Sorry for inconvenience, Website Development is still on going.'
        });
      },
    }
}
</script>