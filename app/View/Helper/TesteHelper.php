

<?php

class TesteHelper extends Helper {

	public $image;

	public $WideImage;
	
	public function generateFileName($imagem, $width, $height) {
		

		$name = 'crop-' . $width . '-' . $height .'-';
		$name.=$imagem;

		
		return $name;
	}


	public function resize($image, $width, $height, $crop = true) {
		
					
		$this->image = WWW_ROOT . 'fotos/' . $image;
		
		$cropName = 'fotos/' . $this->generateFileName($image, $width, $height);
		$this->novaImagem = WWW_ROOT . $cropName;
		
		
		

		if (!$this->WideImage)
			App::import('Vendor', 'WideImage', array('file' => 'WideImage/WideImage.php'));
		
			$this->WideImage = new WideImage();
		
		if (!file_exists($this->novaImagem)) {
			$this->WideImage = WideImage::load($this->image);
			
			
			// $largura = imagesx ( $this->image);
    		// $altura = imagesy ( $this->image );
			// var_dump($image);
			// exit;
// 			
			// if ($largura > $altura) {
				// var_dump("imagem horizontal");
			// } else {
				// if ($largura == $altura) {
// 					
					// var_dump("imagem quardrada");
				// } else {
					// var_dump("imagem vertical");
				// }
			// }
			// echo $largura;
					// echo $altura;
			// exit;
			
			$this->WideImage
				->resize($width, $height, 'outside')
				->crop('center', '0', $width, $height)
				->saveToFile($this->novaImagem);
		}
		
			
		return '/'.$cropName;
	}

}