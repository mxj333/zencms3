<?php
namespace App\Controller\Zen;
use App\Controller\Zen\AppController;

class IndexController extends AppController {

    public function index() { 

        // 剩余空间
        $space = round((disk_free_space(".") / (1024 * 1024 * 1024)), 2);
        if ($space < 5) {
            // 空间不足 5G  报警  变红色
            $space = '<font color="red">' . $space . 'G</font>';
        } else {
            $space = $space . 'G';
        }
        
        $server_software = $_SERVER["SERVER_SOFTWARE"];
        $server_software_name = explode('/', $server_software);
        $info = array(
            'OS' => PHP_OS,
            // 'PHP_VERSION' => $_SERVER['PHP_VERSION'],
            'SERVER_SOFTWARE' => $server_software,
            'APACHE_PROCESSES_NUMBER' => get_proc_count($server_software_name[0]),
            'RUNNING_MODE' => php_sapi_name(),
            'UPLOAD_MAX_FILE_SIZE' => ini_get('upload_max_filesize'),
            'MAX_EXECUTION_TIME' => ini_get('max_execution_time') . 's',
            'SERVER_TIME' => date("Y年n月j日 H:i:s"),
            'BEIJING_TIME' => gmdate("Y年n月j日 H:i:s", time() + 8 * 3600),
            'DOMAIN_NAME' => $_SERVER['SERVER_NAME'] . ' [ ' . gethostbyname($_SERVER['SERVER_NAME']) . ' ]',
            'SURPLUS' => $space,
            'register_globals' => get_cfg_var("register_globals") == "1" ? "ON" : "OFF",
        );
        // pr($info);

        // PHP Data
        $phpVer = phpversion();
        $return['php'] = array_merge(
            ['PHP_VERSION' => $phpVer],
            $_SERVER
        );
        // unset($return['php']['argv']);

        // CakePHP Data
        $return['cake'] = [
            'APP' => APP,
            'APP_DIR' => APP_DIR,
            'CACHE' => CACHE,
            'CAKE' => CAKE,
            'CAKE_CORE_INCLUDE_PATH' => CAKE_CORE_INCLUDE_PATH,
            'CORE_PATH' => CORE_PATH,
            // 'CAKE_VERSION' => Configure::version(),
        //     'DS' => DS,
            'LOGS' => LOGS,
            'ROOT' => ROOT,
            'TESTS' => TESTS,
            'TMP' => TMP,
            'WWW_ROOT' => WWW_ROOT
        ];
        // pr($return);

        // exit;
    }
}