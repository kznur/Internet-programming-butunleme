<?php   
include"ust.php";
include '../baglan.php';

 ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Ayarlar</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ayarlar <small>sub title</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  
                  <?php
                    if(isset($_POST['submit'])) {

                      $baslik= $_POST['ayar_baslik'];
                      $desciription = $_POST['ayar_desciription'];
                      $keywords = $_POST['ayar_keywords'];
                      $facebook= $_POST['ayar_facebook'];
                      $twitter = $_POST['ayar_twitter'];
                      $instagram = $_POST['ayar_instagram'];
                      $youtube = $_POST['ayar_youtube'];
                      $msunucu = $_POST['ayar_msunucu'];
                      $mport = $_POST['ayar_mport'];
                      $mkadi = $_POST['ayar_mkadi'];
                      $msifre = $_POST['ayar_msifre'];

                      $ayar=$db->query("UPDATE `ayar` SET `ayar_baslik`=$baslik,`ayar_desciription`=$desciription,`ayar_keywords`=$keywords,`ayar_facebook`=$facebook,`ayar_twitter`=$twitter,`ayar_instagram`=$instagram,`ayar_youtube`=$youtube,`ayar_msunucu`=$msunucu,`ayar_mport`=$mport,`ayar_mkadi`=$mkadi,`ayar_msifre`=$msifre WHERE ayar_id=ayar_id")->fetch(); 

                    }
                  ?>
                



                  <div class="x_content">

                    <form action="ayar_guncelle.php" method="POST" class="form-horizontal form-label-left" novalidate>

                      <p>Web Sayfanızın ayarlarını düzenleyebileceğiniz sayfadır.</p>
                      
                      <span class="section">Genel Ayarlar</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_baslik">Sitenin Başlığı <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ayar_baslik" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="ayar_baslik"value="<?php echo $ayar['ayar_baslik'] ?> "placeholder="Buraya sitenin başlığını yazınız." required="required" type="text">
                        </div>
                      </div>

                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_desciription">Sitenin Açıklaması <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ayar_desciription" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="ayar_desciription"value="<?php echo $ayar['ayar_desciription'] ?> " placeholder="Buraya sitenin açıklamasını yazınız." required="required" type="text">
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_keywords">Anahtar Kelimeler<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ayar_keywords" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="ayar_keywords"value="<?php echo $ayar['ayar_keywords'] ?> " placeholder="Anahtar kelimeleri girin." required="required" type="text">
                        </div>
                      </div>

                       <span class="section">Sosyal Medya Hesapları</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_facebook">Facebook 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ayar_facebook" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="ayar_facebook"value="<?php echo $ayar['ayar_facebook'] ?> " placeholder="Buraya Facebook adresini girin."  type="text">
                        </div>
                      </div>

                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_twitter">Twitter 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ayar_twitter" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="ayar_twitter"value="<?php echo $ayar['ayar_twitter'] ?> " placeholder="Buraya Twitter adresinizi yazınız." type="text">
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_instagram">İnstagram
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ayar_instagram" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="ayar_instagram"value="<?php echo $ayar['ayar_instagram'] ?> " placeholder="Buraya instagram adresinizi yazınız."  type="text">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_youtube">YouTube
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ayar_youtube" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="ayar_youtube"value="<?php echo $ayar['ayar_youtube'] ?> " placeholder="Buraya Youtube adresinizi giriniz." type="text">
                        </div>
                      </div>

                       <span class="section">Mail Ayarları</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_msunucu">Mail Sunucu
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ayar_msunucu" value="<?php echo $ayar['ayar_msunucu'] ?>" class="form-control col-md-7 col-xs-12" data-validate-length-range="36" data-validate-words="2" name="ayar_msunucu" placeholder="Buraya Mail Sunucu Adresşnş Giriniz" required="required" type="text">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_mport">Port Numarası <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ayar_mport"  value="<?php echo $ayar['ayar_mport'] ?>"class="form-control col-md-7 col-xs-12" data-validate-length-range="36" data-validate-words="2" name="ayar_mport" placeholder="Buraya Portu Giriniz" required="required" type="text">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_mkadi">Mail Adresi<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ayar_mkadi"  value="<?php echo $ayar['ayar_mkadi'] ?>"class="form-control col-md-7 col-xs-12" data-validate-length-range="36" data-validate-words="2" name="ayar_mkadi" placeholder="Buraya Mail Adresini Giriniz" required="required" type="text">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_msifre">Mail Şifresi<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ayar_msifre" value="<?php echo $ayar['ayar_msifre'] ?>" class="form-control col-md-7 col-xs-12" data-validate-length-range="36" data-validate-words="2" name="ayar_msifre" placeholder="Buraya Mail Şifresini Giriniz" required="required" type="password">
                        </div>
                      </div>

                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button id="send" type="submit" name="submit"  class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

<?php   
include"alt.php";
 ?>