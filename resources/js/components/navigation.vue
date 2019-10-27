<template>
    <div>
      <div class="gradient-top"></div>
      <el-container class="navigation-lg">
        <el-row style="width:100%;">
          <el-col :span="20" :offset="2">
            <el-menu :default-active="activeIndex" class="el-menu-demo" mode="horizontal" @select="handleSelect">
              <el-menu-item class="logo">
                <el-image
                  style="width: 100px; height: 100px"
                  :src="logoUrl"
                  >
                  </el-image>
              </el-menu-item>
              <el-menu-item  index="2" >Home</el-menu-item>
              <el-menu-item  index="3" :plain="true" @click="open1">About Us</el-menu-item>
              <el-menu-item index="4" :plain="true" @click="open1">Products</el-menu-item>
              <el-menu-item index="5" :plain="true" @click="open1">Contact Us</el-menu-item>
              <el-menu-item class="float-right">
                <el-input placeholder="Search.." v-model="input3" class="input-with-select" size="small">
                  <el-button slot="append" icon="el-icon-search" size="small" :plain="true" @click="open1"></el-button>
                </el-input>
              </el-menu-item>
            </el-menu>
          </el-col>
        </el-row>
      </el-container>
      <div class="line"></div>
      <el-container class="navigation-sm">
        <el-row style="width:100%;">
          <b-navbar toggleable="lg" type="dark" variant="info" >
            <b-navbar-brand href="#">
              <el-image
                    style="width: 130px; height: 120px"
                    :src="logoUrl"
                    >
                    </el-image>
            </b-navbar-brand>
            <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
            <b-collapse id="nav-collapse" is-nav>
              <b-navbar-nav>
                <b-nav-item href="#" :plain="true" @click="open1">Home</b-nav-item>
                <b-nav-item href="#" :plain="true" @click="open1">About Us</b-nav-item>
                <b-nav-item href="#" :plain="true" @click="open1">Products</b-nav-item>
                <b-nav-item href="#" :plain="true" @click="open1">Contact Us</b-nav-item>
              </b-navbar-nav>

              <!-- Right aligned nav items -->
              <b-navbar-nav class="ml-auto">
                <b-nav-form>
                 <el-input placeholder="Search.." v-model="input3" class="input-with-select" size="small">
                  <el-button slot="append" icon="el-icon-search" size="small" :plain="true" @click="open1"></el-button>
                </el-input>
                </b-nav-form>
              </b-navbar-nav>
            </b-collapse>
          </b-navbar>
        </el-row>
      </el-container>
      <el-alert
      title="Sorry for inconvenience, Website Development is still on going."
      type="info"
      show-icon>
      </el-alert>
    </div>
</template>
<style>
  .gradient-top {
    height: 10px;
    background-color: red; /* For browsers that do not support gradients */
    background-image: linear-gradient(to right, #055794 , #EA9A2F); /* Standard syntax (must be last) */
  }
  .el-menu.el-menu--horizontal{
    padding: 20px 0 15px 0;
  }
  /* .el-menu--horizontal .logo{
    margin-left: 10rem;
  } */
  .el-menu--horizontal .logo img{
    margin-top: -18px;
  }
  .el-input-group--append .el-input__inner{
    border-right: 0;
  }
  .el-input-group__append button.el-button{
    border-left: 0;
    background: #FFF;
    padding: 6px 10px;
    border-radius: 0 4px 4px 0;
  }
  .el-menu.el-menu--horizontal{
    border-bottom: none;
  }
  .el-container.navigation-lg{
    border-bottom: solid 1px #e6e6e6;
  }
  .bg-info{
    background-color: transparent !important;
  }
  .navbar-dark .navbar-nav .nav-link{
    color: rgb(118, 118, 110) !important;
  }
  .navbar-dark .navbar-toggler{
    color: rgb(233, 153, 47);
    border-color: rgb(78, 105, 127);
    margin-top: -15px;

  }
  .navbar-toggler{
    background-color: #4d687f;
  }
  body{
    background-color: #FFF;
  }
  @media (min-width: 951px){ 
      .navigation-lg{
        display: block;
      }
      .navigation-sm{
        display: none;
      }
   }
   @media (max-width: 950px){ 
      .navigation-lg{
        display: none;
      }
      .navigation-sm{
        display: block;
      }
   }
</style>


<script>
  export default {
    data() {
      return {
        activeIndex: '2',
        activeIndex2: '1',
        logoUrl: "images/logo.png"
      };
    },
    methods: {
      handleSelect(key, keyPath) {
        console.log(key, keyPath);
      },
      open1() {
        this.$message({
          showClose: true,
          message: 'Sorry for inconvenience, Website Development is still on going.'
        });
      },
    }
  }
</script>