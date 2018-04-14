<?php
	class Constants {

		
	function __construct($clientURL)
        {
                $this->HOSTNAME=$clientURL;
        }

		public $HOSTNAME = "";
		public $KEY = 'cb53b58a-f693-4a10-9360-54e1d1769fa1';
		public $SECRET = 'wf4Mmezun1HGvwtNXjJkLIBDdMmbZwsW';

		public $AUTH_PATH = '/learn/api/public/v1/oauth2/token';
		public $DSK_PATH = '/learn/api/public/v1/dataSources';
		public $TERM_PATH = '/learn/api/public/v1/terms';
		public $COURSE_PATH = '/learn/api/public/v1/courses';
		public $USER_PATH = '/learn/api/public/v1/users';

		public $ssl_verify_peer = FALSE;
		public $ssl_verify_host =  FALSE;
	}
?>
