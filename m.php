<!DOCTYPE html>
<html>
<head>
<meta content="user-scalable=0, width=device-width, initial-scale=1, minimal-ui" name="viewport">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="msapplication-tap-highlight" content="no">
<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>القرآن الكريم للجوال</title>
<meta name="description" content="مشروع قرآنى شامل بمميزات فريدة">

<link type="text/css" href="provider/index.php?g=cnavv&325" rel="stylesheet">
<!-- <script src="provider/index.php?g=snavv&325" type="text/javascript"></script> -->
<script src="js/quran-data.js"></script>
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/te.js"></script>
<script src="js/langs.m.js"></script>
<script src="js/naver.js"></script>
<script src="js/mobile.js"></script>
<script src="js/wm.js"></script>
<script src="js/parseArabic.js" type="text/javascript"></script>

<meta property="og:image" content="https://quran.ksu.edu.sa/images_home/quran_img_th.png">
</head>
<body>
<div id="root">
	<div id="wrapper">
		<div id="scroller">
			<div id="cont">
				<div id="page_num"></div>
			</div>
			<ul id="thelist">
			</ul>
		</div>
	</div>
	<div id="trans">
		<div id="trans_cont">
		
		</div>
	</div>
	<div id="trans_ctrl"><div id="trans_ctrl_bg"></div><img src="images/resize3.png" id="tc_img_r"><div id="trans_ctrl_msg"><img src="images/drag3.png" id="tc_img_drag"><img src="images/resize4.png" id="tc_img_resize"></div> <div id="trans_ctrl_choose"><b class="lang" id="lang_trans_ctrl_choose"></b></div> <div id="trans_ctrl_zinout"><img src="images/font_down3.png" id="tc_img_zout" align="absmiddle">  <img src="images/font_up3.png" id="tc_img_zin" align="absmiddle"> <b class="lang" id="lang_fontsize"></b> </div> <img src="images/close3.png" id="tc_img_c"></div>
	<div id="hilite" class="hiliter"></div>

	<div id="menu">
		<div id="menu_inner">		
			<div class="menu_divider"><b class="lang" id="lang_bu_browse"></b> <img src="images/mob_men_browse.png"></div>
            <div class="menu_item menu_space"></div>
            <div class="menu_item"><div class="menu_subitem msi_33 menuAct" id="browseBySura"><b class="lang" id="lang_sura"></b> <img src="images/mob_menu_darrow.png"></div><div class="menu_subitem msi_33 menuAct" id="browseByJuz"><b class="lang" id="lang_juz"></b> <img src="images/mob_menu_darrow.png"></div><div class="menu_subitem msi_33 menuAct" id="browseByPage"><b class="lang" id="lang_page"></b><img src="images/mob_menu_darrow.png"></div> </div>
            <div class="menu_item"><div class="menu_subitem msi_100" id="fld_search_cont"><input id="fld_search_txt"><input class="noAnim" id="fld_search" type="text" placeholder="" /><img src="images/mob_menu_search.png" id="bu_search"></div></div>
			<div class="menu_item"><div class="menu_subitem msi_100 menuAct" id="browseByFavs"><b class="lang" id="lang_favs"></b> <img src="images/mob_menu_fav.png" id="img_favs"></div></div>
            <div class="menu_item menu_space"></div>
			
            <div class="menu_divider"><b class="lang" id="lang_bu_tafaser"></b> <img src="images/mob_menu_ttrans.png"></div>
            <div class="menu_item menu_space menu_item_closed"></div>
            <div class="menu_item menu_item_closed"><div class="menu_subitem msi_50 menuAct" id="browseTafaser"><b class="lang" id="lang_tafaser"></b></div><div class="menu_subitem msi_50 menuAct" id="browseTrans"><b class="lang" id="lang_trans"></b></div></div>
            <div class="menu_item menu_space menu_item_closed"></div>

			<div class="menu_divider"><b class="lang" id="lang_bu_telawa"></b> <img src="images/mob_menu_audio.png"></div>
            <div class="menu_item menu_space menu_item_closed"></div>
            <div class="menu_item menu_item_closed"><div class="menu_subitem msi_50 menuAct" id="recites"><b class="lang" id="lang_qaree"></b></div><div class="menu_subitem msi_50 menuAct" id="repeat"><b class="lang" id="lang_repeat"></b></div></div>
            <div class="menu_item menu_item_closed"><div class="menu_subitem msi_100 menuAct" id="mtest"><b class="lang" id="lang_mtest"></b></div></div>            
            <div class="menu_item menu_space menu_item_closed"></div>

			<div class="menu_divider"><b class="lang" id="lang_options"></b> - <b class="lang" id="lang_help"></b><img src="images/mob_menu_settings.png"></div>
            <div class="menu_item menu_space"></div>
            <div class="menu_item"><div class="menu_subitem msi_33 menuAct" id="showOpts"><b class="lang" id="lang_options"></b></div><div class="menu_subitem msi_33 menuAct" id="showHelp"><b class="lang" id="lang_help_mi"></b></div><div class="menu_subitem msi_33 menuAct" id="showContact"><b class="lang" id="lang_contact_mi"></b></div></div>
            <div class="menu_item menu_space"></div>

						
			<div class="menu_item menu_item_special" id="bu_download"><a href="https://play.google.com/store/apps/details?id=sa.edu.ksu.Ayat" id="bu_download_link" target="_blank" class="menu_subitem msi_100"><b class="lang" id="lang_bu_download_app"></b> <img src="images/mob_menu_download.png"></a></div>
					</div>
	</div>


	<div id="status">
		<div id="menu_hint"><img src="images/icon_left_micro.png"><b class="lang" id="lang_menu_hint"></b></div>

		<div id="menu_key"><img src="images/mob_menu_key.png"></div>
		<div id="tls_info_book"><img src="images/book_right.png"></div>



		<div class="tls_info" id="info_sura_aya"></div>
	</div>
	
	<div id="tools">
		<div id="tls_pl_cont">
			<div id="tls_play"><img src="images/pop_play.png" /></div><div id="tls_pause"><img src="images/pop_pause.png" /></div><div id="tls_stop"><img src="images/pop_stop.png" /></div>
			<div id="tls_qaree"></div>
		</div>
		<div style="clear:both"></div>
		<ul>
			<li><div id="tls_fav"><img src="images/fav2.png"><span class="lang" id="lang_addFav"></span></div></li>
			<li><div id="tls_tafsir"><img src="images/tafsir.png"><span class="lang" id="lang_tafsir"></span></div></li>
			<li><div id="tls_copy"><img src="images/mob_copy.png"><span class="lang" id="lang_copy"></span></div></li>
			<li><div id="tls_share"><img src="images/share.png"><span class="lang" id="lang_share"></span></div></li>
		</ul>
	</div>
	
	<div id="tools_share" class="tools_fl">
		<a href="javascript:;" class="ext" target="_blank" id="share_fb"><span class="lang" id="lang_shareFB"></span></a>
		<a href="javascript:;" class="ext" target="_blank" id="share_twit"><span class="lang" id="lang_shareTwit"></span></a>
	</div>

    <div id="tools_fav" class="tools_fl">
		<div id="fav_read"><span class="lang" id="lang_fav_read"></span></div>
		<div id="fav_memo"><span class="lang" id="lang_fav_memo"></span></div>
        <div id="fav_note"><span class="lang" id="lang_note"></span></div>
	</div>

    
    <div id="player">
	   <audio id="pl1" src="https://quran.ksu.edu.sa/ayat/mp3/Husary_64kbps/001001.mp3" type="audio/mpeg" preload="true"></audio>
    </div>
    <div id="player2">
	   <audio id="pl2" src="https://quran.ksu.edu.sa/ayat/mp3/Husary_64kbps/001001.mp3" type="audio/mpeg" preload="true"></audio>	 
    </div>
    
    <img src="images/marker.png" id="page_marker">
</div>

    
	<div class="submenu" id="sm_browseSura">
		<div class="sm_inner">
			<div class="submenu_body">
				<div class="ay_form_row"><div class="ay_label"><b class="lang" id="lang_sura"></b></div> <div class="ay_select"><div class="ay_sel_text"></div> <select class="noAnim" id="browse_sel_sura"></select> <img src="images/mob_darrow.png"></div></div>
				<div class="ay_form_row"><div class="ay_label"><b class="lang" id="lang_aya"></b></div> <div class="ay_select"><div class="ay_sel_text"></div> <select class="noAnim" id="browse_sel_aya"></select> <img src="images/mob_darrow.png"></div></div>
				<div class="ay_form_row"><div class="ay_main_button" id="bu_gotoSura"><b class="lang" id="lang_go"></b></div></div>			
			</div>
		</div>
		<div class="sm_header"> <b class="lang" id="lang_sura"></b> - <b class="lang" id="lang_aya"></b> <div class="sm_close"><img src="images/mob_close.png"></div></div>
	</div>

	<div class="submenu" id="sm_browseJuz">
		<div class="sm_inner">
			<div class="submenu_body">
				<div class="ay_form_row"><div class="ay_label"><b class="lang" id="lang_juz"></b></div> <div class="ay_select"><div class="ay_sel_text"></div> <select class="noAnim" id="browse_sel_juz"></select> <img src="images/mob_darrow.png"></div></div>
				<div class="ay_form_row"><div class="ay_label"><b class="lang" id="lang_hizb"></b></div> <div class="ay_select"><div class="ay_sel_text"></div> <select class="noAnim" id="browse_sel_hizb"></select> <img src="images/mob_darrow.png"></div></div>
				<div class="ay_form_row"><div class="ay_main_button" id="bu_gotoJuz"><b class="lang" id="lang_go"></b></div></div>			
			</div>
		</div>
		<div class="sm_header"> <b class="lang" id="lang_juz"></b> - <b class="lang" id="lang_hizb"></b> <div class="sm_close"><img src="images/mob_close.png"></div></div>
	</div>

    <div class="submenu" id="sm_browsePage">
        <div class="sm_inner">
            <div class="submenu_body">
                <div class="ay_form_row"><div class="ay_label"><b class="lang" id="lang_page"></b></div> <div><input type="number" min="1" max="604" class="noAnim" id="fld_page"></div></div>

                <div class="menu_item"><div class="menu_subitem msi_50 bbp" id="bbp_100_pos">100+</div><div class="menu_subitem msi_50 menuAct bbp" id="bbp_100_neg">100-</div></div>
                <div class="menu_item"><div class="menu_subitem msi_50 bbp" id="bbp_10_pos">10+</div><div class="menu_subitem msi_50 menuAct bbp" id="bbp_10_neg">10-</div></div>
                <div class="menu_item"><div class="menu_subitem msi_50 bbp" id="bbp_1_pos">1+</div><div class="menu_subitem msi_50 menuAct bbp" id="bbp_1_neg">1-</div></div>


                <div class="ay_form_row"><div class="ay_main_button" id="bu_gotoPage"><b class="lang" id="lang_go"></b></div></div>
            </div>
        </div>
        <div class="sm_header"> <b class="lang" id="lang_sura"></b> - <b class="lang" id="lang_aya"></b> <div class="sm_close"><img src="images/mob_close.png"></div></div>
    </div>
    
    
	<div class="submenu" id="sm_tafaser">
		<div class="sm_inner">
			<div class="submenu_body">
				<div class="ay_form_row"><div class="ay_label"><b class="lang" id="lang_tafsir"></b></div> <div class="ay_select"><div class="ay_sel_text"></div> <select class="noAnim" id="tafsir_sel_tafsir"></select> <img src="images/mob_darrow.png"></div></div>
				<div class="ay_form_row"><div class="ay_label"><b class="lang" id="lang_sura"></b></div> <div class="ay_select"><div class="ay_sel_text"></div> <select class="noAnim" id="tafsir_sel_sura"></select> <img src="images/mob_darrow.png"></div></div>
				<div class="ay_form_row"><div class="ay_label"><b class="lang" id="lang_aya"></b></div> <div class="ay_select"><div class="ay_sel_text"></div> <select class="noAnim" id="tafsir_sel_aya"></select> <img src="images/mob_darrow.png"></div></div>
				<div class="ay_form_row"><div class="ay_main_button" id="bu_showTafsir"><b class="lang" id="lang_browse"></b></div></div>			
			</div>
		</div>
		<div class="sm_header"> <b class="lang" id="lang_tafaser"></b> <div class="sm_close"><img src="images/mob_close.png"></div></div>
	</div>

	<div class="submenu" id="sm_trans">
		<div class="sm_inner">
			<div class="submenu_body">
				<div class="ay_form_row"><div class="ay_label"><b class="lang" id="lang_trans"></b></div> <div class="ay_select"><div class="ay_sel_text"></div> <select class="noAnim" id="trans_sel_trans"></select> <img src="images/mob_darrow.png"></div></div>
				<div class="menu_space"></div>
                <div class="ay_form_row"><div class="ay_main_button" id="bu_showTrans"><b class="lang" id="lang_browse"></b></div></div>
				<div id="trans_warn">
				<div class="lang_ar">
					<p>
						<u>تنبيه هام</u>: تراجم معاني القرآن الكريم المعروضة تم الحصول عليها من موقع تنزيل دوت نت، ولم يتسنى لنا مراجعتها أو تدقيقها.
					</p>					
				</div>
				<div class="lang_en">
					<p>
						<u>Disclaimer</u>: No translation of Quran can be a hundred percent accurate, nor it can be used as a replacement of the Quran text. We got Quran translations from Tanzil.net website, we cannot guarantee their authenticity and/or accuracy. Please use them at your own discretion.
					</p>
				</div>
				</div>
			</div>
		</div>
		<div class="sm_header"> <b class="lang" id="lang_trans"></b> <div class="sm_close"><img src="images/mob_close.png"></div></div>
	</div>

	<div class="submenu" id="sm_recites">
		<div class="sm_inner">
			<div class="submenu_body">
				<div class="ay_form_row"><div class="ay_label"><b class="lang" id="lang_qaree"></b></div> <div class="ay_select"><div class="ay_sel_text"></div> <select class="noAnim" id="sel_quraa"></select> <img src="images/mob_darrow.png"></div></div>
				<div class="ay_form_row"><div class="ay_label"><b class="lang" id="lang_chooseVTrans"></b></div> <div class="ay_select"><div class="ay_sel_text"></div> <select class="noAnim" id="sel_vtrans"><option value="0" selected="selected" class="lang" id="lang_vtrans_null"></option><option value="En">English</option><option value="Ur">اردو</option><option value="Bs">Bosnian</option></select> <img src="images/mob_darrow.png"></div></div>
                <div class="ay_vspace ay_space_15"></div>
                <div class="ay_form_row"><div class="ay_label"><b class="lang" id="lang_autoStop"></b></div> <div class="ay_select"><div class="ay_sel_text"></div> <select class="noAnim" id="sel_autoStop"><option value="0" selected="selected" class="lang" id="lang_autoStop_null"></option><option class="lang" id="lang_autoStop_sura" value="sura"></option><option class="lang" id="lang_autoStop_page" value="page"></option><option class="lang" id="lang_autoStop_juz" value="juz"></option></select> <img src="images/mob_darrow.png"></div></div>
                <div class="ay_vspace ay_space_15"></div>
                <div id="audio_pl"><ul><li id="t_bu_play" class="pl_play"><img src="images/pop_play.png" /></li><li id="t_bu_pause" class="pl_pause"><img src="images/pop_pause.png" /></li><li id="t_bu_stop" class="pl_stop"><img src="images/pop_stop.png" /></li></ul></div>
				<div class="ay_form_row"><div class="ay_main_button" id="recites_repeat"><b class="lang" id="lang_repeat_settings"></b></div></div>

                
			</div>
		</div>
		<div class="sm_header"> <b class="lang" id="lang_qaree"></b> <div class="sm_close"><img src="images/mob_close.png"></div></div>
	</div>

    
	<div class="submenu" id="sm_repeat">
		<div class="sm_inner">
			<div class="submenu_body">
				<div class="ay_form_row"><div class="ay_main_button" id="repeat_tog_bu"><span id="repeat_keyname"><b class="lang" id="lang_activateRepeat"></b></span></div></div>			

				<div id="repeat_widg">

					<div class="menu_text_h"><b class="lang" id="lang_deterStart"></b></div>
					<div class="ay_form_row"><div class="ay_label"><b class="lang" id="lang_sura"></b></div><div class="ay_select"><div class="ay_sel_text"></div><select class="noAnim" id="repeat_sel_begin_sura"></select> <img src="images/mob_darrow.png"></div></div>
					<div class="ay_form_row"><div class="ay_label"><b class="lang" id="lang_aya"></b></div><div class="ay_select"><div class="ay_sel_text"></div><select class="noAnim" id="repeat_sel_begin_aya"></select> <img src="images/mob_darrow.png"></div></div>						

					<div class="menu_text_h"><b class="lang" id="lang_deterEnd"></b></div>
					<div class="ay_form_row"><div class="ay_label"><b class="lang" id="lang_sura"></b></div><div class="ay_select"><div class="ay_sel_text"></div><select class="noAnim" id="repeat_sel_end_sura"></select> <img src="images/mob_darrow.png"></div></div>				
                    <div class="ay_form_row"><div class="ay_label"><b class="lang" id="lang_aya"></b></div><div class="ay_select"><div class="ay_sel_text"></div><select class="noAnim" id="repeat_sel_end_aya"></select> <img src="images/mob_darrow.png"></div></div>

					<div class="menu_text_h"><b class="lang" id="lang_repeat"></b></div>
                    <div class="ay_form_row"><div class="ay_label"><b class="lang" id="lang_repeat_forAya"></b></div><div class="ay_select"><div class="ay_sel_text"></div><select class="noAnim" id="repeat_for_aya"><option  selected="selected" class="lang" id="lang_repeat_forAya_null" value="0"></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="15">15</option><option value="20">20</option><option value="30">30</option><option value="40">40</option><option value="50">50</option><option value="60">60</option><option value="70">70</option><option value="80">80</option><option value="90">90</option><option value="100">100</option><option value="1000">1000</option></select> <img src="images/mob_darrow.png"></div></div>
                    <div class="ay_form_row"><div class="ay_label"><b class="lang" id="lang_repeat_waiting"></b></div><div class="ay_select"><div class="ay_sel_text"></div><select class="noAnim" id="repeat_waiting"><option selected="selected" class="lang" id="lang_repeat_waiting_null" value="0"> </option><option  class="lang" id="lang_repeat_waiting_short" value="0.5"></option><option class="lang" id="lang_repeat_waiting_medium" value="1"></option><option class="lang" id="lang_repeat_waiting_long" value="1.5"></option></select> <img src="images/mob_darrow.png"></div></div>
					<div class="ay_form_row"><div class="ay_label"><b class="lang" id="lang_repeat_forAll"></b></div><div class="ay_select"><div class="ay_sel_text"></div><select class="noAnim" id="repeat_for_all"><option  selected="selected" class="lang" id="lang_repeat_forAya_null" value="0"></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="15">15</option><option value="20">20</option><option value="30">30</option><option value="40">40</option><option value="50">50</option><option value="60">60</option><option value="70">70</option><option value="80">80</option><option value="90">90</option><option value="100">100</option><option value="1000">1000</option></select> <img src="images/mob_darrow.png"></div></div>
                    <div class="menu_space"></div>
					<div class="ay_form_row"><div class="ay_main_button ay_active" id="repeat_recites"><b class="lang" id="lang_start"></b></div></div>			

					<p>&nbsp;</p>
				</div>
			</div>
		</div>
		<div class="sm_header"> <b class="lang" id="lang_repeat"></b> <div class="sm_close"><img src="images/mob_close.png"></div></div>
	</div>

	<div class="submenu" id="sm_mtest">
		<div class="sm_inner">
			<div class="submenu_body">

                <div class="menu_text_h"><b class="lang" id="lang_deterStart"></b></div>
                <div class="ay_form_row"><div class="ay_label"><b class="lang" id="lang_sura"></b></div><div class="ay_select"><div class="ay_sel_text"></div><select class="noAnim" id="mtest_sel_begin_sura"></select> <img src="images/mob_darrow.png"></div></div>
                <div class="ay_form_row"><div class="ay_label"><b class="lang" id="lang_aya"></b></div><div class="ay_select"><div class="ay_sel_text"></div><select class="noAnim" id="mtest_sel_begin_aya"></select> <img src="images/mob_darrow.png"></div></div>						

                <div class="menu_text_h"><b class="lang" id="lang_deterEnd"></b></div>
                <div class="ay_form_row"><div class="ay_label"><b class="lang" id="lang_sura"></b></div><div class="ay_select"><div class="ay_sel_text"></div><select class="noAnim" id="mtest_sel_end_sura"></select> <img src="images/mob_darrow.png"></div></div>				
                <div class="ay_form_row"><div class="ay_label"><b class="lang" id="lang_aya"></b></div><div class="ay_select"><div class="ay_sel_text"></div><select class="noAnim" id="mtest_sel_end_aya"></select> <img src="images/mob_darrow.png"></div></div>

                <div class="menu_space"></div>
                <div class="ay_form_row"><div class="ay_main_button ay_active" id="mtest_start"><b class="lang" id="lang_start"></b></div></div>			

                <p>&nbsp;</p>
			</div>
		</div>
		<div class="sm_header"> <b class="lang" id="lang_mtest"></b> <div class="sm_close"><img src="images/mob_close.png"></div></div>
	</div>
    


	<div class="submenu" id="sm_opts">
		<div class="sm_inner">
			<div class="menu_text_h"><b class="lang" id="lang_choose_lang"></b></div>
			<div class="ay_vbc">	
				<div class="ay_button" id="bu_l_ar"><b class="lang" id="lang_arabic"></b></div>
				<div class="ay_button" id="bu_l_en"><b class="lang" id="lang_english"></b></div>
			</div>
	
			<div class="menu_text_h"><b class="lang" id="lang_mosshaf_type"></b></div>
			<div class="ay_vbc">	
				<div class="bu_mosshaf ay_button" id="bu_mosshaf_hafs"><b class="lang" id="lang_mosshaf_hafs"></b></div>
				<div class="bu_mosshaf ay_button" id="bu_mosshaf_tajweed"><b class="lang" id="lang_mosshaf_tajweed"></b></div>
				<div class="bu_mosshaf ay_button" id="bu_mosshaf_warsh"><b class="lang" id="lang_mosshaf_warsh"></b></div>
			</div>
			
			<div id="vision_cont">
				<div class="menu_text_h"><b class="lang" id="lang_vision_type"></b></div>
				<div class="ay_vbc">	
					<div class="bu_vision ay_button" id="bu_vision_normal"><b class="lang" id="lang_vision_normal"></b></div>
					<div class="bu_vision ay_button" id="bu_vision_night"><b class="lang" id="lang_vision_night"></b></div>
				</div>
				<p>&nbsp;</p>
			</div>
			
		</div>
		<div class="sm_header"> <b class="lang" id="lang_options"></b> <div class="sm_close"><img src="images/mob_close.png"></div></div>

	</div>
    
    
<div id="popup_root">
	<div class="popup" id="t_cont">
		<div class="popup_header"> <div id="t_sel_tafsir_cont"><div class="ay_select"><div class="ay_sel_text"><span id="t_cont_title">&nbsp;</span></div> <select id="t_sel_tafsir"></select> <img src="images/mob_darrow.png"></div></div> <div class="popup_close"><img src="images/mob_close.png"></div></div>
		<div class="popup_inner" id="t_cont_sub">
		</div>
		<div id="t_contrs">
			<div class="ay_form_row ay_center"><div class="ay_inline_button ay_active" id="t_next"><img src="images/icon_left_small.png"></div> <div class="ay_inline_button ay_active" id="t_prev"><img src="images/icon_right_small.png"></div></div>
		</div>
	</div>


	<div class="popup" id="s_cont">
		<div class="popup_header"> <b class="lang" id="lang_searchResults"></b> <div class="popup_close"><img src="images/mob_close.png"></div></div>
		<div class="popup_inner" id="s_cont_sub">
		</div>
	</div>

	<div class="popup" id="favs_cont">
		<div class="popup_header"> <b class="lang" id="lang_favs"></b> <div class="popup_close"><img src="images/mob_close.png"></div></div>
		<div class="popup_inner" id="favs_cont_sub">
		</div>
	</div>

	<div class="popup" id="mtest_cont">
		<div class="popup_header"><button id="mtest_ques_bu"> <b class="lang" id="lang_mtest_ques"></b> </button> <b class="lang" id="lang_mtest"></b> <div class="popup_close"><img src="images/mob_close.png"></div></div>
		<div class="popup_inner" id="mtest_cont_sub">
            <div id="mtest_hl_cont">
                <div id="mtest_over"><img src="images/loading_trans.gif"></div>

                <img id="mtest_img" src="frame_hafs.jpg">
            </div>
		</div>

    </div>

	<div class="popup" id="contact_cont">
		<div class="popup_header"> <b class="lang" id="lang_contact_title"></b> <div class="popup_close"><img src="images/mob_close.png"></div></div>

		<div class="popup_inner" id="contact_cont_sub">
			
			<div id="contact_widg" class="contact">
				<div class="caption"><span class="lang" id="lang_contact_name"></span></div><div class="fld_cont"><input type="text" id="ct_esm" /></div>
				<div class="caption"><span class="lang" id="lang_contact_email"></span></div><div class="fld_cont"><input type="text" id="ct_email" dir="ltr" /></div>				
				<div class="caption"><span class="lang" id="lang_contact_msg"></span></div><div class="fld_cont"><textarea id="ct_msg" rows="5"></textarea></div>
				<div class="bu_cont"><button class="ct_bu" id="contact_bu"><span class="lang" id="lang_contact_send"></span></button></div>

				<div class="c_b"></div>
				<div id="ct_bayan"></div>
			</div>
		</div>
	</div>


	<div class="popup" id="help_cont">
		<div class="popup_header"> <b class="lang" id="lang_help"></b> <div class="popup_close"><img src="images/mob_close.png"></div></div>
		<div class="popup_inner">

			<div id="help_about_holder" style="line-height: 160%">
				<p align="center">بسم الله الرحمن الرحيم</p>

				<div class="lang_ar">
					<a href="https://quran.ksu.edu.sa/" target="_blank" class="ext">مشروع المصحف الإلكتروني بجامعة الملك سعود</a> - واجهة الجوال   ، المشروع يوفر أيضا <a href="https://quran.ksu.edu.sa/index.php?ui=1" class="ext">واجهة للحواسب المكتبية</a> &nbsp;  و <a href="https://play.google.com/store/apps/details?id=sa.edu.ksu.Ayat" class="ext">تطبيق "آيات" لأنظمة الأندرويد</a> و &nbsp; <a href="https://quran.ksu.edu.sa/ayat/ios/?ref=i" class="ext">تطبيق آيات للآيباد والآيفون</a> &nbsp; و <a href="https://quran.ksu.edu.sa/ayat" class="ext">برنامج "آيات" للحواسب المكتبية</a>
					<div>&nbsp;</div>
				</div>

				<div class="lang_en">
					 <a href="https://quran.ksu.edu.sa/" target="_blank" class="ext">KSU - Electronic Mosshaf project</a> - Mobile interface, the project is also available as a <a href="https://quran.ksu.edu.sa/index.php?ui=1&l=en" class="ext">web interface for PCs</a> and an <a href="https://play.google.com/store/apps/details?id=sa.edu.ksu.Ayat" class="ext">Android application "Ayat - Android version"</a> and an <a href="https://quran.ksu.edu.sa/ayat/ios/?ref=i" class="ext">iOS App (for iPhone and iPad)</a> and a <a href="https://quran.ksu.edu.sa/ayat/?l=en" class="ext">desktop application "Ayat - PC version"</a>
				
				</div>
			</div>


			<div id="help_features_holder">
				<div class="lang_ar">
					إرشادات الإستخدام :
					<ul>
						<li>انتقل بين صفحات المصحف الشريف عن طريق تحريك يدك لليمين (الصفحة التالية) او تحريك يدك لليسار (الصفحة السابقة)</li>
						<li>استخدم زر القائمة -أيقونة صفراء على يسار الشاشة- لعرض القائمة الرئيسية أو إخفائها</li>

						<li>من خلال القائمة الرئيسية يمكنك :
							<ul>
								<li>الانتقال بين الصفحات من خلال تحديد السورة والآية أو الجزء أو رقم الصفحة</li>
								<li>البحث في آيات القرآن الكريم</li>
								<li>استعراض التفاسير والتراجم - لاحظ أن كل من التفاسير والتراجم يظهر في نافذة مختلفة</li>
								<li>تحديد القارئ واختيار اعدادات التكرار</li>
								<li>إختيار اللغة وتحديد نوع المصحف</li>
							</ul>
						</li>
					</ul>
				</div>

				<div class="lang_en">
					How to use :
					<ul>
						<li>Hold and slide right or left for moving to next or previous page</li>
						<li>Use menu button - upper left yellow icon - to show/hide main menu</li>
						<li>Throgh the main menu you can :
							<ul>
								<li>Browse the Mosshaf by Sura/Aya(Chapter/Verse), Juz(Part) or by entering page number</li>
								<li>Search Al Quran text</li>
								<li>View Tafaser(Commentary) and Translations</li>
								<li>Choose reciter and edit repeating settings</li>
								<li>Choose interface language and Mosshaf type</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>


			<div id="help_features_holder">
				<div class="lang_ar">
					المميزات :
					<ul>
						<li> عرض نسخة مصورة من المصحف الشريف.</li>
						<li> الإختيار بين مصحف المدينة المنورة أو مصحف التجويد الملون أو المصحف برواية ورش عن نافع.</li>
						<li> تلاوة للقرآن الكريم بصوت العديد من مشاهير القراء - منها تلاوتان برواية ورش عن نافع.</li>
						<li>إمكانية تكرار تلاوة الآية أكثر من مرة مع تحديد فاصل زمني.</li>
						<li>إمكانية البحث في آيات القرآن الكريم.</li>
						<li>إمكانية الإنتقال المباشر بين سور وأجزاء وصفحات المصحف الشريف.</li>
						<li>إمكانية وضع علامات مرجعية على الآيات</li>
						<li>خمسة تفاسير باللغة العربية (السعدي وابن كثير والقرطبي والطبري والبغوي).</li>
						<li>تفسير تفهيم القرآن باللغة الإنجليزية.</li>
						<li>إعراب القرآن الكريم لقاسم حميد دعاس.</li>
						<li>ترجمة نصية (مقروءة) لمعاني القرآن لأكثر من 20 لغة.</li>
						<li>ترجمة صوتية (مسموعة) للغة الإنجليزية والأوردية.</li>
						<li>ربط تزامني بين الآية التي يتم تلاوتها ومكانها في المصحف وترجمة معانيها.</li>
						<li>ربط تلاوة الآية بالترجمة الصوتية (ترديد الترجمة الصوتية بعد تلاوة الآية).</li>
						<li>واجهة البرنامج متوفرة باللغتين العربية والإنجليزية.</li>
					</ul>
				</div>

				<div class="lang_en">
					Features :
					<ul>
						<li>Viewing scanned(soft) copy of real printed Mosshafs </li>
						<li>Providing copy of Mosshaf Al-Madina, copy of Mosshaf Al-Tajweed (colored according to Tajweed rules) and copy of Mosshaf Warsh (Rewayat Warsh An-Nafei') </li>
						<li>Recitations by many famous reciters (two of them are by Rewayat Warsh an-Nafei')</li>
						<li>Repeating each Aya as many times as desired with time interval in between</li>
						<li>Search through Al Quran text</li>
						<li>Direct browsing the Mosshaf by Sura/Aya(Chapter/Verse) , Juz(Part) or Page number</li>
						<li>Bookmarking Ayas(verses)</li>
						<li>Five Arabic Tafsir(Commentary) "Al-Saa'di, Ibn-Katheer, Al-Baghawy, Al-Qortoby and Al-Tabary"</li>			
						<li>E'rab(Grammar) Al-Quran by Qasim Da'aas</li>
						<li>Text Translation of Al Quran meanings for more than 20 languages</li>
						<li>Voice Translation of Al Quran meanings for two languages (English and Urdu)</li>
						<li>Sync between recitaion and Aya position in the Page (highlighting Aya while recited)</li>
						<li>Sync between recitaion and voice translation (repeat the translation after the recitation)</li>
						<li>Interface in both Arabic and English</li>
					</ul>
				</div>
			</div>

			<!-- <div id="help_thanks_holder">
				<div class="lang_ar">
					شكر وعرفان :
					<ul>
						<li> موقع <a href="https://qurancomplex.gov.sa/" target="_blank">مجمع</a> الملك فهد لطباعة المصحف الشريف (مصدر الصور).</li>
						<li> موقع <a href="http://tanzil.net/trans" target="_blank">تنزيل</a> (مصدر النص القرآني والتراجم).</li>
						<li> موقع <a href="http://mosshaf.com/" target="_blank">مصحف</a> (مصدر التفاسير).</li>
						<li> موقع <a href="http://versebyversequran.com/" target="_blank">Verse by Verse Quran</a> مصدر التلاوات.</li>
					</ul>
				</div>

				<div class="lang_en">
					Special Thanks to :
					<ul>
						<li> <a href="https://qurancomplex.gov.sa/" target="_blank">KFC website</a> (source of images).</li>
						<li> <a href="http://tanzil.net/trans" target="_blank">Tanzil.net website</a> (source of Quran text and translations).</li>
						<li> <a href="http://mosshaf.com/" target="_blank">Mosshaf.com website</a> (source of Tafasir).</li>
						<li> <a href="http://versebyversequran.com/" target="_blank">Verse by Verse Quran</a> (source of recitations).</li>

					</ul>
				</div>
			</div> -->


			<div style="text-align:center;padding-top:15px;">
				
				<!--
				<iframe class="twitter-follow-button" scrolling="no" frameborder="0" allowtransparency="true" src="http://platform.twitter.com/widgets/follow_button.1347008535.html#_=1349701261928&id=twitter-widget-0&lang=ar&screen_name=Quran_ksu&show_count=false&show_screen_name=false&size=l" style="width: 55px; height: 28px;display:block;margin:auto" title="Twitter Follow Button" data-twttr-rendered="true"></iframe>
				<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Fquran.ksu&amp;send=false&amp;layout=standard&amp;width=50&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=verdana&amp;height=35" scrolling="no" frameborder="0" style="border:none; display: block; overflow:hidden; width:53px; height:25px;margin:auto;padding-top:5px" allowTransparency="true"></iframe>
				-->
				
			</div>

		</div>
	</div>
</div>


<div id="p_over"></div>

<div id="p_modal">
    <div class="title"><span class="cap"></span><div class="close"><img src="images/mob_close.png"></div><div class="srch"><img src="images/mob_menu_search.png"><input class="selt_fld_srch" placeholder="بحث"></div></div>
    <div class="groups_cont"><div class="groups"></div><div class="arrow_right"><img src="images/icon_right_small.png"></div><div class="arrow_left"><img src="images/icon_left_small.png"></div></div>
	<div class="cont"><div class="inner_cont"></div></div>
	<div class="contrs"><button class="ok"><span class="lang" id="lang_alert_ok"></span></button></div>

</div>
<div id="p_modaless">
	<div class="msg"></div>
</div>



<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-24903774-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>
