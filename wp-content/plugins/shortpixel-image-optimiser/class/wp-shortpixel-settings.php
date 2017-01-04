<?php

class WPShortPixelSettings {
    private $_apiKey = '';
    private $_compressionType = 1;
    private $_keepExif = 0;
    private $_processThumbnails = 1;
    private $_CMYKtoRGBconversion = 1;
    private $_backupImages = 1;
    private $_verifiedKey = false;
    
    private $_resizeImages = false;
    private $_resizeWidth = 0;
    private $_resizeHeight = 0;

    private static $_optionsMap = array(
        //This one is accessed also directly via get_option
        'frontBootstrap' => 'wp-short-pixel-front-bootstrap', //set to 1 when need the plugin active for logged in user in the front-end
        'lastBackAction' => 'wp-short-pixel-last-back-action', //when less than 10 min. passed from this timestamp, the front-bootstrap is ineffective.

        //optimization options
        'apiKey' => 'wp-short-pixel-apiKey',
        'verifiedKey' => 'wp-short-pixel-verifiedKey',
        'compressionType' => 'wp-short-pixel-compression',
        'processThumbnails' => 'wp-short-process_thumbnails',
        'keepExif' => 'wp-short-pixel-keep-exif',
        'CMYKtoRGBconversion' => 'wp-short-pixel_cmyk2rgb',
        'createWebp' => 'wp-short-create-webp',
        'optimizeRetina' => 'wp-short-pixel-optimize-retina',
        'backupImages' => 'wp-short-backup_images',
        'resizeImages' => 'wp-short-pixel-resize-images',
        'resizeType' => 'wp-short-pixel-resize-type',
        'resizeWidth' => 'wp-short-pixel-resize-width',
        'resizeHeight' => 'wp-short-pixel-resize-height',
        'siteAuthUser' => 'wp-short-pixel-site-auth-user',
        'siteAuthPass' => 'wp-short-pixel-site-auth-pass',
        'autoMediaLibrary' => 'wp-short-pixel-auto-media-library',
        
        //optimize other images than the ones in Media Library
        'includeNextGen' => 'wp-short-pixel-include-next-gen',
        'hasCustomFolders' => 'wp-short-pixel-has-custom-folders',
        'customBulkPaused' => 'wp-short-pixel-custom-bulk-paused',
        
        //stats, notices, etc.
        'currentTotalFiles' => 'wp-short-pixel-current-total-files',
        'fileCount' => 'wp-short-pixel-fileCount',
        'thumbsCount' => 'wp-short-pixel-thumbnail-count',
        'under5Percent' => 'wp-short-pixel-files-under-5-percent',
        'savedSpace' => 'wp-short-pixel-savedSpace',
        'averageCompression' => 'wp-short-pixel-averageCompression',
        'apiRetries' => 'wp-short-pixel-api-retries',        
        'totalOptimized' => 'wp-short-pixel-total-optimized',
        'totalOriginal' => 'wp-short-pixel-total-original',
        'quotaExceeded' => 'wp-short-pixel-quota-exceeded',
        'httpProto' => 'wp-short-pixel-protocol',
        'downloadProto' => 'wp-short-pixel-download-protocol',
        'mediaAlert' => 'wp-short-pixel-media-alert',
        'dismissedNotices' => 'wp-short-pixel-dismissed-notices',
        'activationDate' => 'wp-short-pixel-activation-date',
        'activationNotice' => 'wp-short-pixel-activation-notice',
        'mediaLibraryViewMode' => 'wp-short-pixel-view-mode',
        'redirectedSettings' => 'wp-short-pixel-redirected-settings',
        
        //bulk state machine
        'bulkLastStatus' => 'wp-short-pixel-bulk-last-status',
        'startBulkId' => 'wp-short-pixel-query-id-start',
        'stopBulkId' => 'wp-short-pixel-query-id-stop',
        'bulkCount' => 'wp-short-pixel-bulk-count',
        'bulkPreviousPercent' => 'wp-short-pixel-bulk-previous-percent',
        'bulkCurrentlyProcessed' => 'wp-short-pixel-bulk-processed-items',
        'bulkAlreadyDoneCount' => 'wp-short-pixel-bulk-done-count',
        'lastBulkStartTime' => 'wp-short-pixel-last-bulk-start-time',
        'lastBulkSuccessTime' => 'wp-short-pixel-last-bulk-success-time',
        'bulkRunningTime' => 'wp-short-pixel-bulk-running-time',
        'cancelPointer' => 'wp-short-pixel-cancel-pointer',
        'skipToCustom' => 'wp-short-pixel-skip-to-custom',
        'bulkEverRan' => 'wp-short-pixel-bulk-ever-ran',
        'flagId' => 'wp-short-pixel-flag-id',
        'failedImages' => 'wp-short-pixel-failed-imgs',
        'bulkProcessingStatus' => 'bulkProcessingStatus',
        
        'priorityQueue' => 'wp-short-pixel-priorityQueue',
        'prioritySkip' => 'wp-short-pixel-prioritySkip',
        
        '' => '',
    );
    
    public function __construct() {
        $this->populateOptions();
    }    
    
    public function populateOptions() {

        $this->_apiKey = self::getOpt('wp-short-pixel-apiKey', '');
        $this->_verifiedKey = self::getOpt('wp-short-pixel-verifiedKey', $this->_verifiedKey);
        $this->_compressionType = self::getOpt('wp-short-pixel-compression', $this->_compressionType);
        $this->_processThumbnails = self::getOpt('wp-short-process_thumbnails', $this->_processThumbnails);
        $this->_CMYKtoRGBconversion = self::getOpt('wp-short-pixel_cmyk2rgb', $this->_CMYKtoRGBconversion);
        $this->_backupImages = self::getOpt('wp-short-backup_images', $this->_backupImages);
        // the following lines practically set defaults for options if they're not set
        self::getOpt('wp-short-pixel-auto-media-library', 1);
        self::getOpt('wp-short-pixel-optimize-retina', 1);
        self::getOpt( 'wp-short-pixel-fileCount', 0);
        self::getOpt( 'wp-short-pixel-thumbnail-count', 0);//amount of optimized thumbnails               
        self::getOpt( 'wp-short-pixel-files-under-5-percent', 0);//amount of optimized thumbnails                       
        self::getOpt( 'wp-short-pixel-savedSpace', 0);
        self::getOpt( 'wp-short-pixel-api-retries', 0);//sometimes we need to retry processing/downloading a file multiple times
        self::getOpt( 'wp-short-pixel-quota-exceeded', 0);
        self::getOpt( 'wp-short-pixel-total-original', 0);//amount of original data
        self::getOpt( 'wp-short-pixel-total-optimized', 0);//amount of optimized
        self::getOpt( 'wp-short-pixel-protocol', 'https');

        $this->_resizeImages =  self::getOpt( 'wp-short-pixel-resize-images', 0);        
        $this->_resizeWidth = self::getOpt( 'wp-short-pixel-resize-width', 0);        
        $this->_resizeHeight = self::getOpt( 'wp-short-pixel-resize-height', 0);                
    }
    
    public static function debugResetOptions() {
        foreach(self::$_optionsMap as $key => $val) {
            delete_option($val);
        }
        if(isset($_SESSION["wp-short-pixel-priorityQueue"])) {
            unset($_SESSION["wp-short-pixel-priorityQueue"]);
        }
        delete_option("wp-short-pixel-bulk-previous-percent");
    }
    
    public static function onActivate() {
        if(!self::getOpt('wp-short-pixel-verifiedKey', false)) {
            update_option('wp-short-pixel-activation-notice', true);
        }
        update_option( 'wp-short-pixel-activation-date', time());
        delete_option( 'wp-short-pixel-bulk-last-status');
    }
    
    public static function onDeactivate() {
        delete_option('wp-short-pixel-activation-notice');
    }

    
    public function __get($name)
    {
        if (array_key_exists($name, self::$_optionsMap)) {
            return $this->getOpt(self::$_optionsMap[$name]);
        }
        $trace = debug_backtrace();
        trigger_error(
            'Undefined property via __get(): ' . $name .
            ' in ' . $trace[0]['file'] .
            ' on line ' . $trace[0]['line'],
            E_USER_NOTICE);
        return null;
    }

    public function __set($name, $value) {
        if (array_key_exists($name, self::$_optionsMap)) {
            if($value !== null) {
                $this->setOpt(self::$_optionsMap[$name], $value);
            } else {
                delete_option(self::$_optionsMap[$name]);
            } 
        }        
    }

    public static function getOpt($key, $default = null) {
        if(get_option($key) === false) {
            add_option( $key, $default, '', 'yes' );
        }
        return get_option($key);
    }
    
    public function setOpt($key, $val) {
        update_option($key, $val);
    }
}
