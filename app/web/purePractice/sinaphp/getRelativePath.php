
<?php
    /** by www.phpddt.com */
    $a = '/a/b/c/d/e.php';
    $b = '/a/b/13/34/c.php';
    echo getRelativePath($a, $b); //"../../12/34/"
    function getRelativePath($a,$b){
        $a2array = explode('/', $a);
        $b2array = explode('/', $b);
        $relativePath   = '';
        for( $i = 1; $i <= count($b2array)-2; $i++ ) {
            $relativePath .= $a2array[$i] == $b2array[$i] ? '../' : $b2array[$i].'/';
        }
        return $relativePath;
    }
?>
