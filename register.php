
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>会員登録</title>
  
</head>

<body>

    <div style="text-align: right;padding-right: 5px;padding-left: 5px;"><span>日本語</span></div>
    <div class="card" style="padding-right: 5px;padding-left: 5px;border: none;">
        <div class="col" id="colheadbill" style="padding-bottom: 19px;">
            <h1 id="headbill" style="padding-bottom: 5px;padding-right: 5px;"><strong>連絡先情報を確認する</strong></h1>
            <div style="font-size: 14px;background-color: white;padding-top: 5px;padding-right: 10px;padding-bottom: 5px;padding-left: 10px;">
                <p style="margin-bottom: 0px;">以下の項目を入力し、「<span id="blt">以下の規約に同意して入力内容を確認する</span>」ボタンを押してください。<br>（ご家族など、本人以外の情報はご登録いただけません。）<br></p>
            </div>


            <form style="background-color: white;padding-right: 3px;padding-left: 3px;" action="finish.php"
             method="post">
                <div class="col align-self-center" style="background-color: white;border: 1px solid grey;padding-left: 2px;padding-right: 2px;">
                    <div class="form-group" style="margin-bottom: 0px;padding-top: 3px;padding-bottom: 3px;">
                        <h1 style="border-left: 3px solid rgb(191,0,0);margin-bottom: 0px;font-size: 16px;font-weight: 700;padding-top: 5px;padding-bottom: 5px;">&nbsp;通常の本人連絡先</h1>
                    </div>
                </div>
        <div class="h4Box">
        <h4><strong>メールアドレス<em>&nbsp;[必須]</em></strong></h4>

        </div><!-- /.h4Box -->
                <div class="col align-self-center" style="background-color: white;padding-left: 0px;padding-right: 0px;padding-top: 3px;">
                    <div class="form-group" style="margin-bottom: 0px;">
                        <div style="font-size: 14px;background-color: white;padding-top: 5px;padding-right: 7px;padding-bottom: 5px;padding-left: 7px;">
                            <p style="margin-bottom: 0px;">他の会員が登録済みのメールアドレスは登録できません。<br></p>
                        </div>
                    </div>
                </div>
                <div class="col align-self-center" style="background-color: white;padding-left: 5px;padding-right: 5px;padding-top: 3px;padding-bottom: 3px;">
                    <div class="form-group" style="margin-bottom: 0px;">
                        <input class="form-control" type="email" id="forminput" autocomplete="off" required="" name="emailx"  value=""></div>
                </div>

                <div class="col align-self-center" style="background-color: white;padding-left: 0px;padding-right: 0px;padding-top: 3px;">
                    <div class="form-group" style="margin-bottom: 0px;">
                        <div class="form-row" style="padding-right: 0px;padding-left: 2px;padding-top: 2px;background-color: #eeeeee;margin-right: 0px;margin-left: 0px;">
                            <div class="col text-nowrap" style="padding-right: 0px;padding-left: 5px;"><i class="fas fa-dot-circle" style="color: rgb(191,0,0);"></i><label style="font-size: 14px;font-weight: 700;">&nbsp;<strong>郵便番号</strong><br></label></div>
                        </div>
                    </div>
                </div>
                <div class="col align-self-center" style="background-color: white;padding-left: 0px;padding-right: 0px;padding-top: 3px;">
                    <div class="form-group" style="margin-bottom: 0px;">
                        <div style="font-size: 14px;background-color: white;padding-top: 5px;padding-right: 7px;padding-bottom: 5px;padding-left: 7px;">
                            <p style="margin-bottom: 0px;">郵便番号から住所を自動入力できます。<span style="color: #ff6600;font-weight: 300;font-size: 13px;"><strong>&lt;半角英数字&gt;</strong></span><br></p>
                        </div>
                    </div>
                </div>
                <div class="col align-self-center" style="background-color: white;padding-left: 5px;padding-right: 5px;padding-top: 3px;padding-bottom: 3px;">
                    <div class="form-group" style="margin-bottom: 0px;">
                        <div class="form-row row-cols-2">
                            <div class="col"><input class="form-control forminput" name="zipx" required="" maxlength="8" type="text" inputmode="numeric" ></div>
                            
                            <div class="col"><select name="nara" class="form-control" id="forminput" type="text" disabled="" >
                                    <option  value="Japan">日本</option>
                                </select></div>
                        </div>
                    </div>
                </div>
                <div class="col align-self-center" style="background-color: white;padding-left: 0px;padding-right: 0px;padding-top: 3px;">
                    <div class="form-group" style="margin-bottom: 0px;">
                        <div class="form-row" style="padding-right: 0px;padding-left: 2px;padding-top: 2px;background-color: #eeeeee;margin-right: 0px;margin-left: 0px;">
                            <div class="col text-nowrap" style="padding-right: 0px;padding-left: 5px;"><i class="fas fa-dot-circle" style="color: rgb(191,0,0);"></i><label for="prefe" style="font-size: 14px;font-weight: 700;">&nbsp;<strong>都道府県</strong><br></label></div>
                        </div>
                    </div>
                </div>
                <div class="col align-self-center" style="background-color: white;padding-left: 5px;padding-right: 5px;padding-top: 3px;padding-bottom: 3px;">
                    <div class="form-group" style="margin-bottom: 0px;">
                <select name="prefektur" size="1" required="" class="form-control" id="prefe">
                    <option value="" selected="">--</option>
                    <option value="Hokkaido">北海道</option>
                    <option value="Aomori">青森県</option>
                    <option value="Iwate">岩手県</option>
                    <option value="Miyagi">宮城県</option>
                    <option value="Akita">秋田県</option>
                    <option value="Yamagata">山形県</option>
                    <option value="Fukushima">福島県</option>
                    <option value="Ibaraki">茨城県</option>
                    <option value="Tochigi">栃木県</option>
                    <option value="Gunma">群馬県</option>
                    <option value="Saitama" >埼玉県</option>
                    <option value="Chiba">千葉県</option>
                    <option value="Tokyo">東京都</option>
                    <option value="Kanagawa">神奈川県</option>
                    <option value="Niigata">新潟県</option>
                    <option value="Toyama">富山県</option>
                    <option value="Ishikawa">石川県</option>
                    <option value="Fukui">福井県</option>
                    <option value="Yamanashi">山梨県</option>
                    <option value="Nagano">長野県</option>
                    <option value="Gifu">岐阜県</option>
                    <option value="Shizuoka">静岡県</option>
                    <option value="Aichi">愛知県</option>
                    <option value="Mie">三重県</option>
                    <option value="Shiga">滋賀県</option>
                    <option value="Kyoto">京都府</option>
                    <option value="Osaka">大阪府</option>
                    <option value="Hyogo">兵庫県</option>
                    <option value="Nara">奈良県</option>
                    <option value="Wakayama">和歌山県</option>
                    <option value="Tottori">鳥取県</option>
                    <option value="Shimane">島根県</option>
                    <option value="Okayama">岡山県</option>
                    <option value="Hiroshima">広島県</option>
                    <option value="Yamaguchi">山口県</option>
                    <option value="Tokushima">徳島県</option>
                    <option value="Kagawa">香川県</option>
                    <option value="Ehime">愛媛県</option>
                    <option value="Kochi">高知県</option>
                    <option value="Fukuoka">福岡県</option>
                    <option value="Saga">佐賀県</option>
                    <option value="Nagasaki">長崎県</option>
                    <option value="Kumamoto">熊本県</option>
                    <option value="Oita">大分県</option>
                    <option value="Miyazaki">宮崎県</option>
                    <option value="Kagoshima">鹿児島県</option>
                    <option value="Okinawa">沖縄県</option>
                        </select></div>
                </div>
                <div class="col align-self-center" style="background-color: white;padding-left: 0px;padding-right: 0px;padding-top: 3px;">
                    <div class="form-group" style="margin-bottom: 0px;">
                        <div class="form-row" style="padding-right: 0px;padding-left: 2px;padding-top: 2px;background-color: #eeeeee;margin-right: 0px;margin-left: 0px;">
                            <div class="col text-nowrap" style="padding-right: 0px;padding-left: 5px;"><i class="fas fa-dot-circle" style="color: rgb(191,0,0);"></i><label style="font-size: 14px;font-weight: 700;">&nbsp;<strong>郡市区（島）</strong><br></label></div>
                        </div>
                    </div>
                </div>
                <div class="col align-self-center" style="background-color: white;padding-left: 5px;padding-right: 5px;padding-top: 3px;padding-bottom: 3px;">
                    <div class="form-group" style="margin-bottom: 0px;"><input class="form-control" required="" type="text" id="forminput" placeholder="(例)品川区/八丈島" name="koku"></div>
                </div>
               <div class="h4Box">
        <h4 id="lstreet"><strong>それ以降の住所</strong>
        </h4>
     
        </div><!-- /.h4Box -->
                <div class="col align-self-center" style="background-color: white;padding-left: 5px;padding-right: 5px;padding-top: 3px;padding-bottom: 3px;">
                    <div class="form-group" style="margin-bottom: 0px;"><input class="form-control" type="text" required="" id="forminput" placeholder="(例)東品川4-12-3 品川シーサイド楽天タワー" name="adresx"></div>
                </div>
               <!--  <div class="col align-self-center" style="background-color: white;padding-left: 0px;padding-right: 0px;padding-top: 3px;">
                    <div class="form-group" style="margin-bottom: 0px;">
                        <div class="form-row" style="padding-right: 0px;padding-left: 2px;padding-top: 2px;background-color: #eeeeee;margin-right: 0px;margin-left: 0px;">
                            <div class="col text-nowrap" style="padding-right: 0px;padding-left: 5px;"><i class="fas fa-dot-circle" style="color: rgb(191,0,0);"></i><label style="font-size: 14px;font-weight: 700;">&nbsp;<strong>電話番号</strong><br></label></div>
                        </div>
                    </div>
                </div> -->

                <div id="birth" class="h4Box">
        <h4><strong>生年月日</strong></h4>
        </div>
         
        <ul class="blockForm">
        <li class="">
        <input type="text" name="dobn" for="birth" placeholder="生年月日(1970/01/01)" maxlength="85" size="35" value="" required=""><br />
        </li>
        </ul>
<!--                 <div class="col" style="padding-top: 3px;padding-right: 5px;padding-bottom: 3px;padding-left: 5px;">
                    <div class="form-row row-cols-5">
                        <div class="col col-3"><input class="form-control" type="text" id="forminput" autocomplete="off" inputmode="numeric" required="" minlength="3" maxlength="3" placeholder="000" style="text-align: center;"></div>
                        <div class="col col-auto"><label class="col-form-label">-</label></div>
                        <div class="col col-3"><input class="form-control" type="text" id="forminput" minlength="4" inputmode="numeric" autocomplete="off" maxlength="4" placeholder="0000" style="text-align: center;"></div>
                        <div class="col col-auto"><label class="col-form-label">-</label></div>
                        <div class="col col-3"><input class="form-control" type="text" id="forminput" inputmode="numeric" autocomplete="off" required="" minlength="4" maxlength="4" placeholder="0000" style="text-align: center;"></div>
                    </div>
                </div> -->
                <div class="col align-self-center" style="background-color: white;padding-left: 0px;padding-right: 0px;padding-top: 3px;">
                    <div class="form-group" style="margin-bottom: 0px;">
                        <div class="form-row" style="padding-right: 0px;padding-left: 2px;padding-top: 2px;background-color: #eeeeee;margin-right: 0px;margin-left: 0px;">
                            <div class="col text-nowrap" style="padding-right: 0px;padding-left: 5px;"><i class="fas fa-dot-circle" style="color: rgb(191,0,0);"></i><label for="nope" style="font-size: 14px;font-weight: 700;">&nbsp;<strong>電話番号</strong><br></label></div>
                        </div>
                    </div>
                </div>
                <div class="col" style="padding-top: 3px;padding-right: 5px;padding-bottom: 3px;padding-left: 5px;">
                    <div class="form-row row-cols-5">
                        <div class="col col-3"><input class="form-control" name="nope1" type="text" id="nope" autocomplete="off" inputmode="numeric" required="" minlength="3" maxlength="3" placeholder="000" style="text-align: center;"></div>
                        <div class="col col-auto"><label class="col-form-label">-</label></div>
                        <div class="col col-3"><input class="form-control" name="nope2" type="text" id="nope" minlength="4" inputmode="numeric" required="" autocomplete="off" maxlength="4" placeholder="0000" style="text-align: center;"></div>
                        <div class="col col-auto"><label class="col-form-label">-</label></div>
                        <div class="col col-3"><input class="form-control" name="nope3" type="text" id="nope" inputmode="numeric" autocomplete="off" required="" minlength="4" maxlength="4" placeholder="0000" style="text-align: center;"></div>
                    </div>
                </div>
       
                                 <p class="buttons">
                   <input type="submit" value="以下の規約に同意して入力内容を確認する">
                 </p>
                  </form>
        
</body>

</html>
