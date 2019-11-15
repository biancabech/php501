<?php
echo "<pre>";
foreach (new DirectoryIterator('/') as $diretorio){
    //var_dump($diretorio); (posso usar no lugar do echo "$diretorio<br>";)
    echo "$diretorio<br>";
    
    echo gettype($diretorio);
}
echo gettype(new DirectoryIterator('/'));

