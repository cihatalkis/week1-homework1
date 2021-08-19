<?php

$age = 25;

/**
 * Bu ödevde age değişkeni içerisinde yer alan yaş değerinin bulunduğu
 * yaş grubu tespit edilip ekrana bu yaş grubunun ismi yazılmalıdır. 
 * 
 * 0-14 = Çocuk
 * 15-24 = Genç
 * 25-64 = Yetişkin
 * 65+ = Yaşlı
 * 
 * Ekran çıktısı için `echo` yada `print` kullanabilirsiniz.
 * 
 * > **Not**: Çıktıda sadece `Çocuk`, `Genç`, `Yetişkin` veya `Yaşlı`
 * yer almalıdır.
 * 
 * İyi çalışmalar.
 */


 $childGroup = "cocuk";
 $teenGroup = "genc";
 $adultGroup = "yetiskin";
 $oldGroup = "yasli";


 if($age >= 0 && $age <= 14){
     print($childGroup);
 }else if($age >= 15 && $age <= 24){
    print($teenGroup);
}else if($age >= 25 && $age <= 64){
    print($adultGroup);
}else if($age >= 65 ){
    print($oldGroup);
}else {
    print($unknown);
}