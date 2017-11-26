<template>
  <div class="container">
        <div class="navbar">
          <div class="navbar__brand">

              <router-link to="/" >Recipe Box</router-link>

          </div>
          <ul class="navbar__list">
              <li class="navbar__item">
                  <router-link to= "/login">LOGIN</router-link>
              </li>

              <li class="navbar__item">
                  <router-link to= "/register">REGISTER</router-link>
              </li>

              <li class="navbar__item">
                  <router-link to= "/logout">LOGOUT</router-link>
              </li>

          </ul>
        </div>

<router-view></router-view>


  </div>
</template>
