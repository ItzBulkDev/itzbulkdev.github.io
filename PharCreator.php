<?php
try {
    $zipphar = new PharData('myphar.zip');
    // convert it to the phar file format
    // note that myphar.tar is *not* unlinked
    $phar = $zipphar->convertToExecutable(Phar::PHAR); // creates myphar.phar
    $phar->setStub($phar->createDefaultStub('cli.php', 'web/index.php'));
} catch (Exception $e) {
    // handle the error here
}
?>
