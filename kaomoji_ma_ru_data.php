<?php
require_once ('kaomoji_ma_ru.php');

/* '絵文字' 'ペンネーム' 'ジャンル'*/
/*  = new Emoticon('', '', ''); */
/* 喜 $joy = new Emoticon('', '', 'joy'); */
$joy1 = new Emoticon('(´>∀<`*)', '', 'joy');
$joy2 = new Emoticon('(*´ω`*)', '', 'joy');
$joy3 = new Emoticon('(๑´ㅂ`๑)', '', 'joy');
$joy4 = new Emoticon('*.。(๑･∀･๑)*.。', '', 'joy');
$joy5 = new Emoticon('(っ´ω`c)', '', 'joy');
$joy6 = new Emoticon('\(´ω` )/', '', 'joy');
$joy7 = new Emoticon('(ﾉ*>∀<)ﾉ', '', 'joy');
$joy8 = new Emoticon('٩(๑´ω`๑)۶', '', 'joy');
$joy9 = new Emoticon('(*ฅ´ω`ฅ*)', '', 'joy');

/* イタズラ $prank = new Emoticon('', '', 'prank'); */
/* フフフ ムヒヒ イヒヒ エヘヘ キランッ */
$prank1 = new Emoticon('(*´ё`*) ムフフ', '', 'prank');
$prank2 = new Emoticon('(￣∀￣)', '', 'prank');
$prank3 = new Emoticon('(￣▽￣)', '', 'prank');
$prank4 = new Emoticon('(๑¯∇¯๑)', '', 'prank');

/* 怒 $anger = new Emoticon('', '', 'anger'); */
$anger1 = new Emoticon('(・A・)ｲｸﾅｲ!!', '', 'anger');

/* 哀 $sad = new Emoticon('', '', 'sad'); */
$sad1 = new Emoticon('( ´•ω•` )', '', 'sad');


/* 困る $trouble = new Emoticon('', '', 'trouble');*/
$trouble1 = new Emoticon('((∩´o`∩))', '', 'trouble');
$trouble2 = new Emoticon('(´>_<`)', '', 'trouble');
$trouble3 = new Emoticon('(´>ω<｀)', '', 'trouble');

/* 驚く $surprise = new Emoticon('', '', 'surprise'); */
$surprise1 = new Emoticon('∑(°口°๑)', '', 'surprise');
$surprise2 = new Emoticon('∑( ◦д⊙)‼', '', 'surprise');
$surprise3 = new Emoticon('\(°Д° )/', '', 'surprise'); 
$surprise4 = new Emoticon('Σ╰(°ㅂ° )╯', '', 'surprise');


/* 照れる $shy = new Emoticon('', '', 'shy'); */
$shy1 = new Emoticon('(ฅ∀<`๑)ﾃﾍｯ', '', 'shy');

/* 挨拶 $greet = new Emoticon('', '', 'greet'); */
$greet1 = new Emoticon('(*^o^*)/ ただいまぁ～♪', '', 'greet');
$greet2 = new Emoticon('┏○)) ﾍﾟｺﾘ', '', 'greet');

/* 了解 $ok = new Emoticon('', '', 'ok'); */
$ok1 = new Emoticon('(｀・ω・´)ゞ シャキーン', '', 'ok');

/* ありがとう $thank_you = new Emoticon('', '', 'thank_you'); */
$thank_you1 = new Emoticon('アリガ━(ﾟ∀ﾟ)━( ﾟ∀)━( ﾟ)━( )━(ﾟ )━(∀ﾟ )━(ﾟ∀ﾟ)━隊!!!
', '', 'thank_you');

/* お笑い $comedy = new Emoticon('', '', 'comedy'); */
$comedy1 = new Emoticon('( ˚Д˚)ﾉ なんでやねん(笑)', '', 'comedy');
$comedy2 = new Emoticon('(  ﾟД ﾟ)ﾉ なんでやねん(笑)', '', 'comedy');
$comedy3 = new Emoticon('\( °Д° )( ﾟДﾟ)/', '', 'comedy');

/* ウインク $wink = new Emoticon('', '', 'wink'); */
$wink1 = new Emoticon('(๑•᎑<๑)ｰ☆', '', 'wink');
$wink2 = new Emoticon('٩(｡•ω<｡)', '', 'wink');

/* チラッ・逃げる $peek = new Emoticon('', '', 'peek'); */
$peek1 = new Emoticon('|д･)', '', 'peek');
$peek2 = new Emoticon('ε”ε”ε”٩(๑•ㅂ•)۶', '', 'peek');
$peek3 = new Emoticon('ε=ε=ε=(ﾉ｀・∀・)ﾉ
', '', 'peek');

/* どこ？ $where = new Emoticon('', '', 'where'); */
$where1 = new Emoticon('(ﾟДﾟ≡ﾟДﾟ)', '', 'where');

/* キター $come = new Emoticon('', '', 'come'); */
$come1 = new Emoticon('ｷﾀ━━━━(ﾟ∀ﾟ)━━━━!!', '', 'come');

/* メモ $memo = new Emoticon('', '', 'memo'); */
$memo1 = new Emoticon('φ(･д･｡) ﾒﾓﾒﾓ', '', 'memo');

/* 飲食 $eat_drink = new Emoticon('', '', 'eat_drink'); */
$eat_drink1 = new Emoticon('(>×<)', '', 'eat_drink');

/* バタッ $exhaustion = new Emoticon('', '', 'exhaustion'); */
$exhaustion1 = new Emoticon('_(:3｣ ∠)_', '', 'exhaustion');
$exhaustion2 = new Emoticon('_(:D」L)_', '', 'exhaustion');
$exhaustion3 = new Emoticon('≡(:D)┿━<', '', 'exhaustion');

/* 線 $line = new Emoticon('', '', 'line'); */
$line1 = new Emoticon('❁〜❁〜❁〜❁〜❁〜❁〜❁〜❁〜❁〜❁', '', 'line');
$line2 = new Emoticon('✻〜✻〜✻〜✻〜✻〜✻〜✻〜✻〜✻〜✻', '', 'line');
$line3 = new Emoticon('*〜*〜*〜*〜*〜*〜*〜*〜*〜*〜*〜*〜*〜', '', 'line');

$emoticons = array($joy1, $joy2, $joy3, $joy4, $joy5, $joy6, $joy7, $joy8, $joy9, $prank1, $prank2, $prank3, $prank4, $anger1, $sad1, $trouble1, $trouble2, $trouble3, $surprise1, $surprise2, $surprise3, $surprise4, $shy1, $greet1, $greet2, $ok1, $thank_you1, $comedy1, $comedy2, $comedy3, $wink1, $wink2, $peek1, $peek2, $peek3, $where1, $come1, $memo1, $eat_drink1, $exhaustion1, $exhaustion2, $exhaustion3, $line1, $line2, $line3);

?>