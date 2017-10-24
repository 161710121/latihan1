<?php
	class kelas{
		public $walikelas;
		public $ketua;
		public $wakilketua;
		public $sekretaris;
		public $bendahara;
	
		public function __construct($walikelas,$ketua,$wakilketua,$sekretaris,$bendahara)
	{
		$this->walikelas = $walikelas;
		$this->ketua = $ketua;
		$this->wakilketua = $wakilketua;
		$this->sekretaris = $sekretaris;
		$this->bendahara = $bendahara;

	}

	}
	?>