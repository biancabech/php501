<?php
echo "<pre>";
foreach (new DirectoryIterator('/var/www/html') as $diretorio){
    //var_dump($diretorio); (posso usar no lugar do echo "$diretorio<br>";)
    echo "$diretorio as subpasta<br>";
    
    echo gettype($diretorio);
}
echo gettype(new DirectoryIterator('/var/www/html'));

