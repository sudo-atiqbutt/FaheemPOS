<?php

namespace App\Http\Utils;

use Illuminate\Support\Facades\Crypt;

 class CommonUtils
	{
		public function __construct()
		{
			//Crypt::setMode('cbc');

		}

		public function doEncrypt($strToEncrypt)
		{
			return (($strToEncrypt + 100)*512);
		}

		public function doDecrypt($strToDecrypt)
		{
			return (($strToDecrypt / 512) - 100);
		}



}
?>