<template>
    <div style="background-image: linear-gradient(to right, #EB9A2E , #FABD52);" class="footer">
        <el-row :gutter="10" class="p-50">
            <el-col :xs="2" :sm="2" :md="2" :lg="2"><div class="grid-content bg-purple"></div></el-col>
            <el-col :xs="12" :sm="12" :md="10" :lg="6">
                <el-row :gutter="10">
                    <el-col :xs="24" :sm="6" :md="12" :lg="10"  style="padding: 20px 0">
                        <el-image
                            :src="logo"
                            >
                        </el-image>
                    </el-col>
                </el-row>
                <el-row :gutter="10">
                    <el-col :xs="24" :sm="12" :md="12" :lg="14">
                        <p class="mb-10">To be the leading provider of all your needs in a very convenient way.</p>
                        <p class="mb-10"><i class="el-icon-message line-height" style="font-size: 2rem;"></i> info.bsmanna@gmail.com</p>
                        <p class="mb-10"><i class="el-icon-phone-outline line-height" style="font-size: 2rem;"></i>  (045) 436-0308</p>
                    </el-col>
                </el-row>
            </el-col>
            <el-col :xs="10" :sm="10" :md="10" :lg="5" >
                <el-row :gutter="10">
                    <el-col :xs="24" :sm="18" :md="14" :lg="16">
                        <div class="mt-100 p-20">
                            <legend>Categories</legend>
                            <p class="mb-10"> <i class="el-icon-loading"></i> <a href="#" :plain="true" @click="open1"> Home</a></p>
                            <p class="mb-10"> <i class="el-icon-loading"></i> <a href="#" :plain="true" @click="open1"> Laundry</a></p>
                            <p class="mb-10"> <i class="el-icon-loading"></i> <a href="#" :plain="true" @click="open1"> Hotel</a></p>
                            <p class="mb-10"> <i class="el-icon-loading"></i> <a href="#" :plain="true" @click="open1"> Restaurant</a></p>
                        </div>
                    </el-col>
                </el-row>
            </el-col>
            <el-col :xs="10" :sm="10" :md="10" :lg="5" >
                <el-row :gutter="10">
                    <el-col :xs="24" :sm="12" :md="12" :lg="18">
                        <div class="mt-100 p-20">
                            <legend>News</legend>
                            <p class="mb-10">No news available.</p>
                        </div>
                    </el-col>
                </el-row>
            </el-col>
            <el-col :xs="10" :sm="10" :md="10" :lg="5" >
                <el-row :gutter="10">
                    <el-col :xs="12" :sm="12" :md="12" :lg="20">
                        <div class="mt-100 p-20">
                            <legend>Social Media</legend>
                            <p class="mb-10">
                                <font-awesome-icon :icon="{ prefix: 'fab', iconName: 'facebook', suffix: 'fa-3x'}" size="3x"/>
                                <font-awesome-icon class="fab fa-facebook fa-3x fa-fw"></font-awesome-icon>
                                
                            </p>
                        </div>
                    </el-col>
                </el-row>
            </el-col>
        </el-row>
        <el-row :gutter="10" style="background: #333333; padding:10px 0">
            <el-col :xs="2" :sm="2" :md="2" :lg="12" ><div> </div></el-col>
            <el-col :xs="22" :sm="18" :md="14" :lg="12" >
                <footer class="mt-10">
                    <copyright>
                        <p>&copy; 2019 BSMANNA alrights reserved. <i class="el-icon-loading"></i> <a href="#" :plain="true" @click="open1">Terms of use</a> <i class="el-icon-loading"></i> <a href="#" :plain="true" @click="open1">Privacy Policy</a></p>
                    </copyright>
                </footer>
            </el-col>
        </el-row>
    </div>
</template>
<style>
    .footer, .footer a{
        color: #FFF;
    }
    .p-50-20{
        padding: 50px 0 30px 0;
    }
    .mb-10{
        margin-bottom: 10px;
    }
    .line-height{
        position: relative;
        top: 7px;
    }
    footer p{
        margin-top: 5px;
        margin-left: 17%;
        margin-bottom: 0;
    }

    @media (max-width: 950px){
      .p-20{
          padding: 20px 40px;
      }
    }
    @media (min-width: 1200px){
      .mt-100{
            margin-top: 100px;
        }
    }
</style>

<script>
export default {
    data() {
       return {
           logo:  'images/logo-white.png',
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


