<?php
namespace app\modules;

use std, gui, framework, app;

class AppModule extends AbstractModule {

    /**
     * @event action 
     */
    function doAction(ScriptEvent $e = null) {    
        if (fs::exists('dist.zip') == true) {
            $module = new MainModule();
            $module->zip->unpack('./');
        } else {
            UXDialog::showAndWait('Ошибка файл dist.zip не был найден!' , 'ERROR');
        }
    }
}