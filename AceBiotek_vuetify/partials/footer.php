                <!--=============== FOOTER ===============-->
                <template>
                    <v-footer dark padless>
                        <v-card flat tile class="footer__wide grey lighten-2 black--text text-center">
                            <v-card-text>
                                <v-btn v-for="icon in icons" :key="icon" class="mx-4 black--text" icon>
                                    <v-icon size="24px">
                                        {{ icon }}
                                    </v-icon>
                                </v-btn>
                            </v-card-text>

                            <v-card-text class="black--text pt-0">
                                聯絡地址
                                <br><br>
                                新竹縣竹北市生醫二路66號
                                <br>
                                (新竹生醫園區)
                                <br><br><br>
                            </v-card-text>

                            <v-card-text class="black--text pt-0">
                                聯絡電話
                                <br><br>
                                TEL：(886) 03-5500909#3409
                                <br>
                                FAX：(886) 03-5506766
                                <br>
                                客服免付費專線：0800-550-222
                                <br><br><br>
                            </v-card-text>

                            <v-card-text class="black--text pt-0">
                                聯絡信箱
                                <br>
                                service@acebiotek.com
                            </v-card-text>

                            <v-divider></v-divider>

                            <v-card-text class="grey white--text">
                                © {{ new Date().getFullYear() }} — <strong>ACE Biotek. All rights reserved</strong>
                            </v-card-text>
                        </v-card>
                    </v-footer>
                </template>


                <!--=============== 回到最上方 ===============-->
                <a href="#" class="scrollup" id="scroll-up">
                    <i class='bx2 bx-up-arrow-alt scrollup__icon'></i>
                </a>

            </v-app>
        </div>

        
        <script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
        <script>
            new Vue({
                el: '#app',
                vuetify: new Vuetify(),
                data () {
                return {
                    items: [
                    {
                        src: 'asset/img/1.jpg',
                    },
                    {
                        src: 'asset/img/2.jpg'
                    },
                    {
                        src: 'asset/img/3.png'
                    },
                    ],
                }
                },
            })
        </script>
        <script src="<?php echo SITEURL; ?>asset/js/main.js"></script>
    </body>
</html>