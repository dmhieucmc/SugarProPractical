<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */


$mod_strings = array (
  'LBL_BUCKET' => 'Kova',
  'LBL_ERROR' => 'Hata',
  'LBL_FLAG' => 'İşaret',
  'LBL_LOGFILE' => 'Log dosyası',
  'LBL_LOGMETA' => 'Log meta',
  'LBL_MODULE_NAME' => 'Çalışabilirlik Kontrolü',
  'LBL_MODULE_NAME_SINGULAR' => 'Çalışabilirlik Kontrolü',
  'LBL_MODULE_TITLE' => 'Çalışabilirlik Kontrolü',
  'LBL_SCAN_101_DESCR' => 'Kurulumunuzda stüdyo özelleştirmeleri tespit edildi. Bu özelleştirmeler ile yükseltmede herhangi bir sorun oluşmadı ve özelleştirmeler Sugar7 versiyonuna yükseltildi.',
  'LBL_SCAN_101_LOG' => '%s için stüdyo tarihçesi bulunmaktadır',
  'LBL_SCAN_101_TITLE' => '%s için stüdyo tarihçesi bulunmaktadır',
  'LBL_SCAN_102_DESCR' => 'Kurulumunuzda stüdyo özelleştirmeleri tespit edildi. Bu özelleştirmeler ile yükseltmede herhangi bir sorun oluşmadı ve özelleştirmeler Sugar7 versiyonuna yükseltildi.',
  'LBL_SCAN_102_LOG' => '%s için şu uzantılar bulunmaktadır: %s',
  'LBL_SCAN_102_TITLE' => '%s için şu uzantılar bulunmaktadır: %s',
  'LBL_SCAN_103_DESCR' => 'Kurulumunuzda stüdyo özelleştirmeleri tespit edildi. Bu özelleştirmeler ile yükseltmede herhangi bir sorun oluşmadı ve özelleştirmeler Sugar7 versiyonuna yükseltildi.',
  'LBL_SCAN_103_LOG' => '%s özel vardefs tanımına sahip',
  'LBL_SCAN_103_TITLE' => '%s özel vardefs tanımına sahip',
  'LBL_SCAN_104_DESCR' => 'Kurulumunuzda stüdyo özelleştirmeleri tespit edildi. Bu özelleştirmeler ile yükseltmede herhangi bir sorun oluşmadı ve özelleştirmeler Sugar7 versiyonuna yükseltildi.',
  'LBL_SCAN_104_LOG' => '%s özel layoutdefs tanımına sahip',
  'LBL_SCAN_104_TITLE' => '%s özel layoutdefs tanımına sahip',
  'LBL_SCAN_105_DESCR' => 'Kurulumunuzda stüdyo özelleştirmeleri tespit edildi. Bu özelleştirmeler ile yükseltmede herhangi bir sorun oluşmadı ve özelleştirmeler Sugar7 versiyonuna yükseltildi.',
  'LBL_SCAN_105_LOG' => '%s özel viewdefs tanımına sahip',
  'LBL_SCAN_105_TITLE' => '%s özel viewdefs tanımına sahip',
  'LBL_SCAN_201_DESCR' => 'Kurulumunuzda stüdyo özelleştirmeleri tespit edildi. Bu özelleştirmeler ile yükseltmede herhangi bir sorun oluşmadı ve özelleştirmeler Sugar7 versiyonuna yükseltildi.',
  'LBL_SCAN_201_LOG' => '%s için stok modülü yok',
  'LBL_SCAN_201_TITLE' => '%s için stok modülü yok',
  'LBL_SCAN_301_DESCR' => 'Bazı özelleştirmeler tespit edildi ve Sugar7 versiyonuna aktarılamadı. Bu modül (%s) kullanılabilir olmaya devam edecek ancak Sugar7 üzerinde geriye dönük uyumluluk modunda çalıştırılacaktır.',
  'LBL_SCAN_301_LOG' => '% s BWC olarak çalıştırılacak',
  'LBL_SCAN_301_TITLE' => '% s BWC olarak çalıştırılacak',
  'LBL_SCAN_302_DESCR' => 'Tanımsız dosya görünümleri tespit edildi ve Sugar7 versiyonuna aktarılamadı. Bu modül (%s) kullanılabilir olmaya devam edecek ancak Sugar7 üzerinde geriye dönük uyumluluk modunda çalıştırılacaktır.',
  'LBL_SCAN_302_LOG' => 'Bilinmeyen dosya görüntüleri mevcut - %s MB modülü değil',
  'LBL_SCAN_302_TITLE' => 'Bilinmeyen dosya görüntüleri mevcut - %s MB modülü değil',
  'LBL_SCAN_303_DESCR' => 'Boş olmayan form dosyaları tespit edildi ve Sugar7 versiyonuna aktarılamadı. Bu modül (%s) kullanılabilir olmaya devam edecek ancak Sugar7 üzerinde geriye dönük uyumluluk modunda çalıştırılacaktır.',
  'LBL_SCAN_303_LOG' => 'Boş olmayan form dosyası %s - %s MB modülü değil',
  'LBL_SCAN_303_TITLE' => 'Boş olmayan form dosyası %s - %s MB modülü değil',
  'LBL_SCAN_304_DESCR' => 'Tanımsız dosyalar (%s) tespit edildi ve Sugar7 versiyonuna aktarılamadı. Bu modül (%s) kullanılabilir olmaya devam edecek ancak Sugar7 üzerinde geriye dönük uyumluluk modunda çalıştırılacaktır.',
  'LBL_SCAN_304_LOG' => 'Tanımsız dosya %s - %s MB modülü değil',
  'LBL_SCAN_304_TITLE' => 'Tanımsız dosya %s - %s MB modülü değil',
  'LBL_SCAN_305_DESCR' => 'Hatalı vardefs(%s: %s) tespit edildi ve Sugar7 versiyonuna aktarılamadı. Bu modül (%s) kullanılabilir olmaya devam edecek ancak Sugar7 üzerinde geriye dönük uyumluluk modunda çalıştırılacaktır.',
  'LBL_SCAN_305_LOG' => 'Hatalı vardefs - anahtar %s, isim %s',
  'LBL_SCAN_305_TITLE' => 'Yanlış vardefs - anahtar %s, isim %s',
  'LBL_SCAN_306_DESCR' => 'Hatalı vardefs(%s: %s) tespit edildi ve Sugar7 versiyonuna aktarılamadı. İlişki alanı (%s) boş `module` değeri içeriyor. Bu modül (%s) kullanılabilir olmaya devam edecek ancak Sugar7 üzerinde geriye dönük uyumluluk modunda çalıştırılacaktır.',
  'LBL_SCAN_306_LOG' => 'Hatalı vardefs - ilişki alanı %s için `module` boş',
  'LBL_SCAN_306_TITLE' => 'Hatalı vardefs - ilişki alanı %s için `module` boş',
  'LBL_SCAN_307_DESCR' => 'Hatalı vardefs(%s: %s) tespit edildi ve Sugar7 versiyonuna aktarılamadı. Bağlantı alanı (%s) geçersiz bir ilişkiye işaret ediyor. Bu modül (%s) kullanılabilir olmaya devam edecek ancak Sugar7 üzerinde geriye dönük uyumluluk modunda çalıştırılacaktır.',
  'LBL_SCAN_307_LOG' => 'Hatalı vardefs - link %s geçersiz ilişkiye işaret etmektedir',
  'LBL_SCAN_307_TITLE' => 'Hatalı vardefs - link %s geçersiz ilişkiye işaret etmektedir',
  'LBL_SCAN_308_DESCR' => 'Bazı adaptasyonlar tespit edildi ve Sugar7 versiyonuna aktarılamadı. Bu modül (%s) kullanılabilir olmaya devam edecek ancak Sugar7 üzerinde geriye dönük uyumluluk modunda çalıştırılacaktır.',
  'LBL_SCAN_308_LOG' => '%s Vardef HTML fonksiyonu',
  'LBL_SCAN_308_TITLE' => '%s Vardef HTML fonksiyonu',
  'LBL_SCAN_309_DESCR' => '%s için md5 değeri, kurulum halinden farklı değere karşılık gelmektedir. Bu dosya değiştirilmiş olabilir ve Sugar7 versiyonuna aktarılmayacak.',
  'LBL_SCAN_309_LOG' => '%s için hatalı md5',
  'LBL_SCAN_309_TITLE' => '%s için hatalı md5',
  'LBL_SCAN_310_DESCR' => 'Bilinmeyen Görünüm dosyaları (%s) bulundu ve Sugar7 versiyonuna aktarılmadı.  Bu modül (%s) kullanılabilir olmaya devam edecek ancak Sugar7 üzerinde geriye dönük uyumluluk modunda çalıştırılacaktır.',
  'LBL_SCAN_310_LOG' => 'Tanımsız dosya %s/%s',
  'LBL_SCAN_310_TITLE' => 'Tanımsız dosya %s/%s',
  'LBL_SCAN_311_DESCR' => 'Bazı adaptasyonlar tespit edildi ve Sugar7 versiyonuna aktarılamadı. Bu modül (%s) kullanılabilir olmaya devam edecek ancak Sugar7 üzerinde geriye dönük uyumluluk modunda çalıştırılacaktır.',
  'LBL_SCAN_311_LOG' => 'Vardef HTML fonksiyonu %s: $module modülü içinde %s alanı için',
  'LBL_SCAN_311_TITLE' => 'Vardef HTML fonksiyonu %s: $module modülü içinde %s alanı için',
  'LBL_SCAN_312_DESCR' => 'Hatalı vardefs bulundu ve Sugar7 versiyonuna geçirilmedi. Hatalı vardef: &#39;name&#39; alan tipi hatalı &#39;%s&#39;  (modül &#39;%s&#39;).  Bu özelleştirme mevcut kalmaya devam edecek ancak Sugar7 üzerinde üzerinde geriye dönük uyumluluk modunda çalıştırılacaktır.',
  'LBL_SCAN_312_LOG' => 'Hatalı vardefs - &#39;name&#39; alan tipi geçersiz &#39;%s&#39; içermektedir. Modül: &#39;%s&#39;',
  'LBL_SCAN_312_TITLE' => 'Hatalı vardefs - &#39;name&#39; alan tipi geçersiz &#39;%s&#39; içermektedir. Modül: &#39;%s&#39;',
  'LBL_SCAN_313_DESCR' => 'Bulunan eklendiler dizini - %s Module Buider modülü değil. Bu modül kullanılabilir olmaya devam edecek ancak Sugar7 üzerinde geriye dönük uyumluluk modunda çalıştırılacaktır.',
  'LBL_SCAN_313_LOG' => 'Dizin uzantısı %s algılandı - %s MB modülü değil',
  'LBL_SCAN_313_TITLE' => 'Dizin uzantısı %s algılandı - %s MB modülü değil',
  'LBL_SCAN_314_LOG' => 'Hatalı vardefs - multienum alan &#39;%s&#39;, opsiyon listesi &#39;%s&#39; anahtarları uyumsuz karakterleri içeriyor - &#39;{%s}&#39;',
  'LBL_SCAN_401_DESCR' => 'Özelleştirilmiş dosya vendor dizinine taşınmış bir dosya içermektedir. Düzeltici aksiyonları almaya çalıştık, daha fazla aksiyona gerek bulunmamaktadır.',
  'LBL_SCAN_401_LOG' => 'Tedarikçi dosyaları dahil edilmesi bulunarak, tedarikçiye dosyalar taşındı:<br />%s',
  'LBL_SCAN_401_TITLE' => 'Tedarikçi dosyaları dahil edilmesi bulunarak, tedarikçiye dosyalar taşındı:<br />%s',
  'LBL_SCAN_402_DESCR' => 'Hatalı modül %s - beanList içinde ve dosya sisteminde de yok',
  'LBL_SCAN_402_LOG' => 'Hatalı modül %s - beanList içinde ve dosya sisteminde de yok',
  'LBL_SCAN_402_TITLE' => 'Hatalı modül %s - beanList içinde ve dosya sisteminde de yok',
  'LBL_SCAN_406_DESCR' => '',
  'LBL_SCAN_406_LOG' => '',
  'LBL_SCAN_406_TITLE' => '',
  'LBL_SCAN_407_DESCR' => '',
  'LBL_SCAN_407_LOG' => '',
  'LBL_SCAN_407_TITLE' => '',
  'LBL_SCAN_410_DESCR' => 'Görünümde çok alan var',
  'LBL_SCAN_410_LOG' => 'Maksimum alanlar - %s değerinden dah fazla alan (%s), %s içinde bulundu',
  'LBL_SCAN_410_TITLE' => 'Maksimum alanlar - %s değerinden dah fazla alan (%s), %s içinde bulundu',
  'LBL_SCAN_412_DESCR' => 'Altpanel olmayan veya dügün şekilde tanımlanmamış bir bağlantıya işaret etmektedir',
  'LBL_SCAN_412_LOG' => 'Hatalı Altpanel bağlantısı %s, %s içinde',
  'LBL_SCAN_412_TITLE' => 'Hatalı Altpanel bağlantısı %s, %s içinde',
  'LBL_SCAN_413_DESCR' => 'Alan, eşleşen widget klas dosyası olmayan bir widget değerine işaret etmektedir',
  'LBL_SCAN_413_LOG' => '',
  'LBL_SCAN_413_TITLE' => '',
  'LBL_SCAN_414_DESCR' => 'Tanımsız alanlar CRYS-36 tarafından dikkate alınır, bu nedenle burada daha fazla kontrol yok',
  'LBL_SCAN_414_LOG' => 'Tanımsız alanlar CRYS-36 tarafından dikkate alınır, bu nedenle burada daha fazla kontrol yok',
  'LBL_SCAN_414_TITLE' => 'Tanımsız alanlar CRYS-36 tarafından dikkate alınır, bu nedenle burada daha fazla kontrol yok',
  'LBL_SCAN_415_DESCR' => 'Logic hook var olmayan bir dosyaya işaret ediyor',
  'LBL_SCAN_415_LOG' => 'Hatalı hook dosyası %s: %s içinde',
  'LBL_SCAN_415_TITLE' => 'Hatalı hook dosyası %s: %s içinde',
  'LBL_SCAN_417_DESCR' => 'Artık olmaması gereken Modül Besleyici veya iFrame bulundu',
  'LBL_SCAN_417_LOG' => 'Uyumsuz modül %s',
  'LBL_SCAN_417_TITLE' => 'Uyumsuz modül %s',
  'LBL_SCAN_418_DESCR' => 'Altpanel, olmayan bir modüle işaret etmektedir',
  'LBL_SCAN_418_LOG' => 'Olmayan modüle alt-panel bağlantısı bulundu: %s',
  'LBL_SCAN_418_TITLE' => 'Olmayan modüle alt-panel bağlantısı bulundu: %s',
  'LBL_SCAN_419_DESCR' => 'Vardef anahtar ile vardef adı eşleşmiyor',
  'LBL_SCAN_419_LOG' => 'Hatalı vardefs - anahtar %s, isim %s',
  'LBL_SCAN_419_TITLE' => 'Hatalı vardefs - anahtar %s, isim %s',
  'LBL_SCAN_420_DESCR' => 'Vardef ilişkiye işaret eden, düzgün yüklenemeyen alanlar barındırmaktadır',
  'LBL_SCAN_420_LOG' => 'Hatalı vardefs - ilişki alanı %s için `module` boş',
  'LBL_SCAN_420_TITLE' => 'Hatalı vardefs - ilişki alanı %s için `module` boş',
  'LBL_SCAN_421_DESCR' => 'Vardef düzgün şekilde yüklenemeyen bağlantı alanını içeriyor',
  'LBL_SCAN_421_LOG' => 'Hatalı vardefs - link %s geçersiz ilişkiye işaret etmektedir',
  'LBL_SCAN_421_TITLE' => 'Hatalı vardefs - link %s geçersiz ilişkiye işaret etmektedir',
  'LBL_SCAN_423_DESCR' => 'Vardef altalanları içeren birleşik alan olarak tanımlanmış olup, aslında bu altalanlardan biri mevcut değil',
  'LBL_SCAN_423_LOG' => '',
  'LBL_SCAN_423_TITLE' => '',
  'LBL_SCAN_424_DESCR' => '',
  'LBL_SCAN_424_LOG' => '%s içinde, %s satırında, satır içi HTML bulundu',
  'LBL_SCAN_424_TITLE' => '%s içinde, %s satırında, satır içi HTML bulundu',
  'LBL_SCAN_425_DESCR' => 'Kod bu çıktıyı fonksiyonu içeriyor',
  'LBL_SCAN_425_LOG' => '%s içinde, %s satırında  "echo" bulundu',
  'LBL_SCAN_425_TITLE' => '%s içinde, %s satırında  "echo" bulundu',
  'LBL_SCAN_426_DESCR' => 'Kod bu çıktıyı fonksiyonu içeriyor',
  'LBL_SCAN_426_LOG' => '"print" %s içinde, %s satırında bulundu',
  'LBL_SCAN_426_TITLE' => '"print" %s içinde, %s satırında bulundu',
  'LBL_SCAN_427_DESCR' => 'Kod bu çıktıyı fonksiyonu içeriyor',
  'LBL_SCAN_427_LOG' => '%s dosyası, %s satırında "die/exit" bulundu',
  'LBL_SCAN_427_TITLE' => '',
  'LBL_SCAN_428_DESCR' => 'Kod bu çıktıyı fonksiyonu içeriyor. print_r(..., true)  fonksiyonuna izin verilmektedir.',
  'LBL_SCAN_428_LOG' => '"print_r" %s içinde, %s satırında bulundu',
  'LBL_SCAN_428_TITLE' => '"print_r" %s içinde, %s satırında bulundu',
  'LBL_SCAN_429_DESCR' => 'Kod bu çıktıyı fonksiyonu içeriyor',
  'LBL_SCAN_429_LOG' => '%s dosyasının, %s satırında  "var_dump" bulundu',
  'LBL_SCAN_429_TITLE' => '',
  'LBL_SCAN_430_DESCR' => 'Kod bu çıktıyı fonksiyonu içeriyor',
  'LBL_SCAN_430_LOG' => 'Çıktı tamponlama (output buffering) (%s), %s dosyasında, %s satırında bulundu',
  'LBL_SCAN_430_TITLE' => 'Çıktı tamponlama (output buffering) (%s), %s dosyasında, %s satırında bulundu',
  'LBL_SCAN_432_DESCR' => 'name&#39; alanı name, fullname, varchar veya id tipi dışında tip içermektedir',
  'LBL_SCAN_432_LOG' => 'Hatalı vardefs - &#39;name&#39; alan tipi geçersiz &#39;%s&#39; içermektedir. Modül: &#39;%s&#39;',
  'LBL_SCAN_432_TITLE' => 'Hatalı vardefs - &#39;name&#39; alan tipi geçersiz &#39;%s&#39; içermektedir. Modül: &#39;%s&#39;',
  'LBL_SCAN_501_DESCR' => 'Temel dosyalardan bir örneği mevcut değildir',
  'LBL_SCAN_501_LOG' => 'Eksik dosya: %s',
  'LBL_SCAN_501_TITLE' => 'Eksik dosya: %s',
  'LBL_SCAN_502_DESCR' => 'Temel dosyalardan biri bu yüklemede değiştirilmiş',
  'LBL_SCAN_502_LOG' => '%s için md5 uyumsuzluğu, beklenen %s',
  'LBL_SCAN_502_TITLE' => '%s için md5 uyumsuzluğu, beklenen %s',
  'LBL_SCAN_503_DESCR' => 'Özel modüllerden biri, yeni Sugar modüllerinden birisiyle aynı ada sahip',
  'LBL_SCAN_503_LOG' => 'Yeni Sugar7 modülü ile, aynı ismi taşıyan özel modül: %s',
  'LBL_SCAN_503_TITLE' => 'Yeni Sugar7 modülü ile, aynı ismi taşıyan özel modül: %s',
  'LBL_SCAN_504_DESCR' => 'Vardef alan tanımlama, tipi yoksayar',
  'LBL_SCAN_504_LOG' => '%s modülü içinde eksik alan tipi: %s',
  'LBL_SCAN_504_TITLE' => '%s modülü içinde eksik alan tipi: %s',
  'LBL_SCAN_505_DESCR' => 'Non-blob alan tipi blob alan tipine dönüştürüldü. Blob tipi indekslenemediği için ve bazı filtreler bu alanın indekslenmesine bağlı olabileceği için buna izin verilmez.',
  'LBL_SCAN_505_LOG' => '%s içinde, %s alanı için tip değişikliği. Eski değer:%s, Yeni değer: %s',
  'LBL_SCAN_505_TITLE' => '%s içinde, %s alanı için tip değişikliği. Eski değer:%s, Yeni değer: %s',
  'LBL_SCAN_506_DESCR' => '$this metadata dosyasında kullanılıyor. metadata dosyası Sugar7 ile farklı bir konteks üzerinde yüklendiği için hata alacaktır.',
  'LBL_SCAN_506_LOG' => '$this kullanımı (%s içinde)',
  'LBL_SCAN_506_TITLE' => '',
  'LBL_SCAN_507_DESCR' => 'Vardef altalanları içeren birleşik alan olarak tanımlanmış olup, aslında bu altalanlardan biri mevcut değil',
  'LBL_SCAN_507_LOG' => '',
  'LBL_SCAN_507_TITLE' => '',
  'LBL_SCAN_508_DESCR' => 'Dosya satır içi HTML içeriyor',
  'LBL_SCAN_508_LOG' => '%s içinde, %s satırında, satır içi HTML bulundu',
  'LBL_SCAN_508_TITLE' => '%s içinde, %s satırında, satır içi HTML bulundu',
  'LBL_SCAN_509_DESCR' => 'Kod bu çıktıyı fonksiyonu içeriyor',
  'LBL_SCAN_509_LOG' => '%s içinde, %s satırında  "echo" bulundu',
  'LBL_SCAN_509_TITLE' => '%s içinde, %s satırında  "echo" bulundu',
  'LBL_SCAN_510_DESCR' => 'Kod bu çıktıyı fonksiyonu içeriyor',
  'LBL_SCAN_510_LOG' => '"print" %s içinde, %s satırında bulundu',
  'LBL_SCAN_510_TITLE' => '"print" %s içinde, %s satırında bulundu',
  'LBL_SCAN_511_DESCR' => 'Kod bu çıktıyı fonksiyonu içeriyor',
  'LBL_SCAN_511_LOG' => '',
  'LBL_SCAN_511_TITLE' => '',
  'LBL_SCAN_512_DESCR' => 'Kod bu çıktıyı fonksiyonu içeriyor. print_r(..., true)  fonksiyonuna izin verilmektedir.',
  'LBL_SCAN_512_LOG' => '"print_r" %s içinde, %s satırında bulundu',
  'LBL_SCAN_512_TITLE' => '"print_r" %s içinde, %s satırında bulundu',
  'LBL_SCAN_513_DESCR' => 'Kod bu çıktıyı fonksiyonu içeriyor',
  'LBL_SCAN_513_LOG' => '',
  'LBL_SCAN_513_TITLE' => '',
  'LBL_SCAN_514_DESCR' => 'Kod bu çıktıyı fonksiyonu içeriyor',
  'LBL_SCAN_514_LOG' => 'Çıktı tamponlama (output buffering) (%s), %s dosyasında, %s satırında bulundu',
  'LBL_SCAN_514_TITLE' => 'Çıktı tamponlama (output buffering) (%s), %s dosyasında, %s satırında bulundu',
  'LBL_SCAN_515_DESCR' => 'Kontrol scripti hata aldı, bunun anlamı instaScannerMeta.phpnce muhtemelen kötü PHP kodu  script yüklemeye çalıştı.',
  'LBL_SCAN_515_LOG' => 'Script hatası: %s',
  'LBL_SCAN_515_TITLE' => 'Script hatası: %s',
  'LBL_SCAN_516_LOG' => 'Önceden kaldırılmış dosyalar referans olarak kullanılmış: %s',
  'LBL_SCAN_517_DESCR' => 'Sugar 7 tarafından desteklenmeyen ve kara listeye alınmış paket bulundu',
  'LBL_SCAN_517_LOG' => 'Uyumsuz Entegrasyon - %s %s',
  'LBL_SCAN_517_TITLE' => 'Uyumsuz Entegrasyon - %s %s',
  'LBL_SCAN_518_DESCR' => 'vardefs dosyası nasıl dönüştürüleceğini bilmediğimiz kullanıcı customCode tanımı barındırıyor',
  'LBL_SCAN_518_LOG' => '',
  'LBL_SCAN_518_TITLE' => '',
  'LBL_SCAN_519_DESCR' => 'Hazır Sugar modülü için versiyon yükseltme sırasında desteklenmeyen özelleştirilmiş yönlendirme, erişim kontrolü, Javascript, gibi eklentilerden biri var',
  'LBL_SCAN_519_LOG' => 'Eklenti dizini %s algılandı',
  'LBL_SCAN_519_TITLE' => 'Eklenti dizini %s algılandı',
  'LBL_SCAN_520_DESCR' => 'Bu logic hook Sugar 7&#39;de artık desteklenmiyor',
  'LBL_SCAN_520_LOG' => 'after_ui_frame logic hook bulundu',
  'LBL_SCAN_520_TITLE' => '',
  'LBL_SCAN_521_DESCR' => 'Bu logic hook Sugar 7&#39;de artık desteklenmiyor',
  'LBL_SCAN_521_LOG' => 'after_ui_footer "logic hook" bulundu',
  'LBL_SCAN_521_TITLE' => '',
  'LBL_SCAN_522_DESCR' => 'Altpanel verisi bir fonksiyon tarafından döndürülmektedir, henüz versiyon güncellemesini desteklemiyoruz.',
  'LBL_SCAN_522_LOG' => 'get_subpanel_data&#39;,  &#39;function&#39; değeri ile %s içinde bulundu',
  'LBL_SCAN_522_TITLE' => 'get_subpanel_data&#39;,  &#39;function&#39; değeri ile %s içinde bulundu',
  'LBL_SCAN_523_DESCR' => 'Eski logic hook dosyası, referans ile parametre geçişini kullanmaktadır.  Bu durum, hata mesajlarının gösterilmesine neden olabilir (ve REST hizmetini bozar)',
  'LBL_SCAN_523_LOG' => '%s dosyasında by-ref  parametresi, fonksiyon %s',
  'LBL_SCAN_523_TITLE' => '%s dosyasında by-ref  parametresi, fonksiyon %s',
  'LBL_SCAN_524_DESCR' => 'Alan HTML üreten bir fonksiyon olarak tanımlanmış olup, otomatik olarak çevrilemez (e-posta ve para birimi gibi bazı hazır alanlar için biliyoruz)',
  'LBL_SCAN_524_LOG' => 'Vardef HTML fonksiyonu %s: $module modülü içinde %s alanı için',
  'LBL_SCAN_524_TITLE' => 'Vardef HTML fonksiyonu %s: $module modülü içinde %s alanı için',
  'LBL_SCAN_525_DESCR' => 'Vardef dosyası HTML fonksiyonu sonucunda doldurulan enum değerine işaret etmekte olup, Sugar7 desteklememektedir',
  'LBL_SCAN_525_LOG' => '%s Vardef HTML fonksiyonu',
  'LBL_SCAN_525_TITLE' => '%s Vardef HTML fonksiyonu',
  'LBL_SCAN_526_DESCR' => '',
  'LBL_SCAN_526_LOG' => '',
  'LBL_SCAN_526_TITLE' => '',
  'LBL_SCAN_527_LOG' => '%s içindeki dosya ismi, %s/vardefs.php içindeki dosya özelliği ile uyuşmamaktadır',
  'LBL_SCAN_528_DESCR' => '',
  'LBL_SCAN_528_LOG' => '',
  'LBL_SCAN_528_TITLE' => '',
  'LBL_SCAN_901_DESCR' => 'Kurulum zaten Sugar 7 versiyonuna yükseltilmiş',
  'LBL_SCAN_901_LOG' => 'Kurulum zaten Sugar 7 versiyonuna yükseltilmiş',
  'LBL_SCAN_901_TITLE' => 'Kurulum zaten Sugar 7 versiyonuna yükseltilmiş',
  'LBL_SCAN_999_DESCR' => 'Bilinmeyen hata, lütfen destek başvurunda bulununuz',
  'LBL_SCAN_999_LOG' => 'Bilinmeyen hata, lütfen destek başvurunda bulununuz',
  'LBL_SCAN_999_TITLE' => 'Bilinmeyen hata, lütfen destek başvurunda bulununuz',
);

