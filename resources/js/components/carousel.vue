<template>
  <el-carousel height="520px" direction="vertical" :autoplay="true">
    <el-carousel-item v-for="item in carousels" :key="item.id">
      <el-row :gutter="20" :style="{ backgroundImage: `url(${item.url})`, backgroundSize: `cover`  }">
            <el-col :xs="24">
              <el-row :gutter="20">
                <el-col :xs="24" :sm="18" :md="14" :lg="8" :xl="6" offset="2">
                  <div class="details">
                      <h2>You <strong>think,</strong></h2>
                      <h2>We <strong>provide</strong></h2>
                      <p>
                        Our products includes various high quality cleaning chemicals and consumer goods supplies in leading supermarket and institution.
                      </p>
                      <el-button round size="medium" style="padding: 0.7rem 4rem;" :plain="true" @click="open1">See more</el-button>
                  </div>
                </el-col>
              </el-row>
            </el-col>
        </el-row>
    </el-carousel-item>
  </el-carousel>
</template>
<style>

  .details{
    z-index: 1;
    margin: 10rem 3rem;
   
  }
  .position-absolute h2{
    font-size: 3.6rem;
  }
  .el-carousel .el-row{
    min-height: 600px;
  }
</style>

<script>
export default {
    data() {
       return {
           carousels:  [
            // { id: 1, url: 'images/banner-2.jpg'},
            { id: 2, url: 'images/banner.jpg'},
            { id: 3, url: 'images/banner.jpg'},
            // { id: 4, url: 'images/banner-2.jpg'}
        ]
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

