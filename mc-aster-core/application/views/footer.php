<!--==============================footer=================================-->
    <div class="footer">
        <div class="container_24">
            <div class="grid_7 suffix_1 alpha">
                
                <div class="wrapper p1">
                    e-mail: home@mc-aster.com
                </div>
                <a title="mc-aster.com" class="aCopyFooter" href="<?php echo base_url()?>">&nbsp;&copy;&nbsp;2011&nbsp;<?php if(date('Y', time()) > 2011) {echo '-&nbsp;' . date('Y', time());} ?> </a>
    <!-- {%FOOTER_LINK} -->
             </div>
             <!--
                <div class="grid_3 suffix_2">
                    <h5 class="p1">Follow Us</h5>
                    <ul class="list-services">
                        <li><a href="" class="l1">RSS</a></li>
                        <li><a href="" class="l2">Twitter</a></li>
                        <li><a href="" class="l3">Flickr</a></li>
                    </ul>
                </div>
                -->
                <div class="grid_8 suffix_2">
                    &nbsp;
                </div>
                <!--
                <div class="grid_8 omega">
                    <h5>Напишите нам</h5>
                    <form id="contact-form" enctype="multipart/form-data" method="post" >
                      <fieldset>
                            <div class="wrapper">
                          <label>
                                <span>Ваше имя:</span>
                                <input name="name" value="" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''" />
                          </label>
                            </div>    
                            <div class="wrapper">
                          <label>
                                <span>Контакты:</span>
                                <input name="name1" value="" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''" />
                          </label>
                            </div>
                          <textarea onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''"></textarea>
                           <div class="buttons">
                              <a href="" onClick="document.getElementById('contact-form').submit()" >Отправить</a>
                          </div>											
                      </fieldset>           
                    </form>
                </div>
                -->
        </div>
        <div class="grid_7 suffix_1 alpha">
            <div class="wrapper p3">
                <div class="grid_3 suffix_1 alpha">
                    <h5>Ссылки</h5>
                    <ul class="list-2">
                        <li><a title="Aster - официальный сайт" href="http://mcaster.net" target="_blank">www.mcaster.net</a></li>
                    </ul>
                </div>
                <!--
                <div class="grid_3 omega">
                    <h5>Join In</h5>
                    <ul class="list-2">
                        <li><a href="">Sign Up</a></li>
                        <li><a href="">Forums</a></li>
                        <li><a href="">Promotions</a></li>
                    </ul>
                </div>
                -->
            </div>
        </div>
        <div class="clear"></div>
        <div class="container_24 counters">
        	<?php
            if(!empty($counters)) {
				foreach($counters as $counter) {
					echo $counter;
				}
			} ?>
        </div>
        <div class="clear"></div>
    </div>
    <?php
	if(!empty($yandex_metrika)) {
		echo $yandex_metrika;
	}
	?>
</body>
</html>